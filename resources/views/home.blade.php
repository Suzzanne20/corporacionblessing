M resources/views/welcome.blade.php
1	<!DOCTYPE html>
     2	<html lang="es">
     3	
     4	<head>
     5	    <meta charset="UTF-8">
     6	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     7	    <title>Corporación Blessing | Información Corporativa</title>
     8	    <link rel="preconnect" href="https://fonts.googleapis.com">
     9	    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    10	    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    11	    <style>
    12	        :root {
    13	            --bg: #f4f7ff;
    14	            --surface: rgba(255, 255, 255, 0.86);
    15	            --primary: #1f5fff;
    16	            --primary-dark: #163c9b;
    17	            --accent: #22c3a6;
    18	            --text: #0f172a;
    19	            --muted: #475569;
    20	            --shadow: 0 20px 45px rgba(15, 23, 42, 0.14);
    21	            --radius: 22px;
    22	        }
    23	
    24	        * {
    25	            box-sizing: border-box;
    26	            margin: 0;
    27	            padding: 0;
    28	        }
    29	
    30	        html {
    31	            scroll-behavior: smooth;
    32	        }
    33	
    34	        body {
    35	            font-family: "Manrope", sans-serif;
    36	            color: var(--text);
    37	            background:
    38	                radial-gradient(circle at 5% 5%, rgba(34, 195, 166, 0.2) 0%, transparent 30%),
    39	                radial-gradient(circle at 90% 10%, rgba(31, 95, 255, 0.28) 0%, transparent 28%),
    40	                linear-gradient(140deg, #f9fbff 0%, #f2f6ff 50%, #edf4ff 100%);
    41	            min-height: 100vh;
    42	            line-height: 1.65;
    43	        }
    44	
    45	        a {
    46	            color: inherit;
    47	            text-decoration: none;
    48	        }
    49	
    50	        .container {
    51	            width: min(1120px, 92%);
    52	            margin: 0 auto;
    53	        }
    54	
    55	        .glass {
    56	            background: var(--surface);
    57	            border: 1px solid rgba(255, 255, 255, 0.7);
    58	            backdrop-filter: blur(10px);
    59	            box-shadow: var(--shadow);
    60	            border-radius: var(--radius);
    61	        }
    62	
    63	        .topbar {
    64	            position: sticky;
    65	            top: 14px;
    66	            z-index: 15;
    67	            margin-top: 18px;
    68	            padding: 0.9rem 1.1rem;
    69	            display: flex;
    70	            justify-content: space-between;
    71	            align-items: center;
    72	            gap: 1rem;
    73	        }
    74	
    75	        .brand {
    76	            font-size: 1rem;
    77	            font-weight: 800;
    78	            letter-spacing: 0.04em;
    79	            color: var(--primary-dark);
    80	            text-transform: uppercase;
    81	        }
    82	
    83	        .nav {
    84	            display: flex;
    85	            flex-wrap: wrap;
    86	            justify-content: flex-end;
    87	            gap: 0.4rem;
    88	        }
    89	
    90	        .nav a {
    91	            font-size: 0.9rem;
    92	            font-weight: 600;
    93	            color: var(--muted);
    94	            padding: 0.45rem 0.8rem;
    95	            border-radius: 999px;
    96	            transition: all 0.25s ease;
    97	        }
    98	
    99	        .nav a:hover {
   100	            color: var(--primary-dark);
   101	            background-color: rgba(31, 95, 255, 0.1);
   102	        }
   103	
   104	        .hero {
   105	            padding: 5.5rem 0 2.5rem;
   106	            display: grid;
   107	            grid-template-columns: 1.3fr 1fr;
   108	            gap: 1.4rem;
   109	            align-items: stretch;
   110	        }
   111	
   112	        .hero-main,
   113	        .hero-side {
   114	            padding: clamp(1.6rem, 2.8vw, 2.4rem);
   115	        }
   116	
   117	        .eyebrow {
   118	            display: inline-flex;
   119	            align-items: center;
   120	            gap: 0.45rem;
   121	            background: rgba(31, 95, 255, 0.12);
   122	            color: var(--primary-dark);
   123	            font-size: 0.78rem;
   124	            font-weight: 700;
   125	            letter-spacing: 0.04em;
   126	            text-transform: uppercase;
   127	            border-radius: 999px;
   128	            padding: 0.4rem 0.75rem;
   129	            margin-bottom: 1.15rem;
   130	        }
   131	
   132	        h1 {
   133	            font-size: clamp(2rem, 4vw, 3.3rem);
   134	            line-height: 1.14;
   135	            margin-bottom: 1rem;
   136	            color: #0b1d4f;
   137	        }
   138	
   139	        .hero p {
   140	            color: var(--muted);
   141	            margin-bottom: 1.35rem;
   142	            max-width: 60ch;
   143	        }
   144	
   145	        .hero-actions {
   146	            display: flex;
   147	            flex-wrap: wrap;
   148	            gap: 0.7rem;
   149	        }
   150	
   151	        .btn {
   152	            display: inline-flex;
   153	            align-items: center;
   154	            justify-content: center;
   155	            padding: 0.72rem 1.18rem;
   156	            border-radius: 12px;
   157	            font-weight: 700;
   158	            border: none;
   159	            transition: transform .2s ease, box-shadow .2s ease;
   160	        }
   161	
   162	        .btn-primary {
   163	            background: linear-gradient(135deg, #1f5fff 0%, #2453d5 100%);
   164	            color: #fff;
   165	            box-shadow: 0 14px 26px rgba(31, 95, 255, 0.3);
   166	        }
   167	
   168	        .btn-secondary {
   169	            background: #fff;
   170	            color: var(--primary-dark);
   171	            border: 1px solid rgba(31, 95, 255, 0.2);
   172	        }
   173	
   174	        .btn:hover {
   175	            transform: translateY(-2px);
   176	        }
   177	
   178	        .hero-side {
   179	            display: grid;
   180	            gap: 0.8rem;
   181	            align-content: start;
   182	            background: linear-gradient(180deg, #1f5fff 0%, #163c9b 100%);
   183	            color: #fff;
   184	        }
   185	
   186	        .stats {
   187	            display: grid;
   188	            grid-template-columns: repeat(2, minmax(0, 1fr));
   189	            gap: 0.65rem;
   190	        }
   191	
   192	        .stat-card {
   193	            background: rgba(255, 255, 255, 0.14);
   194	            border-radius: 14px;
   195	            padding: 0.9rem;
   196	            border: 1px solid rgba(255, 255, 255, 0.2);
   197	        }
   198	
   199	        .stat-card h3 {
   200	            font-size: 1.4rem;
   201	            margin-bottom: 0.15rem;
   202	        }
   203	
   204	        .section {
   205	            padding: 1.4rem 0;
   206	        }
   207	
   208	        .section-title {
   209	            margin-bottom: 1rem;
   210	            font-size: clamp(1.35rem, 2.3vw, 2rem);
   211	            color: #10235a;
   212	        }
   213	
   214	        .cards-2 {
   215	            display: grid;
   216	            grid-template-columns: repeat(2, minmax(0, 1fr));
   217	            gap: 1rem;
   218	        }
   219	
   220	        .card {
   221	            padding: 1.5rem;
   222	        }
   223	
   224	        .card h3 {
   225	            color: var(--primary-dark);
   226	            margin-bottom: 0.6rem;
   227	            font-size: 1.15rem;
   228	        }
   229	
   230	        .gallery {
   231	            display: grid;
   232	            grid-template-columns: repeat(12, minmax(0, 1fr));
   233	            gap: 0.75rem;
   234	        }
   235	
   236	        .gallery-item {
   237	            position: relative;
   238	            border-radius: 16px;
   239	            overflow: hidden;
   240	            min-height: 170px;
   241	            border: 1px solid rgba(255, 255, 255, 0.8);
   242	            box-shadow: var(--shadow);
   243	        }
   244	
   245	        .gallery-item::before {
   246	            content: "";
   247	            position: absolute;
   248	            inset: 0;
   249	            background: linear-gradient(160deg, rgba(31, 95, 255, 0.85), rgba(34, 195, 166, 0.8));
   250	        }
   251	
   252	        .gallery-item::after {
   253	            content: attr(data-label);
   254	            position: absolute;
   255	            left: 1rem;
   256	            bottom: 1rem;
   257	            color: #fff;
   258	            font-weight: 700;
   259	            font-size: 0.95rem;
   260	            letter-spacing: 0.02em;
261	        }
   262	
   263	        .span-7 { grid-column: span 7; }
   264	        .span-5 { grid-column: span 5; }
   265	        .span-4 { grid-column: span 4; }
   266	
   267	        .location-wrap {
   268	            display: grid;
   269	            grid-template-columns: 1fr 1.3fr;
   270	            gap: 1rem;
   271	        }
   272	
   273	        .location-text,
   274	        .map {
   275	            padding: 1.2rem;
   276	        }
   277	
   278	        iframe {
   279	            width: 100%;
   280	            height: 300px;
   281	            border: 0;
   282	            border-radius: 14px;
   283	        }
   284	
   285	        .contact {
   286	            text-align: center;
   287	            padding: 2rem 1rem;
   288	            margin: 2rem 0 3rem;
   289	            background: linear-gradient(130deg, rgba(31, 95, 255, 0.98), rgba(18, 43, 115, 0.98));
   290	            color: #fff;
   291	        }
   292	
   293	        .contact p {
   294	            opacity: 0.9;
   295	            margin: 0.55rem auto 1rem;
   296	            max-width: 68ch;
   297	        }
   298	
   299	        .contact-list {
   300	            list-style: none;
   301	            display: flex;
   302	            flex-wrap: wrap;
   303	            justify-content: center;
   304	            gap: 0.8rem;
   305	            font-weight: 600;
   306	        }
   307	
   308	        footer {
   309	            text-align: center;
   310	            color: #64748b;
   311	            font-size: 0.88rem;
   312	            padding-bottom: 1.7rem;
   313	        }
   314	
   315	        @media (max-width: 960px) {
   316	            .hero {
   317	                grid-template-columns: 1fr;
   318	            }
   319	
   320	            .cards-2,
   321	            .location-wrap {
   322	                grid-template-columns: 1fr;
   323	            }
   324	        }
   325	
   326	        @media (max-width: 780px) {
   327	            .topbar {
   328	                position: static;
   329	                margin-top: 12px;
   330	            }
   331	
   332	            .nav {
   333	                justify-content: flex-start;
   334	            }
   335	
   336	            .gallery .span-7,
   337	            .gallery .span-5,
   338	            .gallery .span-4 {
   339	                grid-column: span 12;
   340	            }
   341	
   342	            .stats {
   343	                grid-template-columns: 1fr;
   344	            }
   345	
   346	            iframe {
   347	                height: 250px;
   348	            }
   349	        }
   350	    </style>
   351	</head>
   352	
   353	<body>
   354	    <header class="container glass topbar">
   355	        <a class="brand" href="#inicio">Corporación Blessing</a>
   356	        <nav class="nav">
   357	            <a href="#mision-vision">Misión & Visión</a>
   358	            <a href="#galeria">Galería</a>
   359	            <a href="#ubicacion">Ubicación</a>
   360	            <a href="#contacto">Contáctanos</a>
   361	        </nav>
   362	    </header>
   363	
   364	    <main class="container" id="inicio">
   365	        <section class="hero">
   366	            <article class="glass hero-main">
   367	                <span class="eyebrow">Excelencia empresarial</span>
   368	                <h1>Una presencia corporativa moderna, confiable y orientada al crecimiento.</h1>
   369	                <p>
   370	                    En Corporación Blessing impulsamos soluciones empresariales con enfoque humano y visión de futuro.
   371	                    Esta página presenta nuestra esencia: quiénes somos, hacia dónde vamos y cómo conectamos con clientes,
   372	                    aliados y comunidades.
   373	                </p>
   374	                <div class="hero-actions">
   375	                    <a class="btn btn-primary" href="#contacto">Hablar con nosotros</a>
   376	                    <a class="btn btn-secondary" href="#galeria">Ver galería</a>
   377	                </div>
   378	            </article>
   379	
   380	            <aside class="glass hero-side">
   381	                <h2>Nuestro impacto</h2>
   382	                <p>Compromiso permanente con innovación, eficiencia y calidad en cada proyecto.</p>
   383	                <div class="stats">
   384	                    <div class="stat-card">
   385	                        <h3>+10</h3>
   386	                        <p>Años de experiencia corporativa.</p>
   387	                    </div>
   388	                    <div class="stat-card">
   389	                        <h3>+120</h3>
   390	                        <p>Proyectos ejecutados con éxito.</p>
   391	                    </div>
   392	                    <div class="stat-card">
   393	                        <h3>24/7</h3>
   394	                        <p>Atención y acompañamiento.</p>
   395	                    </div>
   396	                    <div class="stat-card">
   397	                        <h3>100%</h3>
   398	                        <p>Enfoque en mejora continua.</p>
   399	                    </div>
   400	                </div>
   401	            </aside>
   402	        </section>
   403	
   404	        <section id="mision-vision" class="section">
   405	            <h2 class="section-title">Misión y visión</h2>
   406	            <div class="cards-2">
   407	                <article class="card glass">
   408	                    <h3>Misión</h3>
   409	                    <p>
   410	                        Ofrecer soluciones integrales que agreguen valor a nuestros clientes mediante procesos
   411	                        eficientes, innovación constante y un equipo comprometido con la excelencia.
   412	                    </p>
   413	                </article>
   414	                <article class="card glass">
   415	                    <h3>Visión</h3>
   416	                    <p>
   417	                        Ser una corporación referente en nuestro sector por la calidad de nuestros servicios,
   418	                        la confianza de nuestros aliados y el impacto positivo que generamos en la sociedad.
   419	                    </p>
   420	                </article>
   421	            </div>
   422	        </section>
   423	
   424	        <section id="galeria" class="section">
   425	            <h2 class="section-title">Galería corporativa</h2>
   426	            <div class="gallery">
   427	                <article class="gallery-item span-7" data-label="Operación estratégica"></article>
   428	                <article class="gallery-item span-5" data-label="Equipo profesional"></article>
   429	                <article class="gallery-item span-4" data-label="Innovación constante"></article>
   430	                <article class="gallery-item span-4" data-label="Gestión de proyectos"></article>
   431	                <article class="gallery-item span-4" data-label="Alianzas de valor"></article>
   432	            </div>
   433	        </section>
   434	
   435	        <section id="ubicacion" class="section">
   436	            <h2 class="section-title">Ubicación</h2>
   437	            <div class="location-wrap">
   438	                <article class="glass location-text">
   439	                    <h3>Corporación Blessing</h3>
   440	                    <p>Estamos ubicados estratégicamente para atender a nuestros clientes con cercanía y eficiencia.</p>
   441	                    <p><strong>Dirección:</strong> Bogotá, Colombia</p>
   442	                    <p><strong>Horario:</strong> Lunes a Viernes · 8:00 AM - 6:00 PM</p>
   443	                    <p><strong>Teléfono:</strong> +57 300 000 0000</p>
   444	                </article>
   445	                <article class="glass map">
   446	                    <iframe
   447	                        title="Mapa ubicación Corporación Blessing"
   448	                        loading="lazy"
   449	                        referrerpolicy="no-referrer-when-downgrade"
   450	                        src="https://www.google.com/maps?q=Bogota%20Colombia&output=embed">
   451	                    </iframe>
   452	                </article>
   453	            </div>
   454	        </section>
   455	
   456	        <section id="contacto" class="contact glass">
   457	            <h2 class="section-title" style="color:#fff; margin-bottom: 0;">Contáctanos</h2>
   458	            <p>Estamos listos para escuchar tus necesidades y construir soluciones a la medida de tu empresa.</p>
   459	            <ul class="contact-list">
   460	                <li>📞 +57 300 000 0000</li>
   461	                <li>✉️ contacto@corporacionblessing.com</li>
   462	                <li>📍 Bogotá, Colombia</li>
   463	            </ul>
   464	        </section>
   465	    </main>
   466	
   467	    <footer>
   468	        © {{ date('Y') }} Corporación Blessing. Todos los derechos reservados.
   469	    </footer>
   470	</body>
   471	
   472	</html>