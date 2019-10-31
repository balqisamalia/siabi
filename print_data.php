<?php
    include('../koneksi/koneksi.php');

    $angka=1;
?>


<html>
    <body>
        <center><h2>DATA PENGAJUAN</h2></center>
        <center>
            <table border="1" width="100%">
            <tr>
                <td align="center"><b>Tanggal Pengajuan</b></td>
                <td align="center"><b>Nama Barang</b></td>
                <td align="center"><b>Nama Kantor</b></td>
                <td align="center"><b>Jumlah Barang</b></td>
                <td align="center"><b>Harga Barang</b></td>
                <td align="center"><b>Keterangan</b></td>
            </tr>

            <?php
              
              $lihat = mysqli_query($connect, "select * from pengajuan_brg");
              
                    while($row = mysqli_fetch_assoc($lihat)){
                        echo "      
                            <tr>
                                <td>$row[tgl_pengajuan]</td>
                                <td>$row[nm_brg]</td>
                                <td>$row[nm_kantor]</td>
                                <td>$row[jml_brg]</td>
                                <td>$row[hrg_brg]</td>
                                <td>$row[ket]</td>
                            </tr>
                        ";
                    }
            ?>
          </tbody>
          </table> 
          </center>
          
          <script>
            window.load = print_d();
            function print_d(){
                window.print();
            }
          </script>
        
    </body>
</html>



