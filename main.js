// Get the elements
const menuIcon = document.querySelector('.menu-icon');
const navbar = document.querySelector('.navbar');
const navLinks = document.querySelectorAll('.nav-links li');

menuIcon.addEventListener('click', () => {
  // Toggle the navbar
  navbar.classList.toggle('navbar');

  // Link animation
  navLinks.forEach((link, index) => {
    if (link.style.animation) {
      link.style.animation = '';
    } else {
      link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
    }
  });

//   Menu animation
  menuIcon.classList.toggle('toggle');
});
