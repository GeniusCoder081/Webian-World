// navbar dropdown open js............................................................
document.querySelectorAll('.nav-item').forEach((item) => {
  item.addEventListener('mouseenter', () => {
    const dropdown = item.querySelector('.dropdown-menu');
    if (dropdown) dropdown.classList.add('show');
  });

  item.addEventListener('mouseleave', () => {
    const dropdown = item.querySelector('.dropdown-menu');
    if (dropdown) dropdown.classList.remove('show');
  });
});
// navbar ...........................................................................................................
window.addEventListener('load', () => {
  const nav = document.querySelector('.animate-links');
  nav.classList.add('animation-start');
});

// for blue line in bottom of header...........
document.addEventListener("scroll", () => {
  const navbar = document.querySelector(".navbar");
  if (window.scrollY > 200) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});

// for navbar navlink active and disabled..............................
document.addEventListener("DOMContentLoaded", function () {
  // Get all nav-link elements
  const navLinks = document.querySelectorAll(".nav-link");

  // Mark the link as active based on the current URL
  navLinks.forEach((link) => {
    if (link.href === window.location.href) {
      link.classList.add("active");
    } else {
      link.classList.remove("active");
    }
  });

  // Add click event listener to each nav-link
  navLinks.forEach((link) => {
    link.addEventListener("click", function () {
      // Remove 'active' class from all nav-links
      navLinks.forEach((item) => {
        item.classList.remove("active");
      });

      // Add 'active' class to the clicked link
      this.classList.add("active");
    });
  });
});

//  navbar dropdwn js End.....................................................................
document.addEventListener('DOMContentLoaded', function () {
  // Get video and video container elements
  const videoContainer = document.querySelector('.video-container');
  const video = document.getElementById('hoverVideo');

  // Play the video when hovering over the container
  videoContainer.addEventListener('mouseenter', function () {
      video.play();
  });

  // Pause the video and reset it when hover ends
  videoContainer.addEventListener('mouseleave', function () {
      video.pause();
      video.currentTime = 0; // Reset video to the start when paused
  });
});

// case-study-block for auto video  playing.................................................................................................
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

// case-study-block for auto video  playing End.............................................................
// FAQ section js.................................................................................................
 const faqQuestions = document.querySelectorAll('.faq-container .question');
 faqQuestions.forEach(question => {
   question.addEventListener('click', () => {
     // Find the parent container
     const faqContainer = question.parentElement;
     const answer = faqContainer.querySelector('.answercont');
     const icon = question.querySelector('.toggle-icon');

     // Toggle the active state
     if (faqContainer.classList.contains('active')) {
       faqContainer.classList.remove('active');
       answer.style.maxHeight = null; 
       icon.classList.remove('fa-chevron-up');
       icon.classList.add('fa-chevron-down');
     } else {
       // Close other active containers
       document.querySelectorAll('.faq-container.active').forEach(activeContainer => {
         activeContainer.classList.remove('active');
         activeContainer.querySelector('.answercont').style.maxHeight = null;
         activeContainer.querySelector('.toggle-icon').classList.remove('fa-chevron-up');
         activeContainer.querySelector('.toggle-icon').classList.add('fa-chevron-down');
       });

       // Open the clicked container
       faqContainer.classList.add('active');
       answer.style.maxHeight = answer.scrollHeight + 'px'; // Open the answer
       icon.classList.remove('fa-chevron-down');
       icon.classList.add('fa-chevron-up');
     }
   });
 });
// FAQ section js End........................................................

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
