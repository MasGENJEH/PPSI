-- Data untuk tabel PELANGGAN
INSERT INTO PELANGGAN (nama, alamat, telepon) VALUES
('Budi Santoso', 'Jl. Merdeka No. 10, Jakarta', '08123456789'),
('Siti Aminah', 'Jl. Raya No. 25, Bandung', '08234567890'),
('Andi Wijaya', 'Jl. Kebon Jeruk No. 5, Surabaya', '08345678901');

-- Data untuk tabel KARYAWAN
INSERT INTO KARYAWAN (nama, username, password, role) VALUES
('Admin Utama', 'admin1', 'password123', 'admin'),
('Manager Toko', 'manager1', 'password123', 'manager'),
('Kasir Satu', 'kasir1', 'password123', 'kasir'),
('Kasir Dua', 'kasir2', 'kasir123', 'kasir'),
('Manager Gudang', 'manager2', 'manager123', 'manager'),
('Admin Cadangan', 'admin2', 'admin123', 'admin');

-- Data untuk tabel PRODUK
INSERT INTO PRODUK (nama_produk, harga, deskripsi) VALUES
('Minyak Goreng 1L', 15000, 'Minyak Goreng kemasan 1 liter'),
('Gula Pasir 1kg', 13000, 'Gula Pasir kemasan 1 kilogram'),
('Beras 5kg', 55000, 'Beras kualitas terbaik 5 kilogram'),
('Sabun Mandi Lifebuoy', 7500, 'Sabun mandi batang 100g'),
('Teh Celup SariWangi', 5000, 'Teh Celup SariWangi 25 kantong'),
('Kecap Manis ABC', 12000, 'Kecap Manis ABC 250ml'),
('Susu Ultra Milk 1L', 20000, 'Susu Ultra Milk Full Cream 1 liter'),
('Tissue 2 Ply', 6000, 'Tissue 2 lapis kemasan 1 pak');
 
-- Data untuk tabel PENJUALAN
INSERT INTO PENJUALAN (id_pelanggan, id_kasir, tanggal_penjualan, total_harga) VALUES
(1, 1, '2024-11-20', 24500),  -- Budi Santoso membeli Minyak Goreng dan Sabun Mandi
(2, 2, '2024-11-20', 83000),  -- Siti Aminah membeli Beras dan Gula Pasir
(3, 1, '2024-11-21', 32000);  -- Andi Wijaya membeli Teh Celup dan Kecap Manis

-- Data untuk tabel DETAIL_PENJUALAN
INSERT INTO DETAIL_PENJUALAN (id_penjualan, id_produk, jumlah, subtotal) VALUES
(1, 1, 1, 15000),  -- Budi membeli 1 Minyak Goreng
(1, 4, 1, 7500),   -- Budi membeli 1 Sabun Mandi
(2, 3, 1, 55000),  -- Siti membeli 1 Beras 5kg
(2, 2, 1, 13000),  -- Siti membeli 1 Gula Pasir
(3, 5, 2, 10000),  -- Andi membeli 2 Teh Celup
(3, 6, 1, 12000);  -- Andi membeli 1 Kecap Manis

-- Data untuk tabel STOK
INSERT INTO STOK (id_produk, jumlah, tanggal_update) VALUES
(1, 50, '2024-11-19'),  -- Stok 50 Minyak Goreng 1L
(2, 100, '2024-11-18'),  -- Stok 100 Gula Pasir 1kg
(3, 30, '2024-11-20'),  -- Stok 30 Beras 5kg
(4, 75, '2024-11-20'),  -- Stok 75 Sabun Mandi Lifebuoy
(5, 150, '2024-11-18'),  -- Stok 150 Teh Celup SariWangi
(6, 40, '2024-11-19'),  -- Stok 40 Kecap Manis ABC
(7, 60, '2024-11-21'),  -- Stok 60 Susu Ultra Milk 1L
(8, 200, '2024-11-20');  -- Stok 200 Tissue 2 Ply