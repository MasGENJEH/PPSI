CREATE TABLE PELANGGAN (
    id INT AUTO_INCREMENT  PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    alamat TEXT,
    telepon VARCHAR(15)
);

CREATE TABLE KARYAWAN (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL,
    role ENUM('admin', 'manager', 'kasir') NOT NULL
);

CREATE TABLE PRODUK (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(100) NOT NULL,
    harga FLOAT NOT NULL,
    deskripsi TEXT
);

CREATE TABLE PENJUALAN (
    id_penjualan INT AUTO_INCREMENT PRIMARY KEY,
    id_pelanggan INT,
    id_kasir INT,
    tanggal_penjualan DATE NOT NULL,
    total_harga FLOAT NOT NULL,
    FOREIGN KEY (id_pelanggan) REFERENCES PELANGGAN(id),
    FOREIGN KEY (id_kasir) REFERENCES KARYAWAN(id)
);

CREATE TABLE DETAIL_PENJUALAN (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_penjualan INT,
    id_produk INT,
    jumlah INT NOT NULL,
    subtotal FLOAT NOT NULL,
    FOREIGN KEY (id_penjualan) REFERENCES PENJUALAN(id),
    FOREIGN KEY (id_produk) REFERENCES PRODUK(id)
);

CREATE TABLE STOK (
    id_stok INT AUTO_INCREMENT PRIMARY KEY,
    id_produk INT,
    jumlah INT NOT NULL,
    tanggal_update DATE NOT NULL,
    FOREIGN KEY (id_produk) REFERENCES PRODUK(id)
);
