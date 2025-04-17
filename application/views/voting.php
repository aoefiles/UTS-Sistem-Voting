<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pemilihan Ketua Kelas</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f2f2f2;
      padding: 30px;
      margin: 0;
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }

    .card-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }

    .card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 300px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .card h3 {
      margin-bottom: 10px;
      color: #2e86de;
    }

    .card p {
      font-size: 14px;
      color: #555;
      margin-bottom: 20px;
    }

    .card button {
      padding: 10px;
      border: none;
      background: #2e86de;
      color: white;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .card button:hover {
      background: #1b6ec2;
    }
  </style>
</head>
<body>

  <h2>Pemilihan Ketua Kelas</h2>

  <div class="card-container">
    <div class="card">
      <h3>Andi Pratama</h3>
      <p><strong>Visi:</strong> Menjadikan kelas yang solid dan berprestasi.<br>
         <strong>Misi:</strong> Meningkatkan komunikasi dan kerja sama antar mahasiswa.</p>
      <button onclick="location.href='statistik.html'">Vote</button>
    </div>

    <div class="card">
      <h3>Budi Santoso</h3>
      <p><strong>Visi:</strong> Kelas aktif, kreatif, dan peduli sosial.<br>
         <strong>Misi:</strong> Membentuk tim kerja dan kegiatan sosial rutin.</p>
      <button onclick="location.href='statistik.html'">Vote</button>
    </div>

    <div class="card">
      <h3>Clara Wijaya</h3>
      <p><strong>Visi:</strong> Menjadi jembatan komunikasi antara dosen dan mahasiswa.<br>
         <strong>Misi:</strong> Membuat forum diskusi dan konsultasi terbuka.</p>
      <button onclick="location.href='statistik.html'">Vote</button>
    </div>
  </div>

</body>
</html>
