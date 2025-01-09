document.getElementById('carBookingForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const car = document.getElementById('car').value;
    const bookingDate = document.getElementById('bookingDate').value;
    const bookingMessage = document.getElementById('bookingMessage');

    if (name && email && car && bookingDate) {
        bookingMessage.textContent = `Thank you, ${name}! Your booking for a ${car} on ${bookingDate} has been confirmed.`;
        bookingMessage.style.color = "green";
    } else {
        bookingMessage.textContent = "Please fill out all fields.";
        bookingMessage.style.color = "red";
    }
});
