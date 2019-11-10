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
              
              <a class="navbar-brand" href="www.bprwm.co.id">BPR WM</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
               <li><a href="index_data.php">Data Barang </a></li>
                <li class="active"><a href="index_pengajuan.php">Data Pengajuan <span class="sr-only">(current)</span></a></li>
                <li><a href="../logout.php">Logout</a></li>
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
          <input type="search" name="cari" placeholder="Cari" >
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
              <span class="title"><b>list Data Barang</b></span>
            </div>
            <div class="panel-body">
              <table class="table table-stripped" width="100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Nama Barang</th>
                    <th>Kantor</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Opsi</th>
                  </tr>
                </thead>

                <?php  
                $lihat = '';
                if(isset($_GET['cari'])) {
                  $cari = $_GET['cari'];
                  $lihat = mysqli_query($connect,"SELECT * FROM pengajuan_brg WHERE tgl_pengajuan like '%".$cari."%' OR nm_kantor_pgj like '%".$cari."%'");
                }
                $no = 1;
                while ($data = mysqli_fetch_array($lihat)) {
                  ?>

                <tbody>
                  <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo date("d/m/Y", strtotime($data['tgl_pengajuan']))?></td>
                    <td><?php echo $data['nm_brg_pgj']?></td>
                    <td><?php echo $data['nm_kantor_pgj']?></td>
                    <td><?php echo $data['jml_brg_pgj']?></td>
                    <td><?php echo $data['hrg_brg_pgj']?></td>
                    <td>
                      <a href="view_pengajuan.php?id_pengajuan=<?php echo $data['id_pengajuan']?>" class="btn btn-info btn-xs"><i "></i>View </a>
                  </tr>
                </tbody>
                <?php $no++;
              }
                ?>
              </table>
              <button onclick="history.back(-1)"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>