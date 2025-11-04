<?php
// index.php
include __DIR__ . '/config/constants.php';
include __DIR__ . '/includes/header.php';
?>
<!-- Si header.php ya trae los CSS globales, este index.css sirve para sobreescribir estilos específicos -->
<link rel="stylesheet" href="assets/css/index.css">

<main role="main" aria-label="Contenido principal">
    <!-- HERO -->
    <section class="hero" aria-labelledby="hero-title">
        <div class="hero-content">
            <h1 id="hero-title">
                El socio tecnológico ideal para guiar tu emprendimiento del concepto al crecimiento digital.
            </h1>
            <p>
                Transformamos ideas en soluciones digitales que impulsan tu negocio.
            </p>
            <a href="contact.php" class="btn-cta" role="button" aria-label="Empezar a construir tu visión">
                Empecemos a construir tu visión
            </a>
        </div>
        <div class="scroll-indicator">
            <span>Desplázate para descubrir</span>
            <div class="arrow"></div>
        </div>
    </section>

    <!-- POR QUÉ ELEGIRNOS - VERSIÓN MEJORADA -->
    <section class="why-choose-us" aria-labelledby="why-title">
        <div class="container">
            <h2 id="why-title" class="section-title">¿Por qué somos tu mejor elección?</h2>
            <p class="section-subtitle">No solo desarrollamos software, creamos ventajas competitivas sostenibles</p>

            <div class="benefits-grid">
                <article class="benefit-card" tabindex="0" aria-labelledby="benefit-1-title">
                    <div class="benefit-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <h3 id="benefit-1-title">Resultados que aportan ventaja real</h3>
                    <p>
                        Entregamos soluciones accionables, con precisión técnica, transparencia en los procesos
                        y foco en la innovación. Nuestro equipo combina experiencia y prácticas modernas para
                        transformar la excelencia en una entrega consistente.
                    </p>
                </article>

                <article class="benefit-card" tabindex="0" aria-labelledby="benefit-2-title">
                    <div class="benefit-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                    </div>
                    <h3 id="benefit-2-title">Velocidad sin comprometer calidad</h3>
                    <p>
                        Implementamos metodologías ágiles que aceleran tu time-to-market mientras mantenemos
                        los más altos estándares de calidad. Tu proyecto avanza rápido, pero nunca a expensas
                        de la excelencia técnica.
                    </p>
                </article>

                <article class="benefit-card" tabindex="0" aria-labelledby="benefit-3-title">
                    <div class="benefit-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3 id="benefit-3-title">Partnership, no solo prestación</h3>
                    <p>
                        Nos convertimos en una extensión de tu equipo, comprendiendo tus objetivos de negocio
                        para ofrecer soluciones que realmente generen impacto. Tu éxito es nuestro éxito.
                    </p>
                </article>
            </div>

            <div class="stats-container">
                <div class="stat-item">
                    <div class="stat-number" data-target="4">0</div>
                    <div class="stat-label">Proyectos exitosos</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-target="24">0</div>
                    <div class="stat-label">Meses de experiencia promedio</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-target="4">0</div>
                    <div class="stat-label">Clientes satisfechos</div>
                </div>

            </div>
        </div>
    </section>

    <!-- NUESTROS SERVICIOS -->
    <section class="services-preview" aria-labelledby="services-title">
        <div class="container">
            <h2 id="services-title" class="section-title">Nuestros Servicios</h2>

            <div class="service-cards">
                <article class="card" tabindex="0" aria-labelledby="s1">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                    </div>
                    <h3 id="s1">Plataformas de Alto Impacto</h3>
                    <p>Aplicaciones web y portales escalables con UX/UI intuitivo y arquitectura sólida.</p>
                </article>

                <article class="card" tabindex="0" aria-labelledby="s2">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                            <line x1="12" y1="18" x2="12" y2="18"></line>
                        </svg>
                    </div>
                    <h3 id="s2">Apps Móviles Nativas</h3>
                    <p>Experiencias móviles optimizadas, rendimiento nativo y soporte multiplataforma.</p>
                </article>

                <article class="card" tabindex="0" aria-labelledby="s3">
                    <div class="card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3 id="s3">Conceptualización Estratégica</h3>
                    <p>Validación, diseño y planificación para proyectos escalables y sostenibles.</p>
                </article>
            </div>
        </div>
    </section>
</main>

<script src="assets/js/index.js"></script>
<?php include __DIR__ . '/includes/footer.php'; ?>