<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Booking</title>
    <link rel="stylesheet" href="bookingcss.css">
</head>
<body>
    <div class="booking-container">
        <h2>Book Car</h2>
        <form  action="actions/action.booking.php" method="POST">
            <label for="name">Full Name</label>
            <input type="text" id="name" placeholder="Enter your full name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Enter your email" name="email" required>

            <label for="phone">Phone</label>
            <input type="text" id="phone" placeholder="Enter your phone number" name="phone" required>

            <label for="car">Select Car</label>
            <select id="car" name="choice" required>
                <option name="choice" value="" disabled selected>Select a car</option>
                <option  name="choice" value="Renault tribre">Renault tribre</option>
                <option name="choice" value="Bolero">Bolero</option>
                <option name="choice" value="Ford Mustang">Ford Mustang</option>
                <option name="choice" value="Tesla Model S">Tesla Model S</option>
            </select>

            <label for="bookingDate">Booking Date</label>
            <input type="date" id="bookingDate" name="date" required>

            <label for="current">Starting Place</label>
            <input type="text" id="current" name="slocation" required>

            <label for="ending">Ending Place</label>
            <input type="text" id="ending" name="elocation" required>
            <button type="submit" name="book"> Book Now</button>
            <!-- <input type="submit" value="Book Now" name="book"> -->
        </form>

        <p id="bookingMessage"></p>
    </div>

    <script src="booking.js"></script>
</body>
</html>
