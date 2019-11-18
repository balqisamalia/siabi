<?php

include 'koneksi.php';
$result = mysqli_query($connect, "SELECT * FROM nama_kantor group by kota");
$firstResult = mysqli_query($connect, "SELECT kota FROM nama_kantor order by kota LIMIT 1");
$kota = mysqli_fetch_array($firstResult)[0];


$idBarang = $_GET['id_brg'];
$resultBarang = mysqli_query($connect, "SELECT * FROM barang WHERE id_brg = $idBarang");

$barang = mysqli_fetch_array($resultBarang);
$kode_brg = $barang['kode_brg'];
$nm_brg = $barang['nm_brg'];
$jml_brg = $barang['jml_brg'];
$hrg_brg = $barang['hrg_brg'];
$tot_hrg = $barang['tot_hrg'];
$status_brg = $barang['status_brg'];



?>

<html>

  <head>
    <title>Data Barang Iventaris BPR</title>
    <link rel="icon" type="image/jpg" href="../assets/icon.jpg">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

  </head>

  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">SIABI</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="www.bprwm.co.id">BPR WM</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index_data.php">Data Barang <span class="sr-only">(current)</span></a></li>
            <li><a href="index_pengajuan.php">Data Pengajuan</a></li>
            <li><a href="../logout.php">Keluar</a></li>
            <li></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="row">
      <div class="container-fuild">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <br>
            <br>
            <div class="panel panel-default">
              <div class="panel-heading">
                <span class="title"><b>Edit Data Barang <span class="text text-danger"></span></b></span>
              </div>
              <div class="panel-body">
                <form action="proses_edit.php" method="POST" class="form">

                  <div class="form-group">
                    <label class="title">Kode Barang</label>
                    <input type="text" name="kode_brg" class="form-control" value="<?php echo $kode_brg;?>">
                  </div>
                  <div class="form-group">
                    <label class="title">Nama Barang</label>
                    <input type="text" name="nm_brg" class="form-control" value="<?php echo $nm_brg;?>">
                  </div>

                  <div class="form-group">
                    <label class="title">Kota</label>
                    <select data-placeholder="Pilih Kota" name="nm_kota" class="form-control"
                      onchange="getKantor(this.value);">
                      <?php 
										while($kantor = mysqli_fetch_array($result)){
												echo "<option value = '".$kantor["kota"]."'>".$kantor["kota"]."</option>";
										}
										?>

                    </select>
                  </div>
                  <div class="form-group">
                    <label class="title">Nama Kantor</label>
                    <select data-placeholder="Nama Kantor.." name="nm_kantor" class="form-control" id="selectKantor">

                    </select>
                  </div>

                  <script>
                    $(document).ready(function () {
                      getKantor("<?php echo $kota ?>");
                    });

                    function getKantor(option) {
                      var $select = $('#selectKantor');
                      $select.empty();

                      var url = "proses_kantor.php?kota=" + option;
                      $.get(url, function (data, status) {
                        var response = JSON.parse(data);
                        console.log(response)
                        $.each(response, function (key, value) {
                          $select.append("<option value='" + value.nama_kntr + "'>" + value.nama_kntr +
                            "</option>");
                        })
                      });
                    }

                  </script>
             <div class="form-group">
                <label class="title">Jumlah Barang</label>
                <input type="text" name="jml_brg" class="form-control" value="<?php echo $jml_brg;?>">
              </div>
              <div class="form-group">
                <label class="title">Harga Barang</label>
                <input type="text" name="hrg_brg" class="form-control" value="<?php echo $hrg_brg;?>">
              </div>
              <div class="form-group">
                <label class="title">Total Harga</label>
                <input type="text" name="tot_hrg" class="form-control" value="<?php echo $tot_hrg;?>">
              </div>
              <div class="form-group">
                <label>Status Barang</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="status_brg" value="Aktif" <?php if($status_brg =='ya'){ ; ?> checked
                      <?php }?>>Aktif
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="status_brg" value="Penyusutan" <?php if($status_brg =='tidak'){ ; ?>
                      checked <?php } ?>>Penyusutan
                  </label>
                </div>
              </div>
              <div class="modal-footer">
                <a href="#" class="btn btn-warning" onclick="history.back(-1)"><i
                    class="glyphicon glyphicon-arrow-left"></i> Kembali</a>

                <input type="hidden" name="id_brg" value=<?php echo $_GET['id_brg'];?>>

                <button type="submit" name="update" class="btn btn-info"><i class="glyphicon glyphicon-pencil"
                    value="update"></i> Simpan</button>
              </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
    </div>
  </body>

</html>
