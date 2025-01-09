<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
        }
        input, textarea, button {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        input:focus, textarea:focus {
            border-color: #007bff;
            outline: none;
        }
        button {
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        button:hover {
            background: #0056b3;
        }
        textarea {
            resize: none;
            height: 80px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Payment Collection Form</h1>
        <form action="actions/payment.action.php" method="POST">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address" required>

            <label for="contactnumber">Contact Number:</label>
            <input type="text" id="contactnumber" name="contactnumber" placeholder="Enter your contact number" required>

            <label for="address">Amount:</label>
            <input type="text" id="address" name="Amount" placeholder="Enter your contact number" required>
            
            <button type="submit" name="paybtn">Pay Now</button>
        </form>
    </div>
</body>
</html>
