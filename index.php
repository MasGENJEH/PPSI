<?php
include 'config.php';

$limit = 10;

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$offset = ($page - 1) * $limit;

$order = isset($_GET['order']) ? $_GET['order'] : 'nama_barang';
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'asc';

$next_sort = $sort === 'asc' ? 'desc' : 'asc';

$total_sql = "SELECT COUNT(*) FROM barang";
$total_result = $conn->query($total_sql);
$total_items = $total_result->fetch_row()[0];

$total_pages = ceil($total_items / $limit);

$sql = "SELECT id, nama_barang, jenis_barang, harga, stok 
FROM barang 
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
                <h1 class="mb-4">List Barang</h1>
                <table class="table table-striped" width="100%">
                    <tr>
                        <th width="3%" style="text-align:center;">No</th>
                        <th width="30%">Nama Barang <a href="?order=nama_barang&sort=<?= $next_sort ?>"> <svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="16" height="16">
                                    <path
                                        d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z" />
                                </svg>
                            </a></th>
                        <th width="20%">Jenis Barang <a href="?order=jenis_barang&sort=<?= $next_sort ?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="16" height="16">
                                    <path
                                        d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z" />
                                </svg></a></th>
                        <th width="20%">Harga <a href="?order=harga&sort=<?= $next_sort ?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="16" height="16">
                                    <path
                                        d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z" />
                                </svg></a></th>
                        <th>Stok <a href="?order=stok&sort=<?= $next_sort ?>"><svg xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 320 512" width="16" height="16">
                                    <path
                                        d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z" />
                                </svg></a></th>
                        <th width="20%">Actions</th>
                    </tr>
                    <?php
                    if ($result->num_rows > 0) {
                        $number = $offset + 1;
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td style='text-align:center;'>{$number}</td>
                                    <td>{$row['nama_barang']}</td>
                                    <td>{$row['jenis_barang']}</td>
                                    <td>Rp {$row['harga']},-</td>
                                    <td>{$row['stok']}</td>
                                    <td>
                                        <a class='btn btn-warning btn-sm' href='update.php?id={$row['id']}'>Edit</a> |
                                        <a class='btn btn-danger btn-sm' href='delete.php?id={$row['id']}'>Hapus</a>
                                    </td>
                                  </tr>";
                            $number++;
                        }
                    } else {
                        echo "<tr><td colspan='6'>No items found</td></tr>";
                    }
                    ?>
                </table>

                <!-- Pagination -->
                <nav>
                    <ul class="pagination">
                        <?php
                        if ($page > 1) {
                            echo "<li class='page-item'><a class='page-link' href='?page=" . ($page - 1) . "&order=$order&sort=$sort'>Previous</a></li>";
                        }

                        for ($i = 1; $i <= $total_pages; $i++) {
                            echo "<li class='page-item" . ($i == $page ? " active" : "") . "'><a class='page-link' href='?page=$i&order=$order&sort=$sort'>$i</a></li>";
                        }

                        if ($page < $total_pages) {
                            echo "<li class='page-item'><a class='page-link' href='?page=" . ($page + 1) . "&order=$order&sort=$sort'>Next</a></li>";
                        }
                        ?>
                    </ul>
                </nav>

                <a type="button" class="btn btn-primary" href="create.php">Tambah Barang</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>

<?php
$conn->close();
?>