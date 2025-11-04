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
                    <img src="assets/img/logoCom.png" alt="Proyecto 1">
                    <div class="card-overlay">
                        <a href="#" class="btn-primary">Ver Detalles</a>
                    </div>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Proyecto A</h3>
                    <div class="card-details">
                        <div class="detail-item">
                            <span class="detail-label">Desafío:</span>
                            <p>Mejorar eficiencia interna.</p>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Solución:</span>
                            <p>Plataforma web centralizada.</p>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Resultados:</span>
                            <p class="highlight">+30% eficiencia.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <img src="assets/img/logoCom.png" alt="Proyecto 2">
                    <div class="card-overlay">
                        <a href="#" class="btn-primary">Ver Detalles</a>
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