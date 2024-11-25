<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <nav class="sidebar">
            <div class="logo">
                <h2>MyDashboard</h2>
            </div>
            <ul class="menu">
                <li><a href="#overview" class="active">Overview</a></li>
                <li><a href="#analytics">Analytics</a></li>
                <li><a href="#sales">Sales</a></li>
                <li><a href="#settings">Settings</a></li>
                <li><a href="logout.php" class="text-danger">Logout</a></li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Topbar -->
            <header class="topbar">
                <h1>Dashboard Overview</h1>
                <div class="profile">
                    <img src="https://via.placeholder.com/40" alt="Profile Picture">
                    <span><?php echo htmlspecialchars($user['fullname']); ?></span>
                </div>
            </header>

            <!-- Dashboard Cards -->
            <section class="dashboard-cards">
                <div class="card">
                    <h3>Total Revenue</h3>
                    <p>$12,500</p>
                </div>
                <div class="card">
                    <h3>New Users</h3>
                    <p>345</p>
                </div>
                <div class="card">
                    <h3>Active Subscriptions</h3>
                    <p>1,245</p>
                </div>
                <div class="card">
                    <h3>Feedback</h3>
                    <p>78 Messages</p>
                </div>
            </section>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
