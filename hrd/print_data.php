<?php
    include('../koneksi/koneksi.php');

    $angka=1;
    
?>


<html>
    <body>
        <table width="100%" >
            <tr>
        <td align="right"><img src="icon.jpg" width="50%"></td>
        <td align="center"><h3>PT BANK PERKREDITAN RAKYAT WELERI MAKMUR</h3><p>
        <h4>KANTOR PUSAT SEMARANG</h4>Jl. Majapahit, Ruko Gayamsari No.17-20 Semarang Telp. (024) 673325</td>
        </tr>
        </table><hr color="black" size="5px"><br><br>
        <center><h2>DATA BARANG</h2></center>
            <table border="1" width="100%">
            <tr>
                <td align="center"><b>Kode Barang</b></td>
                <td align="center"><b>Nama Barang</b></td>
                <td align="center"><b>Nama Kantor</b></td>
                <td align="center"><b>Jumlah Barang</b></td>
                <td align="center"><b>Harga Barang</b></td>
                <td align="center"><b>Status Barang</b></td>
            </tr>

            <?php
              
              $lihat = mysqli_query($connect, "select * from pengajuan_brg");
              
                    while($row = mysqli_fetch_assoc($lihat)){
                        echo "      
                            <tr>
                                <td>$row[tgl_pengajuan]</td>
                                <td>$row[nm_brg_pgj]</td>
                                <td>$row[nm_kantor_pgj]</td>
                                <td>$row[jml_brg_pgj]</td>
                                <td>$row[hrg_brg_pgj]</td>
                                <td>$row[notif_pgj]</td>
                            </tr>
                        ";
                    }
            ?>
          </tbody>
          </table> 
          </center><br><br>
          <table width="100%">
            <tr>
          <td><p align="center">Hormat Kami,<br><br><br><br><br><br> HRD</td>
          <td><p align="center">Mengetahui,<br><br><br><br><br><br> Kabag.Umum</td>
        </tr>
        </table>
          <script>
            window.load = print_d();
            function print_d(){
                window.print();
            }
          </script>
        
    </body>
</html>



