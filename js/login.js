document.addEventListener('DOMContentLoaded', function() {
    // Get DOM elements
    const loginTrigger = document.getElementById('login-trigger');
    const loginModal = document.getElementById('login-modal');
    const closeLogin = document.getElementById('close-login');
    const loginForm = document.getElementById('login-form');

    // Open login modal when clicking the folded corner
    loginTrigger.addEventListener('click', function() {
        loginModal.classList.add('active');
        document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
    });

    // Close login modal when clicking the close button
    closeLogin.addEventListener('click', function() {
        loginModal.classList.remove('active');
        document.body.style.overflow = ''; // Restore scrolling
    });

    // Close modal when clicking outside the login container
    loginModal.addEventListener('click', function(e) {
        if (e.target === loginModal) {
            loginModal.classList.remove('active');
            document.body.style.overflow = '';
        }
    });
});