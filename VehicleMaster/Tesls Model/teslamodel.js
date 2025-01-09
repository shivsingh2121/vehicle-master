document.addEventListener("DOMContentLoaded", function () {
    const bookingForm = document.getElementById("bookingForm");
    const paymentSection = document.getElementById("paymentSection");
  
    // Handle form submission
    bookingForm.addEventListener("submit", function (e) {
      e.preventDefault(); // Prevent form from reloading the page
  
      // Show the payment section
      paymentSection.style.display = "block";
  
      // Scroll to payment section
      paymentSection.scrollIntoView({ behavior: "smooth" });
    });
  
    // Payment button functionality
    const payButton = document.getElementById("payButton");
    payButton.addEventListener("click", function () {
      alert("Payment Successful! Thank you for booking the Tesla Model S.");
    });
  });
  