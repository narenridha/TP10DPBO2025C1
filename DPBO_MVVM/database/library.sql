CREATE DATABASE hospital;
USE hospital;

CREATE TABLE poli (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_poli VARCHAR(50) NOT NULL
);

CREATE TABLE jadwal (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_jadwal VARCHAR(50) NOT NULL
);

CREATE TABLE dokter (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    poli_id INT NOT NULL,
    jadwal_id INT NOT NULL,
    FOREIGN KEY (poli_id) REFERENCES poli(id),
    FOREIGN KEY (jadwal_id) REFERENCES jadwal(id)
);

INSERT INTO poli (nama_poli) VALUES ('Poli Umum'), ('Poli Gigi');
INSERT INTO jadwal (nama_jadwal) VALUES ('Pagi'), ('Malam');
INSERT INTO dokter (nama, poli_id, jadwal_id) VALUES ('dr. Andi', 1, 1), ('dr. Budi', 2, 2);
