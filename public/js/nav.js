const hamburgerButton = document.getElementsByClassName('hamburger')[0];
console.log(hamburgerButton)

// Add click event listener to toggle close button appearance
hamburgerButton.addEventListener('click', function() {
    // Check if the hamburger button has the 'close' class
    const isClose = this.classList.contains('close');

    // If it's close, remove the 'close' class and log the action
    if (isClose) {
        console.log('Closing menu');
        this.classList.remove('close');
    } else {
        // If it's not close, add the 'close' class and log the action
        console.log('Opening menu');
        this.classList.add('close');
    }
});