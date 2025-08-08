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

        .promo-banner {
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            color: white;
            padding: 15px 0;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .promo-section {
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
        }

        .member-promo {
            background: linear-gradient(135deg, #ffeaa7, #fab1a0);
            color: #2d3436;
        }

        .terms-section {
            background: #f8f9fa;
        }

        .floating-wa {
            position: fixed;
            bottom: 100px;
            right: 20px;
            z-index: 1001;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-30px);
            }
            60% {
                transform: translateY(-15px);
            }
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

    <!-- Promo Banner -->
    <div class="promo-banner text-center">
        <div class="container">
            <strong><i class="fas fa-fire me-2"></i>PROMO SPESIAL WEBSITE! Diskon 10% untuk pemesanan minimal 2 hari via transfer!</strong>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
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
                        <a class="nav-link" href="#promo">Promo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lokasi">Lokasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/+6285211912131" class="floating-wa" target="_blank">
        <div class="bg-success rounded-circle p-3 shadow">
            <i class="fab fa-whatsapp fa-2x text-white"></i>
        </div>
    </a>

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
                        <span class="stat-number">50+</span>
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

    <!-- Promo Section -->
    <section id="promo" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title fw-bold">Promo Terbaru</h2>
                <p class="lead text-muted">Dapatkan penawaran terbaik untuk rental mobil Anda</p>
            </div>

            <!-- Promo Website -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card promo-section border-0 shadow-lg">
                        <div class="card-body text-center p-5">
                            <h3 class="fw-bold mb-3">
                                <i class="fas fa-globe me-2"></i>Promo Spesial Website
                            </h3>
                            <h4 class="mb-4">"Pesan Sekarang Melalui Website, Dapatkan Diskon 10%!"</h4>
                            <p class="lead mb-4">Berlaku untuk pemesanan minimal 2 hari dan pembayaran via transfer.</p>
                            <a href="https://wa.me/+6285211912131?text=Halo, saya tertarik dengan promo website diskon 10%"
                               class="btn btn-light btn-lg me-3" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i>Pesan via WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Member Promo -->
            <div class="row">
                <div class="col-12">
                    <div class="card member-promo border-0 shadow-lg">
                        <div class="card-body p-5">
                            <div class="text-center mb-4">
                                <h3 class="fw-bold">
                                    <i class="fas fa-crown me-2"></i>Promo Member Rental Mobil
                                </h3>
                                <h5>Hemat Lebih, Nyaman Maksimal!</h5>
                                <p class="lead">Jadi Member Sekarang & Dapatkan Keuntungan Eksklusif!</p>
                            </div>

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <h5 class="fw-bold mb-3">💎 Keuntungan Jadi Member:</h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Diskon Khusus Member hingga 30%</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Gratis 1x Sewa Setelah 5x Transaksi</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Prioritas Ketersediaan Mobil saat High Season</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Gratis Upgrade Mobil (jika tersedia)</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Promo Ulang Tahun: Diskon Spesial + Souvenir</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Layanan Antar-Jemput Gratis (Khusus Area Tertentu)</li>
                                    </ul>
                                </div>
                                <div class="col-md-6 text-center">
                                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                                         class="img-fluid rounded mb-3" alt="Member Benefits">
                                    <a href="https://wa.me/+6285211912131?text=Halo, saya ingin daftar jadi member JR Rental"
                                       class="btn btn-success btn-lg" target="_blank">
                                        <i class="fab fa-whatsapp me-2"></i>Daftar Member Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cars Section -->
    <section id="cars" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title fw-bold">Mobil Tersedia</h2>
                <p class="lead text-muted">Pilih mobil yang sesuai dengan kebutuhan perjalanan Anda</p>
            </div>
            <div class="row g-4">
                <!-- Sample Car 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card car-card h-100">
                        <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c2?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                             class="car-image" alt="Toyota Avanza">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">Toyota Avanza | Toyota</h5>
                            <p class="card-text text-muted flex-grow-1">STATUS = TERSEDIA</p><hr>
                            <p class="card-text text-muted flex-grow-1">TAHUN = 2022</p><hr>
                            <p class="card-text text-muted flex-grow-1">TIPE MOBIL = MPV</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="price-badge">Rp 350.000 /hari</span>
                                <a href="https://wa.me/+6285211912131?text=Halo, saya tertarik dengan Toyota Avanza"
                                   class="btn btn-success" target="_blank">
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

                <!-- Sample Car 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card car-card h-100">
                        <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                             class="car-image" alt="Honda Brio">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">Honda Brio | Honda</h5>
                            <p class="card-text text-muted flex-grow-1">STATUS = TERSEDIA</p><hr>
                            <p class="card-text text-muted flex-grow-1">TAHUN = 2021</p><hr>
                            <p class="card-text text-muted flex-grow-1">TIPE MOBIL = HATCHBACK</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="price-badge">Rp 250.000 /hari</span>
                                <a href="https://wa.me/+6285211912131?text=Halo, saya tertarik dengan Honda Brio"
                                   class="btn btn-success" target="_blank">
                                    HUBUNGI KAMI
                                </a>
                            </div>
                            <div class="mt-3">
                                <small class="text-muted">
                                    <i class="fas fa-users me-1"></i>5 Penumpang
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sample Car 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card car-card h-100">
                        <img src="https://images.unsplash.com/photo-1606664515524-ed2f786a0bd6?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                             class="car-image" alt="Mitsubishi Xpander">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">Mitsubishi Xpander | Mitsubishi</h5>
                            <p class="card-text text-muted flex-grow-1">STATUS = TERSEDIA</p><hr>
                            <p class="card-text text-muted flex-grow-1">TAHUN = 2023</p><hr>
                            <p class="card-text text-muted flex-grow-1">TIPE MOBIL = MPV</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="price-badge">Rp 450.000 /hari</span>
                                <a href="https://wa.me/+6285211912131?text=Halo, saya tertarik dengan Mitsubishi Xpander"
                                   class="btn btn-success" target="_blank">
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
            </div>
            <div class="text-center mt-5">
                <a href="https://wa.me/+6285211912131?text=Halo, saya ingin melihat semua mobil yang tersedia"
                   class="btn btn-primary btn-lg" target="_blank">
                    <i class="fab fa-whatsapp me-2"></i>Lihat Semua Mobil
                </a>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section id="lokasi" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title fw-bold">Lokasi JR Rentcar</h2>
                <p class="lead text-muted">Kami hadir di pusat kota Bangkinang!</p>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="card border-0 shadow p-4">
                        <h4 class="fw-bold mb-4">Temukan Kami dengan Mudah</h4>
                        <p class="mb-4">Mulai perjalanan Anda dari lokasi strategis kami di pusat kota Bangkinang</p>

                        <div class="mb-3">
                            <h6 class="fw-bold"><i class="fas fa-map-marker-alt text-danger me-2"></i>Alamat:</h6>
                            <p class="text-muted">Jl. Tuanku Tambusai No 23, Kecamatan Bangkinang</p>
                        </div>

                        <div class="mb-4">
                            <h6 class="fw-bold"><i class="fas fa-clock text-primary me-2"></i>Jam Operasional:</h6>
                            <p class="text-muted">Setiap Hari (24 Jam)</p>
                        </div>

                        <div class="d-flex gap-3">
                            <a href="https://maps.google.com/?q=Jl.+Tuanku+Tambusai+no+23+Bangkinang+kota"
                               class="btn btn-primary" target="_blank">
                                <i class="fas fa-map-marked-alt me-2"></i>Lihat di Google Maps
                            </a>
                            <a href="https://wa.me/+6285211912131?text=Halo, saya ingin tahu lokasi JR Rental"
                               class="btn btn-success" target="_blank">
                                <i class="fab fa-whatsapp me-2"></i>Hubungi Kami
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                         class="img-fluid rounded shadow" alt="Lokasi JR Rental">
                </div>
            </div>
        </div>
    </section>

    <!-- Terms & Conditions Section -->
    <section id="terms" class="py-5 terms-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title fw-bold">Ketentuan Pemakaian Jasa Rental Mobil</h2>
                <p class="lead text-muted">Dengan melakukan pemesanan melalui website ini, pelanggan dianggap telah membaca, memahami, dan menyetujui seluruh ketentuan di bawah ini</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card border-0 shadow h-100 p-4">
                        <h5 class="fw-bold text-primary mb-3"><i class="fas fa-user-check me-2"></i>1. Syarat Umum</h5>
                        <ul class="text-muted">
                            <li>Usia minimum penyewa adalah 21 tahun dan memiliki SIM A yang masih berlaku.</li>
                            <li>Penyewa wajib memberikan identitas asli seperti KTP dan SIM saat pengambilan kendaraan.</li>
                            <li>Kendaraan hanya boleh digunakan untuk keperluan yang sah dan tidak melanggar hukum.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card border-0 shadow h-100 p-4">
                        <h5 class="fw-bold text-primary mb-3"><i class="fas fa-calendar-alt me-2"></i>2. Pemesanan</h5>
                        <ul class="text-muted">
                            <li>Pemesanan dapat dilakukan melalui website, WhatsApp, atau langsung di kantor kami.</li>
                            <li>Pelanggan wajib mengisi formulir pemesanan dengan data yang benar dan lengkap.</li>
                            <li>Pemesanan dianggap sah setelah pembayaran uang muka (DP) minimal 30% dari total sewa.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card border-0 shadow h-100 p-4">
                        <h5 class="fw-bold text-primary mb-3"><i class="fas fa-credit-card me-2"></i>3. Pembayaran</h5>
                        <ul class="text-muted">
                            <li>Pembayaran bisa dilakukan melalui transfer bank atau metode lain yang disediakan.</li>
                            <li>Sisa pembayaran wajib diselesaikan sebelum kendaraan digunakan.</li>
                            <li>Tidak ada pengembalian uang atas pembatalan sepihak dari pelanggan kurang dari 24 jam sebelum waktu sewa.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card border-0 shadow h-100 p-4">
                        <h5 class="fw-bold text-primary mb-3"><i class="fas fa-car-side me-2"></i>4. Penggunaan Kendaraan</h5>
                        <ul class="text-muted">
                            <li>Kendaraan dilarang digunakan untuk balapan, uji coba, tindak kejahatan, atau membawa barang berbahaya.</li>
                            <li>Penyewa bertanggung jawab atas bahan bakar, parkir, dan denda lalu lintas selama masa sewa.</li>
                            <li>Penyewa wajib menjaga kebersihan dan kondisi kendaraan.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card border-0 shadow h-100 p-4">
                        <h5 class="fw-bold text-primary mb-3"><i class="fas fa-exclamation-triangle me-2"></i>5. Keterlambatan dan Denda</h5>
                        <ul class="text-muted">
                            <li>Keterlambatan pengembalian akan dikenakan denda sesuai tarif per jam atau per hari.</li>
                            <li>Apabila keterlambatan melebihi 3 jam tanpa konfirmasi, kami berhak melakukan tindakan sesuai prosedur hukum.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card border-0 shadow h-100 p-4">
                        <h5 class="fw-bold text-primary mb-3"><i class="fas fa-tools me-2"></i>6. Kerusakan dan Kehilangan</h5>
                        <ul class="text-muted">
                            <li>Semua kerusakan akibat kelalaian penyewa menjadi tanggung jawab penyewa.</li>
                            <li>Jika kendaraan hilang atau rusak berat, penyewa wajib mengganti sesuai nilai pasar kendaraan.</li>
                            <li>Tersedia opsi asuransi tambahan untuk mengurangi beban ganti rugi.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card border-0 shadow h-100 p-4">
                        <h5 class="fw-bold text-primary mb-3"><i class="fas fa-times-circle me-2"></i>7. Pembatalan</h5>
                        <ul class="text-muted">
                            <li>Pembatalan pemesanan lebih dari 24 jam sebelum waktu sewa: DP dikembalikan 50%.</li>
                            <li>Pembatalan mendadak (&lt;24 jam): DP hangus.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card border-0 shadow h-100 p-4">
                        <h5 class="fw-bold text-primary mb-3"><i class="fas fa-shield-alt me-2"></i>8. Force Majeure</h5>
                        <ul class="text-muted">
                            <li>Kami tidak bertanggung jawab atas keterlambatan atau pembatalan layanan akibat bencana alam, kerusuhan, atau keadaan darurat lain di luar kendali kami.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <div class="card border-0 shadow p-4">
                    <h5 class="fw-bold text-success mb-3"><i class="fas fa-handshake me-2"></i>9. Persetujuan</h5>
                    <p class="text-muted mb-0">Dengan menggunakan layanan kami, pelanggan menyetujui seluruh syarat dan ketentuan yang berlaku.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
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
                            <i class="fas fa-envelope fa-2x"></i>
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
                        <div class="feature-icon mb-3">
                            <i class="fas fa-phone fa-2x"></i>
                        </div>
                        <h5 class="fw-bold">Telepon</h5>
                        <p class="text-muted mb-3">Hubungi kami langsung</p>
                        <a href="https://wa.me/+6285211912131" class="btn btn-outline-primary" target="_blank">
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
                        <a href="https://wa.me/+6285211912131" class="btn btn-outline-success" target="_blank">
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

    <!-- Founder Section -->
    <section id="founder" class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Founder JR Rental</h2>
                <p class="text-muted">Orang di balik layanan berkualitas kami</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4 col-lg-4">
                    <div class="card border-0 shadow text-center p-4">
                        <img src="{{asset('profile.jpg')}}"
                             alt="Foto Founder" class="rounded-circle mx-auto mb-4" width="150" height="150" style="object-fit: cover;">
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
                        <img src="{{ asset('Juando.jpg') }}"
                             alt="Foto Founder" class="rounded-circle mx-auto mb-4" width="150" height="150" style="object-fit: cover;">
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
                        <i class="fas fa-car me-2"></i>JR|RentalMobil
                    </h5>
                    <p class="text-light">Platform rental mobil terpercaya dengan pelayanan terbaik di Indonesia. Wujudkan perjalanan impian Anda bersama kami.</p>
                    <div class="d-flex gap-3">
                        <a href="https://www.instagram.com/jrrental_" class="text-light" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.tiktok.com/@jr..rental.kampar" class="text-light" target="_blank"><i class="fab fa-tiktok"></i></a>
                        <a href="https://wa.me/+6285211912131" class="text-light" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h6 class="fw-bold mb-3">Layanan</h6>
                    <ul class="list-unstyled">
                        <li><a href="#promo" class="text-light text-decoration-none">Promo Terbaru</a></li>
                        <li><a href="#cars" class="text-light text-decoration-none">Daftar Mobil</a></li>
                        <li><a href="#terms" class="text-light text-decoration-none">Syarat & Ketentuan</a></li>
                        <li><a href="#lokasi" class="text-light text-decoration-none">Lokasi Kami</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h6 class="fw-bold mb-3">Kontak</h6>
                    <ul class="list-unstyled">
                        <li class="text-light"><i class="fas fa-map-marker-alt me-2"></i>Jl. Tuanku Tambusai No 23 Bangkinang</li>
                        <li class="text-light"><i class="fas fa-phone me-2"></i>+6285211912131</li>
                        <li class="text-light"><i class="fas fa-envelope me-2"></i>ranggayomudo01@gmail.com</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2024 JR RentalMobil. Semua hak dilindungi.</p>
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
        document.querySelectorAll('.car-card .btn-success').forEach(button => {
            button.addEventListener('click', function() {
                const carName = this.closest('.card').querySelector('.card-title').textContent;
                console.log(`Mengarahkan ke WhatsApp untuk ${carName}`);
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

        // Promo banner animation
        const promoBanner = document.querySelector('.promo-banner');
        let isAnimating = false;

        setInterval(() => {
            if (!isAnimating) {
                isAnimating = true;
                promoBanner.style.transform = 'scale(1.02)';
                setTimeout(() => {
                    promoBanner.style.transform = 'scale(1)';
                    isAnimating = false;
                }, 200);
            }
        }, 3000);
    </script>

</body>
</html>