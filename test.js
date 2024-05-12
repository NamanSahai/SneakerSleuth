// JavaScript for Animated Search
document.addEventListener("DOMContentLoaded", 
    function () {
    const searchInput = document.querySelector('.search-input');
    const searchIcon = document.querySelector('.search-icon');
    
    // Toggle search bar width and focus on icon click

searchIcon.addEventListener('click', 
    function () {
    searchInput.classList.toggle('active');
    searchInput.focus();
    });
    
    // Collapse search bar when focus is lost

searchInput.addEventListener('blur', 
    function () {
    if (!searchInput.value.trim()) {
    searchInput.classList.remove('active');
    
    }
    });
    });

