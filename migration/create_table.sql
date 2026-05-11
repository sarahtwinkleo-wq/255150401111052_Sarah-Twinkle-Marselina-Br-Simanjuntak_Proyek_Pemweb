CREATE TABLE admin (
    username VARCHAR(50) PRIMARY KEY,
    nama VARCHAR(100),
    password VARCHAR(100)
);

CREATE TABLE berita (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255),
    isi TEXT,
    gambar VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO admin VALUES
('admin', 'Sarah', '123');
