<!DOCTYPE html>
<html lang="en">
<head>
    <title>Website An Garage </title>
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
            <li><a href="destinasi.php">Style</a></li>
            <li><a href="culinery.php">Basic</a></li>
            <li><a href="Budaya.php">Berita</a></li>
            <li><a href="kontak1.php">Kontak</a></li>
        </ul>
        <!-- Logout Button -->
        <div class="logout-container">
            <a href="login2.php" class="logout">Logout</a>
        </div>
    </nav>
    
    <!-- Gambar di bawah navbar -->
    <div class="hero-image-container" style="position: relative; overflow: hidden; height: 500px;">
        <video autoplay muted loop playsinline
               style="width: 100%; height: 100%; object-fit: cover;">
            <source src="gambar/Custom3.mp4" type="video/mp4" />
            Browser Anda tidak mendukung pemutaran video.
        </video>
        <div class="hero-text"
             style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
                    color: yellow; font-size: 7.5em; z-index: 2; font-weight: bold;">
            Berita An Garage
        </div>
    </div>
    
    <div class="batas">
    </div>

    <div class="date-time-container">
        <div class="date-display">Tanggal</div>
        <div class="time-display">Jam</div>
    </div>

    <main>
        <section class="tempat-hits">
                <div class="tempat-hits-item">
                    <h3>Pemerintah Resmikan Aturan Legal untuk Motor Custom</h3>
                    <img src="gambar/news1.jpg" alt="Tempat Hits 1">
                    <a href="budayabali.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Totalitas Queenlekha Choppers dan Aerodynomite di Kustomfest 2024</h3>
                    <img src="gambar/news2.jpg" alt="Tempat Hits 1">
                    <a href="alat.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
                <div class="tempat-hits-item">
                    <h3>Katros Garage Jualan Motor Custom, Dibanderol Rp 20 Jutaan</h3>
                    <img src="gambar/news3.jpg" alt="Tempat Hits 1">
                    <a href="seni.php" class="button-link">
                        <button>Detail</button>
                    </a>
                </div>
        </section>  
    </main>

    <!-- Footer -->
    <div class ="foter" >
    <p>&copy; 2025 Farhan Febrianto</p>
    </div>

    <script src="script.js"></script>
</body>
</html>
