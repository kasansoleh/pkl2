<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa - Aplikasi PKL SMK Islam 1 Blitar</title>
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
                    <a href="<?php echo e(route('admin.data-dudi')); ?>">
                        <i class="fas fa-building"></i> Data DUDI
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('admin.data-siswa')); ?>" class="active">
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
                    <p class="user-name">Administrator</p>
                    <p class="user-role">Admin Sistem</p>
                </div>
                
                <div class="user-avatar dropdown">
                    <span>A</span>
                    <div class="dropdown-menu dropdown-menu-end">
                        <form method="POST" action="#">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="dropdown-item">
                                <i class="fas fa-sign-out-alt me-2"></i> Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Siswa Section -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">Data Siswa</h5>
                <button class="btn btn-tambah" data-bs-toggle="modal" data-bs-target="#tambahModal">
                    <i class="fas fa-plus"></i> Tambah Data
                </button>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="entries-control">
                        <span>Show</span>
                        <select class="entries-select">
                            <option>10</option>
                            <option>25</option>
                            <option selected>50</option>
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
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Alamat</th>
                                <th>Kelas</th>
                                <th>No HP</th>
                                <th>Jenis Kelamin</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ahmad Fauzi</td>
                                <td>Jl. Merdeka No. 123</td>
                                <td>XII TKJ 1</td>
                                <td>081234567890</td>
                                <td>Laki-laki</td>
                                <td>
                                    <button class="btn btn-edit btn-aksi" data-bs-toggle="modal" data-bs-target="#editModal">
                                        <i class="fas fa-edit"></i> Ubah
                                    </button>
                                    <button class="btn btn-hapus btn-aksi" data-bs-toggle="modal" data-bs-target="#hapusModal">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Siti Rahayu</td>
                                <td>Jl. Diponegoro No. 45</td>
                                <td>XII MM 2</td>
                                <td>081298765432</td>
                                <td>Perempuan</td>
                                <td>
                                    <button class="btn btn-edit btn-aksi" data-bs-toggle="modal" data-bs-target="#editModal">
                                        <i class="fas fa-edit"></i> Ubah
                                    </button>
                                    <button class="btn btn-hapus btn-aksi" data-bs-toggle="modal" data-bs-target="#hapusModal">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Budi Santoso</td>
                                <td>Jl. Pahlawan No. 67</td>
                                <td>XII RPL 1</td>
                                <td>081345678901</td>
                                <td>Laki-laki</td>
                                <td>
                                    <button class="btn btn-edit btn-aksi" data-bs-toggle="modal" data-bs-target="#editModal">
                                        <i class="fas fa-edit"></i> Ubah
                                    </button>
                                    <button class="btn btn-hapus btn-aksi" data-bs-toggle="modal" data-bs-target="#hapusModal">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <div>
                        Showing 1 to 3 of 3 entries
                    </div>
                    <nav>
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>&copy; 2023 Aplikasi PKL SMK Islam 1 Blitar. All rights reserved.</p>
        </div>
    </div>

    <!-- Modal Tambah Data -->
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahModalLabel">Tambah Data Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formTambah">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Siswa</label>
                            <input type="text" class="form-control" id="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" rows="2" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <input type="text" class="form-control" id="kelas" required>
                        </div>
                        <div class="mb-3">
                            <label for="noHp" class="form-label">No HP</label>
                            <input type="text" class="form-control" id="noHp" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenisKelamin" id="laki" value="Laki-laki" required>
                                    <label class="form-check-label" for="laki">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenisKelamin" id="perempuan" value="Perempuan">
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="btnSimpan">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Data -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formEdit">
                        <div class="mb-3">
                            <label for="editNama" class="form-label">Nama Siswa</label>
                            <input type="text" class="form-control" id="editNama" value="Ahmad Fauzi" required>
                        </div>
                        <div class="mb-3">
                            <label for="editAlamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="editAlamat" rows="2" required>Jl. Merdeka No. 123</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editKelas" class="form-label">Kelas</label>
                            <input type="text" class="form-control" id="editKelas" value="XII TKJ 1" required>
                        </div>
                        <div class="mb-3">
                            <label for="editNoHp" class="form-label">No HP</label>
                            <input type="text" class="form-control" id="editNoHp" value="081234567890" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="editJenisKelamin" id="editLaki" value="Laki-laki" checked required>
                                    <label class="form-check-label" for="editLaki">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="editJenisKelamin" id="editPerempuan" value="Perempuan">
                                    <label class="form-check-label" for="editPerempuan">Perempuan</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="btnUpdate">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Hapus Data -->
    <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusModalLabel">Hapus Data Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus data siswa <strong>Ahmad Fauzi</strong>?</p>
                    <p class="text-danger">Data yang dihapus tidak dapat dikembalikan.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger" id="btnHapus">Hapus</button>
                </div>
            </div>
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

        // Data siswa (simulasi database)
        let dataSiswa = [
            { id: 1, nama: "Ahmad Fauzi", alamat: "Jl. Merdeka No. 123", kelas: "XII TKJ 1", noHp: "081234567890", jenisKelamin: "Laki-laki" },
            { id: 2, nama: "Siti Rahayu", alamat: "Jl. Diponegoro No. 45", kelas: "XII MM 2", noHp: "081298765432", jenisKelamin: "Perempuan" },
            { id: 3, nama: "Budi Santoso", alamat: "Jl. Pahlawan No. 67", kelas: "XII RPL 1", noHp: "081345678901", jenisKelamin: "Laki-laki" }
        ];

        // Variabel global untuk menyimpan data yang sedang diedit/dihapus
        let currentEditId = null;
        let currentDeleteId = null;

        // Fungsi untuk menampilkan data siswa ke tabel
        function renderData() {
            const tbody = document.querySelector('tbody');
            tbody.innerHTML = '';
            
            dataSiswa.forEach((siswa, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${index + 1}</td>
                    <td>${siswa.nama}</td>
                    <td>${siswa.alamat}</td>
                    <td>${siswa.kelas}</td>
                    <td>${siswa.noHp}</td>
                    <td>${siswa.jenisKelamin}</td>
                    <td>
                        <button class="btn btn-edit btn-aksi btn-edit-row" data-id="${siswa.id}">
                            <i class="fas fa-edit"></i> Ubah
                        </button>
                        <button class="btn btn-hapus btn-aksi btn-hapus-row" data-id="${siswa.id}">
                            <i class="fas fa-trash"></i> Hapus
                        </button>
                    </td>
                `;
                tbody.appendChild(row);
            });
            
            // Tambahkan event listener untuk tombol edit dan hapus
            document.querySelectorAll('.btn-edit-row').forEach(btn => {
                btn.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    editSiswa(id);
                });
            });
            
            document.querySelectorAll('.btn-hapus-row').forEach(btn => {
                btn.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    showHapusModal(id);
                });
            });
        }

        // Fungsi untuk menambah data siswa
        document.getElementById('btnSimpan').addEventListener('click', function() {
            const nama = document.getElementById('nama').value;
            const alamat = document.getElementById('alamat').value;
            const kelas = document.getElementById('kelas').value;
            const noHp = document.getElementById('noHp').value;
            const jenisKelamin = document.querySelector('input[name="jenisKelamin"]:checked').value;
            
            // Validasi
            if (!nama || !alamat || !kelas || !noHp || !jenisKelamin) {
                alert('Semua field harus diisi!');
                return;
            }
            
            // Tambahkan data baru
            const newId = dataSiswa.length > 0 ? Math.max(...dataSiswa.map(s => s.id)) + 1 : 1;
            dataSiswa.push({
                id: newId,
                nama,
                alamat,
                kelas,
                noHp,
                jenisKelamin
            });
            
            // Render ulang data
            renderData();
            
            // Tutup modal dan reset form
            const modal = bootstrap.Modal.getInstance(document.getElementById('tambahModal'));
            modal.hide();
            document.getElementById('formTambah').reset();
            
            alert('Data siswa berhasil ditambahkan!');
        });

        // Fungsi untuk menampilkan form edit
        function editSiswa(id) {
            const siswa = dataSiswa.find(s => s.id == id);
            if (!siswa) return;
            
            currentEditId = id;
            
            // Isi form edit dengan data siswa
            document.getElementById('editNama').value = siswa.nama;
            document.getElementById('editAlamat').value = siswa.alamat;
            document.getElementById('editKelas').value = siswa.kelas;
            document.getElementById('editNoHp').value = siswa.noHp;
            
            // Set jenis kelamin
            if (siswa.jenisKelamin === 'Laki-laki') {
                document.getElementById('editLaki').checked = true;
            } else {
                document.getElementById('editPerempuan').checked = true;
            }
            
            // Tampilkan modal edit
            const modal = new bootstrap.Modal(document.getElementById('editModal'));
            modal.show();
        }

        // Fungsi untuk update data siswa
        document.getElementById('btnUpdate').addEventListener('click', function() {
            if (!currentEditId) return;
            
            const nama = document.getElementById('editNama').value;
            const alamat = document.getElementById('editAlamat').value;
            const kelas = document.getElementById('editKelas').value;
            const noHp = document.getElementById('editNoHp').value;
            const jenisKelamin = document.querySelector('input[name="editJenisKelamin"]:checked').value;
            
            // Validasi
            if (!nama || !alamat || !kelas || !noHp || !jenisKelamin) {
                alert('Semua field harus diisi!');
                return;
            }
            
            // Update data
            const index = dataSiswa.findIndex(s => s.id == currentEditId);
            if (index !== -1) {
                dataSiswa[index] = {
                    id: currentEditId,
                    nama,
                    alamat,
                    kelas,
                    noHp,
                    jenisKelamin
                };
            }
            
            // Render ulang data
            renderData();
            
            // Tutup modal
            const modal = bootstrap.Modal.getInstance(document.getElementById('editModal'));
            modal.hide();
            
            alert('Data siswa berhasil diubah!');
        });

        // Fungsi untuk menampilkan modal hapus
        function showHapusModal(id) {
            const siswa = dataSiswa.find(s => s.id == id);
            if (!siswa) return;
            
            currentDeleteId = id;
            
            // Update teks konfirmasi
            document.querySelector('#hapusModal strong').textContent = siswa.nama;
            
            // Tampilkan modal hapus
            const modal = new bootstrap.Modal(document.getElementById('hapusModal'));
            modal.show();
        }

        // Fungsi untuk hapus data siswa
        document.getElementById('btnHapus').addEventListener('click', function() {
            if (!currentDeleteId) return;
            
            // Hapus data
            dataSiswa = dataSiswa.filter(s => s.id != currentDeleteId);
            
            // Render ulang data
            renderData();
            
            // Tutup modal
            const modal = bootstrap.Modal.getInstance(document.getElementById('hapusModal'));
            modal.hide();
            
            alert('Data siswa berhasil dihapus!');
        });

        // Inisialisasi
        document.addEventListener('DOMContentLoaded', function() {
            renderData();
        });
    </script>
</body>
</html><?php /**PATH C:\laragon\www\pkl2\resources\views/admin/students/index.blade.php ENDPATH**/ ?>