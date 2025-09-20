<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Permohonan PKL - Aplikasi PKL SMK Islam 1 Blitar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #f8f9fc;
            --accent-color: #36b9cc;
            --sidebar-width: 250px;
        }
        
        body {
            background-color: #f8f9fc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
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
        
        /* Responsive */
        @media (max-width: 768px) {
            #sidebar {
                margin-left: -var(--sidebar-width);
                width: 200px;
            }
            
            #content {
                margin-left: 0;
                padding: 15px;
            }
            
            #sidebar.active {
                margin-left: 0;
            }
            
            #content.active {
                margin-left: 200px;
            }
            
            .sidebar-toggle {
                display: block !important;
            }
            
            .topbar {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .user-menu {
                margin-top: 15px;
                width: 100%;
                justify-content: space-between;
            }
        }
        
        .sidebar-toggle {
            display: none;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            font-size: 20px;
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
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('info-dudi') }}">
                        <i class="fas fa-building"></i> Info DUDI
                    </a>
                </li>
                <li>
                    <a href="{{ route('daftar-pkl') }}">
                        <i class="fas fa-clipboard-list"></i> Daftar PKL
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <div class="topbar">
            <button class="sidebar-toggle" id="sidebarToggle">
                <i class="fas fa-bars"></i>
            </button>
            
            <div class="page-title">
                <h1>Tambah Permohonan PKL</h1>
            </div>
            
            <div class="user-menu">
                <div class="user-info">
                    <p class="user-name">{{ $siswa->nama }}</p>
                    <p class="user-role">Siswa</p>
                </div>
                
                <div class="user-avatar dropdown">
                    <span>{{ substr($siswa->nama, 0, 1) }}</span>
                    <div class="dropdown-menu dropdown-menu-end">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="fas fa-sign-out-alt me-2"></i> Sign Out
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Section -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">Form Permohonan PKL</h5>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
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

                <form method="POST" action="{{ route('tambah-permohonan.store') }}">
                    @csrf
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nama_dudi" class="form-label required-field">Nama DUDI</label>
                            <input type="text" class="form-control" id="nama_dudi" name="nama_dudi" required
                                value="{{ old('nama_dudi') }}" placeholder="Masukkan nama perusahaan">
                        </div>
                        <div class="col-md-6">
                            <label for="bidang_usaha" class="form-label required-field">Bidang Usaha</label>
                            <input type="text" class="form-control" id="bidang_usaha" name="bidang_usaha" required
                                value="{{ old('bidang_usaha') }}" placeholder="Contoh: Teknologi, Manufaktur, dll">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="alamat_dudi" class="form-label required-field">Alamat DUDI</label>
                            <textarea class="form-control" id="alamat_dudi" name="alamat_dudi" rows="3" required
                                placeholder="Masukkan alamat lengkap perusahaan">{{ old('alamat_dudi') }}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="kontak_dudi" class="form-label required-field">Kontak DUDI</label>
                            <input type="text" class="form-control" id="kontak_dudi" name="kontak_dudi" required
                                value="{{ old('kontak_dudi') }}" placeholder="Nomor telepon/email perusahaan">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="tanggal_mulai" class="form-label required-field">Tanggal Mulai PKL</label>
                            <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required
                                value="{{ old('tanggal_mulai') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal_selesai" class="form-label required-field">Tanggal Selesai PKL</label>
                            <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required
                                value="{{ old('tanggal_selesai') }}">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle me-2"></i>
                                Pastikan data yang diisi sudah benar. Permohonan akan diverifikasi oleh pembimbing.
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('daftar-pkl') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left me-2"></i> Kembali
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane me-2"></i> Ajukan Permohonan
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
        // Toggle sidebar on mobile
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('active');
            document.getElementById('content').classList.toggle('active');
        });
        
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

        // Date validation
        document.getElementById('tanggal_mulai').addEventListener('change', function() {
            const mulai = new Date(this.value);
            const selesai = new Date(document.getElementById('tanggal_selesai').value);
            
            if (selesai && selesai < mulai) {
                document.getElementById('tanggal_selesai').value = '';
                alert('Tanggal selesai harus setelah tanggal mulai');
            }
        });

        document.getElementById('tanggal_selesai').addEventListener('change', function() {
            const selesai = new Date(this.value);
            const mulai = new Date(document.getElementById('tanggal_mulai').value);
            
            if (mulai && selesai < mulai) {
                alert('Tanggal selesai harus setelah tanggal mulai');
                this.value = '';
            }
        });
    </script>
</body>
</html>