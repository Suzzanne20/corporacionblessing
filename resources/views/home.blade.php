<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporación Blessing | Información Corporativa</title>
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

        .nav {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-end;
            gap: 0.4rem;
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
            padding: 5.5rem 0 2.5rem;
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

        .gallery {
            display: grid;
            grid-template-columns: repeat(12, minmax(0, 1fr));
            gap: 0.75rem;
        }

        .gallery-item {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            min-height: 170px;
            border: 1px solid rgba(255, 255, 255, 0.8);
            box-shadow: var(--shadow);
        }

        .gallery-item::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(160deg, rgba(31, 95, 255, 0.85), rgba(34, 195, 166, 0.8));
        }

        .gallery-item::after {
            content: attr(data-label);
            position: absolute;
            left: 1rem;
            bottom: 1rem;
            color: #fff;
            font-weight: 700;
            font-size: 0.95rem;
            letter-spacing: 0.02em;
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
            }

            .nav {
                justify-content: flex-start;
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
    </style>
</head>

<body>
    <header class="container glass topbar">
        <a class="brand" href="#inicio">Corporación Blessing</a>
        <nav class="nav">
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
                <h1>Una presencia corporativa moderna, confiable y orientada al crecimiento.</h1>
                <p>
                    En Corporación Blessing impulsamos soluciones empresariales con enfoque humano y visión de futuro.
                    Esta página presenta nuestra esencia: quiénes somos, hacia dónde vamos y cómo conectamos con clientes,
                    aliados y comunidades.
                </p>
                <div class="hero-actions">
                    <a class="btn btn-primary" href="#contacto">Hablar con nosotros</a>
                    <a class="btn btn-secondary" href="#galeria">Ver galería</a>
                </div>
            </article>

            <aside class="glass hero-side">
                <h2>Nuestro impacto</h2>
                <p>Compromiso permanente con innovación, eficiencia y calidad en cada proyecto.</p>
                <div class="stats">
                    <div class="stat-card">
                        <h3>+10</h3>
                        <p>Años de experiencia corporativa.</p>
                    </div>
                    <div class="stat-card">
                        <h3>+120</h3>
                        <p>Proyectos ejecutados con éxito.</p>
                    </div>
                    <div class="stat-card">
                        <h3>24/7</h3>
                        <p>Atención y acompañamiento.</p>
                    </div>
                    <div class="stat-card">
                        <h3>100%</h3>
                        <p>Enfoque en mejora continua.</p>
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
                        Ofrecer soluciones integrales que agreguen valor a nuestros clientes mediante procesos
                        eficientes, innovación constante y un equipo comprometido con la excelencia.
                    </p>
                </article>
                <article class="card glass">
                    <h3>Visión</h3>
                    <p>
                        Ser una corporación referente en nuestro sector por la calidad de nuestros servicios,
                        la confianza de nuestros aliados y el impacto positivo que generamos en la sociedad.
                    </p>
                </article>
            </div>
        </section>

        <section id="galeria" class="section">
            <h2 class="section-title">Galería corporativa</h2>
            <div class="gallery">
                <article class="gallery-item span-7" data-label="Operación estratégica"><img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/refs/heads/main/Resource%20Corp%20Blessing/1.jpg"></article>
                <article class="gallery-item span-5" data-label="Equipo profesional"><img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/refs/heads/main/Resource%20Corp%20Blessing/1.jpg"></article>
                <article class="gallery-item span-4" data-label="Innovación constante"><img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/refs/heads/main/Resource%20Corp%20Blessing/1.jpg"></article>
                <article class="gallery-item span-4" data-label="Gestión de proyectos"><img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/refs/heads/main/Resource%20Corp%20Blessing/1.jpg"></article>
                <article class="gallery-item span-4" data-label="Alianzas de valor"><img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/refs/heads/main/Resource%20Corp%20Blessing/1.jpg"></article>
            </div>
        </section>

        <section id="ubicacion" class="section">
            <h2 class="section-title">Ubicación</h2>
            <div class="location-wrap">
                <article class="glass location-text">
                    <h3>Corporación Blessing</h3>
                    <p>Estamos ubicados estratégicamente para atender a nuestros clientes con cercanía y eficiencia.</p>
                    <p><strong>Dirección:</strong> Puerto Barrios, Izabal</p>
                    <p><strong>Horario:</strong> Lunes a Viernes · 8:00 AM - 6:00 PM</p>
                    <p><strong>Teléfono:</strong> +502 4557-3507</p>
                </article>
                <article class="glass map">
                    <iframe
                        title="Mapa ubicación Corporación Blessing"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps?q=Bogota%20Colombia&output=embed">
                    </iframe>
                </article>
            </div>
        </section>

        <section id="contacto" class="contact glass">
            <h2 class="section-title" style="color:#fff; margin-bottom: 0;">Contáctanos</h2>
            <p>Estamos listos para escuchar tus necesidades y construir soluciones a la medida de tu empresa.</p>
            <ul class="contact-list">
                <li>📞 +502 4557-3507</li>
                <li>✉️ logistica@corporacionblessing.com</li>
                <li>📍 Puerto Barrios, Izabal</li>
            </ul>
        </section>
    </main>

    <footer>
        © {{ date('Y') }} Corporación Blessing. Todos los derechos reservados.
    </footer>
</body>

</html>
