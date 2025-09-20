<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data DUDI - Aplikasi PKL SMK Islam 1 Blitar</title>
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
            border-collapse: separate;
            border-spacing: 0;
        }
        
        .table th {
            background-color: #f8f9fc;
            font-weight: 600;
            color: #4e73df;
            border-top: 1px solid #e3e6f0;
            padding: 12px 15px;
            text-align: center;
            vertical-align: middle;
        }
        
        .table td {
            vertical-align: middle;
            padding: 12px 15px;
            text-align: center;
            border-top: 1px solid #e3e6f0;
        }
        
        .btn-tambah {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }
        
        .btn-tambah:hover {
            background-color: #2e59d9;
            transform: translateY(-2px);
            color: white;
        }
        
        .btn-tambah i {
            margin-right: 5px;
        }
        
        .btn-aksi {
            padding: 5px 10px;
            margin: 0 2px;
            font-size: 12px;
        }
        
        .btn-edit {
            background-color: #36b9cc;
            color: white;
        }
        
        .btn-hapus {
            background-color: #e74a3b;
            color: white;
        }
        
        .entries-control {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .entries-select {
            width: auto;
            display: inline-block;
            padding: 5px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        
        .search-box {
            position: relative;
            max-width: 250px;
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
        
        .pagination {
            margin-bottom: 0;
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
                    <a href="<?php echo e(route('admin.dashboard')); ?>">
                        <i class="fas fa-home"></i> Beranda
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('admin.data-dudi')); ?>" class="active">
                        <i class="fas fa-building"></i> Data DUDI
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url('/admin/data-siswa')); ?>">
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
                    <p class="user-name"><?php echo e($admin->name); ?></p>
                    <p class="user-role">Administrator</p>
                </div>
                
                <div class="user-avatar dropdown">
                    <span><?php echo e(substr($admin->name, 0, 1)); ?></span>
                    <div class="dropdown-menu dropdown-menu-end">
                        <form method="POST" action="<?php echo e(route('admin.logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="dropdown-item">
                                <i class="fas fa-sign-out-alt me-2"></i> Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Data DUDI Section -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">Data DUDI</h5>
                <a href="<?php echo e(route('admin.tambah-dudi')); ?>" class="btn btn-tambah">
                    <i class="fas fa-plus"></i> Tambah Data
                </a>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="entries-control">
                        <span>Show</span>
                        <select class="entries-select">
                            <option>10</option>
                            <option>25</option>
                            <option>50</option>
                            <option>100</option>
                        </select>
                        <span>Entries</span>
                    </div>
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </div>

                <div class="table-container">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nama DUDI</th>
                                <th>Alamat DUDI</th>
                                <th>No. Telp</th>
                                <th>Jenis Usaha</th>
                                <th>Nama Pimpinan</th>
                                <th>Kuota</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($dudi->count() > 0): ?>
                                <?php $__currentLoopData = $dudi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($d->nama_dudi); ?></td>
                                    <td><?php echo e($d->alamat_dudi); ?></td>
                                    <td><?php echo e($d->no_telp); ?></td>
                                    <td><?php echo e($d->jenis_usaha); ?></td>
                                    <td><?php echo e($d->nama_pimpinan); ?></td>
                                    <td><?php echo e($d->kuota); ?></td>
                                   <td>
    <a href="<?php echo e(route('admin.edit-dudi', $d->id)); ?>" class="btn btn-edit btn-aksi">
        <i class="fas fa-edit"></i> Ubah
    </a>
    <form action="<?php echo e(route('admin.hapus-dudi', $d->id)); ?>" method="POST" class="d-inline">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-hapus btn-aksi" 
                onclick="return confirm('Apakah Anda yakin ingin menghapus data DUDI ini?')">
            <i class="fas fa-trash"></i> Hapus
        </button>
    </form>
</td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="7" class="text-center">
                                        <div class="py-4">
                                            <i class="fas fa-building fs-1 text-muted"></i>
                                            <p class="mt-2">Belum ada data DUDI</p>
                                            <a href="<?php echo e(route('admin.tambah-dudi')); ?>" class="btn btn-tambah mt-2">
                                                <i class="fas fa-plus"></i> Tambah Data DUDI
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div>
                        Showing <?php echo e($dudi->firstItem()); ?> to <?php echo e($dudi->lastItem()); ?> of <?php echo e($dudi->total()); ?> entries
                    </div>
                    <nav>
                        <?php echo e($dudi->links()); ?>

                    </nav>
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

        // Entries select functionality
        document.querySelector('.entries-select').addEventListener('change', function() {
            // Implement entries per page change
            console.log('Entries per page changed to:', this.value);
        });
    </script>
</body>
</html><?php /**PATH C:\laragon\www\pkl2\resources\views/admin/data-dudi.blade.php ENDPATH**/ ?>