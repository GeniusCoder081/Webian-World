// navbar dropdown open js.................................
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
//  navbar dropdwn js End....................................................................................................................

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

// navbar ...........................................................................................................
window.addEventListener('load', () => {
  const nav = document.querySelector('.animate-links');
  nav.classList.add('animation-start');
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




