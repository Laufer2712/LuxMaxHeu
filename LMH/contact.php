<?php include('config/constants.php'); ?>
<?php include('includes/header.php'); ?>


<section>
    <h2>Contacto</h2>
    <form action="#" method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <textarea name="mensaje" placeholder="Tu mensaje" required></textarea>
        <button type="submit" class="btn-cta">Enviar</button>
    </form>

    <p>Email: <?php echo EMAIL; ?></p>
    <p>Teléfono: <?php echo PHONE; ?></p>
    <p>Dirección: <?php echo ADDRESS; ?></p>
</section>

<?php include('includes/footer.php'); ?>