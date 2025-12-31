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

    // Trigger hero title animation immediately on load
    setTimeout(() => {
        document.querySelector('h1[data-animate]').classList.remove('opacity-0');
        document.querySelector('h1[data-animate]').classList.add('opacity-100');
    }, 100);

    // Observe all elements with data-animate attribute
    document.querySelectorAll('[data-animate]').forEach(el => {
        observer.observe(el);
    });

    // Observe specification cards with staggered animation
    const specCardsObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('translate-y-8', 'opacity-0');
                    entry.target.classList.add('translate-y-0', 'opacity-100');
                }
            });
        },
        {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        }
    );

    document.querySelectorAll('.spec-card').forEach(card => {
        specCardsObserver.observe(card);
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

    // Photo Gallery Carousel
    const galleryTrack = document.getElementById('gallery-track');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const dots = document.querySelectorAll('.gallery-dot');
    let currentIndex = 0;
    const totalSlides = 3; // Update this if you add more images

    function updateGallery(index) {
        // Update track position
        galleryTrack.style.transform = `translateX(-${index * 100}%)`;
        currentIndex = index;

        // Update dots
        dots.forEach((dot, i) => {
            if (i === index) {
                dot.classList.remove('bg-white/30', 'hover:bg-white/50');
                dot.classList.add('bg-white');
            } else {
                dot.classList.remove('bg-white');
                dot.classList.add('bg-white/30', 'hover:bg-white/50');
            }
        });
    }

    // Next button
    nextBtn.addEventListener('click', () => {
        const nextIndex = (currentIndex + 1) % totalSlides;
        updateGallery(nextIndex);
    });

    // Previous button
    prevBtn.addEventListener('click', () => {
        const prevIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateGallery(prevIndex);
    });

    // Dot indicators
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            updateGallery(index);
        });
    });

    // Form Validation
    const form = document.getElementById('quote-form');

    function showError(input, message) {
        const errorElement = input.nextElementSibling;
        errorElement.textContent = message;
        errorElement.classList.remove('hidden');
        errorElement.style.animation = 'slideDown 0.3s ease-out';
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
        if (!nameInput.value.trim()) {
            showError(nameInput, 'Please enter your full name');
            isValid = false;
        } else {
            clearError(nameInput);
        }

        // Validate email
        const emailInput = document.getElementById('email');
        if (!emailInput.value.trim()) {
            showError(emailInput, 'Please enter your email address');
            isValid = false;
        } else if (!validateEmail(emailInput.value)) {
            showError(emailInput, 'Please enter a valid email address');
            isValid = false;
        } else {
            clearError(emailInput);
        }

        // Validate phone
        const phoneInput = document.getElementById('phone');
        if (!phoneInput.value.trim()) {
            showError(phoneInput, 'Please enter your phone number');
            isValid = false;
        } else {
            clearError(phoneInput);
        }

        // If form is valid, submit it
        if (isValid) {
            // Here you would normally submit the form
            // For now, we'll just show a success message
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
