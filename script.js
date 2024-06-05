// Function to toggle sidemenuLinks visibility
function toggleSidemenuLinks() {
    var sidemenuLinks = document.querySelector('.sidemenuLinks');
    var sidemenu = document.querySelector('.sidemenu');

    // Check if the sidemenu is displayed
    if (getComputedStyle(sidemenu).display !== 'flex') {
        if (sidemenuLinks.style.display === 'none') {
            sidemenuLinks.style.display = 'flex';
        } else {
            sidemenuLinks.style.display = 'none';
        }
    } else {
        sidemenuLinks.style.display = 'none';
    }
}

// Add event listener for window resize
window.addEventListener('resize', function() {
    var sidemenuLinks = document.querySelector('.sidemenuLinks');
    // Check if the window width is more than 1000px
    if (window.innerWidth > 1000) {
        sidemenuLinks.style.display = 'none';
    }
});


function toggleImage() {
    var image = document.getElementById('light');
    var lamp = document.getElementById('lamp');
    var button = document.getElementById('switchlamb');

    if (image.classList.contains('hidden')) {
        image.classList.remove('hidden');
        lamp.classList.remove('hidden');
        // button.textContent = 'OFF';
    } else {
        image.classList.add('hidden');
        lamp.classList.add('hidden');
        // button.textContent = 'ON';
    }
}
// -------------------------------------------
function appearImage() {
    var image = document.getElementById('light');
    var lamp = document.getElementById('lamp');

    image.classList.remove('hidden');
    lamp.classList.remove('hidden');
}

function hideImage() {
    var image = document.getElementById('light');
    var lamp = document.getElementById('lamp');

    image.classList.add('hidden');
    lamp.classList.add('hidden');
}