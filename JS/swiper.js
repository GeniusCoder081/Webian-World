const swiper = new Swiper('.card-wrapper', {
    loop: true,
   spaceBetween:20,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets:true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    //responsive breakpoints 
    breakpoints:{
        0:{
            slidesPerView:1
        },
        768:{
            slidesPerView:2
        },
        1024:{
            slidesPerView:3
        },
    }
  
  });

  
// FAQ section js
document.addEventListener("DOMContentLoaded", () => {
  const faqItems = document.querySelectorAll(".faq-container");

  faqItems.forEach((item) => {
    const question = item.querySelector(".question");
    const answer = item.querySelector(".answercont");
    const icon = item.querySelector(".toggle-icon");

    question.addEventListener("click", () => {
      // Toggle the visibility of the answer
      answer.classList.toggle("show");
      // Rotate the icon
      icon.classList.toggle("rotate-icon");
    });
  });
});

// faq more view and less view
document.addEventListener("DOMContentLoaded", () => {
  const faqItems = document.querySelectorAll(".faq-container");
  const viewMoreButton = document.querySelector(".view-cases-link");

  const visibleCount = 5; // Number of FAQs to show initially
  let isExpanded = false;

  // Show initial FAQ items
  faqItems.forEach((item, index) => {
    if (index < visibleCount) {
      item.classList.add("visible");
    }
  });

  // Toggle additional FAQ items on "View More" button click
  viewMoreButton.addEventListener("click", () => {
    isExpanded = !isExpanded;

    faqItems.forEach((item, index) => {
      if (index >= visibleCount) {
        item.classList.toggle("visible", isExpanded);
      }
    });

    viewMoreButton.textContent = isExpanded ? "View Less" : "View More";
  });
});

