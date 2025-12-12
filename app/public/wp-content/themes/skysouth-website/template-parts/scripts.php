<script>
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer for scroll animations
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('translate-y-12', 'opacity-0');
                    entry.target.classList.add('translate-y-0', 'opacity-100');
                }
            });
        },
        {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        }
    );

    // Observe all elements with data-animate attribute
    document.querySelectorAll('[data-animate]').forEach(el => {
        observer.observe(el);
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Form Validation
    const form = document.getElementById('quote-form');

    if (form) {
        function showError(input, message) {
            const errorElement = input.nextElementSibling;
            if (errorElement && errorElement.classList.contains('error-message')) {
                errorElement.textContent = message;
                errorElement.classList.remove('hidden');
                errorElement.style.animation = 'slideDown 0.3s ease-out';
            }
            input.classList.remove('border-gray-300', 'focus:ring-[#0a1628]');
            input.classList.add('border-red-500', 'focus:ring-red-500');
        }

        function clearError(input) {
            const errorElement = input.nextElementSibling;
            if (errorElement && errorElement.classList.contains('error-message')) {
                errorElement.classList.add('hidden');
                errorElement.textContent = '';
                errorElement.style.animation = '';
            }
            input.classList.remove('border-red-500', 'focus:ring-red-500');
            input.classList.add('border-gray-300', 'focus:ring-[#0a1628]');
        }

        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Clear error on input
        form.querySelectorAll('input[required]').forEach(input => {
            input.addEventListener('input', () => {
                clearError(input);
            });
        });

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            let isValid = true;

            // Validate name
            const nameInput = document.getElementById('name');
            if (nameInput && !nameInput.value.trim()) {
                showError(nameInput, 'Please enter your full name');
                isValid = false;
            } else if (nameInput) {
                clearError(nameInput);
            }

            // Validate email
            const emailInput = document.getElementById('email');
            if (emailInput && !emailInput.value.trim()) {
                showError(emailInput, 'Please enter your email address');
                isValid = false;
            } else if (emailInput && !validateEmail(emailInput.value)) {
                showError(emailInput, 'Please enter a valid email address');
                isValid = false;
            } else if (emailInput) {
                clearError(emailInput);
            }

            // Validate phone
            const phoneInput = document.getElementById('phone');
            if (phoneInput && !phoneInput.value.trim()) {
                showError(phoneInput, 'Please enter your phone number');
                isValid = false;
            } else if (phoneInput) {
                clearError(phoneInput);
            }

            // If form is valid, submit it
            if (isValid) {
                alert('Thank you! Your quote request has been submitted.');
                form.reset();
            } else {
                // Scroll to first error
                const firstError = form.querySelector('.border-red-500');
                if (firstError) {
                    firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    firstError.focus();
                }
            }
        });
    }
});
</script>

<style>
@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
