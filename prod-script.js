// Get modal elements by their IDs
const modals = {
    'detailsModal-1': document.getElementById("detailsModal-1"),
    'detailsModal-2': document.getElementById("detailsModal-2"),
    'detailsModal-3': document.getElementById("detailsModal-3"),
    'detailsModal-4': document.getElementById("detailsModal-4"),
    'detailsModal-min': document.getElementById("detailsModal-min"),
};

// Function to open modal
function openModal(modalId) {
    modals[modalId].style.display = "flex"; // Display modal
    document.body.classList.add('modal-open'); // Disable body scroll
}

// Function to close modal
function closeModal(modalId) {
    modals[modalId].style.display = "none"; // Hide modal
    document.body.classList.remove('modal-open'); // Enable body scroll
}

// Open modal when "view-details" button is clicked
document.querySelectorAll(".view-details").forEach(button => {
    button.addEventListener("click", () => {
        const modalId = button.getAttribute('data-modal');
        openModal(modalId);
    });
});

// Close modal when "X" is clicked
document.querySelectorAll(".close").forEach(closeBtn => {
    closeBtn.addEventListener("click", () => {
        const modalId = closeBtn.getAttribute('data-modal');
        closeModal(modalId);
    });
});

// Close modal when clicking outside the modal content
window.addEventListener("click", (event) => {
    Object.values(modals).forEach(modal => {
        if (event.target === modal) {
            modal.style.display = "none"; // Hide modal
            document.body.classList.remove('modal-open'); // Enable body scroll
        }
    });
});
