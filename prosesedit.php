<?php
include 'koneksi.php';
$SQL=mysqli_query($koneksi,"SELECT * FROM data WHERE id_siswa = '$_GET[kode]'");
$data=mysqli_fetch_array($SQL);
?>

<html>

<head>
    <title>Edit Data</title>
    <style>
        body {
            font-family: sans-serif;
            margin-top: 100px;
            margin-left: 500px;
        }
    </style>
</head>

<body>
    <table border="0" bgcolor="#f1f1f1" style="border-radius: 15px;" cellspacing="5" width="50%" height="65%" >
        <tr>
            <td valign="top">
                <h1>Edit Data</h1>
            <td>
        </tr>
        <tr valign="center">
            <td>
                <form action="editpro.php" method="post" enctype="multipart/form-data">
                    <table>
                    <tr>
                            <td width="120"> ID Siswa </td>
                            <td> <input type="text" name="id" value="<?php echo $data['id_siswa']; ?>"
                                    style="border-radius:10px;padding:5px;" autocomplete="off" readonly> </td>
                        </tr>
                        <tr>
                            <td width="120"> Nama Siswa </td>
                            <td> <input type="text" name="nama" value="<?php echo $data['nama_siswa']; ?>"
                                    style="border-radius:10px;padding:5px;" autocomplete="off" > </td>
                        </tr>
                        <tr>
                            <td> kelas </td>
                            <td> <input type="text" name="class" value="<?php echo $data['kelas']; ?>"
                                    style="border-radius:10px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> No Nisn  </td>
                            <td> <input type="text" name="nonis" value="<?php echo $data['no_nisn']; ?>"
                                    style="border-radius:10px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> jenis kelamin  </td>
                            <td> <input type="text" name="jk" value="<?php echo $data['jk']; ?>"
                                    style="border-radius:10px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> Tempat lahir  </td>
                            <td> <input type="text" name="place" value="<?php echo $data['tempat_lahir']; ?>"
                                    style="border-radius:10px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td> Tanggal Lahir   </td>
                            <td> <input type="date" name="tgllahir" value="<?php echo $data['tgl_lahir']; ?>"
                                    style="border-radius:10px;padding:5px;" autocomplete="off"> </td>
                        </tr>y7
                        <tr>
                            <td> Alamat  </td>
                            <td> <input type="text" name="alam" value="<?php echo $data['alamat']; ?>"
                                    style="border-radius:10px;padding:5px;" autocomplete="off"> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="proses" id="proses" value="Save Changes"
                                    style="margin-left:-110px; margin-top:40px; background-color:#89CFFD;border-radius:10px;padding:5px;width:100px;">
                            </td>
                        </tr>
                        <div class="mb-3 form-group row">
                            <input class="form-control col-sm-6" type="file" name="gambar" id="formFileMultiple" multiple>
                        </div>
                    </table>
                </form>
                <a href="edit.php"
                    style="margin-left:30px; border-radius:10px;background-color:#89CFFD; color:black; text-decoration:none;padding:5px;width:100px;">
                    <strong>Batal</strong> </a>
            </td>
        </tr>
    </table>
</body>

</html>