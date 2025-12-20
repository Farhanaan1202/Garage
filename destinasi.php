<!DOCTYPE html>
<html lang="en">
<head>
    <title>An Garage Website</title>
    <link rel="stylesheet" href="destinasi.css">
    <link rel="icon" href="gambar/logo web.jpg">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo-container">
            <img src="gambar/skeleton.jpg" alt="Logo skeleton" class="logo" />
        </div>
        <ul>
            <li><a href="index1.php">Home</a></li>
            <li><a href="destinasi.php">Style </a></li>
            <li><a href="culinery.php">Basic</a></li>
            <li><a href="Budaya.php">Berita</a></li>
            <li><a href="kontak1.php">Kontak</a></li>
        </ul>
        <!-- Logout Button -->
        <div class="logout-container">
            <a href="login2.php" class="logout">Logout</a>
        </div>
    </nav>
    <div class="hero-image-container" style="position: relative; overflow: hidden; height: 500px;">
        <video autoplay muted loop playsinline
               style="width: 100%; height: 100%; object-fit: cover;">
            <source src="gambar/mtrcstm2.mp4" type="video/mp4" />
            Browser Anda tidak mendukung pemutaran video.
        </video>
        <div class="hero-text"
             style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
                    color: yellow; font-size: 8.5em; z-index: 2; font-weight: bold;">
            Beragam Macam Style
        </div>
    </div>
    <div class="date-time-container">
        <div class="date-display">Tanggal</div>
        <div class="time-display">Jam</div>
    </div>
   </div>
<audio id="bgmusic" loop>
    <source src="gambar/lagu.mp3" type="audio/mpeg">
    Browser Anda tidak mendukung pemutaran audio.
</audio>

    <main>
        <section class="tempat-hits">
            <h2></h2>
            <div class="tempat-hits-container">
                <div class="tempat-hits-item">
                    <h3>Chopper</h3>
                    <img src="gambar/chopper.jpg" alt="Tempat Hits 1">
                    <a href="PantaiKuta.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Cafe Racer</h3>
                    <img src="gambar/caferacer.jpg" alt="Tempat Hits 1">
                    <a href="nusa.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>British Style</h3>
                    <img src="gambar/british.jpg" alt="Tempat Hits 1">
                    <a href="TanahLot.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Scrambler</h3>
                    <img src="gambar/scrambler.jpg" alt="Tempat Hits 1">
                    <a href="club.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Street Cub</h3>
                    <img src="gambar/streetcub.jpg" alt="Tempat Hits 1">
                    <a href="desa.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Bobber</h3>
                    <img src="gambar/bobber.jpg" alt="Tempat Hits 1">
                    <a href="gunung.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Tracker</h3>
                    <img src="gambar/tracker.jpg" alt="Tempat Hits 1">
                    <a href="grd.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Bratstyle</h3>
                    <img src="gambar/bratstyle.jpg" alt="Tempat Hits 1">
                    <a href="la.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Japstyle</h3>
                    <img src="gambar/japstyle.jpg" alt="Tempat Hits 1">
                    <a href="pura.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
        
            </div> 
        </section>  
    </main>

    </div>

    <!-- Footer -->
    <div class ="foter" >
    <p>&copy; 2025 Farhan Febriatno.</p>
    </div>

    <script src="script.js"></script>
</body>
</html>
