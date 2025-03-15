
// Store the URL based on which button is clicked
let bookingUrl = '';

// Function to show modal
function showModal() {
    document.getElementById('termsModal').style.display = 'block';
    document.getElementById('modalOverlay').style.display = 'block';
}

// Function to hide modal
function hideModal() {
    document.getElementById('termsModal').style.display = 'none';
    document.getElementById('modalOverlay').style.display = 'none';
}

// Combination Touch-up Buttons
// Show modal when "Book Now" buttons are clicked and set the booking URL
document.getElementById('bookNowButton6').addEventListener('click', function (event) {
    event.preventDefault();
    bookingUrl = 'https://calendly.com/beautybyvickky/combination-brows-touch-up-6-weeks';
    showModal();
});

document.getElementById('bookNowButton8').addEventListener('click', function (event) {
    event.preventDefault();
    bookingUrl = 'https://calendly.com/beautybyvickky/combination-brows-touch-up-8-weeks';
    showModal();
});

document.getElementById('bookNowButton10').addEventListener('click', function (event) {
    event.preventDefault();
    bookingUrl = 'https://calendly.com/beautybyvickky/combination-brows-touch-up-10-weeks';
    showModal();
});

document.getElementById('bookNowButton12').addEventListener('click', function (event) {
    event.preventDefault();
    bookingUrl = 'https://calendly.com/beautybyvickky/combination-brows-touch-up-12-weeks';
    showModal();
});


// Ombré Touch-up Buttons
// Show modal when "Book Now" buttons are clicked and set the booking URL
document.getElementById('OmbrebookNowButton6').addEventListener('click', function (event) {
    event.preventDefault();
    bookingUrl = 'https://calendly.com/beautybyvickky/ombre-brows-touchup-6wks';
    showModal();
});

document.getElementById('OmbrebookNowButton8').addEventListener('click', function (event) {
    event.preventDefault();
    bookingUrl = 'https://calendly.com/beautybyvickky/ombre-brows-touch-up-8-weeks';
    showModal();
});

document.getElementById('OmbrebookNowButton10').addEventListener('click', function (event) {
    event.preventDefault();
    bookingUrl = 'https://calendly.com/beautybyvickky/ombre-brows-touch-up-10-weeks';
    showModal();
});
document.getElementById('OmbrebookNowButton12').addEventListener('click', function (event) {
    event.preventDefault();
    bookingUrl = 'https://calendly.com/beautybyvickky/ombre-brows-touch-up-12-weeks';
    showModal();
});


// Microblading Touch-up Buttons
// Show modal when "Book Now" buttons are clicked and set the booking URL
document.getElementById('MicrobladingbookNowButton6').addEventListener('click', function (event) {
    event.preventDefault();
    bookingUrl = 'https://calendly.com/beautybyvickky/microblading-touch-up-6-weeks';
    showModal();
});
document.getElementById('MicrobladingbookNowButton8').addEventListener('click', function (event) {
    event.preventDefault();
    bookingUrl = 'https://calendly.com/beautybyvickky/microblading-touch-up-8-weeks';
    showModal();
});
document.getElementById('MicrobladingbookNowButton10').addEventListener('click', function (event) {
    event.preventDefault();
    bookingUrl = 'https://calendly.com/beautybyvickky/combination-brows-touch-up-10-weeks';
    showModal();
});

document.getElementById('MicrobladingbookNowButton12').addEventListener('click', function (event) {
    event.preventDefault();
    bookingUrl = 'https://calendly.com/beautybyvickky/microblading-touch-up-12-weeks';
    showModal();
});


// Microshading Touch-up Buttons
// Show modal when "Book Now" buttons are clicked and set the booking URL
document.getElementById('MicroshadingbookNowButton6').addEventListener('click', function (event) {
    event.preventDefault();
    bookingUrl = 'https://calendly.com/beautybyvickky/microshading-touch-up-6-weeks';
    showModal();
});
document.getElementById('MicroshadingbookNowButton8').addEventListener('click', function (event) {
    event.preventDefault();
    bookingUrl = 'https://calendly.com/beautybyvickky/microshading-touch-up-8-weeks';
    showModal();
});
document.getElementById('MicroshadingbookNowButton10').addEventListener('click', function (event) {
    event.preventDefault();
    bookingUrl = 'https://calendly.com/beautybyvickky/microshading-touch-up-10-weeks';
    showModal();
});

document.getElementById('MicroshadingbookNowButton12').addEventListener('click', function (event) {
    event.preventDefault();
    bookingUrl = 'https://calendly.com/beautybyvickky/microshading-touch-up-12-weeks';
    showModal();
});


// Close modal when "Cancel" button is clicked
document.getElementById('closeModalButton').addEventListener('click', function () {
    hideModal();
});

// Proceed button logic
document.getElementById('proceedButton').addEventListener('click', function () {
    const checkbox = document.getElementById('termsCheckboxModal');
    const alertMessage = document.getElementById('alertModal');

    if (checkbox.checked) {
        // If checkbox is checked, proceed to Calendly and close modal
        alertMessage.style.display = 'none';
        hideModal();
        Calendly.initPopupWidget({
            url: bookingUrl
        });
    } else {
        // Show alert if checkbox is not checked
        alertMessage.style.display = 'block';
    }
});
