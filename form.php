<?php
    require_once 'dbkoneksi.php';

    $sqljenis = "SELECT * FROM kartu";
    $rowjenis = $conn->prepare($sqljenis);
    $rowjenis->execute();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Input Data</title>
</head>
<body>
	<a href="index.php">
        <h2>HOME</h2>
    </a>
	<form method="post" action="index.php">
    <table border="0" align="center" cellpadding="10" width="40%">
            <thead>
                <tr bgcolor="lightgreen">
                    <th colspan="2">Form Pelanggan</th>
                </tr>
            </thead>
        <tr>
            <td><label for="kode">Kode:</label></td>
            <td>
                <input type="text" id="kode" name="kode">
            </td>
        </tr>
		
		<tr>
            <td><label for="nama">Nama:</label></td>
            <td>
                <input type="text" id="nama" name="nama">
            </td>
        </tr>

        <tr>
            <td><label for="jk">Jenis Kelamin:</label></td>
            <td>
                <label>Laki-Laki</label><br>
                <label>Perempuan</label></td>
            </td>

            <td>
                <input type="radio" name="jk" value="L" checked><br>
                <input type="radio" name="jk" value="P">
            </td>
    
        </tr>

    
            


        <tr>
            <td><label for="tmp_lahir">Tempat Lahir:</label></td>
            <td>
                <input type="text" id="tmp_lahir" name="tmp_lahir">
            </td>
		</tr>
        
        <tr>
            <td><label for="tgl_lahir">Tanggal Lahir:</label></td>
            <td>
                <input type="date" id="tgl_lahir" name="tgl_lahir">   
            </td>
        </tr>
       
        <tr>
            <td><label for="email">Email:</label></td>
            <td>
                <input type="email" id="email" name="email">
            </td>
        </tr>
        
        <tr>
            <td><label>Kartu ID</label></td>
            <td>
            <select name="kartu_id" id="kartu_id">
            <?php
            while($jenis = $rowjenis->fetch(PDO::FETCH_ASSOC)){              
        ?>
            <option value="<?= $jenis['id'] ?>">         <?= $jenis['nama']  ?>          </option>
        <?php
            }
        ?>
        </select>

            </td>
        </tr>
        
		<tfoot>
                <tr bgcolor="lightgreen">
                    <th colspan="2">
		<input type="submit" value="Simpan" name="submit">
        </th>
                </tr>
            </tfoot>
        </table>
	</form>
</body>
</html>
