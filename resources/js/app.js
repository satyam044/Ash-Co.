import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    // Mobile menu toggle
    const menuBtn = document.querySelector('button[aria-controls="mobile-menu"]');
    const mobileMenu = document.getElementById('mobile-menu');

    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', () => {
            const expanded = menuBtn.getAttribute('aria-expanded') === 'true';
            menuBtn.setAttribute('aria-expanded', !expanded);
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Profile menu toggle
    const profileBtn = document.getElementById('user-menu-button');
    const profileMenu = document.getElementById('profile-menu');

    if (profileBtn && profileMenu) {
        profileBtn.addEventListener('click', (e) => {
            e.stopPropagation(); // Prevents closing on body click
            profileMenu.classList.toggle('hidden');
        });

        // Hide dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!profileMenu.contains(e.target) && !profileBtn.contains(e.target)) {
                profileMenu.classList.add('hidden');
            }
        });
    }
});
