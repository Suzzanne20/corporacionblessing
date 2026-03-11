<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporación Blessing</title>
    <link rel="icon" type="image/png" href="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/refs/heads/main/Resource%20Corp%20Blessing/1772249876053.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #f4f7ff;
            --surface: rgba(255, 255, 255, 0.86);
            --primary: #1f5fff;
            --primary-dark: #163c9b;
            --accent: #22c3a6;
            --text: #0f172a;
            --muted: #475569;
            --shadow: 0 20px 45px rgba(15, 23, 42, 0.14);
            --radius: 22px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Manrope", sans-serif;
            color: var(--text);
            background:
                radial-gradient(circle at 5% 5%, rgba(34, 195, 166, 0.2) 0%, transparent 30%),
                radial-gradient(circle at 90% 10%, rgba(31, 95, 255, 0.28) 0%, transparent 28%),
                linear-gradient(140deg, #f9fbff 0%, #f2f6ff 50%, #edf4ff 100%);
            min-height: 100vh;
            line-height: 1.65;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            width: min(1120px, 92%);
            margin: 0 auto;
        }

        .glass {
            background: var(--surface);
            border: 1px solid rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            box-shadow: var(--shadow);
            border-radius: var(--radius);
        }

        .topbar {
            position: sticky;
            top: 14px;
            z-index: 15;
            margin-top: 18px;
            padding: 0.9rem 1.1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
        }

        .brand {
            font-size: 1rem;
            font-weight: 800;
            letter-spacing: 0.04em;
            color: var(--primary-dark);
            text-transform: uppercase;
        }
        .brand{
            display:flex;
            align-items:center;
            gap:.65rem;
            font-size: 1rem;
            font-weight: 800;
            letter-spacing: 0.04em;
            color: var(--primary-dark);
            text-transform: uppercase;
            }
            .brand-logo{
            width: 40px;
            height: 40px;
            border-radius: 12px;
            object-fit: cover;
            box-shadow: 0 10px 24px rgba(15,23,42,.12);
            }

        .nav {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-end;
            gap: 0.4rem;
        }

        .nav-toggle {
            display: none;
            border: 1px solid rgba(31, 95, 255, 0.25);
            background: #fff;
            color: var(--primary-dark);
            border-radius: 10px;
            padding: 0.45rem 0.7rem;
            font-size: 0.95rem;
            font-weight: 800;
            cursor: pointer;
        }

        .nav a {
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--muted);
            padding: 0.45rem 0.8rem;
            border-radius: 999px;
            transition: all 0.25s ease;
        }

        .nav a:hover {
            color: var(--primary-dark);
            background-color: rgba(31, 95, 255, 0.1);
        }

        .hero {
            padding: 4.8rem 0 2.5rem;
            display: grid;
            grid-template-columns: 1.3fr 1fr;
            gap: 1.4rem;
            align-items: stretch;
        }

        .hero-main,
        .hero-side {
            padding: clamp(1.6rem, 2.8vw, 2.4rem);
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            background: rgba(31, 95, 255, 0.12);
            color: var(--primary-dark);
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            border-radius: 999px;
            padding: 0.4rem 0.75rem;
            margin-bottom: 1.15rem;
        }

        h1 {
            font-size: clamp(2rem, 4vw, 3.3rem);
            line-height: 1.14;
            margin-bottom: 1rem;
            color: #0b1d4f;
        }

        .hero p {
            color: var(--muted);
            margin-bottom: 1.35rem;
            max-width: 60ch;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 0.7rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.72rem 1.18rem;
            border-radius: 12px;
            font-weight: 700;
            border: none;
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .btn-primary {
            background: linear-gradient(135deg, #1f5fff 0%, #2453d5 100%);
            color: #fff;
            box-shadow: 0 14px 26px rgba(31, 95, 255, 0.3);
        }

        .btn-secondary {
            background: #fff;
            color: var(--primary-dark);
            border: 1px solid rgba(31, 95, 255, 0.2);
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .hero-side {
            display: grid;
            gap: 0.8rem;
            align-content: start;
            background: linear-gradient(180deg, #1f5fff 0%, #163c9b 100%);
            color: #fff;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0.65rem;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.14);
            border-radius: 14px;
            padding: 0.9rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .stat-card h3 {
            font-size: 1.4rem;
            margin-bottom: 0.15rem;
        }

        .section {
            padding: 1.4rem 0;
        }

        .section-title {
            margin-bottom: 1rem;
            font-size: clamp(1.35rem, 2.3vw, 2rem);
            color: #10235a;
        }

        .cards-2 {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1rem;
        }

        .card {
            padding: 1.5rem;
        }

        .card h3 {
            color: var(--primary-dark);
            margin-bottom: 0.6rem;
            font-size: 1.15rem;
        }

        .gallery{
        display:grid;
        grid-template-columns: repeat(12, minmax(0, 1fr));
        gap: .85rem;
        }

        .gallery-item{
        position:relative;
        border-radius: 18px;
        overflow:hidden;
        border: 1px solid rgba(255,255,255,.8);
        box-shadow: var(--shadow);
        min-height: 220px;
        grid-column: span 4;
        background:#0b1d4f;
        }

        .gallery-item img{
        width:100%;
        height:100%;
        object-fit: cover;
        display:block;
        transform: scale(1.02);
        transition: transform .35s ease, filter .35s ease;
        filter: saturate(1.05) contrast(1.02);
        }

        /* Etiqueta (solo texto, sin tapar imagen) */
        .gallery-item::after{
        content: attr(data-label);
        position:absolute;
        left: 14px;
        bottom: 14px;
        padding: .45rem .7rem;
        border-radius: 999px;
        font-weight: 800;
        font-size: .9rem;
        letter-spacing: .02em;
        color:#fff;
        background: rgba(15, 23, 42, .55);
        backdrop-filter: blur(8px);
        border: 1px solid rgba(255,255,255,.18);
        }

        /* Overlay suave SOLO en hover */
        .gallery-item::before{
        content:"";
        position:absolute;
        inset:0;
        background: linear-gradient(180deg, transparent 35%, rgba(15,23,42,.75) 100%);
        opacity: .55;
        transition: opacity .35s ease;
        }

        .gallery-item:hover::before{ opacity: .85; }
        .gallery-item:hover img{ transform: scale(1.08); }

        /* Variantes para “malla” */
        .gallery-item.wide{ grid-column: span 8; }
        .gallery-item.tall{ grid-column: span 4; min-height: 320px; }

        /* Responsive */
        @media (max-width: 960px){
        .gallery-item{ grid-column: span 6; }
        .gallery-item.wide{ grid-column: span 12; }
        }
        @media (max-width: 620px){
        .gallery-item,
        .gallery-item.wide,
        .gallery-item.tall{ grid-column: span 12; min-height: 240px; }
        }

        .span-7 { grid-column: span 7; }
        .span-5 { grid-column: span 5; }
        .span-4 { grid-column: span 4; }

        .location-wrap {
            display: grid;
            grid-template-columns: 1fr 1.3fr;
            gap: 1rem;
        }

        .location-text,
        .map {
            padding: 1.2rem;
        }

        iframe {
            width: 100%;
            height: 300px;
            border: 0;
            border-radius: 14px;
        }

        .contact {
            text-align: center;
            padding: 2rem 1rem;
            margin: 2rem 0 3rem;
            background: linear-gradient(130deg, rgba(31, 95, 255, 0.98), rgba(18, 43, 115, 0.98));
            color: #fff;
        }

        .contact p {
            opacity: 0.9;
            margin: 0.55rem auto 1rem;
            max-width: 68ch;
        }

        .contact-list {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 0.8rem;
            font-weight: 600;
        }

        footer {
            text-align: center;
            color: #64748b;
            font-size: 0.88rem;
            padding-bottom: 1.7rem;
        }

        @media (max-width: 960px) {
            .hero {
                grid-template-columns: 1fr;
            }

            .cards-2,
            .location-wrap {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 780px) {
            .topbar {
                position: static;
                margin-top: 12px;
                align-items: flex-start;
            }

            .nav-toggle {
                display: inline-flex;
                margin-left: auto;
                align-items: center;
                justify-content: center;
            }

            .nav {
                display: none;
                width: 100%;
                justify-content: flex-start;
                flex-direction: column;
                gap: 0.2rem;
                padding-top: 0.35rem;
            }

            .nav.open {
                display: flex;
            }

            .nav a {
                width: 100%;
                border-radius: 10px;
                padding: 0.55rem 0.75rem;
            }

            .gallery .span-7,
            .gallery .span-5,
            .gallery .span-4 {
                grid-column: span 12;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            iframe {
                height: 250px;
            }
        }
        .hero-side h2{ color:#fff; }
        .hero-side p{ color: rgba(255,255,255,.88); }
        .stat-card p{ color: rgba(255,255,255,.92); }
        .stat-card{ background: rgba(255,255,255,.16); }
        .hero-logo{
            margin: .35rem 0 1.1rem;
            display:flex;
            align-items:center;
            justify-content: center;
            gap:.8rem;
            }
            .hero-logo img{
            width: 175px;
            height: 175px;
            border-radius: 18px;
            object-fit: contain; /* si es logo con transparencia */
            background: rgba(255,255,255,.7);
            padding: 10px;
            border: 1px solid rgba(15,23,42,.06);
            }


        .whatsapp-float {
            position: fixed;
            right: 20px;
            bottom: 20px;
            width: 58px;
            height: 58px;
            border-radius: 50%;
            background: #25D366;
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .whatsapp-float:hover {
            transform: translateY(-2px) scale(1.04);
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.24);
        }

    </style>
</head>

<body>
    <header class="container glass topbar">
        <a class="brand" href="#inicio" aria-label="Corporación Blessing">
            <img class="brand-logo" src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/refs/heads/main/Resource%20Corp%20Blessing/1772249876053.png" alt="Logo Corporación Blessing">
            <span>Corporación Blessing</span>
        </a>
        <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="main-nav">☰</button>
        <nav class="nav" id="main-nav">
            <a href="#mision-vision">Misión & Visión</a>
            <a href="#galeria">Galería</a>
            <a href="#ubicacion">Ubicación</a>
            <a href="#contacto">Contáctanos</a>
        </nav>
    </header>

    <main class="container" id="inicio">
        <section class="hero">
            <article class="glass hero-main">
                <span class="eyebrow">Excelencia empresarial</span>
                <div class="hero-logo">
                <img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/refs/heads/main/Resource%20Corp%20Blessing/1772249876053.png" alt="Logo Corporación Blessing">
                </div>
                <h1>Transporte de carga con 15 años moviendo confianza</h1>
                <p>
                En Corporación Blessing brindamos soluciones logísticas y transporte terrestre para carga contenedorizada
                y mercancías especiales. Operamos con enfoque en seguridad, puntualidad y trazabilidad, cuidando cada
                etapa: planificación, carga, traslado y entrega
                </p>
                <div class="hero-actions">
                    <a class="btn btn-primary" href="#galeria">Ver flota y operaciones</a>
                    <a class="btn btn-secondary" href="#contacto">Contáctanos</a>
                </div>
            </article>

            <aside class="glass hero-side">
                <h2>Nuestro impacto</h2>
                <p>Logística terrestre con experiencia, cumplimiento y operación segura en cada ruta</p>
                <div class="stats">
                    <div class="stat-card">
                        <h3>+15</h3>
                        <p>Años de experiencia en el transporte de carga</p>
                    </div>
                    <div class="stat-card">
                        <h3>+1,000</h3>
                        <p>Traslados y operaciones realizaddas</p>
                    </div>
                    <div class="stat-card">
                        <h3>24/7</h3>
                        <p>Logística y seguimiento</p>
                    </div>
                    <div class="stat-card">
                        <h3>Seguridad</h3>
                        <p>Protocolos y control operativos</p>
                    </div>
                </div>
            </aside>
        </section>

        <section id="mision-vision" class="section">
            <h2 class="section-title">Misión y visión</h2>
            <div class="cards-2">
                <article class="card glass">
                    <h3>Misión</h3>
                    <p>
                        Brindar servicios de transporte terrestre y soluciones logísticas para carga contenedorizada y mercancías especiales,
                        garantizando seguridad, puntualidad y eficiencia, con un equipo comprometido y una operación orientada a la mejora continua.
                    </p>
                </article>
                <article class="card glass">
                    <h3>Visión</h3>
                    <p>
                        Consolidarnos como una transportista referente en Guatemala por la confiabilidad de nuestras entregas,
                        la solidez de nuestra operación y la confianza construida con clientes y aliados a lo largo del tiempo.
                    </p>
                </article>
            </div>
        </section>

        <section id="galeria" class="section">
            <h2 class="section-title">Galería corporativa</h2>
                <div class="gallery">
                <article class="gallery-item tall" data-label="Operación estratégica">
                    <img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/refs/heads/main/Resource%20Corp%20Blessing/11.jpeg" alt="Equipo profesional">
                    
                </article>
                <article class="gallery-item wide" data-label="Equipo profesional">
                    <img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/refs/heads/main/Resource%20Corp%20Blessing/44.jpeg" alt="Operación estratégica">
                </article>
                <article class="gallery-item" data-label="Innovación constante">
                    <img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/refs/heads/main/Resource%20Corp%20Blessing/22.jpeg" alt="Innovación constante">
                </article>
                <article class="gallery-item" data-label="Logística">
                    <img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/refs/heads/main/Resource%20Corp%20Blessing/33.jpeg" alt="Gestión de proyectos">
                </article>
                <article class="gallery-item tall" data-label="Alianzas de valor">
                    <img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/refs/heads/main/Resource%20Corp%20Blessing/555.jpeg" alt="Alianzas de valor">
                </article>
                </div>
        </section>


        <section id="ubicacion" class="section">
            <h2 class="section-title">Ubicación</h2>
            <div class="location-wrap">
                <article class="glass location-text">
                    <h3>Corporación Blessing</h3>
                    <p>Estamos ubicados estratégicamente asegurar tiempos de respuesta eficientes para cada cliente</p>
                    <p><strong>Dirección:</strong> Puerto Barrios, Izabal</p>
                    <p><strong>Horario:</strong> Lunes a Sábado · 8:00 AM - 6:00 PM</p>
                    <p><strong>Teléfono:</strong> +502 3627-4581</p>
                </article>
                <article class="glass map">
                    <iframe
                    title="Mapa ubicación Corporación Blessing"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    src="https://www.google.com/maps?q=15.695922626500904, -88.58861211956285&z=16&output=embed">
                    </iframe>
                </article>
            </div>
        </section>

        <section id="contacto" class="contact glass">
            <h2 class="section-title" style="color:#fff; margin-bottom: 0;">Contáctanos</h2>
            <p>Cuéntanos el tipo de carga y destino. Te apoyamos con una cotización y coordinación inmediata.</p>
            <ul class="contact-list">
                <li>📞 +502 3627-4581</li>
                <li>✉️ logistica@corporacionblessing.com</li>
                <li>📍 Puerto Barrios, Izabal</li>
            </ul>
        </section>
    </main>

    <footer>
        © {{ date('Y') }} Corporación Blessing. Todos los derechos reservados.
    </footer>

    <a class="whatsapp-float" href="https://wa.me/50236274581" target="_blank" rel="noopener noreferrer" aria-label="Escríbenos por WhatsApp">
        💬
    </a>

    <script>
        const navToggle = document.querySelector('.nav-toggle');
        const mainNav = document.getElementById('main-nav');

        navToggle?.addEventListener('click', function () {
            const isOpen = mainNav.classList.toggle('open');
            navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });
    </script>
</body>

</html>
