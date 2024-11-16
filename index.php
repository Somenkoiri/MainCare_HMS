<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        
.appointment-section {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  padding: 50px;
  background-color: #fff;
}

.left-form, .center-content, .right-image {
  width: 100%;
  max-width: 400px;
  margin: 20px;
}

.left-form {
  flex: 1;
  background-color: #fffcf0;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  animation: fadeInLeft 1.5s ease;
}

.right-image img {
  width: 100%;
  border-radius: 10px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  animation: fadeInRight 1.5s ease;
}

.center-content {
  text-align: center;
  color: #333;
  animation: fadeInDown 1.5s ease;
}

h1 {
  font-size: 36px;
  color: #0275d8; /* Blue */
}

p {
  margin-top: 10px;
  font-size: 18px;
  color: #555;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
  color: #333;
}

input, select, textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
  font-size: 16px;
}

button.submit-btn {
  width: 100%;
  background-color: #d9534f; /* Red */
  color: white;
  padding: 10px;
  border: none;
  border-radius: 5px;
  font-size: 18px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button.submit-btn:hover {
  background-color: #c9302c;
}

/* Animations */
@keyframes fadeInLeft {
  from {
    opacity: 0;
    transform: translateX(-50px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes fadeInRight {
  from {
    opacity: 0;
    transform: translateX(50px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes fadeInDown {
  from {
    opacity: 0;
    transform: translateY(-30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Responsive */
@media (max-width: 768px) {
  .appointment-section {
    flex-direction: column;
    text-align: center;
  }

  .left-form, .center-content, .right-image {
    max-width: 100%;
  }

  .right-image img {
    max-width: 300px;
    margin: 0 auto;
  }
}
    </style>
</head>
<body>
    <!-- Navbar Section -->
    <nav class="navbar">
          <div class="logo">
                <a href="#"><span style="color:red;">MainCare</span> Hospital</a>
            </div>
        <div class="container">
            <ul class="nav-links">
                <li><a href="#home"><i class="fa-solid fa-house"></i>&nbsp;Home</a></li>
                <li><a href="#about"><i class="fa-solid fa-address-card"></i>&nbsp;About</a></li>
                <li><a href="#services"><i class="fa-brands fa-servicestack"></i>&nbsp;Services</a></li>
                <li><a href="#contact"><i class="fa-solid fa-address-book"></i>&nbsp;Contact</a></li>
                <li><a href="#signup"><i class="fa-solid fa-user-plus"></i>&nbsp;Sign Up</a></li>
                <li><a href="#login"><i class="fa-solid fa-user"></i>&nbsp;Login</a></li>
            </ul>
        </div>
          <div class="theme-toggle">
                <button id="dark-mode-toggle">Dark Mode</button>

               <a href="media_files/admin_login_panel.php"><button id="dark-mode-toggle">Admin</button></a>
            </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <h1>Welcome to Our Hospital</h1>
        <p>Providing the best medical care for everyone</p>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <h2 style="font-size: 2rem;">About Us</h2>
        <p>Our hospital offers the most advanced healthcare services to ensure your well-being.</p>
    </section>

    <!-- section in appointment form  -->
     <section class="appointment-section">
    <div class="left-form">
      <h2 align="center">Book Your Appointment</h2> <br>
      <br>
      <form id="appointmentForm">
        <div class="form-group">
          <label for="patientName">Patient Name</label>
          <input type="text" id="patientName" placeholder="Enter your name">
        </div>
        <div class="form-group">
          <label for="email">Patient Email</label>
          <input type="email" id="email" placeholder="Enter your email">
        </div>
       
        <div class="form-group">
          <label for="appointmentDate">Appointment Date</label>
          <input type="date" id="appointmentDate">
        </div>
       
       
        <div class="form-group">
          <label for="gender">Patient Gender</label>
          <select id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <textarea id="address" rows="3" placeholder="Enter your address"></textarea>
        </div>
     
        <button type="submit" class="submit-btn">Submit</button>
      </form>
    </div>

    <div class="center-content">
      <h1>Welcome to Our Clinic</h1>
      <p>Your health is our priority. Schedule an appointment today a licensed institution that provides medical and nursing care for patients. Hospitals are often the focal point for health care in a community and can serve as a center for teaching and investigation.</p>
    </div>

    <div class="right-image">
      <img src="media_img/doctor_side.png" alt="Doctor">
    </div>
  </section>

<!-- department box side -->

<section class="departments-section">
    <h1>Our Departments</h1>
    <p class="description">Explore our healthcare departments that offer specialized services.</p>
    
    <div class="departments-grid">
      <!-- Department Box 1 -->
      <div class="department-box">
        <i class="fas fa-heartbeat"></i>
        <h3>Cardiology</h3>
        <p>Providing the best in cardiovascular care.</p>
        <a href="#">Learn More</a>
      </div>
      <!-- Department Box 2 -->
      <div class="department-box">
        <i class="fas fa-brain"></i>
        <h3>Neurology</h3>
        <p>Experts in brain and nervous system disorders.</p>
        <a href="#">Learn More</a>
      </div>

        <!-- Department Box 2 -->
      <div class="department-box">
       <i class="fa-solid fa-user-doctor"></i>
        <h3>Neurology</h3>
        <p>Experts in brain and nervous system disorders.</p>
        <a href="#">Learn More</a>
      </div>

        <!-- Department Box 2 -->
      <div class="department-box">
      <i class="fa-solid fa-briefcase-medical"></i>
        <h3>Neurology</h3>
        <p>Experts in brain and nervous system disorders.</p>
        <a href="#">Learn More</a>
      </div>

        <!-- Department Box 2 -->
      <div class="department-box">
      <i class="fa-solid fa-bed-pulse"></i>
        <h3>Neurology</h3>
        <p>Experts in brain and nervous system disorders.</p>
        <a href="#">Learn More</a>
      </div>
        <!-- Department Box 2 -->
      <div class="department-box">
       <i class="fa-solid fa-droplet"></i>
        <h3>Neurology</h3>
        <p>Experts in brain and nervous system disorders.</p>
        <a href="#">Learn More</a>
      </div>
        <!-- Department Box 2 -->
      <div class="department-box">
       <i class="fa-solid fa-eye"></i>
        <h3>Neurology</h3>
        <p>Experts in brain and nervous system disorders.</p>
        <a href="#">Learn More</a>
      </div>
        <!-- Department Box 2 -->
      <div class="department-box">
      <i class="fa-solid fa-wheelchair"></i>
        <h3>Neurology</h3>
        <p>Experts in brain and nervous system disorders.</p>
        <a href="#">Learn More</a>
      </div>
        <!-- Department Box 2 -->
      <div class="department-box">
      <i class="fa-solid fa-vial-circle-check"></i>
        <h3>Neurology</h3>
        <p>Experts in brain and nervous system disorders.</p>
        <a href="#">Learn More</a>
      </div>
        <!-- Department Box 2 -->
      <div class="department-box">
       <i class="fa-solid fa-lungs"></i>
        <h3>Neurology</h3>
        <p>Experts in brain and nervous system disorders.</p>
        <a href="#">Learn More</a>
      </div>
      <!-- Repeat similar structure for other 10 boxes -->
    
  </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <h2>Our Services</h2>
        <div class="service-cards">
            <div class="card">
                <i class="icon">&#128137;</i>
                <h3>Emergency Care</h3>
                <p>Quick and professional care in critical situations.</p>
            </div>
            <div class="card">
                <i class="icon">&#128304;</i>
                <h3>Surgery</h3>
                <p>We offer cutting-edge surgical procedures.</p>
            </div>
            <div class="card">
                <i class="icon">&#127973;</i>
                <h3>Patient Support</h3>
                <p>Providing emotional and physical support for all patients.</p>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Hospital. All rights reserved.</p>
    </footer>

    <!-- JavaScript -->
    <script src="script.js"></script>
</body>
</html>
