<?php session_start();
if(!$_SESSION){
 $_SESSION["tipo"]=0;}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>La Jose en Red - Construyendo Tejido Social</title>
    <link rel="icon" href="img/favicon.ico">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Institución Educativa" name="keywords">
    <meta content="La Jose en Red" name="description">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'><link rel="stylesheet" href="./style.css">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
        <style>
        :root {
            --primary-blue: #1122e4;
            --primary-red: #f90418;
            --primary-green: #06A77D;
            --primary-yellow: #f4ef61;
            --dark-navy: #1A1F3A;
            --light-bg: #F8F9FA;
            --white: #FFFFFF;
            --shadow: rgba(0, 0, 0, 0.1);
        }

        .hero {
            background: var(--white);
            border-radius: 30px;
            padding: 3rem;
            margin-bottom: 3rem;
            box-shadow: 0 15px 40px var(--shadow);
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 25%;
            background: radial-gradient(circle, var(--primary-yellow) 0%, transparent 70%);
            opacity: 0.15;
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .hero h2 {
            font-family: 'Righteous', cursive;
            font-size: 3rem;
            color: var(--primary-blue);
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.3rem;
            color: var(--dark-navy);
            opacity: 0.8;
            line-height: 1.6;
            max-width: 100%;
        }

        /* Live Section */
        .live-section {
            background: linear-gradient(135deg, var(--primary-yellow), var(--primary-red));
            border-radius: 30px;
            padding: 2.5rem;
            margin-bottom: 3rem;
            box-shadow: 0 20px 60px var(--shadow);
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .live-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--white);
            color: var(--primary-red);
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            animation: blink 2s infinite;
        }

        @keyframes blink {
            0%, 50%, 100% { opacity: 1; }
            25%, 75% { opacity: 0.7; }
        }

        .live-badge::before {
            content: '●';
            font-size: 1.5rem;
            animation: pulse-dot 1.5s infinite;
        }

        @keyframes pulse-dot {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.3); opacity: 0.7; }
        }

        .live-section h3 {
            font-family: 'Righteous', cursive;
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .live-section p {
            font-size: 1.1rem;
            opacity: 0.95;
            margin-bottom: 1.5rem;
        }

        .video-placeholder {
            background: rgba(0, 0, 0, 0.2);
            border-radius: 20px;
            padding: 3rem;
            text-align: center;
            border: 3px dashed rgba(255, 255, 255, 0.3);
        }

        .video-placeholder p {
            font-size: 1.2rem;
            margin: 0;
        }

        /* Podcast Grid */
        .section-title {
            font-family: 'Righteous', cursive;
            font-size: 2.5rem;
            color: var(--primary-blue);
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 100px;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-red), var(--primary-yellow));
            margin: 1rem auto 0;
            border-radius: 10px;
        }

        .podcast-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .podcast-card {
            background: var(--white);
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 10px 40px var(--shadow);
            transition: all 0.4s ease;
            position: relative;
        }

        .podcast-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
        }

        .card-color-bar {
            height: 8px;
            background: linear-gradient(90deg, var(--primary-blue), var(--primary-red), var(--primary-green), var(--primary-yellow));
        }

        .card-content {
            padding: 2rem;
        }

        .card-date {
            display: inline-block;
            background: var(--primary-green);
            color: var(--white);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .card-title {
            font-family: 'Righteous', cursive;
            font-size: 1.5rem;
            color: var(--dark-navy);
            margin-bottom: 1rem;
        }

        .card-description {
            color: var(--dark-navy);
            opacity: 0.7;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .panel-section {
            margin-bottom: 1.5rem;
        }

        .panel-section h4 {
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 0.8rem;
            font-size: 1.1rem;
        }

        .panel-list {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .panel-member {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            padding: 0.5rem;
            background: var(--light-bg);
            border-radius: 15px;
        }

        .panel-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-blue), var(--primary-green));
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 700;
        }

        .card-actions {
            display: flex;
            gap: 1rem;
        }

        .btn {
            flex: 1;
            padding: 0.9rem;
            border: none;
            border-radius: 15px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-blue), var(--primary-red));
            color: var(--white);
        }

        .btn-primary:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary {
            background: var(--light-bg);
            color: var(--dark-navy);
            border: 2px solid var(--primary-yellow);
        }

        .btn-secondary:hover {
            background: var(--primary-yellow);
            transform: scale(1.05);
        }

        /* Admin Panel */
        .admin-panel {
            background: var(--white);
            border-radius: 30px;
            padding: 3rem;
            box-shadow: 0 20px 60px var(--shadow);
            margin-bottom: 3rem;
        }

        .admin-panel h3 {
            font-family: 'Righteous', cursive;
            font-size: 2rem;
            color: var(--primary-blue);
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            font-weight: 700;
            color: var(--dark-navy);
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 1rem;
            border: 2px solid var(--light-bg);
            border-radius: 15px;
            font-family: 'DM Sans', sans-serif;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(0, 71, 171, 0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .panel-inputs {
            display: grid;
            gap: 1rem;
        }

        .panel-input-row {
            display: flex;
            gap: 1rem;
        }

        .panel-input-row input {
            flex: 1;
        }

        .btn-add-panel {
            background: var(--primary-green);
            color: var(--white);
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 0.5rem;
        }

        .btn-add-panel:hover {
            background: var(--primary-blue);
            transform: scale(1.05);
        }

        .btn-submit {
            background: linear-gradient(135deg, var(--primary-red), var(--primary-yellow));
            color: var(--white);
            padding: 1.2rem 3rem;
            border: none;
            border-radius: 25px;
            font-weight: 700;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 2rem;
        }

        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        /* Footer */
        footer {
            background: var(--dark-navy);
            color: var(--white);
            text-align: center;
            padding: 3rem 2rem;
            margin-top: 4rem;
        }

        footer p {
            opacity: 0.8;
            font-size: 1.1rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header-content {
                justify-content: center;
                text-align: center;
            }

            .logo-section {
                flex-direction: column;
            }

            .title-section h1 {
                font-size: 2rem;
            }

            .hero h2 {
                font-size: 2rem;
            }

            .podcast-grid {
                grid-template-columns: 1fr;
            }

            .panel-input-row {
                flex-direction: column;
            }
        }
        /* Toggle Admin Panel */
        .toggle-admin-btn {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-green), var(--primary-blue));
            color: var(--white);
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            z-index: 100;
            transition: all 0.3s ease;
        }

        .toggle-admin-btn:hover {
            transform: scale(1.1) rotate(90deg);
        }

        .admin-panel.hidden {
            display: none;
        }
    </style>
</head>
<body>
    <?php include 'menu.php'; ?> 
    <br>
    <div class="marconosotros">
             <center>  <img src="img/logosf.png"><br><div class="w2"><i>Construyendo Tejido Social</i>
                <br><br>Próximamente Podcast y Foros sobre temas de tu interés en esta sección, La Jose en Red es una red de estudiantes al servicio de la comunidad que busca abrir espacios de dialogo en los que se puedan tratar temas seleccionados por los estudiantes, en esta sección podrás participar y hasta dirigir Podcast y Foros de Discusión.
             </div></center> <br>
   
    </div>
    <br> <div class="container">
        <!-- Hero Section -->
        <section class="hero">
            <h2>Un espacio para escuchar, debatir y construir juntos.</h2>
            <p>
                'La Jose en Red' es nuestro proyecto institucional que busca construir tejido social fortaleciendo el dialogo comunitario, la participación de los estudiantes y egresados mediante de Podcast, Foros de discusión y Redes sociales donde los estudiantes 
                son los protagonistas. Cada episodio del podcast aborda temas sociales relevantes para nuestra actualidad 
                con paneles de tres estudiantes preparados en los temas a tratar, mientras desde clase participan sus compañeros como audiencia 
                activa en vivo por nuestro canal institucional La Jose TV enlazado a nuestro dominio 'yosoydelajosemiguel.edu.co'.
            </p>
        </section>

        <!-- Live Section -->
        <section class="live-section">
            <div class="live-badge">
                EN VIVO AHORA
            </div>
            <h3>🔴 Transmisión en directo</h3>
            <p>Sintoniza ahora para participar en la discusión desde tu clase</p>
            <div class="video-placeholder">
                <p>📡 Embed de YouTube se mostrará aquí cuando haya transmisión en vivo</p>
            </div>
        </section>

        <!-- Upcoming Episodes -->
        <h2 class="section-title">Próximos Episodios</h2>
        <div class="podcast-grid">
            <!-- Episode 1 -->
            <article class="podcast-card">
                <div class="card-color-bar"></div>
                <div class="card-content">
                    <span class="card-date">📅 24 de Febrero, 2026</span>
                    <h3 class="card-title">Redes Sociales y Salud Mental</h3>
                    <p class="card-description">
                        ¿Cómo afectan las redes sociales nuestra salud mental? Un panel de estudiantes 
                        explorará los efectos positivos y negativos del mundo digital en nuestro bienestar.
                    </p>
                    <div class="panel-section">
                        <h4>Panel de Estudiantes:</h4>
                        <div class="panel-list">
                            <div class="panel-member">
                                <div class="panel-avatar">SA</div>
                                <span>Invitado 1 - Grado 7°2</span>
                            </div>
                            <div class="panel-member">
                                <div class="panel-avatar">JM</div>
                                <span>Invitado 2 - Grado 7°2</span>
                            </div>
                            <div class="panel-member">
                                <div class="panel-avatar">MR</div>
                                <span>Invitado 1 - Grado 7°2</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-actions">
                        <a href="#" class="btn btn-primary">Ver Detalles</a>
                        <a href="#" class="btn btn-secondary">Participar</a>
                    </div>
                </div>
            </article>

            <!-- Episode 2 -->
            <article class="podcast-card">
                <div class="card-color-bar"></div>
                <div class="card-content">
                    <span class="card-date">📅 10 de Marzo, 2026</span>
                    <h3 class="card-title">Cambio Climático: ¿Qué podemos hacer?</h3>
                    <p class="card-description">
                        El cambio climático es real y nos afecta a todos. Conversaremos sobre acciones 
                        concretas que podemos tomar como estudiantes y comunidad educativa.
                    </p>
                    <div class="panel-section">
                        <h4>Panel de Estudiantes:</h4>
                        <div class="panel-list">
                            <div class="panel-member">
                                <div class="panel-avatar">CP</div>
                                <span>Invitado 1 - Grado 7°3</span>
                            </div>
                            <div class="panel-member">
                                <div class="panel-avatar">LG</div>
                                <span>Invitado 1 - Grado 7°3</span>
                            </div>
                            <div class="panel-member">
                                <div class="panel-avatar">DT</div>
                                <span>Invitado 1 - Grado 7°3</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-actions">
                        <a href="#" class="btn btn-primary">Ver Detalles</a>
                        <a href="#" class="btn btn-secondary">Participar</a>
                    </div>
                </div>
            </article>

            <!-- Episode 3 -->
            <article class="podcast-card">
                <div class="card-color-bar"></div>
                <div class="card-content">
                    <span class="card-date">📅 17 de Marzo, 2026</span>
                    <h3 class="card-title">Diversidad e Inclusión en la Escuela</h3>
                    <p class="card-description">
                        Celebramos la diversidad y hablamos sobre cómo crear espacios más inclusivos 
                        donde todos los estudiantes se sientan valorados y respetados.
                    </p>
                    <div class="panel-section">
                        <h4>Panel de Estudiantes:</h4>
                        <div class="panel-list">
                            <div class="panel-member">
                                <div class="panel-avatar">AM</div>
                                <span>Invitado 1 - Grado 7°5</span>
                            </div>
                            <div class="panel-member">
                                <div class="panel-avatar">RS</div>
                                <span>Invitado 1 - Grado 7°5</span>
                            </div>
                            <div class="panel-member">
                                <div class="panel-avatar">VL</div>
                                <span>Invitado 1 - Grado 7°5</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-actions">
                        <a href="#" class="btn btn-primary">Ver Detalles</a>
                        <a href="#" class="btn btn-secondary">Participar</a>
                    </div>
                </div>
            </article>
        </div>

        <!-- Past Episodes -->
        <h2 class="section-title">Episodios Anteriores</h2>
        <div class="podcast-grid">
            <article class="podcast-card">
                <div class="card-color-bar"></div>
                <div class="card-content">
                    <span class="card-date">📅 13 de Febrero, 2026</span>
                    <h3 class="card-title">El Futuro de la Educación Digital</h3>
                    <p class="card-description">
                        Exploramos cómo la tecnología está transformando la educación y qué habilidades 
                        necesitaremos para el futuro del trabajo.
                    </p>
                    <div class="card-actions">
                        <a href="#" class="btn btn-primary">Ver Grabación</a>
                        <a href="#" class="btn btn-secondary">Comentarios</a>
                    </div>
                </div>
            </article>

            <article class="podcast-card">
                <div class="card-color-bar"></div>
                <div class="card-content">
                    <span class="card-date">📅 6 de Febrero, 2026</span>
                    <h3 class="card-title">Identidad y Cultura Juvenil</h3>
                    <p class="card-description">
                        Una conversación sobre cómo construimos nuestra identidad en un mundo globalizado, 
                        entre tradiciones locales e influencias globales.
                    </p>
                    <div class="card-actions">
                        <a href="#" class="btn btn-primary">Ver Grabación</a>
                        <a href="#" class="btn btn-secondary">Comentarios</a>
                    </div>
                </div>
            </article>
        </div>

        <!-- Admin Panel -->
        <section class="admin-panel hidden" id="adminPanel">
            <h3>🎛️ Panel de Administración</h3>
            <form id="podcastForm">
                <div class="form-group">
                    <label for="episodeTitle">Título del Episodio:</label>
                    <input type="text" id="episodeTitle" placeholder="Ej: Redes Sociales y Salud Mental" required>
                </div>

                <div class="form-group">
                    <label for="episodeDate">Fecha:</label>
                    <input type="date" id="episodeDate" required>
                </div>

                <div class="form-group">
                    <label for="episodeDescription">Descripción:</label>
                    <textarea id="episodeDescription" placeholder="Describe de qué tratará este episodio..." required></textarea>
                </div>

                <div class="form-group">
                    <label>Panel de Estudiantes (3 participantes):</label>
                    <div class="panel-inputs">
                        <div class="panel-input-row">
                            <input type="text" placeholder="Nombre completo" required>
                            <input type="text" placeholder="Grado" required>
                        </div>
                        <div class="panel-input-row">
                            <input type="text" placeholder="Nombre completo" required>
                            <input type="text" placeholder="Grado" required>
                        </div>
                        <div class="panel-input-row">
                            <input type="text" placeholder="Nombre completo" required>
                            <input type="text" placeholder="Grado" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="youtubeLink">Enlace de YouTube (opcional):</label>
                    <input type="url" id="youtubeLink" placeholder="https://youtube.com/...">
                </div>

                <div class="form-group">
                    <label for="episodeStatus">Estado:</label>
                    <select id="episodeStatus" required>
                        <option value="upcoming">Próximo episodio</option>
                        <option value="live">En vivo ahora</option>
                        <option value="past">Episodio pasado</option>
                    </select>
                </div>

                <button type="submit" class="btn-submit">Publicar Episodio</button>
            </form>
        </section>
    </div>
<br> <?php include 'footer.php'; ?> 
    <script>
        function toggleAdmin() {
            const adminPanel = document.getElementById('adminPanel');
            adminPanel.classList.toggle('hidden');
            
            // Scroll to admin panel if showing
            if (!adminPanel.classList.contains('hidden')) {
                adminPanel.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }

        // Form submission handler
        document.getElementById('podcastForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('¡Episodio publicado exitosamente! 🎉\n\nEn una implementación real, esto guardaría los datos en una base de datos.');
            this.reset();
        });

        // Add smooth scroll behavior
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>
</html>