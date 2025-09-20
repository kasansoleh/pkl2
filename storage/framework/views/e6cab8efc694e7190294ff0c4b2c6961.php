<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - DTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #f8f9fa;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3');
            background-size: cover;
            background-position: center;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }
        .content-section {
            padding: 60px 0;
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">PKL SMK Islam 1 Blitar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo e(route('home')); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Data Pembimbing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Panduan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.smkislam1blitar.sch.id" target="_blank">Web SMKI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="display-6 fw-bold">Selamat Datang</h1>
            <h1 class="display-4 fw-bold">di Aplikasi PKL Teknik Mesin</h1>
            <p class="lead">"Kritis, Kreatif, Berbeda"</p>
            
              <?php if(isset($siswa) && $siswa): ?>
            <div class="alert alert-info mt-4">
                <h5>Hai, <?php echo e($siswa->nama); ?>!</h5>
                <p class="mb-0">Anda sudah login sebagai siswa. <a href="<?php echo e(route('dashboard')); ?>">Klik di sini</a> untuk menuju dashboard.</p>
            </div>
        <?php else: ?>
            <a href="<?php echo e(route('login')); ?>" class="btn btn-light btn-lg mt-3">Login Siswa</a>
        <?php endif; ?>
    </div>
</section>
        </div>
    </section>

    <!-- Content Section -->
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title">Data Pembimbing</h5>
                            <p class="card-text">Akses informasi mengenai pembimbing akademik dan industri</p>
                            <a href="#" class="btn btn-primary">Lihat Data</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title">Panduan</h5>
                            <p class="card-text">Panduan lengkap untuk siswa dan pembimbing</p>
                            <a href="#" class="btn btn-primary">Baca Panduan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title">Web SMKI</h5>
                            <p class="card-text">Kunjungi website resmi SMK Islam 1 Blitar</p>
                            <a href="https://www.smkislam1blitar.sch.id" target="_blank" class="btn btn-primary">Kunjungi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Mr. TAURUS. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\laragon\www\pkl2\resources\views/home.blade.php ENDPATH**/ ?>