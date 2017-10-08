<?php
include APPPATH . '/views/fragment/header.php';
include APPPATH . '/views/fragment/menu.php';
?>
<script type="text/javascript">
    $(function () {
        $('input.datepicker').each(function () {
            var datepicker = $(this);
            datepicker.bootstrapDatePicker(datepicker.data());
        });
    });
</script>
<main>
    <h2>Daftar Karyawan</h2>   
    <h3><a class="btn btn-success pull-right" style="margin-bottom: 20px" href="<?= base_url() ?>karyawan/tambah">tambah</a></h3>

    <table class="table table-striped">
        <tr>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
            <th>Telpon</th>
            <th>Jabatan</th>
            <th>Jenis Kelamin</th>
            <th>Divisi</th>
        </tr>
        <?php
        foreach ($karyawans as $idx => $data) {
            ?>
            <tr>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['tgllahir'] ?></td>
                <td><?= $data['email'] ?></td>
                <td><?= $data['telpon'] ?></td>
                <td><?= $data['jabatan'] ?></td>
                <td><?= $data['jeniskelamin'] ?></td>
                <td><?= $data['namadivisi'] ?></td>
            </tr>
            <?php
        }
        ?>

    </table>
</main>