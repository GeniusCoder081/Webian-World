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
  nameInput.classList.add("filled"); 
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

