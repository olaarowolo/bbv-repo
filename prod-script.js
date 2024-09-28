// Get modal elements
const modals = {
    'detailsModal-1': document.getElementById("detailsModal-1"),
    'detailsModal-2': document.getElementById("detailsModal-2"),
    'detailsModal-3': document.getElementById("detailsModal-3"),
    'detailsModal-4': document.getElementById("detailsModal-4"),
    'detailsModal-min': document.getElementById("detailsModal-min"),
};

document.querySelectorAll(".view-details").forEach(button => {
    button.addEventListener("click", () => {
        const modalId = button.getAttribute('data-modal');
        modals[modalId].style.display = "flex";
    });
});

// Close modal when "X" is clicked
document.querySelectorAll(".close").forEach((closeBtn, index) => {
    closeBtn.addEventListener("click", () => {
        const modalId = `detailsModal-${index + 1}`;
        modals[modalId].style.display = "none";
    });
});

// Close modal when clicking outside the modal content
window.addEventListener("click", (event) => {
    Object.values(modals).forEach(modal => {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});