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
            <p>JAKARTA, KOMPAS.com - Aturan mengenai mobil dan motor custom akhirnya diresmikan juga. Sebelumnya, kendaraan yang sudah dimodifikasi sering kali dinilai menyalahi aturan yang berlaku. Regulasi tersebut disusun dalam Peraturan Menteri Perhubungan (Permenhub) Republik Indonesia Nomor PM 45 Tahun 2023 tentang Kustomisasi Kendaraan Bermotor. Baca juga: Kromworks Kembali Raih Best Custom Bike Show di Kustomfest 2023 Dalam Permenhub ini, disebutkan bahwa setiap kendaraan bermotor yang telah dilakukan registrasi dan identifikasi dapat dilakukan kustomisasi. Tapi, terdapat beberapa persyaratan dan ketentuan yang sudah ditetapkan.



            </p>
        </div>

        <!-- Slider Section -->
        <div class="slider">
            <div class="slides">
                <div class="slide"><a href="budaya.php"><img src="gambar/news1.jpg" alt="Umelasi"></a></div>

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
