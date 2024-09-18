const express = require('express');
const mysql = require('mysql');
const bodyParser = require('body-parser');
const cors = require('cors');

const app = express();
const PORT = 3000;

// Middleware
app.use(cors());
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

// MySQL Connection
const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'bbv_db'
});

db.connect((err) => {
    if (err) throw err;
    console.log('MySQL connected...');
});

// Endpoint to save payment data
app.post('/save-payment', (req, res) => {
    const { name, email, address, city, postal_code } = req.body;

    const query = 'INSERT INTO payments (name, email, address, city, postal_code) VALUES (?, ?, ?, ?, ?)';
    db.query(query, [name, email, address, city, postal_code], (err, result) => {
        if (err) {
            return res.status(500).send(err);
        }
        res.status(200).send('Payment data saved successfully!');
    });
});

// Start the server
app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});