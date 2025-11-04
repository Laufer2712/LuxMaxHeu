<?php include('config/constants.php'); ?>
<?php include('includes/header.php'); ?>

<link rel="stylesheet" href="assets/css/proyects.css">

<section class="portfolio-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Proyectos / Portafolio</h2>
            <p class="section-subtitle">Descubre nuestros trabajos más destacados y las soluciones que hemos implementado</p>
        </div>

        <div class="portfolio-cards">
            <div class="card">
                <div class="card-image">
                    <img src="assets/img/QuotaSalud.jpg" alt="Proyecto 1">
                    <div class="card-overlay">
                        <a href="https://www.quotasalud.com/QuotaSaludWeb/" target="_blank" class="btn-primary">Ver Detalles</a>
                    </div>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Proyecto A: Pagina Web</h3>
                    <div class="card-details">
                        <div class="detail-item">
                            <span class="detail-label">Desafío:</span>
                            <p>Mejorar eficiencia externa.</p>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Solución:</span>
                            <p>Plataforma web centralizada.</p>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Resultados:</span>
                            <p class="highlight">+90% eficiencia.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <img src="assets/img/ClubEstarBien.jpg" alt="Proyecto 2">
                    <div class="card-overlay">
                        <a href="http://clubestarbien.com/ClubEstarBien/" target="_blank" class="btn-primary">Ver Detalles</a>
                    </div>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Proyecto B</h3>
                    <div class="card-details">
                        <div class="detail-item">
                            <span class="detail-label">Desafío:</span>
                            <p>Conectar clientes con servicios móviles.</p>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Solución:</span>
                            <p>App multiplataforma.</p>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Resultados:</span>
                            <p class="highlight">+50% retención.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>