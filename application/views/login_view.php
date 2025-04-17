<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Voting Ketua Kelas</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background: #eaeaea;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      background: #fff;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 350px;
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 500;
      color: #444;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      transition: border-color 0.2s;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
      border-color: #2e86de;
      outline: none;
    }

    button {
      width: 100%;
      padding: 12px;
      background: #2e86de;
      color: #fff;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background: #1b6ec2;
    }

    .note {
      margin-top: 15px;
      font-size: 12px;
      text-align: center;
      color: #777;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>Login Mahasiswa</h2>
    <form action="voting.html" method="GET">
      <div class="form-group">
        <label for="nim">NIM</label>
        <input type="text" id="nim" name="nim" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">Login</button>
    </form>
    <p class="note">Gunakan NIM dan password yang valid.</p>
  </div>
</body>
</html>
