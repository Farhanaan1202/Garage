<!DOCTYPE html>
<html lang="en">
<head>
    <title>AN Garage</title>
    <link rel="stylesheet" href="budd.css">
    <link rel="icon" href="gambar/logo web.jpg">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo-container">
            <img src="gambar/logo web.jpg" alt="AN GARAGE" class="logo">
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
            <p>
            Yogyakarta - Tidak seperti biasanya pada hari Sabtu dan Minggu malam (5-6/10/2024) area indoor dan juga outdoor Jogja Expo Center dipadati oleh pengunjung yang ingin melihat perkembangan dunia kustom kulture. Ratusan motor dan mobil kustom karya terbaru para builder dari berbagai daerah di Indonesia dipajang dengan artistik hingga menjadi pusat perhatian 25.647 pengunjung JEC selama dua hari pelaksanaan. Kustomfest 2024 Lucky 13 Rollin‘ resmi dibuka pada Sabtu (5/10/2024) diisi dengan bermacam konten seperti instalasi seni dari Kustom Journey yang mengundang artis painting dari Indonesia dan Thailand. Lalu ada perkenalan jawara Honda Dream Ride dari Honda Modif Contest hingga peluncuran motor kolaborasi Royal Enfield dengan AMS Garage serta Custom Kings Asia dari Harley-Davidson.
 
 Di acara Kustom Bike Show dan Hot Rod & Kustom Car Show dari total 144 peserta yang hadir terpilihlah Best Kustom Bike milik Kinara Alekhana Sae Satria dengan basis motor HD Shovelhead dan Best Hot Rod & Kustom Car Show sukses ditasbihkan pada mobil VW Karmann Ghia Type 34 garapan Aerodynomite. Keduanya mendapatkan penilaian tertinggi dari para juri sehingga berhak menjadi yang terbaik di acara tahun ini. </p>
        </div>

        <!-- Slider Section -->
        <div class="slider">
            <div class="slides">
                <div class="slide"><a href="budaya.php"><img src="gambar/news2.jpg" alt="Umelasi"></a></div>
            </div>
            <div class="button-container">
                <a href="budaya.php" class="wisata-button">Back To Beranda</a>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2025 Farhan Febriatno.</p>
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
