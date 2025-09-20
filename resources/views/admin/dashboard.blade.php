 <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Aplikasi PKL SMK Islam 1 Blitar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome@6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #f8f9fc;
            --success-color: #1cc88a;
            --warning-color: #f6c23e;
            --danger-color: #e74a3b;
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
        
        /* Stats Cards */
        .stats-cards {
            margin-bottom: 30px;
        }
        
        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            border-left: 4px solid var(--primary-color);
        }
        
        .stat-card.pengajuan {
            border-left-color: var(--primary-color);
        }
        
        .stat-card.diterima {
            border-left-color: var(--success-color);
        }
        
        .stat-card.ditolak {
            border-left-color: var(--danger-color);
        }
        
        .stat-card.siswa {
            border-left-color: var(--warning-color);
        }
        
        .stat-card h5 {
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }
        
        .stat-card .stat-number {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .stat-card .stat-icon {
            font-size: 30px;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .stat-card.diterima .stat-number,
        .stat-card.diterima .stat-icon {
            color: var(--success-color);
        }
        
        .stat-card.ditolak .stat-number,
        .stat-card.ditolak .stat-icon {
            color: var(--danger-color);
        }
        
        .stat-card.siswa .stat-number,
        .stat-card.siswa .stat-icon {
            color: var(--warning-color);
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
                    <a href="{{ route('admin.dashboard') }}" class="active">
                        <i class="fas fa-home"></i> Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.data-dudi') }}">
                        <i class="fas fa-building"></i> Data DUDI
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin/data-siswa') }}">
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
                <h1>HALAMAN ADMIN</h1>
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

        <!-- Welcome Section -->
        <div class="welcome-section">
            <h2>Aplikasi PKL SMK Islam 1 Blitar</h2>
            <div class="app-name">
                Sistem Management Prakerin dan Pengajuan PKL
            </div>
        </div>

        <!-- Stats Section -->
        <div class="row stats-cards">
            <div class="col-xl-3 col-md-6">
                <div class="stat-card pengajuan">
                    <div class="stat-icon">
                        <i class="fas fa-paper-plane"></i>
                    </div>
                    <h5>Pengajuan Masuk</h5>
                    <div class="stat-number">{{ $pengajuanMenunggu }}</div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="stat-card diterima">
                    <div class="stat-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h5>Pengajuan Diterima</h5>
                    <div class="stat-number">{{ $pengajuanDiterima }}</div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="stat-card ditolak">
                    <div class="stat-icon">
                        <i class="fas fa-times-circle"></i>
                    </div>
                    <h5>Pengajuan Ditolak</h5>
                    <div class="stat-number">{{ $pengajuanDitolak }}</div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="stat-card siswa">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h5>Total Siswa</h5>
                    <div class="stat-number">{{ $totalSiswa }}</div>
                </div>
            </div>
        </div>

        <!-- Additional Stats -->
        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h5>Total DUDI</h5>
                    <div class="stat-number">220</div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <small>Tersedia: 120</small>
                        </div>
                        <div class="col-6">
                            <small>Penuh: 100</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h5>Total Admin</h5>
                    <div class="stat-number">{{ $totalAdmin }}</div>
                </div>
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