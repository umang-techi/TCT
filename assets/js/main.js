
  // navbar

   let elements = document.querySelectorAll('.rolling-text');

elements.forEach(element => {
  let innerText = element.innerText;
  element.innerHTML = '';
  
  let textContainer = document.createElement('div');
  textContainer.classList.add('block');
  
  for (let letter of innerText) {
    let span = document.createElement('span');
    span.innerText = letter.trim() === '' ? '\xa0': letter;
    span.classList.add('letter');
    textContainer.appendChild(span);
  }
  
  element.appendChild(textContainer);
  element.appendChild(textContainer.cloneNode(true));
});



// county name

  document.addEventListener('DOMContentLoaded', () => {
    const countries = [
      "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan",
      "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan", "Bolivia",
      "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi",
      "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros",
      "Congo", "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic",
      "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini", "Ethiopia", "Fiji", "Finland",
      "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guyana",
      "Haiti", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy",
      "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon",
      "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Madagascar", "Malawi", "Malaysia", "Maldives",
      "Mali", "Malta", "Mauritania", "Mauritius", "Mexico", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique",
      "Myanmar", "Namibia", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "North Macedonia",
      "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland",
      "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Samoa", "San Marino",
      "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Somalia",
      "South Africa", "South Korea", "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland", "Syria",
      "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey",
      "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "UAE", "United Kingdom", "United States", "Uruguay", "Uzbekistan",
      "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
    ];

    const countrySelects = document.querySelectorAll('select[name="Country"]');
    countrySelects.forEach(select => {
      countries.forEach(country => {
        const option = document.createElement("option");
        option.value = country;
        option.textContent = country;
        select.appendChild(option);
      });
    });

    const checkIn = document.querySelector('input[name="Check-In"]');
    const checkOut = document.querySelector('input[name="Check-Out"]');
    if (checkIn && checkOut) {
      checkIn.addEventListener("change", () => {
        checkOut.min = checkIn.value;
      });
    }
  });

  
  // calender

    const checkinInput = document.getElementById('checkin');
  const checkoutInput = document.getElementById('checkout');

  flatpickr(checkinInput, {
    dateFormat: "Y-m-d",
    minDate: "today",
    onChange: function(selectedDates, dateStr, instance) {
      // Set the minDate of checkout to selected checkin date +1
      checkoutCalendar.set('minDate', dateStr);
    }
  });

  const checkoutCalendar = flatpickr(checkoutInput, {
    dateFormat: "Y-m-d",
    minDate: "today"
  });

  //✅ JavaScript Validation Script 
// ✅ Bootstrap and validation script 

document.getElementById('registrationForm').addEventListener('submit', function (e) {
  const email = document.getElementById('email').value;
  const confirmEmailField = document.getElementById('confirmEmail');
  const confirmEmail = confirmEmailField.value;

  if (email !== confirmEmail) {
    e.preventDefault();
    confirmEmailField.classList.add('is-invalid');
    document.getElementById('confirmEmailError').style.display = 'block';
  } else {
    confirmEmailField.classList.remove('is-invalid');
    document.getElementById('confirmEmailError').style.display = 'none';

    // Remove name before submit
    confirmEmailField.removeAttribute('name');
  }

  const form = this;
  if (!form.checkValidity()) {
    e.preventDefault();
    e.stopPropagation();
    form.classList.add('was-validated');
  }
});




// for presentation purpose
setTimeout(() => {
  elements.forEach(element => {
    element.classList.add('play');
  })
}, 600);

elements.forEach(element => {
  element.addEventListener('mouseover', () => {
    element.classList.remove('play');
  });
});


  // number system 
 const countdown = () => {
      const endDate = new Date("December 31, 2025 23:59:59").getTime();
      const now = new Date().getTime();
      const diff = endDate - now;

      const days = Math.floor(diff / (1000 * 60 * 60 * 24));
      const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((diff % (1000 * 60)) / 1000);

      document.getElementById("days").innerText = days.toString().padStart(2, '0');
      document.getElementById("hours").innerText = hours.toString().padStart(2, '0');
      document.getElementById("minutes").innerText = minutes.toString().padStart(2, '0');
      document.getElementById("seconds").innerText = seconds.toString().padStart(2, '0');
    };

    countdown(); // run once instantly
    setInterval(countdown, 1000); // update every second


  // Counter animation for attendees
  function animateCounter(id, target, speed = 30) {
    const el = document.getElementById(id);
    let count = 0;

    const update = () => {
      const increment = Math.ceil(target / 100);
      if (count < target) {
        count += increment;
        el.textContent = count.toLocaleString();
        setTimeout(update, speed);
      } else {
        el.textContent = target.toLocaleString();
      }
    };
    update();
  }

  // Scroll-triggered counter
  document.addEventListener("DOMContentLoaded", () => {
    const counter = document.getElementById("attendeeCount");
    let triggered = false;

    const checkVisibility = () => {
      const rect = counter.getBoundingClientRect();
      if (!triggered && rect.top < window.innerHeight && rect.bottom >= 0) {
        triggered = true;
        animateCounter("attendeeCount", parseInt(counter.dataset.target));
        window.removeEventListener("scroll", checkVisibility);
      }
    };

    window.addEventListener("scroll", checkVisibility);
    checkVisibility(); // fire if already in view
  });

  

  // country code


  document.getElementById('registrationForm').addEventListener('submit', function(e) {
    const countryCode = document.getElementById('countryCode').value;
    const mobileNumber = document.getElementById('mobileNumber').value;
    const fullMobileField = document.getElementById('fullMobile');

    // Combine code and number
    if (countryCode && mobileNumber) {
      fullMobileField.value = countryCode + ' ' + mobileNumber;
    } else {
      // Prevent submission if one is missing
      e.preventDefault();
      alert("Please fill in both country code and mobile number.");
    }
  });






   
