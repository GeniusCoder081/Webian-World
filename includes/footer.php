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
            src="./assests/images/newFooter1.png"
            class="img-fluid d-block w-100"
            alt=" fppter-image" />
        </div>
      </div>
      <div class="footer-bottom-content d-flex">
        <div class="address-area">
          <h2 class="footer-bottom-head text-white mb-lg-5">Locations</h2>
          <ul class="area-list d-flex list-unstyled text-white">
            <li class="list-items">
              <h3 class="area-head fs1">USA</h3>
              <p class="area-desc fs1">
                <a
                  href="#"
                  target="_blank"
                  class="area-desc fs1"
                  rel="noopener noreferrer">
                  #1041<br />20289 Stevens Creek Blvd Cupertino, CA 95014
                </a>
              </p>
              <a href="tel:+14088786244" class="area-desc fs1">+1 (408) 878 6244</a>
            </li>
            <li class="list-items">
              <h3 class="area-head fs1">Bangalore</h3>
              <p class="area-desc fs1">
                <a
                  href="#"
                  target="_blank"
                  class="area-desc fs1"
                  rel="noopener noreferrer">
                  No 198, CMH Road, <br />2nd Floor, Suite No 1322,<br />Indiranagar
                  - 560038
                </a>
              </p>

              <a href="tel:+916235600444" class="area-desc fs1">+91 623 560 0444</a>
            </li>
            <li class="list-items">
              <h3 class="area-head fs1">Kerala</h3>
              <p class="area-desc fs1">
                <a
                  href="#"
                  target="_blank"
                  class="area-desc fs1"
                  rel="noopener noreferrer">
                  Sahya Building <br />
                  Govt. Cyberpark<br />
                  Calicut - 673014
                </a>
              </p>
              <a href="tel:+916235611222" class="area-desc fs1">+91 623 561 1222</a>
            </li>
          </ul>
        </div>
        <div class="interact-media-wrap d-flex">
          <ul class="interact-media list text-white list-unstyled">
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
          <ul class="interact-media text-white list-unstyled">
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
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="./JS/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script type="text/javascript">
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
</script>
</body>

</html>