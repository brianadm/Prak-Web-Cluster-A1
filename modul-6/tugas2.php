<!DOCTYPE html>

<form method="post">
    <table>
    <tr>
        <td>Masukkan Nama</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Pilih Warna</td>
        <td><input type="color" name="warna" value="#ff0000"></td>
    </tr>
    </table>
    <button type="submit" name="kirim">submit</button>
</form><br>

<?php
 function bet($name, $color="red"){
        $length = strlen($name);
        if($length > 20 ){
            $harga = 700;
        }elseif($length >= 11){
            $harga = 500;
        }elseif($length >= 1){
            $harga = 300;
        }else{
            $harga = 0;
        }
        $total = $length * $harga;
        echo '<font color="' .$color .'">nama   : ' .$name .'</font><br>';
        echo '<font color="' .$color .'">total  : ' .$total .'</font><br>';
    }

    if(isset($_POST['kirim'])){
        bet($_POST['nama'], $_POST['warna']);
    }
?>