<?php
include APPPATH .  'views/fragment/header.php';
?>
<body>
    <header>
        <h1>Tambah Divisi</h1>
    </header>
    <nav>
        <?php include APPPATH .  'views/fragment/menu.php' ?>
    </nav>
    <main>
        <h3>
            <?= validation_errors(); ?>
        </h3>
        <form action="<?= base_url("divisi/tambah_save") ?>"
            name="formtambah" 
            method="post" 
            id="formtambah">
            <div>
                <label for="nama">Kode Divisi:</label>
                <input type="text" name="kode" id="kode"
                       size="3" required="required">
            </div>
            <div>
                <label for="telpon">Nama Divisi:</label> 
                <input type="text" name="nama" id="nama" 
                       required="required" size="30">
            </div>
            <div>
                <input type="submit" value="Simpan" id="submit" name="submit">
            </div>
        </form>
    </main>
  <?php include APPPATH .  'views/fragment/footer.php'; ?>