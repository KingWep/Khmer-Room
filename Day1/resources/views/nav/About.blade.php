<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      color: #333;
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

    .about-section {
      background: #333;
      color: #fff;
      padding: 60px 20px;
      text-align: center;
    }

    .about-section h1 {
      font-size: 40px;
      margin-bottom: 10px;
      letter-spacing: 1px;
    }

    .about-section p {
      max-width: 800px;
      margin: auto;
      font-size: 18px;
      line-height: 1.6;
    }

    .container {
      max-width: 1000px;
      margin: 40px auto;
      padding: 20px;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .col {
      flex: 1;
      min-width: 280px;
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .col h2 {
      margin-top: 0;
      color: #333;
    }

    .col p {
      line-height: 1.5;
    }
  </style>
</head>

<body>

  <!-- Back Button -->
  <a class="back-btn" href="{{url('/')}}">⬅ Back</a>

  <!-- Header Section -->
  <div class="about-section">
    <h1>About Us</h1>
    <p>
      We are dedicated to providing high-quality services and building creative digital solutions.
    </p>
  </div>

  <!-- Content Section -->
  <div class="container">
    <div class="row">

      <div class="col">
        <h2>Our Mission</h2>
        <p>
          Our mission is to deliver modern, user-friendly, and high-performance applications
          that bring value to our users and partners.
        </p>
      </div>

      <div class="col">
        <h2>Our Vision</h2>
        <p>
          To become a leading technology team that builds impactful digital products used around the world.
        </p>
      </div>

      <div class="col">
        <h2>Our Team</h2>
        <p>
          We are a passionate team of developers, designers, and problem solvers who love turning ideas into reality.
        </p>
      </div>

    </div>
  </div>

</body>
</html>
