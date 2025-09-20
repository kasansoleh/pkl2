<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Aplikasi PKL SMK Islam 1 Blitar</title>
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
        
        /* Welcome Section */
        .welcome-section {
            background: white;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .welcome-section h2 {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .app-name {
            font-size: 18px;
            color: #6e707e;
            margin-bottom: 20px;
            padding-left: 10px;
            border-left: 4px solid var(--primary-color);
        }
        
        /* Info Cards */
        .info-cards {
            margin-bottom: 25px;
        }
        
        .info-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            height: 100%;
            transition: all 0.3s;
            border-top: 4px solid var(--primary-color);
            margin-bottom: 20px;
        }
        
        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .info-card h5 {
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }
        
        .info-card p {
            color: #6e707e;
            margin-bottom: 0;
        }
        
        .info-card i {
            font-size: 30px;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        /* Progress Section */
        .progress-section {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
        }
        
        .progress-section h5 {
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
        }
        
        .progress-bar {
            height: 10px;
            margin-bottom: 20px;
        }
        
        .progress-steps {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .progress-steps li {
            padding: 10px 0;
            border-bottom: 1px solid #e3e6f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .progress-steps li:last-child {
            border-bottom: none;
        }
        
        .status-badge {
            font-size: 12px;
            padding: 5px 10px;
            border-radius: 20px;
        }
        
        .badge-success {
            background-color: #1cc88a;
            color: white;
        }
        
        .badge-warning {
            background-color: #f6c23e;
            color: white;
        }
        
        .badge-secondary {
            background-color: #858796;
            color: white;
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
                    <a href="{{ route('dashboard') }}" class="active">
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
                <h1>BERANDA</h1>
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

        <!-- Welcome Section -->
        <div class="welcome-section">
            <h2>{{ $siswa->nama }}</h2>
            <div class="app-name">
                Aplikasi Permohonan PKL Teknik Mesin SMK Islam 1 Blitar
            </div>
        </div>

        <!-- Info Cards -->
        <div class="row info-cards">
            <div class="col-md-6">
                <div class="info-card">
                    <i class="fas fa-file-alt"></i>
                    <h5>Form Permohonan</h5>
                    <p>Ajukan permohonan PKL dengan mengisi form yang disediakan</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-card">
                    <i class="fas fa-check-circle"></i>
                    <h5>Status Pengajuan</h5>
                    <p>Pantau status pengajuan PKL Anda secara real-time</p>
                </div>
            </div>
        </div>

        <!-- Progress Section -->
        <div class="progress-section">
            <h5>Progress PKL</h5>
            
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            
            <p><strong>Status:</strong> Pengajuan Sedang Diproses</p>
            
            <ul class="progress-steps">
                <li>
                    <span>Formulir Pendaftaran</span>
                    <span class="badge badge-success">Selesai</span>
                </li>
                <li>
                    <span>Dokumen Persyaratan</span>
                    <span class="badge badge-success">Selesai</span>
                </li>
                <li>
                    <span>Verifikasi Pembimbing</span>
                    <span class="badge badge-warning">Proses</span>
                </li>
                <li>
                    <span>Penempatan DUDI</span>
                    <span class="badge badge-secondary">Menunggu</span>
                </li>
            </ul>
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
    </script>
</body>
</html>