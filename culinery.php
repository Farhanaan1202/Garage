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
            <source src="gambar/custom2.mp4" type="video/mp4" />
            Browser Anda tidak mendukung pemutaran video.
        </video>
        <div class="hero-text"
             style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
                    color: yellow; font-size: 8.5em; z-index: 2; font-weight: bold;">
            Beberapa Basic Yang DiGunakan
        </div>
    </div>
    </div>
<audio id="bgmusic" loop>
    <source src="gambar/lagu.mp3" type="audio/mpeg">
    Browser Anda tidak mendukung pemutaran audio.
</audio>
    <div class="batas">
    </div>

    <div class="date-time-container">
        <div class="date-display">Tanggal</div>
        <div class="time-display">Jam</div>
    </div>

    <div class="content">
    <!-- Beberapa Wisata di Bali -->
    <div class="info-section">
        <div class="info-text">
            <h2>Yamaha SR400</h2>
            <p>
            Desain klasik dari sananya: SR400 punya tampilan retro klasik dengan mesin exposed (terbuka), bentuk tanki membulat, dan frame yang elegan.

Mesin sederhana: Mesin single-cylinder 400cc, 4-tak, karburator/manual kick starter (versi lama), gampang dipelihara dan modif.

Rangka ideal: Frame SR400 berbentuk cradle, sangat mudah dipakai untuk custom cafe racer, bratstyle, chopper, bahkan bobber.

Kualitas premium: Meskipun sederhana, Yamaha membangun SR400 dengan kualitas material sangat baik — mesin kuat, rangka presisi.

Nilai kolektor tinggi: Setelah di-custom, SR400 tetap punya nilai jual yang bagus, bahkan sering dicari di pasar motor custom internasional.
            </p>
        </div>
        <div class="info-image">
            <img src="gambar/sr400.jpg" alt="SR400">
        </div>
    </div>

    <div class="info-section reverse">
        <div class="info-image">
            <img src="gambar/scorpio.jpg" alt="Ubud">
        </div>
        <div class="info-text">
            <h2>Yamaha Scorpio</h2>
            <p>
            Mesin tangguh: 225cc, 4-tak, torsi besar, terkenal kuat dan awet. Cocok buat motor custom yang tetap nyaman dipakai harian atau touring.

Rangka sederhana: Model rangka Scorpio cukup simpel dan kuat, mudah diubah untuk gaya tracker, scrambler, flat tracker, bahkan bratstyle.

Bobot ringan: Scorpio relatif ringan (sekitar 125 kg), setelah di-custom bisa makin enteng dan gesit.

Harga bekas terjangkau: Scorpio bekas sekarang harganya cukup murah, jadi ideal untuk dijadikan bahan custom tanpa bikin kantong bolong.

Sparepart banyak: Komunitas Scorpio juga besar, sparepart mesin dan body banyak tersedia.
            </p>
        </div>
    </div>

    <div class="info-section">
        <div class="info-text">
            <h2>Suzuki Thunder 250cc/GSX 250</h2>
            <p>
            Mesin 250cc yang smooth dan bertenaga, cocok untuk custom tracker atau scrambler.

Frame relatif lurus dan kokoh, memudahkan dalam desain ulang bodi.

Tampilannya cukup netral, jadi bisa dikembangkan ke banyak gaya custom.


            </p>
        </div>
        <div class="info-image">
            <img src="gambar/thunder.jpg" alt="Kuta Beach">
        </div>
    </div>

    <div class="info-section reverse">
        <div class="info-image">
            <img src="gambar/gl.jpg" alt="Nusa Penida">
        </div>
        <div class="info-text">
            <h2>Honda GL Series (GL100, GL125, GL Pro, GL Max)</h2>
            <p>
            Rangka backbone kuat, cocok untuk konsep chopper, bobber, atau cafe racer.

Mesin 4-tak sederhana, gampang diperbaiki dan tahan banting.

Banyak komunitas dan bengkel spesialis GL, sehingga modifikasi dan parts lebih mudah didapat.


            </p>
        </div>
    </div>
    <div class="pagination">
        <a href="culinery.php" class="page-number active">1</a>
        <a href="culinery2.php" class="page-number">2</a>
    </div>

    </div>

    <!-- Footer -->
    <div class ="foter" >
    <p>&copy; 2025 Farhan Febrianto.</p>
    </div>

    <script src="script.js"></script>
</body>
</html>
