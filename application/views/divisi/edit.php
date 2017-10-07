<?php
include APPPATH . 'views/fragment/header.php';
?>
<body>
    <header>
        <h1>Edit Divisi</h1>
    </header>
    <nav>
        <?php include APPPATH . 'views/fragment/menu.php' ?>
    </nav>
    <main>
        <h3></h3>
        <form action="<?= base_url("divisi/edit_save") ?>"
              name="formedit" 
              method="post" 
              id="formedit">
            <input type="hidden" name="divisiid" id="divisiid" 
                   value="<?= $divisiid ?>">
            <div>
                <label for="nama">Kode Divisi:</label>
                <input type="text" name="kode" id="kode" 
                       value="<?= $kode ?>"
                       size="3" required="required"> 
            </div>
            <div>
                <label for="telpon">Nama Divisi:</label> 
                <input type="text" name="nama" id="nama" 
                       value="<?= $nama ?>"required="required" size="30">
            </div>
            <div>
                <input type="submit" value="Simpan" id="submit" name="submit">
            </div>
        </form>
    </main>
    <?php include APPPATH . 'views/fragment/footer.php'; ?>