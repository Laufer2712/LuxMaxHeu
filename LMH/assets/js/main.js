document.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector('header');
    const menuToggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('nav');
    const navLinks = document.querySelectorAll('nav a');

    // Sticky header
    window.addEventListener('scroll', () => {
        header.classList.toggle('sticky', window.scrollY > 50);
    });

    // Función para cerrar menú
    function closeMenu() {
        nav.classList.remove('open');
        menuToggle.classList.remove('active');
        menuToggle.querySelector('i').className = 'fas fa-bars';
    }

    // Toggle menú
    menuToggle.addEventListener('click', (e) => {
        e.stopPropagation();
        nav.classList.toggle('open');
        menuToggle.classList.toggle('active');
        const icon = menuToggle.querySelector('i');
        icon.className = nav.classList.contains('open') ? 'fas fa-times' : 'fas fa-bars';
    });

    // Cerrar menú al click en enlaces
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth <= 992) closeMenu();
        });
    });

    // Cerrar al hacer click fuera
    document.addEventListener('click', (e) => {
        if (nav.classList.contains('open') && !nav.contains(e.target) && !menuToggle.contains(e.target)) {
            closeMenu();
        }
    });

    // Cerrar al redimensionar
    window.addEventListener('resize', () => {
        if (window.innerWidth > 992 && nav.classList.contains('open')) closeMenu();
    });


    /* ===== SMOOTH SCROLL ===== */
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href !== '') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

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
