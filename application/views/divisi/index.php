<?php
include APPPATH . 'views/fragment/header.php';
?>
<body>
    <header>
        <h1>Daftar Divisi</h1>
    </header>
    <nav>
        <?php include APPPATH . 'views/fragment/menu.php' ?>
    </nav>
    <main>
        <?php
        if (is_admin()) {
            ?>
            <h3><a href="<?= base_url("divisi/tambah") ?>">tambah</a></h3>
            <?php
        }
        ?>
        <table>
            <tr>
                <th>Kode Divisi</th>
                <th>Nama Divisi</th>
                <th>Aksi</th>
            </tr>
            <?php
            foreach ($records as $idx => $data) {
                ?>
                <tr>
                    <td><?= $data['kode'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><a href="<?= base_url("divisi/detail/{$data['divisiid']}") ?>">
                            Detail</a></td>
                    <?php
                    if (is_admin()) {
                        ?>
                        <td><a href="<?= base_url("divisi/edit/{$data['divisiid']}") ?>">
                                Edit</a></td>
                        <td><a onclick="return confirm('akan menghapus data?')" 
                               href="<?= base_url("divisi/hapus/{$data['divisiid']}") ?>">
                                Hapus</a></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </main>
    <?php include APPPATH . 'views/fragment/footer.php'; ?>