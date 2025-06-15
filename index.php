<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tuza Assets - Maintenance</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
      color: white;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .maintenance-box {
      padding: 3rem;
      border-radius: 1rem;
      background-color: rgba(255, 255, 255, 0.05);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
      backdrop-filter: blur(10px);
    }
    h1 {
      font-size: 2.5rem;
      color: #f9c74f;
    }
    .clock {
      font-size: 1.2rem;
      margin-top: 1rem;
      color: #90e0ef;
    }
    .logo {
      width: 80px;
      height: auto;
      margin-bottom: 1rem;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="maintenance-box">
      <!-- Optional logo -->
      <img src="https://cdn-icons-png.flaticon.com/512/3079/3079095.png" alt="Maintenance Icon" class="logo">
      <h1>🚧 Tuza-assets.com is Under Maintenance</h1>
      <p class="lead">We’re working hard to bring you a better experience.</p>
      <p>Expected to be back online by <strong>21h00</strong> today.</p>
      <div class="clock" id="clock"></div>
      <hr class="text-white my-4">
      <p>Thank you for your patience and support! ❤️</p>
    </div>
  </div>

  <!-- Bootstrap JS (optional, for future needs) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Clock Script -->
  <script>
    function updateClock() {
      const now = new Date();
      document.getElementById('clock').textContent = 'Current Time: ' + now.toLocaleTimeString();
    }
    setInterval(updateClock, 1000);
    updateClock();
  </script>
</body>
</html>
