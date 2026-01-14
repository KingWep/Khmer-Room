<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f4f4f4;
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

    .contact-header {
      background: #333;
      color: #fff;
      text-align: center;
      padding: 50px 20px;
    }

    .contact-header h1 {
      margin: 0;
      font-size: 40px;
    }

    .container {
      max-width: 900px;
      margin: 40px auto;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .col {
      flex: 1;
      min-width: 280px;
    }

    .info-box {
      padding: 20px;
      background: #fafafa;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    .contact-form label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    .contact-form textarea {
      resize: vertical;
      height: 120px;
    }

    .contact-form button {
      background: #333;
      color: #fff;
      padding: 12px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    .contact-form button:hover {
      background: #555;
    }
  </style>
</head>

<body>

  <!-- Back Button -->
  <a class="back-btn" href="{{url('/')}}">⬅ Back</a>

  <!-- Header -->
  <div class="contact-header">
    <h1>Contact Us</h1>
  </div>

  <!-- Content -->
  <div class="container">
    <div class="row">

      <div class="col">
        <div class="info-box">
          <h3>Contact Information</h3>
          <p><strong>📍 Address:</strong> Phnom Penh, Cambodia</p>
          <p><strong>📞 Phone:</strong> +855 123 456 78</p>
          <p><strong>✉️ Email:</strong> example@gmail.com</p>
          <p><strong>⏰ Working Hours:</strong> Mon - Fri : 8AM - 5PM</p>
        </div>
      </div>

      <div class="col">
        <form class="contact-form">
          <label>Your Name</label>
          <input type="text" placeholder="Enter your name">

          <label>Your Email</label>
          <input type="email" placeholder="Enter your email">

          <label>Your Message</label>
          <textarea placeholder="Write your message here"></textarea>

          <button type="submit">Send Message</button>
        </form>
      </div>

    </div>
  </div>

</body>
</html>
