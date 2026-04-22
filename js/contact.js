//get entire form element for work with js
const form = document.getElementById('contactForm');

        form.addEventListener('submit', function(event) {
            event.preventDefault(); //prevent page from reloading so js can validate the form

            //clear previous errors
            document.getElementById('nameError').textContent = '';
            document.getElementById('emailError').textContent = '';
            document.getElementById('messageError').textContent = '';
            document.getElementById('consentError').textContent = '';

            let valid = true;

            //name validation
            const name = document.getElementById('name').value.trim();
            if (name === '') {
                document.getElementById('nameError').textContent = 'Please enter your name.';
                valid = false;
            }

            //e-mail validation
            const email = document.getElementById('email').value.trim();
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email === '') {
                document.getElementById('emailError').textContent = 'Please enter your email.';
                valid = false;
            } else if (!emailPattern.test(email)) {
                document.getElementById('emailError').textContent = 'Please enter a valid email.';
                valid = false;
            }
            //consent validation
            const consent = document.getElementById('consent').checked;
            if (!consent) {
                document.getElementById('consentError').textContent = 'You must agree to the terms.';
                valid = false;
            }

            if (valid) {
                form.submit();
            }
        });