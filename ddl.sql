CREATE TABLE PELANGGAN (
    id INT AUTO_INCREMENT  PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    alamat TEXT,
    telepon VARCHAR(15)
);

CREATE TABLE MANAGER (
    id INT AUTO_INCREMENT  PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE
);

CREATE TABLE ADMIN (
    id INT AUTO_INCREMENT  PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE
);

CREATE TABLE KASIR (
    id INT AUTO_INCREMENT  PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE
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
    FOREIGN KEY (id_kasir) REFERENCES KASIR(id)
);

CREATE TABLE DETAIL_PENJUALAN (
    id_detail INT AUTO_INCREMENT PRIMARY KEY,
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