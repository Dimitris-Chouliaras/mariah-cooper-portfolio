// JavaScript to toggle FAQ answers when clicked
function toggleAnswer(faqElement) {
    // Toggle the 'active' class on the clicked FAQ item
    faqElement.classList.toggle('active');
}

// Add event listeners to each FAQ element
const faqs = document.querySelectorAll('.faq');
faqs.forEach(faq => {
    faq.addEventListener('click', function() {
        toggleAnswer(faq);
    });
});