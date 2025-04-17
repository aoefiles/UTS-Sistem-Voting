<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manajemen Kandidat</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f7f7f7;
      padding: 30px;
    }

    h2 {
      text-align: center;
      color: #2e86de;
      margin-bottom: 30px;
    }

    .container {
      max-width: 900px;
      margin: auto;
      background: #fff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
    }

    .form-group {
      margin-bottom: 10px;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    .add-btn {
      background: #2ecc71;
      color: white;
      padding: 10px 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-weight: bold;
      margin-top: 10px;
    }

    .add-btn:hover {
      background: #27ae60;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      text-align: left;
      margin-top: 30px;
    }

    th, td {
      padding: 12px 15px;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f0f0f0;
      color: #333;
    }

    td:last-child {
      text-align: center;
    }

    .btn {
      padding: 6px 12px;
      border: none;
      border-radius: 6px;
      color: #fff;
      font-size: 13px;
      cursor: pointer;
      margin: 2px;
    }

    .btn-edit {
      background: #f39c12;
    }

    .btn-delete {
      background: #e74c3c;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Manajemen Kandidat Ketua Kelas</h2>

    <!-- Form tambah kandidat -->
    <div class="form-group">
      <label>Nama Kandidat</label>
      <input type="text" id="nama" placeholder="Masukkan nama kandidat">
    </div>
    <div class="form-group">
      <label>Visi</label>
      <input type="text" id="visi" placeholder="Masukkan visi singkat">
    </div>
    <div class="form-group">
      <label>Misi</label>
      <input type="text" id="misi" placeholder="Masukkan misi singkat">
    </div>
    <button class="add-btn" onclick="tambahKandidat()">+ Tambah Kandidat</button>

    <!-- Tabel kandidat -->
    <table id="tabelKandidat">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Kandidat</th>
          <th>Visi</th>
          <th>Misi</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Andi Pratama</td>
          <td>Menjadikan kelas solid dan berprestasi</td>
          <td>Meningkatkan komunikasi dan kerja sama</td>
          <td>
            <button class="btn btn-edit">Edit</button>
            <button class="btn btn-delete" onclick="hapusKandidat(this)">Hapus</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Budi Santoso</td>
          <td>Kelas aktif dan peduli sosial</td>
          <td>Membentuk tim kerja dan kegiatan sosial</td>
          <td>
            <button class="btn btn-edit">Edit</button>
            <button class="btn btn-delete" onclick="hapusKandidat(this)">Hapus</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <script>
    function tambahKandidat() {
      const nama = document.getElementById('nama').value.trim();
      const visi = document.getElementById('visi').value.trim();
      const misi = document.getElementById('misi').value.trim();

      if (!nama || !visi || !misi) {
        alert("Harap isi semua data kandidat!");
        return;
      }

      const tabel = document.getElementById('tabelKandidat').getElementsByTagName('tbody')[0];
      const rowCount = tabel.rows.length;
      const row = tabel.insertRow(rowCount);

      row.innerHTML = `
        <td>${rowCount + 1}</td>
        <td>${nama}</td>
        <td>${visi}</td>
        <td>${misi}</td>
        <td>
          <button class="btn btn-edit">Edit</button>
          <button class="btn btn-delete" onclick="hapusKandidat(this)">Hapus</button>
        </td>
      `;

      // Reset input
      document.getElementById('nama').value = '';
      document.getElementById('visi').value = '';
      document.getElementById('misi').value = '';
    }

    function hapusKandidat(button) {
      const row = button.closest('tr');
      row.remove();
      
      // Update nomor urut setelah hapus
      const rows = document.querySelectorAll('#tabelKandidat tbody tr');
      rows.forEach((row, index) => {
        row.cells[0].textContent = index + 1;
      });
    }
  </script>

</body>
</html>
