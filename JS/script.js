const watchReelText = document.querySelector(".videobtn-case-icon");
const videoContainer = document.querySelector(".video-hover-box");
const hoverVideo = document.getElementById("hoverVideo");
// Check if window width is greater than 768px
if (window.innerWidth > 768) {
    hoverVideo.src = "./assests/video/case001.mp4";

    // Zoom-in effect, play video, and change text color on hover
    watchReelText.addEventListener("mouseenter", () => {
        videoContainer.style.visibility = "visible";
        videoContainer.style.transform = "scale(1)"; // Zoom in
        watchReelText.classList.add("hovered"); // Change text color to red
        hoverVideo.play();
    });

    // Zoom-out effect, pause video, and reset text color on mouse leave
    watchReelText.addEventListener("mouseleave", () => {
        videoContainer.style.transform = "scale(0)"; // Zoom out
        setTimeout(() => {
            videoContainer.style.visibility = "hidden";
        }, 300); // Matches the CSS transition duration for smooth hide
        watchReelText.classList.remove("hovered"); // Reset text color
        hoverVideo.pause();
    });

    // Move the video container with the mouse horizontally
    watchReelText.addEventListener("mousemove", (e) => {
        const rect = watchReelText.getBoundingClientRect();
        const offsetX = e.clientX - rect.left;
        videoContainer.style.left = `${offsetX - 100}px`; // Center horizontally
    });
}

// navbar ...................................................
window.addEventListener('load', () => {
  const nav = document.querySelector('.animate-links');
  nav.classList.add('animation-start');
});



//  testimony slider...............
const reviewSlider = document.getElementById('reviewSlider');
const cardHeight = reviewSlider.querySelector('.card').offsetHeight;
const scrollAmount = cardHeight * 2;
let sliderInterval;
function scrollDown() {
  reviewSlider.scrollBy({
    top: scrollAmount,
    behavior: 'smooth'
  });
}
const testimonySection = document.querySelector('.testimony-section');
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      startAutoScroll(); 
    } else {
      stopAutoScroll();  
    }
  });
}, { threshold: 0.5 }); 
observer.observe(testimonySection);
// testimony slider End........


// case-study-block for auto video  playing
//  JavaScript to conditionally add the video src attribute based on screen width
document.addEventListener("DOMContentLoaded", function() {
  const caseStudyBoxes = document.querySelectorAll(".case-study-box");

  caseStudyBoxes.forEach(box => {
      const video = box.querySelector(".case-study-video");
      const img = box.querySelector("img");

      img.addEventListener("mouseenter", () => {
          video.play(); // Play video on image hover
      });

      img.addEventListener("mouseleave", () => {
          video.pause(); // Pause video when hover ends
          video.currentTime = 0; // Reset video to the beginning
      });
  });
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

