<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" />

    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            background-color: #f8f9fc;
            min-height: 100vh;
            overflow-x: hidden;
            display: flex;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background: #4e73df;
            color: white;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0;
            bottom: 0;
            transition: all 0.3s ease;
            z-index: 1050;
        }

        .sidebar.hide {
            margin-left: -250px;
        }

        .sidebar .logo {
            font-size: 1.3rem;
            font-weight: bold;
            text-align: center;
            padding: 1.5rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .sidebar .nav-link {
            color: #d1d3e2;
            border-radius: 8px;
            margin: 4px 12px;
        }

        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            background-color: #2e59d9;
            color: #fff;
        }

        /* Main content */
        .main-content {
            flex-grow: 1;
            margin-left: 250px;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .main-content.full {
            margin-left: 0;
        }

        /* Navbar */
        .navbar {
            background: white;
            border-bottom: 1px solid #e3e6f0;
            padding: 0.8rem 1rem;
            position: sticky;
            top: 0;
            z-index: 50;
        }

        /* Card styling */
        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .card h5 {
            font-size: 1rem;
            color: #4e73df;
        }

        footer {
            margin-top: auto;
        }

        /* Overlay for mobile */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1049;
            display: none;
        }

        .overlay.show {
            display: block;
        }

        /* Mobile behavior */
        @media (max-width: 768px) {
            .sidebar {
                margin-left: -250px;
                position: fixed;
            }

            .sidebar.show {
                margin-left: 0;
            }

            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <nav class="sidebar" id="sidebar">
        <div class="logo">MyDashboard</div>
        <ul class="nav flex-column px-2">
            <li class="nav-item">
                <a class="nav-link active" href="#"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-people me-2"></i>Pengguna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-cash-coin me-2"></i>Transaksi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-gear me-2"></i>Pengaturan</a>
            </li>
            <li class="nav-item mt-auto">
                <a class="nav-link text-danger" href="#"><i class="bi bi-box-arrow-right me-2"></i>Keluar</a>
            </li>
        </ul>
    </nav>

    <!-- Overlay -->
    <div class="overlay" id="overlay"></div>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="btn btn-outline-primary" id="toggleSidebar">
                    <i class="bi bi-list"></i>
                </button>
                <h4 class="mb-0 ms-2">Dashboard</h4>

                <div class="dropdown ms-auto">
                    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown">
                        <img src="https://ui-avatars.com/api/?name=Admin" class="rounded-circle me-2" width="35"
                            height="35" />
                        <span>Admin</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-danger" href="#">Keluar</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Content -->
        <div class="container-fluid mt-4">
            <div class="row g-3">
                <div class="col-md-3">
                    <div class="card p-3">
                        <h5><i class="bi bi-person-fill me-2"></i>Pengguna</h5>
                        <h3 class="fw-bold mt-2">124</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3">
                        <h5><i class="bi bi-cash me-2"></i>Pendapatan</h5>
                        <h3 class="fw-bold mt-2">Rp 8.500.000</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3">
                        <h5><i class="bi bi-clipboard-data me-2"></i>Transaksi</h5>
                        <h3 class="fw-bold mt-2">305</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-3">
                        <h5><i class="bi bi-graph-up me-2"></i>Pertumbuhan</h5>
                        <h3 class="fw-bold mt-2">+12%</h3>
                    </div>
                </div>
            </div>

            <div class="card mt-4 p-4">
                <h5 class="mb-3">Aktivitas Terbaru</h5>
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Kegiatan</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Andi</td>
                            <td>Menambah data siswa</td>
                            <td>24 Okt 2025</td>
                            <td><span class="badge bg-success">Berhasil</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Budi</td>
                            <td>Menghapus data transaksi</td>
                            <td>24 Okt 2025</td>
                            <td><span class="badge bg-danger">Gagal</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <footer class="text-center py-3 mt-auto text-muted small">
            &copy; {{ now()->year }} zero one - Semua hak cipta dilindungi
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('mainContent');
    const toggleSidebar = document.getElementById('toggleSidebar');
    const overlay = document.getElementById('overlay');

    function toggleSidebarMobile() {
      sidebar.classList.toggle('show');
      overlay.classList.toggle('show');
    }

    toggleSidebar.addEventListener('click', () => {
      if (window.innerWidth <= 768) {
        toggleSidebarMobile();
      } else {
        sidebar.classList.toggle('hide');
        mainContent.classList.toggle('full');
      }
    });

    overlay.addEventListener('click', () => {
      sidebar.classList.remove('show');
      overlay.classList.remove('show');
    });
    </script>
</body>

</html>