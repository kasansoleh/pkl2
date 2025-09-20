<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah DUDI - Aplikasi PKL SMK Islam 1 Blitar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome@6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #f8f9fc;
            --sidebar-width: 250px;
        }
        
        body {
            background-color: #f8f9fc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        /* Sidebar Styles */
        #sidebar {
            background: linear-gradient(180deg, var(--primary-color) 0%, #224abe 100%);
            color: white;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: var(--sidebar-width);
            padding-top: 20px;
            transition: all 0.3s;
            z-index: 1000;
            box-shadow: 5px 0 15px rgba(0, 0, 0, 0.1);
        }
        
        .sidebar-header {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .sidebar-header h4 {
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .sidebar-header p {
            margin-bottom: 0;
            font-size: 14px;
        }
        
        .sidebar-menu {
            padding: 20px 0;
        }
        
        .sidebar-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .sidebar-menu li {
            margin-bottom: 5px;
        }
        
        .sidebar-menu a {
            color: rgba(255, 255, 255, 0.8);
            padding: 12px 20px;
            text-decoration: none;
            display: block;
            transition: all 0.3s;
            border-left: 4px solid transparent;
        }
        
        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            border-left: 4px solid white;
        }
        
        .sidebar-menu i {
            width: 25px;
            margin-right: 10px;
        }
        
        /* Main Content Styles */
        #content {
            margin-left: var(--sidebar-width);
            padding: 20px;
            transition: all 0.3s;
            min-height: 100vh;
        }
        
        /* Navbar Styles */
        .topbar {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .page-title h1 {
            font-size: 24px;
            font-weight: 700;
            color: #333;
            margin-bottom: 0;
        }
        
        .user-menu {
            display: flex;
            align-items: center;
        }
        
        .user-info {
            margin-right: 15px;
            text-align: right;
        }
        
        .user-name {
            font-weight: 600;
            color: #333;
            margin-bottom: 0;
            font-size: 16px;
        }
        
        .user-role {
            font-size: 12px;
            color: #6e707e;
            margin-bottom: 0;
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            cursor: pointer;
            position: relative;
        }
        
        .dropdown-menu {
            left: auto !important;
            right: 0;
            transform: translateX(0) !important;
        }
        
        /* Form Styles */
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
        }
        
        .card-header {
            background: white;
            border-bottom: 1px solid #e3e6f0;
            font-weight: 700;
            padding: 15px 20px;
        }
        
        .card-body {
            padding: 25px;
        }
        
        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }
        
        .form-control {
            border-radius: 5px;
            padding: 10px 15px;
            border: 1px solid #d1d3e2;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            background-color: #2e59d9;
            transform: translateY(-2px);
        }
        
        .btn-secondary {
            background-color: #858796;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .btn-secondary:hover {
            background-color: #717384;
            transform: translateY(-2px);
        }
        
        /* Footer */
        .footer {
            text-align: center;
            padding: 20px;
            margin-top: 30px;
            color: #6e707e;
            font-size: 14px;
            border-top: 1px solid #e3e6f0;
        }
        
        .required-field::after {
            content: " *";
            color: #e74a3b;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h4>Aplikasi PKL</h4>
            <p>SMK Islam 1 Blitar</p>
        </div>
        
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-home"></i> Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.data-dudi') }}" class="active">
                        <i class="fas fa-building"></i> Data DUDI
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-users"></i> Data Siswa
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-user-tie"></i> Data Pembimbing
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-user-cog"></i> Akun Pengguna
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-clipboard-list"></i> Pengajuan PKL
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-chart-bar"></i> Rekap Data
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <div class="topbar">
            <div class="page-title">
                <h1>Tambah Data DUDI</h1>
            </div>
            
            <div class="user-menu">
                <div class="user-info">
                    <p class="user-name">{{ $admin->name }}</p>
                    <p class="user-role">Administrator</p>
                </div>
                
                <div class="user-avatar dropdown">
                    <span>{{ substr($admin->name, 0, 1) }}</span>
                    <div class="dropdown-menu dropdown-menu-end">
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="fas fa-sign-out-alt me-2"></i> Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Section -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">Form Tambah Data DUDI</h5>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form method="POST" action="{{ route('admin.tambah-dudi.store') }}">
                    @csrf
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nama_dudi" class="form-label required-field">Nama DUDI</label>
                            <input type="text" class="form-control" id="nama_dudi" name="nama_dudi" required
                                value="{{ old('nama_dudi') }}" placeholder="Masukkan nama DUDI">
                        </div>
                        <div class="col-md-6">
                            <label for="no_telp" class="form-label required-field">No. Telepon</label>
                            <input type="text" class="form-control" id="no_telp" name="no_telp" required
                                value="{{ old('no_telp') }}" placeholder="Contoh: 085815579285">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="jenis_usaha" class="form-label required-field">Jenis Usaha</label>
                            <input type="text" class="form-control" id="jenis_usaha" name="jenis_usaha" required
                                value="{{ old('jenis_usaha') }}" placeholder="Contoh: Bengkel, Teknologi, dll">
                        </div>
                        <div class="col-md-6">
                            <label for="nama_pimpinan" class="form-label required-field">Nama Pimpinan</label>
                            <input type="text" class="form-control" id="nama_pimpinan" name="nama_pimpinan" required
                                value="{{ old('nama_pimpinan') }}" placeholder="Nama pimpinan DUDI">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="kuota" class="form-label required-field">Kuota</label>
                            <input type="number" class="form-control" id="kuota" name="kuota" required
                                value="{{ old('kuota') }}" placeholder="Jumlah kuota siswa" min="1">
                        </div>
                        <div class="col-md-6">
                            <label for="alamat_dudi" class="form-label required-field">Alamat DUDI</label>
                            <textarea class="form-control" id="alamat_dudi" name="alamat_dudi" rows="3" required
                                placeholder="Masukkan alamat lengkap DUDI">{{ old('alamat_dudi') }}</textarea>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle me-2"></i>
                                Pastikan data yang diisi sudah benar. Data DUDI akan digunakan untuk proses PKL siswa.
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.data-dudi') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-2"></i> Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i> Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; 2023 Aplikasi PKL SMK Islam 1 Blitar. All rights reserved.</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Initialize dropdown
        var userAvatar = document.querySelector('.user-avatar');
        var dropdownMenu = document.querySelector('.dropdown-menu');
        
        userAvatar.addEventListener('click', function() {
            dropdownMenu.classList.toggle('show');
        });
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            if (!userAvatar.contains(event.target)) {
                dropdownMenu.classList.remove('show');
            }
        });
    </script>
</body>
</html>