document.addEventListener("keydown", function (event) {
    // Check if Ctrl + A are pressed
    if (event.ctrlKey && event.key === "b") {
        // Open the form
        document.getElementById("modalBackdrop").classList.remove("hidden");
    }
});

// Stop propagation of click events on the modal container
document.addEventListener("keydown", function (event) {
    // Check if Ctrl + A are pressed
    if (event.ctrlKey && event.key === "x") {
        // Open the form
        document.getElementById("modalBackdrop").classList.add("hidden");
    }
});

// Function to hide the alert box after a certain duration
setTimeout(function () {
    document.getElementById("alertBox").style.display = "none";
}, 5000); // Hide the alert after 5 seconds
