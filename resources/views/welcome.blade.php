<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JR|Rental Mobil - Sewa Mobil Terpercaya</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --accent-color: #3b82f6;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }

        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="white" opacity="0.1"><polygon points="0,100 1000,0 1000,100"/></svg>');
            background-size: cover;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .feature-card {
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px rgba(0, 0, 0, 0.15);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
            font-size: 2rem;
        }

        .car-card {
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .car-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.15);
        }

        .car-image {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }

        .price-badge {
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-weight: 600;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(37, 99, 235, 0.3);
        }

        .contact-section {
            background: linear-gradient(135deg, #f8fafc, #e2e8f0);
        }

        .footer {
            background: linear-gradient(135deg, #1e293b, #334155);
        }

        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 3rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            border-radius: 2px;
        }

        .stats-counter {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 60px 0;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            display: block;
        }

        .navbar {
            transition: all 0.3s ease;
            padding: 1rem 0;
        }

        .navbar.scrolled {
            background-color: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 60px 0;
            }

            .stat-number {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand text-primary" href="#">
                <i class="fas fa-car me-2"></i>JR|RentalMobil
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cars">Daftar Mobil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ms-2" href="#login">
                            <i class="fas fa-sign-in-alt me-1"></i>Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Sewa Mobil Mudah & Cepat</h1>
                    <p class="lead mb-4">Temukan mobil terbaik untuk perjalanan Anda dengan pelayanan terpercaya dan harga yang kompetitif. Ribuan pelanggan telah mempercayai kami.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#cars" class="btn btn-primary btn-lg">
                            <i class="fas fa-search me-2"></i>Mulai Sewa
                        </a>
                        <a href="#features" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-info-circle me-2"></i>Pelajari Lebih
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <img src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80"
                         class="img-fluid rounded shadow-lg" alt="Rental Mobil">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6 mb-4 mb-md-0">
                    <div class="stat-item">
                        <span class="stat-number"> {{ $HitungCar }} </span>
                        <p class="mb-0">Mobil Tersedia</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4 mb-md-0">
                    <div class="stat-item">
                        <span class="stat-number">5000+</span>
                        <p class="mb-0">Pelanggan Puas</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">50+</span>
                        <p class="mb-0">Kota Terjangkau</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <span class="stat-number">24/7</span>
                        <p class="mb-0">Layanan Support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title fw-bold">Kenapa Memilih Kami?</h2>
                <p class="lead text-muted">Nikmati pengalaman sewa mobil terbaik dengan berbagai keunggulan yang kami tawarkan</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card feature-card h-100 text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Banyak Pilihan Mobil</h4>
                        <p class="text-muted">Berbagai jenis mobil dari city car hingga luxury SUV tersedia sesuai kebutuhan dan budget Anda.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card feature-card h-100 text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Harga Terjangkau</h4>
                        <p class="text-muted">Harga kompetitif dan transparan tanpa biaya tersembunyi. Dapatkan promo menarik setiap bulannya.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card feature-card h-100 text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Proses Cepat</h4>
                        <p class="text-muted">Pesan dan sewa mobil Anda dalam hitungan menit dengan sistem booking online yang mudah.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card feature-card h-100 text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Asuransi Lengkap</h4>
                        <p class="text-muted">Semua mobil dilengkapi dengan asuransi comprehensive untuk keamanan perjalanan Anda.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card feature-card h-100 text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Support 24/7</h4>
                        <p class="text-muted">Tim customer service kami siap membantu Anda kapan saja, dimana saja selama 24 jam.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card feature-card h-100 text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Antar Jemput</h4>
                        <p class="text-muted">Layanan antar jemput gratis di area tertentu untuk kemudahan dan kenyamanan Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cars Section -->
    <section id="cars" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title fw-bold">Mobil Tersedia</h2>
                <p class="lead text-muted">Pilih mobil yang sesuai dengan kebutuhan perjalanan Anda</p>
            </div>
            <div class="row g-4">
                @foreach ( $car as $cars )
                <div class="col-lg-4 col-md-6">
                    <div class="card car-card h-100">
                        <img src="{{ asset('storage/' . $cars->image) }}" alt="FOTO MOBIL">


                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold"> {{ $cars->name }} | {{$cars->brand}} </h5>
                            <p class="card-text text-muted flex-grow-1"> STATUS = {{ Str::upper($cars->status) }} </p><hr>
                            <p class="card-text text-muted flex-grow-1"> TAHUN = {{ $cars->year }} </p><hr>
                            <p class="card-text text-muted flex-grow-1"> TIPE MOBIL = {{ Str::upper($cars->kategori) }} </p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="price-badge">Rp 600.000/hari</span>
                                <a href="https://wa.me/+6289508132431" class="btn btn-success" target="_blank">
                                    HUBUNGI KAMI
                                </a>
                            </div>
                            <div class="mt-3">
                                <small class="text-muted">
                                    <i class="fas fa-users me-1"></i>7 Penumpang
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="text-center mt-5">
                <a href="#contact" class="btn btn-primary btn-lg">
                    <i class="fas fa-eye me-2"></i>Lihat Semua Mobil
                </a>
            </div>
        </div>
    </section>
    {{-- testti --}}
    <section id="testimonials" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Apa Kata Pelanggan Kami</h2>
                <p class="text-muted">Kami bangga melayani pelanggan dengan pelayanan terbaik</p>
            </div>
            <div class="row g-4">
                <!-- Testimoni 1 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 p-4 text-center">
                        <img src="https://i.pravatar.cc/100?img=1" class="rounded-circle mx-auto mb-3" alt="Pelanggan 1">
                        <h5 class="fw-bold">Andi Saputra</h5>
                        <p class="text-muted">"Mobil bersih, pelayanan ramah, dan proses sangat cepat. Terbaik pokoknya!"</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>

                <!-- Testimoni 2 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 p-4 text-center">
                        <img src="https://i.pravatar.cc/100?img=5" class="rounded-circle mx-auto mb-3" alt="Pelanggan 2">
                        <h5 class="fw-bold">Dewi Lestari</h5>
                        <p class="text-muted">"Saya sangat puas menyewa mobil di sini. Supirnya sopan dan on time."</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>

                <!-- Testimoni 3 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100 p-4 text-center">
                        <img src="https://i.pravatar.cc/100?img=8" class="rounded-circle mx-auto mb-3" alt="Pelanggan 3">
                        <h5 class="fw-bold">Rizki Maulana</h5>
                        <p class="text-muted">"Sewa mobil lepas kunci mudah dan harga terjangkau. Recommended banget!"</p>
                        <div class="text-warning">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 contact-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title fw-bold">Hubungi Kami</h2>
                <p class="lead text-muted">Ada pertanyaan atau butuh bantuan? Tim kami siap membantu Anda</p>
            </div>
            <div class="row g-4">
                <!-- Email -->
                <div class="col-lg-4">
                    <div class="card h-100 text-center p-4 border-0 shadow">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-envelope fa-2x "></i>
                        </div>
                        <h5 class="fw-bold">Email</h5>
                        <p class="text-muted mb-3">Kirim pertanyaan Anda via email</p>
                        <a href="mailto:ranggayomudo01@gmail.com" class="btn btn-outline-primary">
                            ranggayomudo01@gmail.com
                        </a>
                    </div>
                </div>

                <!-- Telepon -->
                <div class="col-lg-4">
                    <div class="card h-100 text-center p-4 border-0 shadow">
                        <div class="feature-icon bg-light mb-3">
                            <i class="fas fa-phone fa-2x "></i>
                        </div>
                        <h5 class="fw-bold">Telepon</h5>
                        <p class="text-muted mb-3">Hubungi kami langsung</p>
                        <a href="https://wa.me/+6289508132431" class="btn btn-outline-primary" target="_blank">
                            CONTACT US
                        </a>
                    </div>
                </div>

                <!-- WhatsApp -->
                <div class="col-lg-4">
                    <div class="card h-100 text-center p-4 border-0 shadow">
                        <div class="feature-icon mb-3">
                            <i class="fab fa-whatsapp fa-2x text-success"></i>
                        </div>
                        <h5 class="fw-bold">WhatsApp</h5>
                        <p class="text-muted mb-3">Chat langsung dengan kami</p>
                        <a href="https://wa.me/+6289508132431" class="btn btn-outline-success" target="_blank">
                            Chat WhatsApp
                        </a>
                    </div>
                </div>

                <!-- Instagram -->
                <div class="col-lg-6">
                    <div class="card h-100 text-center p-4 border-0 shadow">
                        <div class="feature-icon mb-3">
                            <i class="fab fa-instagram fa-2x text-danger"></i>
                        </div>
                        <h5 class="fw-bold">Instagram</h5>
                        <p class="text-muted mb-3">Lihat galeri & update kami di IG</p>
                        <a href="https://www.instagram.com/jrrental_?igsh=dmF0djg5OWpjMXF5"
                           class="btn btn-outline-danger" target="_blank">
                            @jrrental_
                        </a>
                    </div>
                </div>

                <!-- TikTok -->
                <div class="col-lg-6">
                    <div class="card h-100 text-center p-4 border-0 shadow">
                        <div class="feature-icon mb-3">
                            <i class="fab fa-tiktok fa-2x text-dark"></i>
                        </div>
                        <h5 class="fw-bold">TikTok</h5>
                        <p class="text-muted mb-3">Lihat konten video kami di TikTok</p>
                        <a href="https://www.tiktok.com/@jr..rental.kampar?_t=ZS-8xkP7M7pibN&_r=1"
                           class="btn btn-outline-dark" target="_blank">
                            @jr..rental.kampar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FOUNDER --}}
    <section id="founder" class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Founder JR Rental</h2>
                <p class="text-muted">Orang di balik layanan berkualitas kami</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4 col-lg-4">
                    <div class="card border-0 shadow text-center p-4">
                        <img src="{{ asset('profile.jpg') }}" alt="Foto Founder" class="rounded-circle mx-auto mb-4" width="150" height="150" style="object-fit: cover;">
                        <h4 class="fw-bold mb-1">Rangga Yomudo</h4>
                        <p class="text-muted mb-3">Founder & CEO JR Rental</p>
                        <p class="text-muted fst-italic">
                            "Kami berkomitmen memberikan layanan terbaik, armada berkualitas, dan kepuasan pelanggan sebagai prioritas utama."
                        </p>
                        <div>
                            <a href="https://www.instagram.com/jrrental_" target="_blank" class="me-2 text-dark">
                                <i class="fab fa-instagram fa-lg"></i>
                            </a>
                            <a href="https://www.tiktok.com/@jr..rental.kampar" target="_blank" class="text-dark">
                                <i class="fab fa-tiktok fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="card border-0 shadow text-center p-4">
                        <img src="{{ asset('Juando.jpg') }}" alt="Foto Founder" class="rounded-circle mx-auto mb-4" width="150" height="150" style="object-fit: cover;">
                        <h4 class="fw-bold mb-1">Juando</h4>
                        <p class="text-muted mb-3">CMO JR Rental</p>
                        <p class="text-muted fst-italic">
                            "Kami membangun JR Rental dengan dedikasi untuk memberikan pengalaman sewa mobil yang mudah dan memuaskan bagi setiap pelanggan."
                        </p>
                        <div>
                            <a href="https://www.instagram.com/jrrental_" target="_blank" class="me-2 text-dark">
                                <i class="fab fa-instagram fa-lg"></i>
                            </a>
                            <a href="https://www.tiktok.com/@jr..rental.kampar" target="_blank" class="text-dark">
                                <i class="fab fa-tiktok fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-white py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5 class="fw-bold mb-3">
                        <i class="fas fa-car me-2"></i>RentalMobil
                    </h5>
                    <p class="text-light">Platform rental mobil terpercaya dengan pelayanan terbaik di Indonesia. Wujudkan perjalanan impian Anda bersama kami.</p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-light"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h6 class="fw-bold mb-3">Layanan</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none">FAQ</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Panduan Booking</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Kebijakan Privasi</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h6 class="fw-bold mb-3">Kontak</h6>
                    <ul class="list-unstyled">
                        <li class="text-light"><i class="fas fa-map-marker-alt me-2"></i>Jl.tuanku Tambusai no 23 Bangkinang kota</li>
                        <li class="text-light"><i class="fas fa-phone me-2"></i>+6289508132431</li>
                        <li class="text-light"><i class="fas fa-envelope me-2"></i>ranggayomudo01@gmail.com</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2024 RentalMobil. Semua hak dilindungi.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">Dibuat dengan <i class="fas fa-heart text-danger"></i> untuk Indonesia</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="btn btn-primary position-fixed bottom-0 end-0 m-4 rounded-circle" style="width: 50px; height: 50px; display: none; z-index: 1000;">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Back to top button
        const backToTopButton = document.getElementById('backToTop');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTopButton.style.display = 'block';
            } else {
                backToTopButton.style.display = 'none';
            }
        });

        backToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offsetTop = target.offsetTop - 80;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Counter animation
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');
            const options = {
                threshold: 0.7
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const target = parseInt(counter.textContent.replace(/\D/g, ''));
                        const suffix = counter.textContent.replace(/[0-9]/g, '');
                        let current = 0;
                        const increment = target / 100;
                        const timer = setInterval(() => {
                            current += increment;
                            if (current >= target) {
                                current = target;
                                clearInterval(timer);
                            }
                            counter.textContent = Math.floor(current) + suffix;
                        }, 20);
                        observer.unobserve(counter);
                    }
                });
            }, options);

            counters.forEach(counter => {
                observer.observe(counter);
            });
        }

        // Initialize animations when page loads
        document.addEventListener('DOMContentLoaded', function() {
            animateCounters();
        });

        // Car booking functionality
        document.querySelectorAll('.car-card .btn-primary').forEach(button => {
            button.addEventListener('click', function() {
                const carName = this.closest('.card').querySelector('.card-title').textContent;
                alert(`Terima kasih! Anda akan dialihkan ke halaman booking untuk ${carName}`);
                // Here you would typically redirect to booking page or open a modal
            });
        });

        // Add loading animation
        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease-in-out';
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });
    </script>

</body>
</html>
