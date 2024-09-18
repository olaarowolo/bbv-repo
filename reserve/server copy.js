const express = require('express');
const bodyParser = require('body-parser');
const squareConnect = require('square-connect');
const nodemailer = require('nodemailer');
const mongoose = require('mongoose');

const app = express();
app.use(bodyParser.json());

// Connect to MongoDB (or any other DB)
mongoose.connect('mongodb://localhost:27017/ecommerce');

// Order Schema
const orderSchema = new mongoose.Schema({
    fullName: String,
    email: String,
    address: {
        addressLine1: String,
        city: String,
        postalCode: String,
        country: String
    },
    transactionId: String,
    amount: Number,
    currency: String,
    createdAt: { type: Date, default: Date.now }
});
const Order = mongoose.model('Order', orderSchema);

// Square Payment API
const defaultClient = squareConnect.ApiClient.instance;
const oauth2 = defaultClient.authentications['oauth2'];
oauth2.accessToken = 'YOUR_SQUARE_ACCESS_TOKEN';

// Nodemailer setup
const transporter = nodemailer.createTransport({
    service: 'gmail',
    auth: {
        user: 'olasunkanmiarowolo@gmail.com',
        pass: 'YOUR_GMAIL_APP_PASSWORD'  // Use App Password
    }
});

// Handle payment and send email
app.post('/process-payment', async (req, res) => {
    const { nonce, fullName, email, address } = req.body;

    const paymentsApi = new squareConnect.PaymentsApi();
    const requestBody = {
        source_id: nonce,
        amount_money: { amount: 12999, currency: 'GBP' },
        buyer_email_address: email,
        shipping_address: {
            address_line_1: address.addressLine1,
            locality: address.city,
            postal_code: address.postalCode,
            country: address.country,
        },
        idempotency_key: require('crypto').randomBytes(12).toString('hex')
    };

    try {
        const paymentResponse = await paymentsApi.createPayment(requestBody);

        // Save order in the database
        const newOrder = new Order({
            fullName: fullName,
            email: email,
            address: address,
            transactionId: paymentResponse.payment.id,
            amount: paymentResponse.payment.amount_money.amount,
            currency: paymentResponse.payment.amount_money.currency
        });
        await newOrder.save();

        // Send order email
        const mailOptions = {
            from: 'olasunkanmiarowolo@gmail.com',
            to: 'olasunkanmiarowolo@gmail.com',
            subject: 'New Order',
            text: `
                New Order Details:
                Full Name: ${fullName}
                Email: ${email}
                Address: ${address.addressLine1}, ${address.city}, ${address.postalCode}, ${address.country}
                Transaction ID: ${paymentResponse.payment.id}
                Amount: £${(paymentResponse.payment.amount_money.amount / 100).toFixed(2)}
            `
        };
        transporter.sendMail(mailOptions, (error, info) => {
            if (error) {
                console.error('Error sending email:', error);
            } else {
                console.log('Email sent:', info.response);
            }
        });

        res.status(200).json({ success: true });
    } catch (error) {
        res.status(500).json({ success: false, error: error.message });
    }
});

app.listen(3000, () => {
    console.log('Server running on port 3000');
});
