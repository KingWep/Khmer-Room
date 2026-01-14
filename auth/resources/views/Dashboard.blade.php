<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <a class="navbar-brand" href="#">Dashboard</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="d-flex">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 min-h-screen p-4">
            <h2 class="text-xl font-bold mb-6">Menu</h2>
            <ul>
                <li class="mb-3"><a href="#" class="hover:text-gray-300">Dashboard</a></li>
                <li class="mb-3"><a href="#" class="hover:text-gray-300">Users</a></li>
                <li class="mb-3"><a href="#" class="hover:text-gray-300">Settings</a></li>
                <li class="mb-3"><a href="#" class="hover:text-gray-300">Reports</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <h1 class="text-3xl font-bold mb-6">Welcome to Dashboard</h1>

            <!-- Cards Section -->
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="bg-white rounded-lg shadow p-4">
                        <h3 class="text-gray-700 font-semibold">Users</h3>
                        <p class="text-2xl font-bold text-gray-900">120</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white rounded-lg shadow p-4">
                        <h3 class="text-gray-700 font-semibold">Orders</h3>
                        <p class="text-2xl font-bold text-gray-900">80</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white rounded-lg shadow p-4">
                        <h3 class="text-gray-700 font-semibold">Revenue</h3>
                        <p class="text-2xl font-bold text-gray-900">$5,200</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white rounded-lg shadow p-4">
                        <h3 class="text-gray-700 font-semibold">Feedback</h3>
                        <p class="text-2xl font-bold text-gray-900">45</p>
                    </div>
                </div>
            </div>

            <!-- Table Section -->
            <div class="mt-8">
                <h2 class="text-2xl font-semibold mb-4">Recent Users</h2>
                <table class="table table-striped table-bordered bg-white rounded-lg shadow">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Joined</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>john@example.com</td>
                            <td>Admin</td>
                            <td>2025-12-01</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>jane@example.com</td>
                            <td>User</td>
                            <td>2025-12-05</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Michael Lee</td>
                            <td>michael@example.com</td>
                            <td>User</td>
                            <td>2025-12-10</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
