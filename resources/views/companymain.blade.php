<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISKOMINFO KOTA BOGOR</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom styles for Poppins font -->

</head>
<body class="bdy">
    <!-- Navbar -->
    <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="#" class="navbar-brand p-0">
                <img src="/Kota_Bogor.png" class="img-fluid" style="height: 60px; margin-right: 10px;">
                <h1 class="m-0 d-inline">DISKOMINFO</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="#home" class="nav-item nav-link">Home</a>
                    <a href="#sejarah" class="nav-item nav-link">Sejarah</a>
                    <a href="#berita" class="nav-item nav-link">Berita</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang Kami</a>
                        <div class="dropdown-menu m-0">
                            <a href="#datapegawai" class="dropdown-item">Data Pegawai</a>
                            <a href="#layanan" class="dropdown-item">Layanan</a>
                        </div>
                    </div>
                    <a href="#contact" class="nav-item nav-link">Kontak</a>
                </div>
            </div>
        </nav>
    </div>

    <!-- Hero Section -->
    <div class="container-xxl py-5 bg-primary hero-header mb-5" id="home">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <!-- Left Section (Text) -->
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-white mb-4 animated zoomIn">Dinas Komunikasi Informatika Kota Bogor</h1>
                    <p class="text-white pb-3 animated zoomIn">Layanan Informasi Terkait Dinas Komunikasi Dan Telekomunikasi Kota Bogor</p>
                </div>

                <!-- Right Section (Image) -->
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid mb-4 w-75 mx-15 mt-n5 d-none d-lg-block" src="img/Uncal.png" alt="" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>

<!-- About Section -->
<section id="about" class="py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold text-blue-600">Tentang Kami</h2>
        <p class="mt-4 text-gray-600">Pembinaan dan pelaksanaan komunikasi, informatika dan kehumasan yang meliputi pos dan telekomunikasi, sarana komunikasi, desiminasi informasi dan teknologi informasi serta hubungan masyarakat.</p>
    </div>
</section>

<!-- Sejarah Section -->
<div class="container mx-auto px-4 py-8 mt-8" id="sejarah">
    <div class="row g-5 justify-content-center">
        <!-- Konten Sejarah -->
        <div class="col-lg-6 d-flex align-items-center">
            <div class="w-full">
                <div class="section-title position-relative mb-4 pb-2">
                    <h6 class="position-relative text-primary ps-4">Sejarah</h6>
                    <h2 class="mt-2">Dinas Komunikasi dan Informatika Kota Bogor</h2>
                </div>
                <p class="mb-4">Dinas Komunikasi dan Informatika (Diskominfo) Kota Bogor bertugas mengelola komunikasi, informasi, dan teknologi di pemerintahannya. Diskominfo mendukung transparansi, pengelolaan media sosial, serta penerapan e-Government untuk meningkatkan pelayanan publik dan kualitas hidup masyarakat Kota Bogor.</p>
            </div>
        </div>
        <!-- Gambar -->
        <div class="col-lg-6 d-flex justify-content-center">
            <img src="img/diskominfo.jpg" alt="Dinas Komunikasi dan Informatika Kota Bogor" class="img-fluid rounded">
        </div>
    </div>
</div>


     <!-- Announcement End -->
<!-- Box Container Baru untuk Video YouTube -->
<div class="container-xxl py-5">
    @foreach($videos as $video)
    <div class="container px-lg-5">
        <div class="border rounded p-4  mb-5 bg-primary">
            <h3 class="text-center mb-4" style="color: white;" id="layanan"> Layanan {{ $video->judul }}</h3>
            <div class="ratio ratio-16x9">
                <iframe src="{{ $video->embedLink }}"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
    @endforeach
</div>


<!--end-->
<section id="datapegawai" style="padding-top: 50px;">
<div class="container ">
        <h2 class="text-center mb-4">Data Pegawai</h2>
        <div class="swiper">
            <div class="swiper-wrapper">
                @foreach ($pegawais as $pegawai)
                    <div class="swiper-slide">
                        <div class="card" style="width: 18rem;">
                            <!-- Menampilkan gambar -->
                            <img src="{{ asset('storage/' . $pegawai->foto) }}"
                                class="card-img-top"
                                alt="Foto Pegawai"
                                style="width: 100%; height: 340px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $pegawai->nama_lengkap }}</h5>
                                <p class="card-text">
                                    Jabatan:{{ $pegawai->jabatan }} <br>
                                    Email:{{ $pegawai->email }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</div>
</section>

<!-- Newsletter Start -->
<div class="container-xxl bg-primary newsletter my-5 wow fadeInUp" data-wow-delay="0.1s" id="berita" style="padding-top: 50px;>
    <div class="container px-lg-5">
        <div class="row align-items-center" style="height: 250px;">
            <div class="col-12 col-md-6">
                <h1 class="text-white">Berita</h3>
                <small class="text-white">Tentang Kominfo</small>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter End -->
 <!-- Announcement Start -->
 <div class="mb-4 mx-5">
    <form method="GET" action="{{ route('news.index') }}">
        <div class="btn-group" role="group">
            <!-- Tombol untuk "Semua Kategori" -->
            <button type="submit" name="category_id" value=""
                class="btn btn-outline-primary {{ request('category_id') == '' ? 'active' : '' }}">
                Semua Kategori
            </button>
            <!-- Tombol untuk setiap kategori -->
            @foreach($categories as $category)
                <button type="submit" name="category_id" value="{{ $category->id }}"
                    class="btn btn-outline-primary {{ request('category_id') == $category->id ? 'active' : '' }}">
                    {{ $category->judul }}
                </button>
            @endforeach
        </div>
    </form>
</div>


<div id="postsContainer" class="row g-5 mt-4">
    @forelse($posts as $post)
        <div class="col-lg-6 post-item">
            <div class="ratio ratio-16x9">
                <img src="{{ asset('storage/' . $post->file) }}" alt="{{ $post->judul }}" class="img-fluid" />
            </div>
            <div class="border rounded p-4">
                <h5 class="mb-3 text-center" style="color: blue;">{{ $post->judul }}</h5>
                <div class="news-date mb-4">
                    <small class="text-muted">{{ $post->created_at->format('d M Y') }}</small>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary rounded-pill px-4">
                        Baca Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    @empty
        <p class="text-center">Belum ada berita di kategori ini.</p>
    @endforelse
</div>


  <!-- Footer -->
  <footer class="bg-custom py-5">
        <div class="container">
            <div class="row gy-4">
                <!-- Tentang Kami -->
                <div class="col-md-4 text-white" id="contact">
                    <h5 class="fw-bold mb-3 text-white">Tentang Kami</h5>
                    <p>Kami menyediakan berita terkini untuk komunitas kami. Tetap terhubung untuk mendapatkan informasi terbaru.</p>
                </div>
                <!-- Follow Us -->
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3 text-white">Follow Us</h5>
                    <div class="d-flex gap-3">
                        <a href="https://www.facebook.com/kominfobogor/" class="footer-link fs-4"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.youtube.com/@diskominfokotabogor554" class="footer-link fs-4"><i class="fab fa-youtube"></i></a>
                        <a href="https://x.com/kominfobogor/status/1842044007565951041" class="footer-link fs-4"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/kominfobogor/" class="footer-link fs-4"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <!-- Find Us -->
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3 text-white">Find Us</h5>
                    <p class="text-white">Alamat: Jl. Ir. H. Juanda No.10, RT.01/RW.01, Pabaton, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16121</p>
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.416102810378!2d106.79109007499362!3d-6.595094993398655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5b7d2e12d0d%3A0x9b59e38fc692d9fe!2sKantor%20Kominfo%20Kota%20Bogor!5e0!3m2!1sen!2sid!4v1732282394592!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4 text-white">
                <p class="mb-0">&copy; 2024 SMK INFOKOM. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    \<script>
    document.addEventListener('DOMContentLoaded', () => {
        const swiper = new Swiper('.swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: { slidesPerView: 1 },
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 3 },
            },
        });
    });

    document.getElementById('categorySelect').addEventListener('change', function () {
    const categoryId = this.value;
    const postsContainer = document.getElementById('postsContainer');

    // Validasi kategori
    if (!categoryId) {
        postsContainer.innerHTML = '<p class="text-center">Silakan pilih kategori.</p>';
        postsContainer.style.opacity = 1;
        return;
    }

    // Animasi keluar
    postsContainer.style.opacity = 0;

    // Tampilkan loading indicator
    postsContainer.innerHTML = '<p class="text-center">Memuat data...</p>';

    // Ambil data dari server
    fetch(`/api/posts/${categoryId}`)
        .then(response => response.json())
        .then(posts => {
            // Kosongkan container posts
            postsContainer.innerHTML = '';

            if (posts.length > 0) {
                // Tambahkan posts baru ke dalam container
                posts.forEach(post => {
                    const postItem = document.createElement('div');
                    postItem.classList.add('col-lg-6', 'post-item');

                    const date = post.created_at ? new Date(post.created_at) : new Date();
                    const formattedDate = date.toLocaleDateString('id-ID', {
                        day: '2-digit', month: 'short', year: 'numeric'
                    });

                    postItem.innerHTML = `
                        <div class="ratio ratio-16x9">
                            <img src="/storage/${post.file}" alt="${post.judul}" class="img-fluid" />
                        </div>
                        <div class="border rounded p-4">
                            <h5 class="mb-3 text-center" style="color: blue;">${post.judul}</h5>
                            <div class="news-date mb-4">
                                <small class="text-muted">${formattedDate}</small>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="/post/${post.id}" class="btn btn-primary rounded-pill px-4">Baca Selengkapnya</a>
                            </div>
                        </div>
                    `;

                    postsContainer.appendChild(postItem);
                });
            } else {
                postsContainer.innerHTML = '<p class="text-center">Belum ada berita di kategori ini.</p>';
            }

            // Animasi masuk
            setTimeout(() => {
                postsContainer.style.opacity = 1;
            }, 200);
        })
        .catch(error => {
            console.error('Error:', error);
            postsContainer.innerHTML = '<p class="text-center text-danger">Terjadi kesalahan saat memuat data.</p>';
            postsContainer.style.opacity = 1;
        });
});

</script>


</body>
</html>
