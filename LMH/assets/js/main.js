document.addEventListener('DOMContentLoaded', () => {
    /* ===== MENÚ RESPONSIVE ===== */
    const menuToggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('nav');

    if (menuToggle && nav) {
        menuToggle.addEventListener('click', () => {
            nav.classList.toggle('open');
            menuToggle.classList.toggle('active');
        });

        // Cerrar menú al hacer clic fuera
        document.addEventListener('click', (e) => {
            if (!nav.contains(e.target) && !menuToggle.contains(e.target)) {
                nav.classList.remove('open');
                menuToggle.classList.remove('active');
            }
        });
    }

    /* ===== VOLVER ARRIBA ===== */
    const backToTopBtn = document.getElementById('backToTop');

    if (backToTopBtn) {
        const toggleBackToTop = () => {
            backToTopBtn.style.display = window.scrollY > 300 ? 'flex' : 'none';
        };

        // Throttle scroll para mejor performance
        let ticking = false;
        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    toggleBackToTop();
                    ticking = false;
                });
                ticking = true;
            }
        });

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /* ===== NEWSLETTER ===== */
    const newsletterForm = document.querySelector('.newsletter-form');
    if (newsletterForm) {
        const emailInput = newsletterForm.querySelector('input[type="email"]');
        const feedback = document.createElement('div');
        feedback.className = 'newsletter-feedback';
        feedback.style.color = 'var(--accent-color)';
        feedback.style.fontSize = '0.85rem';
        feedback.style.marginTop = '0.5rem';
        newsletterForm.appendChild(feedback);

        newsletterForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const email = emailInput.value.trim();

            if (validateEmail(email)) {
                // Aquí iría la lógica para enviar el email (AJAX / Fetch)
                feedback.textContent = '¡Gracias por suscribirte!';
                emailInput.value = '';
            } else {
                feedback.textContent = 'Introduce un email válido.';
            }

            // Limpiar mensaje después de 3s
            setTimeout(() => feedback.textContent = '', 3000);
        });
    }

    /* ===== VALIDACIÓN EMAIL ===== */
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
});
