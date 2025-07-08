<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>TCT 2025 | Transcatheter Cardiovascular Therapeutics</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 -->
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image" />
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- AOS (Animate on Scroll) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" /> -->
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <!-- FontAwesome -->
  <link href="assets/css/style.css" rel="stylesheet">



</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top transparent" id="mainNavbar">
  <div class="container" >
    <a class="navbar-brand" href="index.php">
<h1>TCT 2025 </h1></a>
    <!-- Hamburger Icon -->
    <button class="navbar-toggler mobile-toggler" type="button" id="mobileToggle">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Desktop Menu -->
    <div class="collapse navbar-collapse d-none d-lg-flex" id="navMenu">
      <ul class="navbar-nav ms-auto align-items-center gap-3">
                <li class="nav-item"><a class="nav-link rolling-text" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link rolling-text" href="about-us.php">About</a></li>
        <li class="nav-item"><a class="nav-link rolling-text" href="registration.php">Register</a></li>
        <li class="nav-item"><a class="nav-link rolling-text" href="housing.php">Housing</a></li>
        <li class="nav-item"><a class="nav-link rolling-text" href="contact-us.php">Contact</a></li>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-slide-fill" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Group Registration
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="groupform">
       
      <div class="modal-body">
   
        <div class="form-section">
           <button type="button" class="btn-close white" data-bs-dismiss="modal" aria-label="Close"></button>
               <h2 class="text-center mb-4">Group Registration</h2>
      <form action="send.php" method="POST" class="row g-3 needs-validation" novalidate id="registrationForm">

    <!-- Hidden Settings -->
    <input type="hidden" name="_captcha" value="false">
    <input type="hidden" name="_next" value="http://localhost/myproj/thanks.php">

    <!-- Full Name -->
    <div class="col-12 form-group position-relative">
      <div class="input-wrapper">
        <i class="fas fa-user form-control-icon"></i>
        <input type="text" class="form-control with-icon" name="Name" placeholder="Full Name" required>
        <div class="invalid-feedback">Full Name is required.</div>
      </div>
    </div>

    <!-- Email -->
    <div class="col-12 form-group position-relative">
      <div class="input-wrapper">
        <i class="fas fa-envelope form-control-icon"></i>
        <input type="email" class="form-control with-icon" name="Email" id="email" placeholder="Email" required>
        <div class="invalid-feedback">Valid Email is required.</div>
      </div>
    </div>

    <!-- Confirm Email -->
    <div class="col-12 form-group position-relative">
      <div class="input-wrapper">
        <i class="fas fa-envelope form-control-icon"></i>
        <input type="email" class="form-control with-icon" id="confirmEmail" placeholder="Confirm Email" required>
        <div class="invalid-feedback" id="confirmEmailError">Confirm Email must match.</div>
      </div>
    </div>

    <!-- Mobile -->
    <div class="col-12 form-group position-relative">
      <div class="input-wrapper">
        <i class="fas fa-phone form-control-icon"></i>
        <input type="tel" class="form-control with-icon" name="Mobile" placeholder="Contact Number" required>
        <div class="invalid-feedback">Contact Number is required.</div>
      </div>
    </div>

    <!-- Occupation -->
    <div class="col-12 form-group position-relative">
      <div class="input-wrapper">
        <i class="fas fa-briefcase form-control-icon"></i>
        <input type="text" class="form-control with-icon" name="Occupation" placeholder="Occupation" required>
        <div class="invalid-feedback">Occupation is required.</div>
      </div>
    </div>

    <!-- Delegates -->
    <div class="col-md-6 form-group position-relative">
      <div class="input-wrapper">
        <i class="fas fa-users form-control-icon"></i>
        <select class="form-select with-icon" name="Delegates" required>
          <option value="" disabled selected>No. of Delegates</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5+</option>
        </select>
        <div class="invalid-feedback">Please select number of delegates.</div>
      </div>
    </div>

    <!-- Country -->
    <div class="col-md-6 form-group position-relative">
      <div class="input-wrapper">
        <i class="fas fa-globe form-control-icon"></i>
        <select class="form-select with-icon" id="countrySelect" name="Country" required>
          <option value="">Select Country</option>
          <option>India</option>
          <option>United States</option>
          <option>Canada</option>
          <option>Australia</option>
        </select>
        <div class="invalid-feedback">Please select your country.</div>
      </div>
    </div>

    <!-- Address -->
    <div class="col-12 form-group position-relative">
      <div class="input-wrapper">
        <i class="fas fa-home form-control-icon"></i>
        <textarea class="form-control with-icon" name="Address" placeholder="Full Address" required></textarea>
        <div class="invalid-feedback">Address is required.</div>
      </div>
    </div>

    <input type="hidden" name="ip_address" id="ip_address">

    <!-- Submit -->
    <div class="col-12 text-center">
      <button type="submit" class="playbtn">
        Submit Registration
        <span></span><span></span><span></span><span></span>
      </button>
    </div>
  </form>
      </div>
    </div>
  </div>
</div>
      </ul>
    </div>
  </div>
</nav>

<!-- Mobile Side Menu -->
<div class="mobile-menu" id="mobileMenu">
  <button class="close-btn" id="closeMobile">&times;</button>
  <ul>
        <li><a href="index.php">Home</a></li>
    <li><a href="about-us.php">About</a></li>
    <li><a href="registration.php">Register</a></li>
    <li><a href="housing.php">Housing</a></li>
    <li><a href="contact-us.php">Contact</a></li>
  </ul>
</div>




<!-- JS -->

 <script>
  const navbar = document.getElementById('mainNavbar');
  const mobileMenu = document.getElementById('mobileMenu');
  const mobileToggle = document.getElementById('mobileToggle');
  const closeMobile = document.getElementById('closeMobile');

  // Scroll behavior for navbar
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 50);
    navbar.classList.toggle('transparent', window.scrollY <= 50);
  });

  // Mobile menu open/close
  mobileToggle.addEventListener('click', () => {
    mobileMenu.classList.add('active');
  });

  closeMobile.addEventListener('click', () => {
    mobileMenu.classList.remove('active');
  });
</script> 


<script>
  // Get IP
  fetch("https://api.ipify.org?format=json")
    .then(res => res.json())
    .then(data => {
      document.getElementById("ip_address").value = data.ip;
    });

  // Form validation
  const form = document.getElementById("registrationForm");

  form.addEventListener("submit", function (e) {
    const email = document.getElementById("email").value.trim();
    const confirmEmail = document.getElementById("confirmEmail").value.trim();
    const confirmField = document.getElementById("confirmEmail");
    const emailMismatch = document.getElementById("emailMismatch");

    // Reset mismatch feedback
    confirmField.setCustomValidity("");

    if (email !== confirmEmail) {
      confirmField.setCustomValidity("Emails do not match");
      emailMismatch.style.display = "block";
    } else {
      emailMismatch.style.display = "none";
    }

    if (!form.checkValidity()) {
      e.preventDefault();
      e.stopPropagation();
      form.classList.add("was-validated");
    } else {
      form.submit(); // valid → now submit to send.php
    }
  });
</script>

<script>

  // Form validation hotel
  const form = document.getElementById("housing");

  form.addEventListener("submit", function (e) {
    const email = document.getElementById("email").value.trim();
    const confirmEmail = document.getElementById("confirmEmail").value.trim();
    const confirmField = document.getElementById("confirmEmail");
    const emailMismatch = document.getElementById("emailMismatch");

    // Reset mismatch feedback
    confirmField.setCustomValidity("");

    if (email !== confirmEmail) {
      confirmField.setCustomValidity("Emails do not match");
      emailMismatch.style.display = "block";
    } else {
      emailMismatch.style.display = "none";
    }

    if (!form.checkValidity()) {
      e.preventDefault();
      e.stopPropagation();
      form.classList.add("was-validated");
    } else {
      form.submit(); // valid → now submit to send.php
    }
  });
</script>