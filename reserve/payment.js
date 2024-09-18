// Initialize Square Payment Form
const paymentForm = new SqPaymentForm({
    applicationId: 'YOUR_APPLICATION_ID',
    inputClass: 'sq-input',
    cardNumber: { elementId: 'sq-card' },
    callbacks: {
        cardNonceResponseReceived: function (errors, nonce) {
            if (errors) {
                console.error("Errors:", errors);
                return;
            }

            // Capture customer information
            const fullName = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const address = document.getElementById('address').value;
            const city = document.getElementById('city').value;
            const postalCode = document.getElementById('postal-code').value;

            // Send data to the server
            fetch('/process-payment', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    nonce: nonce,
                    customer: {
                        givenName: fullName,
                        email: email,
                        address: {
                            addressLine1: address,
                            city: city,
                            postalCode: postalCode,
                            country: 'GB'
                        }
                    }
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Payment successful and email sent.');
                } else {
                    alert('Payment failed.');
                }
            });
        }
    }
});

// Trigger payment on button click
document.getElementById('pay-button').addEventListener('click', function (event) {
    event.preventDefault();
    paymentForm.requestCardNonce();
});