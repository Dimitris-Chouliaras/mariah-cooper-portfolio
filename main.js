// JavaScript to extract and display the current year
const year = document.getElementById("year")
const thisYear = new Date().getFullYear()
year.setAttribute("datetime", thisYear)
year.textContent = thisYear

// Select all testimonial items
const testimonialItems = document.querySelectorAll(".testimonial-item");

// Add click event listener to each item
testimonialItems.forEach(item => {
    item.addEventListener("click", () => {
        // Toggle 'clicked' class on the clicked item
        item.classList.toggle("clicked");
    });
});

// Navigation Bar Toggle
let menuIcon = document.querySelector('#menu-icon');
let navBar = document.querySelector('.navbar');

menuIcon.addEventListener('click', () => {
    // Toggle a class on the navbar (e.g., 'active' class)
    menuIcon.classList.toggle('fa-x');
    navBar.classList.toggle('active');
  });