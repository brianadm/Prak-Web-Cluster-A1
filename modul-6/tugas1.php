<!DOCTYPE html>

<h1>Hitung Faktorial</h1>
<form method="post">
    <label>Bilangan: </label>
    <input type="number" name="bilangan" min="0">
    <button type="submit" name="kirim">hitung</button>
</form><br>

<?php
function faktorial($bil){
        if($bil==0){
            return 1;
        }else{
            return $bil*faktorial($bil-1);
        }
    }

if(isset($_POST['kirim'])){
    $bil = $_POST['bilangan'];
    echo "faktorial dari " .$bil ."  = " .faktorial($bil);
}
?>