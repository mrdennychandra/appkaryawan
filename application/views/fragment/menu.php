<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">SimSDM</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?= base_url() ?>index.php">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="<?= base_url() ?>divisi">Divisi</a></li>
                <li><a href="<?= base_url() ?>karyawan">Karyawan</a></li>
                <li><a href="<?= BASEPATH ?>logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>