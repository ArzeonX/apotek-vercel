<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100vh;
            background-color: #343a40;
            color: white;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 15px;
            display: block;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="text-center p-4">
            <!-- Logo FontAwesome -->
            <i class="fas fa-cogs fa-3x"></i>
            <h4>Dashboard</h4>
        </div>
        <div class="p-3">
            <!-- Sidebar Menu -->
            <a href="{{ route('obat.index') }}"><i class="fas fa-pills"></i> Obat</a>
            <a href="{{ route('supplier.index') }}"><i class="fas fa-truck"></i> Supplier</a>
            <a href="{{ route('pelanggan.index') }}"><i class="fas fa-users"></i> Pelanggan</a>
            <a href="{{ route('transaksi.index') }}"><i class="fas fa-credit-card"></i> Transaksi</a>
            <a href="{{ route('detailTransaksi.index') }}"><i class="fas fa-list"></i> Detail Transaksi</a>
        </div>
    </div>

    <div class="content">
        @yield('content')
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
