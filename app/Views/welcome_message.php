<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda | CI4 Simple Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7f9fc;
            margin: 0;
            padding: 0;
        }

        .hero-video {
            position: relative;
            width: 100%;
            height: 400px;
            overflow: hidden;
        }

        .hero-video video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        #toggle-sound {
            position: absolute;
            bottom: 10px;
            right: 20px;
            padding: 8px 12px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        header {
            background-color: #4f46e5;
            color: white;
            padding: 1.5rem 2rem;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        main {
            padding: 2rem;
        }

        .container-layout {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 2rem;
            max-width: 1200px;
            margin: auto;
        }

        .main-content {
            flex: 2;
        }

        .sidebar {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .card {
            background-color: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        .highlight {
            font-weight: 600;
            color: #ef4444;
        }

        .blink {
            animation: blink 1.2s infinite;
            color: #dc2626;
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.2; }
        }

        marquee {
            margin-top: 2rem;
            background-color: #eef2ff;
            padding: 1rem;
            border-radius: 8px;
            color: #1e40af;
            font-weight: 500;
        }

        .banner {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 1.5rem;
        }

        .sidebar .img-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            padding: 1rem;
            text-align: center;
        }

        .sidebar img {
            width: 100%;
            border-radius: 8px;
        }

        .custom-audio {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            padding: 1.5rem;
            margin: 2rem auto 0;
            text-align: center;
            max-width: 700px;
        }

        .custom-audio h3 {
            margin-bottom: 1rem;
            color: #4f46e5;
            font-weight: 600;
        }

        .custom-audio audio {
            width: 100%;
            border-radius: 8px;
        }

        footer {
            text-align: center;
            font-size: 0.9rem;
            color: #6b7280;
            margin-top: 2rem;
        }
    </style>
</head>
<body>

    <div class="hero-video">
        <video autoplay muted loop id="bg-video">
            <source src="video/profil_sekolah.mp4" type="video/mp4">
            Browser kamu tidak mendukung elemen video.
        </video>
        <button id="toggle-sound">🔇</button>
    </div>

    <header>
        <h1>Website Pengumuman Sekolah</h1>
    </header>

    <main>
        <div class="container-layout">
            <div class="main-content">
                <div class="card">
                    <img src="assets/banner.jpg" alt="Banner Sekolah" class="banner">

                    <h2>Selamat Datang</h2>
                    <p>Ini adalah halaman utama dari website sederhana berbasis <strong>CodeIgniter 4</strong>.</p>

                    <p class="highlight">Teks ini menunjukkan highlight penting menggunakan class <code>.highlight</code>.</p>

                    <p class="blink">Ini adalah teks dengan efek <code>.blink</code> menggunakan CSS animation.</p>

                    <marquee behavior="scroll" direction="left">🔔 Pengumuman: Ujian Tengah Semester dimulai tanggal 22 April 2025!</marquee>
                </div>
                <div class="custom-audio">
            <h3>Mars Sekolah</h3>
            <audio controls>
                <source src="audio/mars_sekolah.mp3" type="audio/mpeg">
                Browser kamu tidak mendukung elemen audio.
            </audio>
        </div>
            </div>

            <div class="sidebar">
                <div class="img-card">
                    <img src="assets/kegiatan1.jpeg" alt="Kegiatan 1">
                    <p>Upacara Senin Pagi</p>
                </div>
                <div class="img-card">
                    <img src="assets/kegiatan2.gif" alt="GIF Belajar">
                    <p>Kegiatan Belajar Interaktif</p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        &copy; <?= date('Y') ?> Web CI4 Sederhana - Dibuat untuk keperluan tugas.
    </footer>

    <script>
        const video = document.getElementById('bg-video');
        const btn = document.getElementById('toggle-sound');

        btn.addEventListener('click', () => {
            video.muted = !video.muted;
            btn.textContent = video.muted ? '🔇' : '🔊';
        });
    </script>
</body>
</html>