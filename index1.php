<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>An Garage Website</title>
    <link rel="stylesheet" href="dex1.css" />
    <link rel="icon" href="gambar/logo web.jpg" />
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
            <a href="logout.php" class="logout">Logout</a>
        </div>
    </nav>

    <!-- Hero Section with Video -->
    <div class="hero-image-container" style="position: relative; overflow: hidden; height: 500px;">
        <video autoplay muted loop playsinline
               style="width: 100%; height: 100%; object-fit: cover;">
            <source src="gambar/mtrcstm.mp4" type="video/mp4" />
            Browser Anda tidak mendukung pemutaran video.
        </video>
        <div class="hero-text"
             style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
                    color: yellow; font-size: 8.5em; z-index: 2; font-weight: bold;">
            An Garage Website 
        </div>
    </div>
<audio id="bgmusic" loop>
    <source src="gambar/lagu.mp3" type="audio/mpeg">
    Browser Anda tidak mendukung pemutaran audio.
</audio>

<script>
    document.addEventListener("click", function () {
        const music = document.getElementById("bgmusic");
        if (music.paused) {
            music.play().catch(error => {
                console.log("Gagal memutar musik:", error);
            });
        }
    });
</script>
    <!-- Batas section (jika ada isi, jangan kosong div) -->
    <div class="batas"></div>

    <!-- Date and Time -->
    <div class="date-time-container">
        <div class="date-display">Tanggal</div>
        <div class="time-display">Jam</div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="text-and-image">
            <img src="gambar/home.jpg" alt="Pura Bali" />
            <div>
                <h2>AN Garage</h2>
                <p>
                    Salah satu bengkel modifikasi motor terbaik. Berkantor pusat di Tangerang, bengkel mereka menangani modifikasi motor dalam berbagai gaya seperti Cafe Racer, Scrambler, Bobber, Brat, Street Tracker, dan masih banyak lagi. Fran Manen dan tim mekaniknya merupakan spesialis Harley-Davidson, serta BMW, Yamaha, Triumph, Ducati, dan berbagai model lainnya.
                    <p>
                    Selain itu, ia telah meraih berbagai penghargaan di festival modifikasi di seluruh dunia. Prestisenya yang tinggi telah membuat motor modifikasinya muncul di berbagai publikasi, baik cetak maupun digital, di seluruh dunia. Jika Anda ingin memiliki Cafe Racer, Scrambler, atau gaya unik lainnya, Anda telah datang ke tempat yang tepat.<p></p> Kami akan mewujudkan impian Anda!
                </p>
                <p>
                </p> 
            </div>
        </div>

        <div class="image" style="display: flex; flex-direction: column; align-items: center;">
            <h2>Berkunjunglah Kemarih</h2>
            <p>
                Ingin merakit motor impian Anda? Kunjungi bengkel kami dan jelajahi seni kustomisasi motor! 
                <p>
                Dari nuansa vintage hingga modern — kami punya peralatan, tim, dan semangat untuk menjadikan motor Anda istimewa. Sampai jumpa di jalan, rider!
            </p>
        </div>

        <div class="most-popular">
            <h2>Beberapa Type Motor Custom</h2>
            <div class="popular-images">
                <div class="popular-item">
                    <a href="TanahLot.php" target="_blank">
                        <img src="gambar/british.jpg" alt="Tanah Lot" />
                        <p>British Style</p>
                    </a>
                </div>
                <div class="popular-item">
                    <a href="pura.php" target="_blank">
                        <img src="gambar/japstyle.jpg" alt="Ubud" />
                        <p>Japstyle</p>
                    </a>
                </div>
                <div class="popular-item">
                    <a href="PantaiKuta.php" target="_blank">
                        <img src="gambar/chopper.jpg" alt="Chopper" />
                        <p>Chopper</p>
                    </a>
                </div>
                <div class="popular-item">
                    <a href="nusa.php" target="_blank">
                        <img src="gambar/caferacer.jpg" alt="Nusa Penida" />
                        <p>Cafe Racer</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Farhan Febrianto</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
