<html>
<head>
  <title>Data Barang Iventaris BPR</title>
  <link rel="icon" type="image/jpg" href="../assets/icon.jpg">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>
  <nav class="navbar navbar-default">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">SIABI</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="www.bprwm.co.id">BPR WM</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="index_pengajuan.php">Data Pengajuan <span class="sr-only">(current)</span></a></li>
                <li><a href="../admin/index_data.php">Data Barang</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li></li>
              </ul>
            </div>
          </div>
        </nav> 
  <div class="row">
    <div class="container-fuild">
      <div class="row">
        
        </form>
        <div class="col-md-8 col-md-offset-2">       
          <form action="proses_search.php" method="get">
          <input type="search" name="cari" placeholder="Nama Barang" >
          <button action="proses_search.php" type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search" value="Cari"  ></i> Cari</button>
        </form>
<?php 
include 'koneksi.php';
if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
          <br>
          <br>
          <div class="panel panel-default">
            <div class="panel-heading">
              <span class="title"><b>Pengajuan Barang</b></span>
            </div>
            <div class="panel-body">
              <table class="table table-stripped" width="100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Barang</th>
                    <th>Kantor</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Keterangan</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
<?php  
  if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $lihat = mysqli_query($connect,"SELECT * FROM pengajuan_brg WHERE nm_brg like '%".$cari."%'");       
  }else{
    $lihat = mysqli_query($connect,"SELECT * FROM pengajuan_brg");

  }
  $no = 1;
  while($data = mysqli_fetch_array($lihat)){
?>
                <tbody>
                  <tr>
                    <td><?php echo $data['id_pengajuan']?></td>
                    <td><?php echo $data['tgl_pengajuan']?></td>
                    <td><?php echo $data['nm_brg']?></td>
                    <td><?php echo $data['nm_kantor']?></td>
                    <td><?php echo $data['jml_brg']?></td>
                    <td><?php echo $data['hrg_brg']?></td>
                    <td><?php echo $data['ket']?></td>
                    <td>
                    <td>
                      <a href="edit.php?id_brg=<?php echo $data['id_brg']?>" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                      <a href="cetak.php?id_brg=<?php echo $data['id_brg']?>" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-print"></i> Print</a>
                      <a href="proses_hapus.php?id_brg=<?php echo $data['id_brg']?>" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-erase"></i> Hapus</a>
                    </td>
                  </tr>
                </tbody>
                <?php $no++;}?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>