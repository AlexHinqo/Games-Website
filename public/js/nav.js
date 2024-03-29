// Get the hamburger button element
const hamburgerButton = document.querySelector('.hamburger');

// Get the second nav bar element
const secondNavbar = document.querySelector('.second-navbar');

// Get the back button element
const backButton = document.querySelector('.back-button');

// Add click event listener to toggle close button appearance
hamburgerButton.addEventListener('click', function() {
    // Check if the hamburger button has the 'close' class
    const isClose = this.classList.contains('close');

    // If it's close, remove the 'close' class and hide the second navbar
    if (isClose) {
        console.log('Closing menu');
        this.classList.remove('close');
        secondNavbar.style.display = 'none'; // Hide the second navbar
    } else {
        // If it's not close, add the 'close' class and show the second navbar
        console.log('Opening menu');
        this.classList.add('close');
        secondNavbar.style.display = 'block'; // Show the second navbar
    }
});

// Add click event listener to back button to hide the second navbar
backButton.addEventListener('click', function() {
    console.log('Going back');
    hamburgerButton.classList.remove('close'); // Remove the 'close' class from hamburger button
    secondNavbar.style.display = 'none'; // Hide the second navbar
});
