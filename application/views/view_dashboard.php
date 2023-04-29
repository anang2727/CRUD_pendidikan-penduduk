<html>
    <head><title><?php echo $title; ?></title>
</head>
<body>
  <div>  
    <h1 class="list-group-item active" aria-current="true">BERANDA</h1>
    <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
            <a class="nav-link" href="#" >More</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">About Me</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="https://www.youtube.com/@anangkurniawan2727">Contact Us</a>
        </li>
    </ul>
<div>
    <br>
    <hr>
            <ul class="list-group">
                <li class="list-group-item"> <?php echo anchor('pendidikan', 'DAFTAR PENDIDIKAN'); ?> </li>
                <li class="list-group-item"> <?php echo anchor('penduduk', 'DATA PENDUDUK'); ?> </li>
                <li class="list-group-item"> <?php echo anchor('kec', 'NAMA KECAMATAN'); ?> </li>
                <li class="list-group-item"> <?php echo anchor('desa', 'NAMA DESA'); ?> </li>
                <li class="list-group-item"> <?php echo anchor('petugas', 'DATA PETUGAS'); ?> </li>
                <li class="list-group-item"> <?php echo anchor('tercatat', 'DATA TERCATAT'); ?> </li>
            </ul>

</body>
</html>

