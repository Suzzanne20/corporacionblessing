<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soluciones Logísticas | Corporación Blessing</title>
    <link rel="icon" type="image/png" href="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/refs/heads/main/Resource%20Corp%20Blessing/1772249876053.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #f2f6ff;
            --primary: #1f5fff;
            --primary-dark: #163c9b;
            --text: #0f172a;
            --muted: #475569;
            --surface: rgba(255, 255, 255, .88);
            --line: rgba(31, 95, 255, .18);
            --radius: 22px;
            --shadow: 0 18px 40px rgba(15, 23, 42, .14);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: "Manrope", sans-serif;
            color: var(--text);
            line-height: 1.6;
            background:
                radial-gradient(circle at 12% 10%, rgba(34, 195, 166, .18), transparent 28%),
                radial-gradient(circle at 88% 12%, rgba(31, 95, 255, .2), transparent 30%),
                linear-gradient(140deg, #f9fbff 0%, var(--bg) 100%);
            min-height: 100vh;
        }

        .container { width: min(1080px, 92%); margin: 0 auto; }

        .glass {
            background: var(--surface);
            border: 1px solid rgba(255, 255, 255, .7);
            backdrop-filter: blur(9px);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .topbar {
            margin-top: 18px;
            padding: .9rem 1.1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: .8rem;
        }

        .brand { display: flex; align-items: center; gap: .6rem; font-weight: 800; text-transform: uppercase; letter-spacing: .03em; color: var(--primary-dark); text-decoration: none; }
        .brand img { width: 40px; height: 40px; border-radius: 12px; }

        .nav { display: flex; gap: .55rem; flex-wrap: wrap; }
        .nav a {
            text-decoration: none;
            font-size: .9rem;
            color: var(--muted);
            font-weight: 700;
            padding: .45rem .85rem;
            border-radius: 999px;
        }
        .nav a:hover { background: rgba(31,95,255,.1); color: var(--primary-dark); }

        .hero {
            margin-top: 1.2rem;
            padding: clamp(1.6rem, 2.5vw, 2.4rem);
        }

        h1 { font-size: clamp(1.85rem, 3.5vw, 3rem); color: #0b1d4f; margin-bottom: .7rem; }
        .hero p { color: var(--muted); max-width: 70ch; }

        .grid {
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            gap: 1rem;
            margin: 1rem 0 2rem;
        }

        .card { padding: 1.3rem; }
        .card h2 { font-size: 1.2rem; color: var(--primary-dark); margin-bottom: .7rem; }

        .timeline {
            list-style: none;
            display: grid;
            gap: .8rem;
        }

        .timeline li {
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: .85rem;
            background: rgba(255,255,255,.8);
        }

        .timeline strong { display: block; color: #0b1d4f; margin-bottom: .2rem; }

        .simulador {
            display: grid;
            gap: .8rem;
        }

        .field {
            display: grid;
            gap: .35rem;
        }

        label { font-size: .9rem; font-weight: 700; color: #1f2a44; }

        select,
        input {
            border: 1px solid var(--line);
            border-radius: 10px;
            padding: .65rem .7rem;
            font: inherit;
            background: #fff;
        }

        .btn {
            border: none;
            border-radius: 12px;
            font-weight: 800;
            background: linear-gradient(135deg, #1f5fff 0%, #214fd0 100%);
            color: #fff;
            padding: .7rem 1rem;
            cursor: pointer;
        }

        .resultado {
            margin-top: .2rem;
            border-radius: 12px;
            padding: .85rem;
            background: rgba(31,95,255,.08);
            border: 1px solid rgba(31,95,255,.2);
            color: #10235a;
            font-weight: 700;
        }

        .cta {
            margin-bottom: 2rem;
            text-align: center;
            padding: 1.5rem 1rem;
            background: linear-gradient(130deg, rgba(31,95,255,.98), rgba(18,43,115,.98));
            color: #fff;
        }

        .cta a {
            display: inline-flex;
            margin-top: .8rem;
            text-decoration: none;
            color: #10235a;
            background: #fff;
            font-weight: 800;
            border-radius: 12px;
            padding: .65rem 1rem;
        }

        @media (max-width: 900px) {
            .grid { grid-template-columns: 1fr; }
        }
    </style>
</head>

<body>
    <header class="container glass topbar">
        <a class="brand" href="{{ route('home') }}">
            <img src="https://raw.githubusercontent.com/Suzzanne20/ResourceNekoStation/refs/heads/main/Resource%20Corp%20Blessing/1772249876053.png" alt="Logo Corporación Blessing">
            <span>Corporación Blessing</span>
        </a>
        <nav class="nav">
            <a href="{{ route('home') }}">Inicio</a>
            <a href="#flujo">Flujo de servicio</a>
            <a href="#simulador">Simulador</a>
        </nav>
    </header>

    <main class="container">
        <section class="hero glass">
            <h1>Centro de Soluciones Logísticas</h1>
            <p>
                Esta sección suma un enfoque más profesional al sitio: explica de forma clara cómo trabajamos,
            </p>
        </section>

        <section class="grid" id="flujo">
            <article class="glass card">
                <h2>Flujo operativo corporativo</h2>
                <ul class="timeline">
                    <li><strong>1) Levantamiento de requerimiento</strong>Recibimos tipo de carga, volumen y ventana de entrega para diseñar la ruta ideal.</li>
                    <li><strong>2) Planificación y seguridad</strong>Asignamos unidad, piloto y checklist de protocolos preventivos.</li>
                    <li><strong>3) Ejecución de traslado</strong>Coordinación de salida, monitoreo y control de tiempos durante todo el trayecto.</li>
                    <li><strong>4) Cierre y conformidad</strong>Validación de entrega, reporte de operación y recomendaciones de mejora.</li>
                </ul>
            </article>

            <article class="glass card" id="simulador">
                <h2>Simulador de inversión logística</h2>
                <form class="simulador" id="quoteForm">
                    <div class="field">
                        <label for="tipo">Tipo de carga</label>
                        <select id="tipo" name="tipo">
                            <option value="1">Carga general</option>
                            <option value="1.25">Contenedorizada</option>
                            <option value="1.4">Mercancía especial</option>
                        </select>
                    </div>
                    <div class="field">
                        <label for="distancia">Distancia estimada (km)</label>
                        <input type="number" id="distancia" name="distancia" min="10" value="120">
                    </div>
                    <div class="field">
                        <label for="urgencia">Prioridad</label>
                        <select id="urgencia" name="urgencia">
                            <option value="1">Estándar</option>
                            <option value="1.2">Express</option>
                        </select>
                    </div>
                    <button class="btn" type="submit">Calcular estimación</button>
                    <p class="resultado" id="resultado">Estimación sugerida: Q 0.00</p>
                </form>
            </article>
        </section>

        <section class="glass cta">
            <h2>¿Deseas una propuesta formal para tu operación?</h2>
            <p>Podemos convertir esta simulación en un plan real con alcance, tiempos y SLA de servicio.</p>
            <a href="{{ route('home') }}#contacto">Solicitar asesoría</a>
        </section>
    </main>

    <script>
        const form = document.getElementById('quoteForm');
        const resultado = document.getElementById('resultado');

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            const tipo = Number(document.getElementById('tipo').value);
            const distancia = Number(document.getElementById('distancia').value || 0);
            const urgencia = Number(document.getElementById('urgencia').value);

            const tarifaBase = 6.75;
            const estimacion = distancia * tarifaBase * tipo * urgencia;

            resultado.textContent = `Estimación sugerida: Q ${estimacion.toFixed(2)} (referencial)`;
        });
    </script>
</body>

</html>
