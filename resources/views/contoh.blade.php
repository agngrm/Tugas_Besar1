<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penjualan</title>

    <!-- Link to your custom CSS file -->
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Dashboard Penjualan</h2>
        <ul>
            <li><a href="{{ url('contoh') }}">Home</a></li>
            <li><a href="{{ url('produk') }}">Produk</a></li>
            <li><a href="#">Penjualan</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="#">Pengaturan</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <header>
            <h1>Selamat Datang di Dashboard Penjualan</h1>
        </header>

        <!-- Stats Cards -->
        <div class="cards">
            <div class="card">
                <h3>Total Produk</h3>
                <p id="total-products">{{ $totalProducts }}</p>
            </div>
            <div class="card">
                <h3>Penjualan Hari Ini</h3>
                <p id="sales-today">{{ $salesToday }}</p>
            </div>
            <div class="card">
                <h3>Total Pendapatan</h3>
                <p id="total-revenue">{{ $totalRevenue }}</p>
            </div>
            <div class="card">
                <h3>Pengguna Terdaftar</h3>
                <p id="registered-users">{{ $registeredUsers }}</p> <!-- Fixed this value to use the passed variable -->
            </div>
        </div>

        <!-- Bootstrap alert example -->
        <div class="alert alert-primary" role="alert">
            A simple primary alert - check it out!
        </div>

        <!-- Sales Chart -->
        <div id="chart">
            <h2>Grafik Penjualan Bulanan</h2>
            <canvas id="salesChart"></canvas> <!-- Placeholder for the sales chart -->
        </div>
    </div>

    <!-- JavaScript (if needed later, uncomment the following line) -->
    {{-- <script src="script.js"></script> --}}

    <!-- Include necessary JS libraries like Bootstrap JS or Chart.js (if used for salesChart) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
</body>
</html>
