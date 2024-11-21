<?php
include 'config.php';

$limit = 10;

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$offset = ($page - 1) * $limit;

$order = isset($_GET['order']) ? $_GET['order'] : 'id_produk';
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'asc';

$next_sort = $sort === 'asc' ? 'desc' : 'asc';

$total_sql = "SELECT COUNT(*) FROM stok";
$total_result = $conn->query($total_sql);
$total_items = $total_result->fetch_row()[0];

$total_pages = ceil($total_items / $limit);

$sql = "SELECT id, id_produk, jumlah, tanggal_update 
FROM stok 
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
                <h1 class="mb-4" style="text-align:center;">Laporan Inventori</h1>
                <table class="table table-striped" width="100%">
                    <tr>
                        <th width="3%" style="text-align:center;">no</th>
                        <th>Id Stok</th>
                        <th>Id Barang</th>
                        <th>Jumlah</th>
                        <th>Tanggal Update</th>
                    </tr>
                    <?php
                    if ($result->num_rows > 0) {
                        $number = $offset + 1;
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td style='text-align:center;'>{$number}</td>
                                    <td>{$row['id']}</td>
                                    <td>{$row['id_produk']}</td>
                                    <td>{$row['jumlah']}</td>
                                    <td>{$row['tanggal_update']}</td>
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