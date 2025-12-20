<!DOCTYPE html>
<html lang="en">
<head>
    <title>Universitas Pamulang</title>
    <link rel="stylesheet" href="budd.css">
    <link rel="icon" href="gambar/logo-unpam-300x291.png">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo-container">
            <img src="gambar/logo-unpam-300x291.png" alt="Logo Universitas Pamulang" class="logo">
        </div>
        <ul>
            <li><a href="index1.php">Home</a></li>
            <li><a href="destinasi.php">Style</a></li>
            <li><a href="culinery.php">Basic</a></li>
            <li><a href="Budaya.php">News</a></li>
            <li><a href="kontak1.php">Contact Us</a></li>
        </ul>
        <!-- Logout Button -->
        <div class="logout-container">
            <a href="login2.php" class="logout">Logout</a>
        </div>
    </nav>
    
    <!-- Gambar di bawah navbar -->
    <div class="hero-image-container">
        <img src="gambar/1963 PAN HEAD _ MOTORCYCLES DEN.jpg" alt="Hero Image">
        <div class="hero-text"></div>
    </div>
    
    <div class="batas"></div>

    <div class="date-time-container">
        <div class="date-display">Tanggal</div>
        <div class="time-display">Jam</div>
    </div>

 <!-- Konten Deskripsi dan Gambar dengan Slider -->
 <section class="content-section">
        <div class="description">
            <h2></h2>
            <p>JAKARTA, KOMPAS.com - Pada IIMS 2024, bukan cuma pabrikan motor yang ikut pameran, melainkan juga bengkel modifikasi seperti Katros Garage. Bengkel yang dipimpin Andi Akbar atau Atenx ini memboyong motor dengan gaya street tracker. Berlokasi di Hall C3 JI Expo Kemayoran, terdapat beberapa motor yang dipamerkan, termasuk Byson yang sudah dimodifikasi ini. Terlihat beberapa unit sudah laku terjual dan diberi harga Rp 29,5 juta. "Ini motor basisnya Yamaha Byson, kita jual jadi di harga Rp 29,5 juta dengan kondisi surat lengkap, pajak hidup, sekalian balik nama khusus buat domisili Jakarta," ucap tenaga penjual di booth Katros Garage kepada Kompas.com, Selasa (21/2/2024). Dia mengatakan, buat unit yang dipamerkan itu belum selesai. Nantinya pemilik baru bisa menentukan sendiri mau warna apa catnya. "Ready stock, kalau habis, kita tetap produksi untuk itu lamanya satu sampai dua bulan," ucap dia. Soal model, semuanya sudah berubah, tinggal mesin, rangka, shock breaker, sampai pelek saja yang masih bawaan. Jadi secara bentuk sudah berbeda, tidak kelihatan lagi Byson yang bongsor. "Kita custom bagian belakang rangka, titik shockbreaker kita mundurin dan arm kita buat lebih lebar," ucap dia. Soal mesin, kabarnya sudah direstorasi secara menyeluruh. Jadi nanti pemilik barunya sudah tidak khawatir buat mengendarai motor custom tersebut.</p>
           
        </div>

        <!-- Slider Section -->
        <div class="slider">
            <div class="slides">
                <div class="slide"><a href="budaya.php"><img src="gambar/news3.jpg" alt="Umelasi"></a></div>
            </div>
            <div class="button-container">
                <a href="budaya.php" class="wisata-button">Back To Beranda</a>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2025 Armand Rhamadhan.</p>
    </div>

    <script src="script.js"></script>
    <script>
        const slides = document.querySelector('.slides');
        const slide = document.querySelectorAll('.slide');
        const prev = document.getElementById('prev');
        const next = document.getElementById('next');

        let index = 0;

        function showSlide(i) {
            index += i;
            if (index < 0) {
                index = slide.length - 1;
            } else if (index >= slide.length) {
                index = 0;
            }
            slides.style.transform = `translateX(${-index * 100}%)`;
        }

        prev.addEventListener('click', () => showSlide(-1));
        next.addEventListener('click', () => showSlide(1));
    </script>
</body>
</html>
