// Smooth scroll to contact section
window.scrollToContact = function () {
    const el = document.getElementById('contact-form') || document.querySelector('form[name="contact"]') || document.getElementById('contact');
    if (el) {
        el.scrollIntoView({ behavior: 'smooth', block: 'start' });
        // Focus first input for accessibility
        setTimeout(() => {
            const firstInput = el.querySelector('input, textarea, select, button');
            if (firstInput && firstInput.type !== 'hidden' && firstInput.type !== 'submit') {
                firstInput.focus({ preventScroll: true });
            }
        }, 300);
    } else {
        // Fallback: open contact page
        window.location.href = '/contact';
    }
};

// Set footer year
window.addEventListener('DOMContentLoaded', () => {
    const yearEl = document.getElementById('year');
    if (yearEl) {
        yearEl.textContent = new Date().getFullYear();
    }
    
    // Mobile navigation toggle
    const navToggle = document.getElementById('navToggle');
    const navLinks = document.getElementById('navLinks');
    
    if (navToggle && navLinks) {
        navToggle.addEventListener('click', () => {
            navToggle.classList.toggle('active');
            navLinks.classList.toggle('active');
        });
        
        // Close menu when clicking a link
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navToggle.classList.remove('active');
                navLinks.classList.remove('active');
            });
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!navToggle.contains(e.target) && !navLinks.contains(e.target)) {
                navToggle.classList.remove('active');
                navLinks.classList.remove('active');
            }
        });
    }
});

// Placeholder for AJAX form submission if needed later
const form = document.getElementById('contact-form') || document.getElementById('appointmentForm');
if (form) {
    form.addEventListener('submit', function () {
        // default form submission for now
    });
}


