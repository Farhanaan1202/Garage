
<!DOCTYPE html>
<html lang="en">
<head>
    <title>An Garage Website</title>
    <link rel="stylesheet" href="kontak11.css">
    <link rel="icon" href="gambar/logo web.jpg">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo-container">
            <img src="gambar/skeleton.jpg" alt="Logo skull" class="logo">
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
            <a href="login2" class="logout">Logout</a>
        </div>
    </nav>
    <!-- Hero Section with Video -->
    <div class="hero-image-container" style="position: relative; overflow: hidden; height: 500px;">
        <video autoplay muted loop playsinline
               style="width: 100%; height: 100%; object-fit: cover;">
            <source src="gambar/custom4.mp4" type="video/mp4" />
            Browser Anda tidak mendukung pemutaran video.
        </video>
        <div class="hero-text"
             style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
                    color: yellow; font-size: 8.5em; z-index: 2; font-weight: bold;">
            Kontak Owner
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


    <div class="contact-container">
        <div class="form-section">
            <h1>Order</h1>
            <form>
                <label for="email">Email</label><br/>
                <input type="email" name="email" placeholder="alamat email" required />
                <br/>
                <label for="message">Pesan</label><br/>
                <textarea name="message" placeholder="Tulis pesan anda...." rows="4" cols="50" required></textarea>
                <br/>
                <input type="submit" value="Kirim"/>
            </form>
        </div>
        <div class="info-section">
            <h1>Info Kontak</h1>
            <div class="contact-info">
                <img src="gambar/hp-removebg-preview.png" alt="Phone Icon" class="contact-icon">
                <p><strong>Telepon:</strong> (+62) 877-6321-8301</p>
            </div>
            <div class="contact-info">
                <img src="gambar/email-removebg-preview.png" alt="Email Icon" class="contact-icon">
                <p><strong>Email:</strong> febriantoadhari02@icloud.com</p>
            </div>
            <div class="contact-info">
                <img src="gambar/alamat-removebg-preview.png" alt="Address Icon" class="contact-icon">
                <p><strong>Alamat:</strong> Jl. Masjid Al-Ikhlas Pondok Betung</p>
            </div>
        </div>
    </div>

    <footer style="text-align: center;">
        <P>Copyright &copy; 2025 Farhan Febrianto</P>
    </footer>
    <script src="script.js"></script>
</body>
</html>
