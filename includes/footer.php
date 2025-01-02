<footer class="footer-section">
  <div class="client-interact">
    <div class="container-footer">
      <div class="head-wrapper d-flex justify-content-between">
        <div class="head-text-content">
          <h2 class="footer-head ">Have an idea in mind?</h2>
          <a href="#" class="interact-head-sub hover-effect">
            Let&rsquo;s connect!
          </a>
        </div>
        <div class="footer-image">
          <img
            loading="lazy"
            src="./assests/images/newfooter1.png"
            class="img-fluid d-block w-100"
            alt=" fppter-image" />
        </div>
      </div>
      <div class="footer-bottom-content d-flex">
        <div class="address-area">
          <h2 class="footer-bottom-head text-white mb-lg-5">Locations</h2>
          <ul class="area-list d-flex list-unstyled text-white mb-3">
            <li class="list-items">
              <h1 class="fs1-5 fw-bold">Address</h1>
              <h3 class="area-head fs1">India</h3>
              <p class="area-desc fs1">
                <a
                  href="#"
                  target="_blank"
                  class="area-desc fs1"
                  rel="noopener noreferrer">
                  D-174<br />Sector 73, Mahadev Appartment
                  Noida 201301
                </a>
              </p>
            </li>
          </ul>
        </div>
        <div class="interact-media-wrap d-flex flex-wrap gap-lg-3 gap-5">
          <ul class="interact-media list text-white list-unstyled ms-0 me-3">
            <h1 class="fs1-5 fw-bold">Services</h1>
            <li class="list-items pb-2">
              <a href="#" class="list-link fs1">Enterprises</a>
            </li>
            <li class="list-items pb-2">
              <a href="#" class="list-link fs1">UX StartUp</a>
            </li>
            <li class="list-items pb-2">
              <a href="#" class="list-link fs1">UX Audit</a>
            </li>
            <li class="list-items pb-2">
              <a href="#" class="list-link fs1">Design System</a>
            </li>
          </ul>
          <ul class="interact-media list text-white list-unstyled ms-0 me-3">
            <h1 class="fs1-5 fw-bold">Company</h1>
            <li class="list-items pb-2">
              <a href="#" class="list-link fs1">About us</a>
            </li>
            <li class="list-items pb-2">
              <a href="#" class="list-link fs1">Careers</a>
            </li>
            <li class="list-items pb-2">
              <a href="#" class="list-link fs1">Services</a>
            </li>
            <li class="list-items pb-2">
              <a href="#" class="list-link fs1">Blog</a>
            </li>
          </ul>
          <ul class="interact-media text-white list-unstyled ms-0 me-3">
            <h1 class="fs1-5 fw-bold">Find Us</h1>
            <li class="list-items pb-2">
              <a href="#" class="list-link fs1">Dribbble</a>
            </li>
            <li class="list-items pb-2">
              <a href="#" class="list-link fs1">LinkedIn</a>
            </li>
            <li class="list-items pb-2">
              <a href="#" class="list-link fs1">Instagram</a>
            </li>
            <li class="list-items pb-2">
              <a href="#" class="list-link fs1">Facebook</a>
            </li>
          </ul>
          <ul class="interact-media text-white list-unstyled ms-0 me-3">
            <h1 class="fs1-5 fw-bold">Contact</h1>
            <li class="list-items pb-2">
              <a href="#" class="list-link fs1">webianworld@gmail.com</a>
            </li>
            <li class="list-items pb-2">
              <a href="#" class="list-link fs1">info@webianworld.com</a>
            </li>
            <li class="list-items pb-2">
              <a href="#" class="list-link fs1">+(011)-47517218</a>
            </li>
            <li class="list-items pb-2">
              <a href="../contact-us.php" class="list-link fs1">More contact <i class="fa-solid fa-chevron-right fs1"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="./JS/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="../JS/swiper.js"></script>
<script>

window.addEventListener("DOMContentLoaded", (e) => {
  document.querySelectorAll('img[loading="lazy"]').forEach((e) => {
    e.getBoundingClientRect().top <= window.innerHeight &&
      (e.loading = "eager");
  });
});

const form = document.querySelector("form[name='signForm']");
const inputs = document.querySelectorAll(".form-input");
// Add or remove 'filled' class based on input value
inputs.forEach((input) => {
  input.addEventListener("input", () => {
    if (input.value.trim() !== "") {
      input.classList.add("filled");
    } else {
      input.classList.remove("filled");
    }
  });
});
// Clear form inputs and focus on the Name input on page load
window.addEventListener("load", () => {
  inputs.forEach((input) => {
    input.value = ""; // Clear input values
    input.classList.remove("filled"); // Remove 'filled' class
  });
  // Focus on the Name input and apply the 'filled' class
  const nameInput = document.querySelector("#name");
  nameInput.focus();
  nameInput.classList.add("filled"); // Ensure label remains resized
});

document.addEventListener("DOMContentLoaded", () => {
  const inputs = document.querySelectorAll(".form-input");

  inputs.forEach((input) => {
    // Store the original placeholder text in a custom attribute
    const originalPlaceholder = input.getAttribute("placeholder");
    input.setAttribute("data-placeholder", originalPlaceholder);

    // Remove placeholder text initially
    input.placeholder = "";

    // Add placeholder on focus
    input.addEventListener("focus", () => {
      input.placeholder = input.getAttribute("data-placeholder");
    });

    // Remove placeholder on blur
    input.addEventListener("blur", () => {
      input.placeholder = "";
    });
  });

  // Set focus to the Name input and activate its placeholder
  const nameInput = document.querySelector("#name");
  if (nameInput) {
    nameInput.focus();
    nameInput.placeholder = nameInput.getAttribute("data-placeholder");
  }
});


// progress line....................................................................................................................
// Set the percentage
document.addEventListener('DOMContentLoaded', () => {
  // Select all progress elements
  document.querySelectorAll('.outer-box').forEach((outerBox) => {
    const box = outerBox.querySelector('.box');
    const progress = outerBox.querySelector('.progress');

    // Extract percentage from the text inside .box
    const percentage = parseInt(box.textContent, 10);

    // Apply percentage as a CSS variable for smooth animation
    setTimeout(() => {
      progress.style.setProperty('--progress', percentage);
    }, 300); // Delay to ensure animation starts after load
  });
});
</script>
</body>

</html>