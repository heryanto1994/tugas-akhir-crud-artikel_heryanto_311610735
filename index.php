<link rel="stylesheet" type="text/css" href="css/style_artikel.css">
<?php
include_once 'koneksi.php';
//include('login_session.php');
require('header.php');

$sql = "SELECT * FROM artikel ORDER BY tanggal DESC";
$result = mysqli_query($conn, $sql);

if ($result):

?>

<a href="tambah.php" class="btn btn-large1">Tambah Artikel</a>
<a href="logout.php" class="btn btn-large1">Keluar</a>
<table class="table-artikel">
<tr>
    <th>Judul</th>
    <th>Tanggal</th>
    <th>Aksi</th>
    </tr>
    <?php while ($row = mysqli_fetch_array($result)):  ?>
    <tr>    
        <td><?php echo $row['title']; ?></td>
        <td><?php echo date("j F Y", strtotime($row['tanggal'])); ?></td>
        <td>
            <a class="btn btn-default" href="edit.php?id=<?php echo $row['id'];?>
            ">Edit</a>
            <a class="btn btn-alert" onclick="return confirm('Yakin akan menghapus data?');" href="hapus.php?id=<?php echo $row['id'];?>">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
    
</table>
<?php endif; ?>