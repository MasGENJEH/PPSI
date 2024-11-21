<?php
include 'config.php';

$limit = 10;

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$offset = ($page - 1) * $limit;

$order = isset($_GET['order']) ? $_GET['order'] : 'id_penjualan';
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'asc';

$next_sort = $sort === 'asc' ? 'desc' : 'asc';

$total_sql = "SELECT COUNT(*) FROM penjualan";
$total_result = $conn->query($total_sql);
$total_items = $total_result->fetch_row()[0];

$total_pages = ceil($total_items / $limit);

$sql = "SELECT id_penjualan, id_pelanggan, id_kasir, tanggal_penjualan, total_harga
FROM penjualan 
ORDER BY $order $sort 
LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);

?>

<?php include 'template/header.php'; ?>

<body>
    <?php include 'template/navbar.php'; ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1 class="mb-4" style="text-align:center;">Laporan Penjualan</h1>
                <table class="table table-striped" width="100%">
                    <tr>
                        <th width="3%" style="text-align:center;">no</th>
                        <th>Id Penjualan</th>
                        <th>Id Pelanggan</th>
                        <th>Id Kasir</th>
                        <th>Tanggal Penjualan</th>
                        <th>Total Harga</th>
                    </tr>
                    <?php
                    if ($result->num_rows > 0) {
                        $number = $offset + 1;
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td style='text-align:center;'>{$number}</td>
                                    <td>{$row['id_penjualan']}</td>
                                    <td>{$row['id_pelanggan']}</td>
                                    <td>{$row['id_kasir']}</td>
                                    <td>{$row['tanggal_penjualan']}</td>
                                    <td>{$row['total_harga']}</td>
                                  </tr>";
                            $number++;
                        }
                    } else {
                        echo "<tr><td colspan='6'>No items found</td></tr>";
                    }
                    ?>
                </table>
</body>

</html>