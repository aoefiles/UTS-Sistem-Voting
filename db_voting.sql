CREATE DATABASE IF NOT EXISTS voting_kelas;
USE voting_kelas;

CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(20) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    nama VARCHAR(100) NOT NULL,
    status ENUM('aktif', 'non-aktif') DEFAULT 'aktif'
);

CREATE TABLE IF NOT EXISTS kandidat (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    visi TEXT NOT NULL,
    misi TEXT NOT NULL,
    suara INT DEFAULT 0
);

CREATE TABLE IF NOT EXISTS pemilihan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mahasiswa_id INT NOT NULL,
    kandidat_id INT NOT NULL,
    FOREIGN KEY (mahasiswa_id) REFERENCES mahasiswa(id),
    FOREIGN KEY (kandidat_id) REFERENCES kandidat(id),
    UNIQUE(mahasiswa_id)
);

CREATE TABLE IF NOT EXISTS statistik (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kandidat_id INT NOT NULL,
    total_suara INT DEFAULT 0,
    FOREIGN KEY (kandidat_id) REFERENCES kandidat(id)
);

INSERT INTO kandidat (nama, visi, misi) VALUES ('Kandidat 1', 'Visi Kandidat 1', 'Misi Kandidat 1');
INSERT INTO kandidat (nama, visi, misi) VALUES ('Kandidat 2', 'Visi Kandidat 2', 'Misi Kandidat 2');
INSERT INTO kandidat (nama, visi, misi) VALUES ('Kandidat 3', 'Visi Kandidat 3', 'Misi Kandidat 3');

UPDATE kandidat SET nama = 'Kandidat 1 Update', visi = 'Visi Kandidat 1 Update', misi = 'Misi Kandidat 1 Update' WHERE id = 1;

DELETE FROM kandidat WHERE id = 3;

SELECT id, nama FROM mahasiswa WHERE nim = 'nim_mahasiswa' AND password = 'password_mahasiswa';

INSERT INTO pemilihan (mahasiswa_id, kandidat_id) VALUES (1, 2);

UPDATE kandidat SET suara = suara + 1 WHERE id = 2;

SELECT k.id, k.nama, k.visi, k.misi, k.suara FROM kandidat k ORDER BY k.suara DESC;

INSERT INTO statistik (kandidat_id, total_suara) VALUES (1, 10), (2, 5), (3, 3);

UPDATE statistik SET total_suara = total_suara + 1 WHERE kandidat_id = 1;
