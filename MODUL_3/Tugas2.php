<!DOCTYPE html>
<html>
<head>
    <title>Ganjil atau Genap</title>
</head>
<body>
    <form method="POST" action="Tugas2.php">
        <p>Masukkan Angka <input type="text" name="a" size="3"></p>
        <input type="submit" name="submit" value="CEK">
    </form>
    
    <?php
        error_reporting(E_ALL ^ E_NOTICE);
        $a = $_POST['a'];
        $submit = $_POST['submit'];
        if ($submit) {
            if ($a == '') {
                echo "</br> </br> Anda Belum Memasukkan Angka!";
            } elseif ($a % 2 == 0) {
                echo "</br> </br> Angka yang Anda masukan adalah Bilangan $a";
                echo "</br>Bilangan $a adalah Bilangan GENAP";
            } else {
                echo "</br> </br> Angka yang Anda masukan adalah Bilangan $a";
                echo "</br>Bilangan $a adalah Bilangan GANJIL";
            }
        }
    ?>    
</body>
</html>