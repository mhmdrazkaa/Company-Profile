<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel Berita</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Global Font Styling */
        body {
            font-family: 'Poppins', sans-serif;
        }
        /* Hero Section */
        .hero-section {
            position: relative;
            width: 100%;
            overflow: hidden;
            border-radius: 8px;
        }
        .hero-section img {
            width: 100%;
            height: auto;
            max-height: 500px;
            object-fit: cover;
        }
        /* Footer */
        .bg-custom {
            background-color: #1230AE;
        }
        .footer-link {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .footer-link:hover {
            color: #d2e9e9;
        }
        /* Misc */
        .hero-title {
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="shadow-sm" style="background-color: #1230AE;">
        <div class="container d-flex align-items-center justify-content-between py-3">
            <!-- Logo dan Judul -->
            <a href="/" class="d-flex align-items-center text-decoration-none">
                <img src="/Kota_Bogor.png" alt="Logo" class="h-16 me-3" style="height: 60px;">
                <h1 class="text-white text-5xl font-bold mb-0">DISKOMINFO</h1>
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="py-5">
        <div class="container">
            <div class="hero-section shadow-sm mb-4">
                <!-- Gambar Berita -->
                <img src="{{ asset('storage/' . $post->file) }}" alt="Gambar Berita" class="img-fluid">
            </div>
            <!-- Deskripsi Berita -->
            <div class="hero-text mt-4">
                <h1 class="fw-bold text-dark mb-3 hero-title">{{ $post->judul }}</h1>
                <p class="text-muted mb-2"><i class="fa-solid fa-calendar-alt"></i> {{ $post->created_at->format('d M Y') }}</p>
                @foreach (explode("\n", $post->konten) as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-custom text-white py-5">
        <div class="container">
            <div class="row gy-4">
                <!-- Tentang Kami -->
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Tentang Kami</h5>
                    <p>Kami menyediakan berita terkini untuk komunitas kami. Tetap terhubung untuk mendapatkan informasi terbaru.</p>
                </div>
                <!-- Follow Us -->
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Follow Us</h5>
                    <div class="d-flex gap-3">
                        <a href="#" class="footer-link fs-4"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="footer-link fs-4"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="footer-link fs-4"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="footer-link fs-4"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="footer-link fs-4"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <!-- Find Us -->
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Find Us</h5>
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.416102810378!2d106.79109007499362!3d-6.595094993398655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5b7d2e12d0d%3A0x9b59e38fc692d9fe!2sKantor%20Kominfo%20Kota%20Bogor!5e0!3m2!1sen!2sid!4v1732282394592!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <p class="mb-0">&copy; 2024 SMK INFOKOM. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
