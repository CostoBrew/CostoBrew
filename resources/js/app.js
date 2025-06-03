import * as boostrap from 'bootstrap';
import './bootstrap';

// Web3Forms contact form functionality
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const result = document.getElementById('result');

    if (form && result) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(form);
            const object = Object.fromEntries(formData);
            const json = JSON.stringify(object);

            result.style.display = "block";
            result.innerHTML = "Please wait...";
            result.className = "mb-3 alert alert-info";

            fetch('https://api.web3forms.com/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: json
            })
            .then(async (response) => {
                let json = await response.json();
                if (response.status == 200) {
                    result.innerHTML = "Form submitted successfully! We'll get back to you soon.";
                    result.className = "mb-3 alert alert-success";
                } else {
                    console.log(response);
                    result.innerHTML = json.message;
                    result.className = "mb-3 alert alert-danger";
                }
            })
            .catch(error => {
                console.log(error);
                result.innerHTML = "Something went wrong! Please try again.";
                result.className = "mb-3 alert alert-danger";
            })
            .then(function() {
                form.reset();
                setTimeout(() => {
                    result.style.display = "none";
                }, 5000);
            });
        });
    }
});

