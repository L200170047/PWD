<!DOCTYPE html>
<html>
<head>
    <title>Program Penjumlahan</title>
</head>
<body>
    <h1>Penjumlahan</h1>
    <form method="POST" action="tugas1.php">
        <p>Nilai A adalah <input type="text" name="a" size="10"></p>
        <p>Nilai B adalah <input type="text" name="b" size="10"></p>
        <input type="submit" name="submit" value="Jumlahkan">
    </form>
    <?php
        error_reporting(E_ALL ^ E_NOTICE);
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $a + $b;
        $submit = $_POST['submit'];
        if ($submit) {
			echo "</br> </br>";
            echo "Nilai A adalah $a </br>";
            echo "Nilai B adalah $b </br>";
            echo "Jadi Nilai A ditambah Nilai B adalah $c";
        }
    ?>
</body>
</html>