<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Statistik Voting</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f9f9f9;
      margin: 0;
      padding: 30px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .container {
      max-width: 600px;
      width: 100%;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #2e86de;
      margin-bottom: 25px;
    }

    .stat-bar {
      margin-bottom: 20px;
    }

    .label {
      margin-bottom: 6px;
      font-weight: 500;
      color: #333;
    }

    .bar {
      height: 24px;
      background: #eee;
      border-radius: 12px;
      overflow: hidden;
    }

    .bar-inner {
      height: 100%;
      text-align: right;
      padding-right: 10px;
      color: white;
      font-size: 13px;
      line-height: 24px;
      font-weight: bold;
    }

    .bar1 { background-color: #3498db; width: 42%; }
    .bar2 { background-color: #e67e22; width: 35%; }
    .bar3 { background-color: #27ae60; width: 23%; }
  </style>
</head>
<body>

  <div class="container">
    <h2>Terima kasih sudah menggunakan hak pilihmu!</h2>

    <div class="stat-bar">
      <div class="label">Andi Pratama - 42%</div>
      <div class="bar"><div class="bar-inner bar1">42%</div></div>
    </div>

    <div class="stat-bar">
      <div class="label">Budi Santoso - 35%</div>
      <div class="bar"><div class="bar-inner bar2">35%</div></div>
    </div>

    <div class="stat-bar">
      <div class="label">Clara Wijaya - 23%</div>
      <div class="bar"><div class="bar-inner bar3">23%</div></div>
    </div>
  </div>

</body>
</html>
