<!-- footer.php actualizado -->
<footer>
    <div class="footer-container">
        <!-- Sección de información de la empresa -->
        <div class="footer-section company-info">
            <div class="footer-logo">
                <h3>LMH Core</h3>
                <p class="tagline">Innovación y excelencia en cada proyecto</p>
            </div>
            <p class="address"><?php echo ADDRESS; ?></p>
            <p class="contact-info">
                <a href="mailto:<?php echo EMAIL; ?>" class="contact-link">
                    <i class="fas fa-envelope"></i>
                    <?php echo EMAIL; ?>
                </a>
            </p>
            <p class="contact-info">
                <a href="tel:<?php echo PHONE; ?>" class="contact-link">
                    <i class="fas fa-phone"></i>
                    <?php echo PHONE; ?>
                </a>
            </p>

            <!-- Newsletter -->
            <div class="newsletter">
                <h4>Suscríbete a nuestro boletín</h4>
                <form class="newsletter-form">
                    <input type="email" placeholder="Tu correo electrónico" required>
                    <button type="submit" class="newsletter-btn">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>

        <!-- Sección de enlaces rápidos -->
        <div class="footer-section quick-links">
            <h4>Enlaces Rápidos</h4>
            <ul>
                <li><a href="index.php"><i class="fas fa-chevron-right"></i> Inicio</a></li>
                <li><a href="services.php"><i class="fas fa-chevron-right"></i> Servicios</a></li>
                <li><a href="proyects.php"><i class="fas fa-chevron-right"></i> Proyectos</a></li>
                <li><a href="about.php"><i class="fas fa-chevron-right"></i> Nosotros</a></li>
                <li><a href="contact.php"><i class="fas fa-chevron-right"></i> Contacto</a></li>
            </ul>
        </div>

        <!-- Sección de servicios -->
        <div class="footer-section services">
            <h4>Nuestros Servicios</h4>
            <ul>
                <li><a href="#"><i class="fas fa-cog"></i> Desarrollo Web</a></li>
                <li><a href="#"><i class="fas fa-mobile-alt"></i> Apps Móviles</a></li>
                <!-- <li><a href="#"><i class="fas fa-chart-line"></i> Marketing Digital</a></li>-->
                <li><a href="#"><i class="fas fa-cloud"></i> Soluciones Cloud</a></li>
                <li><a href="#"><i class="fas fa-shield-alt"></i> Ciberseguridad</a></li>
            </ul>
        </div>

        <!-- Sección de redes sociales y contacto -->
        <div class="footer-section social-contact">
            <h4>Síguenos</h4>
            <div class="footer-socials">
                <a href="#" class="social-link facebook" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                    <span>Facebook</span>
                </a>
                <a href="#" class="social-link twitter" title="Twitter">
                    <i class="fab fa-twitter"></i>
                    <span>Twitter</span>
                </a>
                <a href="https://www.instagram.com/lauriet_ftr/" class="social-link instagram" title="Instagram">
                    <i class="fab fa-instagram"></i>
                    <span>Instagram</span>
                </a>
                <a href="#" class="social-link linkedin" title="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                    <span>LinkedIn</span>
                </a>
                <a href="#" class="social-link youtube" title="YouTube">
                    <i class="fab fa-youtube"></i>
                    <span>YouTube</span>
                </a>
            </div>

            <!-- Botón de contacto rápido -->
            <div class="quick-contact">
                <a href="contact.php" class="contact-btn">
                    <i class="fas fa-paper-plane"></i>
                    Contáctanos Ahora
                </a>
            </div>
        </div>
    </div>

    <!-- Footer inferior -->
    <div class="footer-bottom">
        <div class="footer-bottom-content">
            <div class="copyright">
                &copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. Todos los derechos reservados.
            </div>
            <div class="legal-links">
                <a href="#">Aviso legal</a>
                <a href="#">Política de privacidad</a>
                <a href="#">Cookies</a>
                <a href="#">Términos de uso</a>
            </div>
            <div class="back-to-top">
                <button id="backToTop" title="Volver arriba">
                    <i class="fas fa-chevron-up"></i>
                </button>
            </div>
        </div>
    </div>
</footer>

<script src="assets/js/main.js"></script>