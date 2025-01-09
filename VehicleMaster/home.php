<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Master - Home</title>
    <link rel="stylesheet" href="homepage.css">
    <style>
       
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-color:whitesmoke;
    background-size: 100;
    color: #ffffff;
    background-repeat: no-repeat;
    background-size: cover;
}


.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #ccd3d2;
    height: 80px;
    width: 100%;
    z-index: value;
}

.navbar.logo image {
    height: 3px;
    width: 110px;
    background-color: antiquewhite;
    margin-left: 10px;
    padding-left: 10px;
    mix-blend-mode: multiply;

}
.navbar .nav-links {
    list-style: none;
    display: flex;
    gap: 14px;
    color: rgb(255, 255, 255);
}

.navbar .nav-links li a {
    color:black;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    padding: 10px 10px;
}

.navbar .nav-links li a:hover {
    background-color:rgb(0, 68, 255);
    border-radius: 5px;
    color: #ffffff;
    font-weight: bold;
}
.hero-section {
    background-image: url('car7.jpg');
    background-position: center;
    background-attachment: scroll;
    height: 80vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color:whitesmoke;
    text-align: center;
}

.hero-text h5 {
    font-size: 48px;
    margin-bottom: 20px;
    color: rgb(255, 255, 255);
}

.hero-text p {
    font-size: 24px;
    margin-bottom: 30px;
    color:rgb(255, 255, 255);
}

.vehicles {
    padding: 50px 20px;
    text-align: left;
    background-color:transparent;
    color: black;
}

.vehicles h2 {
    height: 150px;
    font-size: 36px;
    margin-bottom: 40px;
}

.vehicle-grid {
    background-color: #ccd3d2;
    width: 150;
    height: 115;
     display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.vehicle-card {
    height: 250px;
    width: 250px;
    transition: all 0.5s ease-in-out;
    background-color: transparent;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}
.vehicle-card:hover{
    background-color: transparent;
    transform: scale(1.2);

    
}
.vehicle-card img {
    width: 100%;
    border-radius: 10px;
    margin-bottom: 15px;
    color: rgb(37, 181, 171);
}

.vehicle-card h3 {
    margin-bottom: 10px;
    font-size: 24px;
}

.vehicle-card button {
    color: hsl(0, 27%, 2%);
}

.features {
    padding: 50px 20px;
    text-align: center;
}

.features h2 {
    font-size: 36px;
    color: blue;
    margin-bottom: 40px;
}

.feature-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.feature-card {
    background-color:powderblue;
    color: white;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}
.feature-card:hover{
        background-color: rgb(84, 83, 83);
}
.feature-card h3 {
    margin-bottom: 15px;
    font-size: 24px;
}

.feature-card p {
    color: #f1f1f1;
}

footer.shiv {
    text-align: center;
    padding: 15px;
    background-color:rgb(189, 200, 206);
}

.shiv .icons {
    display: flex;
    justify-content: center;
    gap: 35px;
    margin-top: 5px;
}

.shiv .icons a {
    display: inline-block;
    text-decoration: none;
    transition: transform 0.3s ease, color 0.3s ease;
    cursor: pointer; 
}

.shiv .icons a:hover {
    transform: translateY(-10px); 
}
  .vehicle-card .button :hover {
    width: 150%;
    padding: 30px 20px;
    background-color: #4CAF50;
    color: rgb(221, 97, 21);
  }
  .vehicle-card button:active {
    background-color: #0b9a2c; 
  }
    </style>
</head>
<body>
    <nav class="navbar">
        <h1><img src="back.jpeg" class="logo" alt="Logo"></h1>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#vehicles">Vehicles</a></li>
            <li><a href="#booking.php">Booking</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </nav>
    
    <header class="hero-section" id="home">
        <div class="hero-text">
            <h5>Welcome to Ananya Travels</h5>
            <p>Chakghat, Tyonthar, Rewa (M.P.)<br>Contact No. 7470472525</p>
        </div>
    </header>
    
    <section class="vehicles" id="vehicles">
        <h2>Available Vehicles</h2>
        <div class="vehicle-grid">
            <div class="vehicle-card">
                <img src="car/car1.jpeg" alt="Renault Triber">
                <button>Renault Triber</button>
            </div>
            <div class="vehicle-card">
                <img src="car/car2.jpeg" alt="Bolero">
                <button>Bolero</button>
            </div>
            <div class="vehicle-card">
                <img src="car/car7.jpg" alt="Ford Mustang">
                <button>Ford Mustang</button>
            </div>
            <div class="vehicle-card">
                <img src="car/car4.jpeg" alt="Tesla Model S">
                <button>Tesla Model S</button>
            </div>
        </div>
    </section>
    
    <footer class="shiv">
        <div class="icons">
            <a href="https://facebook.com" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a>
            <a href="https://twitter.com" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a>
            <a href="https://instagram.com" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
            <a href="https://linkedin.com" target="_blank"><ion-icon name="logo-linkedin"></ion-icon></a>
            <a href="https://github.com" target="_blank"><ion-icon name="logo-github"></ion-icon></a>
        </div>
    </footer>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script>
        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
