<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info DUDI - Aplikasi PKL SMK Islam 1 Blitar</title>
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
        
        /* Table Styles */
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
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
        }
        
        .table-container {
            overflow-x: auto;
        }
        
        .table {
            width: 100%;
            margin-bottom: 0;
        }
        
        .table th {
            background-color: #f8f9fc;
            font-weight: 600;
            color: #4e73df;
            border-top: none;
            padding: 12px 15px;
        }
        
        .table td {
            vertical-align: middle;
            padding: 12px 15px;
        }
        
        .entries-select {
            width: auto;
            display: inline-block;
            margin: 0 5px;
            padding: 5px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        
        .pagination {
            margin-bottom: 0;
        }
        
        .search-box {
            position: relative;
            max-width: 300px;
        }
        
        .search-box input {
            padding-left: 35px;
            border-radius: 20px;
        }
        
        .search-box i {
            position: absolute;
            left: 12px;
            top: 10px;
            color: #6e707e;
        }
        
        /* Status Badges */
        .badge {
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
        }
        
        .badge-kuota {
            background-color: #e74a3b;
            color: white;
        }
        
        .badge-terisi {
            background-color: #1cc88a;
            color: white;
        }
        
        .badge-sedang {
            background-color: #f6c23e;
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
        
        /* Table Row Hover */
        .table-hover tbody tr:hover {
            background-color: rgba(78, 115, 223, 0.05);
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
            
            .card-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
            
            .table th, .table td {
                padding: 8px 10px;
                font-size: 14px;
            }
            
            .search-box {
                max-width: 100%;
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
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('info-dudi') }}" class="active">
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
                <h1>HALAMAN SISWA</h1>
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

        <!-- Info DUDI Section -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">Informasi Tempat PKL/DUDI</h5>
                <div class="d-flex align-items-center">
                    <span>Show</span>
                    <select class="form-select form-select-sm entries-select">
                        <option>10</option>
                        <option selected>50</option>
                        <option>100</option>
                    </select>
                    <span>Entries</span>
                </div>
            </div>
            <div class="card-body">
                <div class="table-container">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nama DUDI</th>
                                <th>Alamat</th>
                                <th>Kuota</th>
                                <th>Terisi</th>
                                <th>Pembimbing</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PT. Elektro Makmur Sejahtera</td>
                                <td>Jl. Raya Kanigoro No. 45, Blitar</td>
                                <td><span class="badge badge-kuota">10</span></td>
                                <td><span class="badge badge-terisi">8</span></td>
                                <td>Budi Santoso, S.Kom</td>
                            </tr>
                            <tr>
                                <td>CV. Teknologi Indonesia</td>
                                <td>Jl. Merdeka No. 12, Blitar</td>
                                <td><span class="badge badge-kuota">15</span></td>
                                <td><span class="badge badge-terisi">12</span></td>
                                <td>Dewi Anggraeni, M.T</td>
                            </tr>
                            <tr>
                                <td>PT. Jaya Abadi Elektronik</td>
                                <td>Jl. Diponegoro No. 78, Blitar</td>
                                <td><span class="badge badge-kuota">8</span></td>
                                <td><span class="badge badge-terisi">5</span></td>
                                <td>Rudi Hermawan, S.T</td>
                            </tr>
                            <tr>
                                <td>UD. Sinar Baru</td>
                                <td>Jl. Ahmad Yani No. 33, Blitar</td>
                                <td><span class="badge badge-kuota">12</span></td>
                                <td><span class="badge badge-terisi">10</span></td>
                                <td>Linda Suryani, S.Pd</td>
                            </tr>
                            <tr>
                                <td>PT. Global Komputindo</td>
                                <td>Jl. Sudirman No. 56, Blitar</td>
                                <td><span class="badge badge-kuota">20</span></td>
                                <td><span class="badge badge-sedang">15</span></td>
                                <td>Agus Setiawan, M.Kom</td>
                            </tr>
                            <tr>
                                <td>CV. Mandiri Teknik</td>
                                <td>Jl. Gatot Subroto No. 22, Blitar</td>
                                <td><span class="badge badge-kuota">6</span></td>
                                <td><span class="badge badge-terisi">4</span></td>
                                <td>Fitri Handayani, S.T</td>
                            </tr>
                            <tr>
                                <td>PT. Cipta Karya Elektrik</td>
                                <td>Jl. Panglima Sudirman No. 89, Blitar</td>
                                <td><span class="badge badge-kuota">18</span></td>
                                <td><span class="badge badge-sedang">12</span></td>
                                <td>Joko Prasetyo, M.Eng</td>
                            </tr>
                            <tr>
                                <td>UD. Teknik Jaya</td>
                                <td>Jl. Veteran No. 67, Blitar</td>
                                <td><span class="badge badge-kuota">9</span></td>
                                <td><span class="badge badge-terisi">7</span></td>
                                <td>Sari Indah, S.Pd</td>
                            </tr>
                            <tr>
                                <td>PT. Andalan Elektronik</td>
                                <td>Jl. Hayam Wuruk No. 14, Blitar</td>
                                <td><span class="badge badge-kuota">14</span></td>
                                <td><span class="badge badge-terisi">11</span></td>
                                <td>Anton Wijaya, S.T</td>
                            </tr>
                            <tr>
                                <td>CV. Bintang Terang</td>
                                <td>Jl. Imam Bonjol No. 31, Blitar</td>
                                <td><span class="badge badge-kuota">7</span></td>
                                <td><span class="badge badge-terisi">5</span></td>
                                <td>Rina Wijayanti, M.T</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div>
                        Showing 1 to 10 of 100 entries
                    </div>
                    <nav>
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#">Previous</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">5</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">6</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Search Box -->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </div>
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

        // Search functionality
        document.querySelector('.search-box input').addEventListener('keyup', function() {
            var searchText = this.value.toLowerCase();
            var rows = document.querySelectorAll('.table tbody tr');
            
            rows.forEach(function(row) {
                var rowText = row.textContent.toLowerCase();
                if (rowText.indexOf(searchText) === -1) {
                    row.style.display = 'none';
                } else {
                    row.style.display = '';
                }
            });
        });
    </script>
</body>
</html>