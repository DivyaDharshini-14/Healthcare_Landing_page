import './bootstrap';

// resources/js/landing.js

window.scrollToContact = function () {
    const el = document.getElementById('contact');
    if (el) {
        el.scrollIntoView({ behavior: 'smooth' });
    }
};

window.addEventListener('DOMContentLoaded', () => {
    const yearEl = document.getElementById('year');
    if (yearEl) {
        yearEl.textContent = new Date().getFullYear();
    }
});

