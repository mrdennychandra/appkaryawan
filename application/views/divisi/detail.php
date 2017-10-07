<?php
include APPPATH . 'views/fragment/header.php';
?>
<body>
    <header>
        <h1>Detail Divisi</h1>
    </header>
    <nav>
        <?php include APPPATH . 'views/fragment/menu.php' ?>
    </nav>
    <main>
        <h3></h3>
        <table>
            <tr>
                <th>Kode Divisi</th>
                <td><?= $kode ?></td>
            </tr>
            <tr>
                <th>Nama Divisi</th>
                <td><?= $nama ?></td>
            </tr>
        </table>
    </main>
    <?php include APPPATH . 'views/fragment/footer.php'; ?>