<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f4f4f4;
    }

    /* Navbar */
    nav {
      background: #333;
      padding: 15px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      color: white;
      font-size: 22px;
      font-weight: bold;
    }

    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      gap: 40px;
    }

    nav ul li a {
      color: white;
      text-decoration: none;
      font-size: 18px;
      padding: 8px 15px;
      border-radius: 5px;
      transition: 0.3s;
    }

    nav ul li a:hover {
      background: #555;
    }

    .nav-btn {
      background: #ff9800;
      color: white;
      padding: 10px 18px;
      text-decoration: none;
      border-radius: 5px;
      font-size: 16px;
      transition: 0.3s;
    }

    .nav-btn:hover {
      background: #e68900;
    }

    /* Back Button */
    .back-btn {
      display: inline-block;
      margin: 20px;
      padding: 10px 20px;
      background: #333;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      font-size: 16px;
    }

    .back-btn:hover {
      background: #555;
    }

    /* Hero Section */
    .hero {
      text-align: center;
      padding: 100px 20px;
      background: linear-gradient(to right, #4e54c8, #8f94fb);
      color: white;
    }

    .hero h1 {
      font-size: 50px;
      margin: 0;
    }

    .hero p {
      font-size: 20px;
      margin-top: 10px;
    }

    /* Cards Section */
    .container {
      max-width: 1100px;
      margin: 50px auto;
      padding: 20px;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .card {
      flex: 1;
      min-width: 280px;
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .card h3 {
      margin-top: 0;
    }

    .card a {
      display: inline-block;
      margin-top: 10px;
      padding: 10px 15px;
      background: #333;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
    }

    .card a:hover {
      background: #555;
    }

  </style>
</head>

<body>

  <!-- Navbar -->
  <nav>
    <div class="logo">MyWebsite</div>

    <ul>
      <li><a href="{{ url('/home') }}">Home</a></li>
      <li><a href="{{ url('/about') }}">About</a></li>
      <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>

    <a href="#" class="nav-btn">Login</a>
  </nav>
  <!-- Cards -->
  <div class="container">
    @yield('content')
  </div>

</body>
</html>
