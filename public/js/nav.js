// Get the hamburger button element
const hamburgerButton = document.querySelector('.hamburger');
const hamburgerMenu = document.querySelector('.hamburgermenu');
const icons = document.querySelector('.icons');

hamburgerButton.addEventListener('click', function() {
    const Close = this.classList.contains('close');

    if (Close) {
        console.log('Closing menu');
        this.classList.remove('close');
        hamburgerMenu.style.left = '-100%';
        icons.style.opacity = '100%';
    } else {
        console.log('Opening menu');
        this.classList.add('close');
        hamburgerMenu.style.left = '0';
        icons.style.opacity = '0';
    }
})