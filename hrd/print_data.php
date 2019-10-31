<?php
    include('../koneksi/koneksi.php');

    $angka=1;
?>


<html>
    <body>
        <table class="table table-stripped" width="100%">
                                    <tr>
                                            <th>Nama Barang</th>
                                            <td><?php echo $nm_brg; ?> </td>
                                    </tr>

                                    <tr>
                                            <th>Tanggal Pengajuan</th>
                                            <td><?php echo $tgl_pengajuan; ?> </td>
                                    </tr>
                                    <tr>
                                            <th>Kantor</th>
                                            <td><?php echo $nm_kantor; ?> </td>
                                    </tr>
                                    <tr>
                                            <th>Jumlah</th>
                                            <td><?php echo $jml_brg; ?> / <?php echo $sat_brg; ?> </td>
                                    </tr>    
                                    <tr>
                                            <th>Total Harga</th>
                                            <td><b>Rp</b> <?php echo $tot_hrg; ?> </td>
                                    </tr>
                                     <tr>
                                            <th>Keterangan</th>
                                            <td><?php echo $ket; ?> </td>
                                    </tr>
                                    </table>
            <?php
              
              $lihat = mysqli_query($connect, "select * from pengajuan_brg where id_pengajuan");
              
                    while($row = mysqli_fetch_assoc($lihat)){
                        echo "      
                            <tr>
                                <td>$row[id_pengajuan]</td>
                                
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



