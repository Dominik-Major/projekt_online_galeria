const form = document.getElementById('contactForm');

form.addEventListener('submit', function (event) {

    const errors = {
        name: document.getElementById('nameError'),
        email: document.getElementById('emailError'),
        message: document.getElementById('messageError'),
        consent: document.getElementById('consentError')
    };

    Object.values(errors).forEach(el => el.textContent = '');

    let valid = true;

    const name = document.getElementById('name').value.trim();
    if (name === '') {
        errors.name.textContent = 'Please enter your name.';
        valid = false;
    }

    const email = document.getElementById('email').value.trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email === '') {
        errors.email.textContent = 'Please enter your email.';
        valid = false;
    } else if (!emailPattern.test(email)) {
        errors.email.textContent = 'Please enter a valid email.';
        valid = false;
    }

    const consent = document.getElementById('consent').checked;
    if (!consent) {
        errors.consent.textContent = 'You must agree to the terms.';
        valid = false;
    }

    const message = document.getElementById('message').value.trim();
    if (message.length > 500) {
        errors.message.textContent = 'Message is too long (max 500 chars).';
        valid = false;
    }

    if (!valid) {
        event.preventDefault();
    }
});