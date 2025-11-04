<?php include('config/constants.php'); ?>
<?php include('includes/header.php'); ?>

<link rel="stylesheet" href="assets/css/contact.css">

<section class="contact-section">
    <div class="contact-header">
        <h2>Contáctanos</h2>
        <p>Estamos aquí para ayudarte. Envíanos tu consulta.</p>
    </div>

    <form action="#" method="POST" class="contact-form">
        <div class="form-group">
            <input type="text" name="nombre" id="nombre" placeholder=" " required>
            <label for="nombre" class="form-label">Nombre</label>
        </div>

        <div class="form-group">
            <input type="email" name="email" id="email" placeholder=" " required>
            <label for="email" class="form-label">Email</label>
        </div>

        <div class="form-group">
            <textarea name="mensaje" id="mensaje" placeholder=" " required></textarea>
            <label for="mensaje" class="form-label">Mensaje</label>
        </div>

        <button type="submit" class="btn-cta">Enviar</button>
    </form>
    <!--
    <div class="contact-info1">
        <h3>Contacto</h3>

        <div class="contact-details">
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="contact-text">
                    <h4>Email</h4>
                    <p><?php //echo EMAIL; 
                        ?></p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="contact-text">
                    <h4>Teléfono</h4>
                    <p><?php // echo PHONE; 
                        ?></p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="contact-text">
                    <h4>Dirección</h4>
                    <p><?php //echo ADDRESS; 
                        ?></p>
                </div>
            </div>
        </div>
-->

    </div>
</section>

<?php include('includes/footer.php'); ?>