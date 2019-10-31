<?php
    include('../koneksi/koneksi.php');

    $angka=1;
?>


<html>
    <body>
        <center><h2>DATA ADMIN</h2></center>
        <center>
            <table border="1" width="100%">
            <tr>
               <th>No</th>
                                        <th>NIP</th>
                                        <th>Nama Admin</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Jabatan</th>
                                        <th>Opsi</th>
            </tr>

            <?php
              
              $lihat = mysqli_query($connect, "select * from daftar");
              
                    while($row = mysqli_fetch_assoc($lihat)){
                        echo "      
                            <tr>
                                <td>$row[id_daftar]</td>
                                <td>$row[nip]</td>
                                <td>$row[nm_ad]</td>
                                <td>$row[email_ad]</td>
                                <td>$row[username]</td>
                                <td>$row[password]</td>
                                <td>$row[level]</td>
                                <td>$row[konfrim]</td>
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



