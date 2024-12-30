<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <div class="d-flex">
                <span class="navbar-text me-3">Welcome, {{ auth()->user()->name }}</span>
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="d-flex">
        <nav class="bg-dark text-white p-3" style="width: 250px; height: 100vh;">
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="#">Dashboard</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="/doctor">Doctors</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="#">Settings</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link text-white" href="#">Reports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Help</a>
                </li>
            </ul>
        </nav>

        <main class="p-4" style="flex-grow: 1;">
            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="card-title">Welcome, {{ auth()->user()->name }}!</h3>
                    <p class="card-text">Use the menu to navigate through the admin panel.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-header">Registered Users</div>
                        <div class="card-body">
                            <h5 class="card-title">500</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-header">Registered Doctors</div>
                        <div class="card-body">
                            <h5 class="card-title">120</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-header">Appointments Today</div>
                        <div class="card-body">
                            <h5 class="card-title">45</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Statistics</h3>
                    <canvas id="userChart" style="max-height: 400px;"></canvas>
                </div>
            </div>
        </main>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const ctx = document.getElementById('userChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                datasets: [
                    {
                        label: 'Registered Users',
                        data: [50, 60, 70, 80, 90, 100, 110],
                        borderColor: 'rgba(75, 192, 192, 1)',
                        tension: 0.4
                    },
                    {
                        label: 'Appointments',
                        data: [30, 45, 60, 55, 70, 65, 85],
                        borderColor: 'rgba(255, 159, 64, 1)',
                        tension: 0.4
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                }
            }
        });
    </script>
</body>
</html>
