<?php
if(isset($_POST["beli"])){
    $jumlahtiket = $_POST['jumlah'];
    $destinasi = $_POST['destinasi']; 
    $harga_tiket = $_POST['hargatiket'];
    

if($destinasi === "Bukit Bintang"){
    echo"<br><br>";
    echo"Destinasi Yang dituju $destinasi <br>";
    echo"Tiket yang dibeli $jumlahtiket <br>";
    if($jumlahtiket >=5 && $jumlahtiket<= 9){
        echo "Anda mendapatkan Diskon 5%<br>";
        $total_hargatiket= $harga_tiket * $jumlahtiket *(5/100) ;
        echo"Total Yang dibayar $total_hargatiket";

    }elseif($jumlahtiket >=10 && $jumlahtiket<= 19){
        echo "Anda mendapatkan Diskon 10%<br>";
        $total_hargatiket= $harga_tiket * $jumlahtiket *(10/100) ;
        echo"Total Yang dibayar $total_hargatiket";
    }elseif($jumlahtiket >=20){
        echo "Anda mendapatkan Diskon 15%<br>";
        $total_hargatiket= $harga_tiket * $jumlahtiket *(15/100) ;
        echo"Total Yang dibayar $total_hargatiket";
    }else{
        $total_hargatiket= $harga_tiket * $jumlahtiket;
        echo"Total Yang dibayar $total_hargatiket";
    }

}elseif($destinasi === "Pantai Sadranan"){
    echo"<br><br>";
    echo"Destinasi Yang dituju $destinasi <br>";
    echo"Tiket yang dibeli $jumlahtiket <br>";
    if($jumlahtiket >=5 && $jumlahtiket<= 9){
        echo "Anda mendapatkan Diskon 5%<br>";
        $total_hargatiket= $harga_tiket * $jumlahtiket *(5/100) ;
        echo"Total Yang dibayar $total_hargatiket";

    }elseif($jumlahtiket >=10 && $jumlahtiket<= 19){
        echo "Anda mendapatkan Diskon 10%<br>";
        $total_hargatiket= $harga_tiket * $jumlahtiket *(10/100) ;
        echo"Total Yang dibayar $total_hargatiket";
    }elseif($jumlahtiket >=20){
        echo "Anda mendapatkan Diskon 15%<br>";
        $total_hargatiket= $harga_tiket * $jumlahtiket *(15/100) ;
        echo"Total Yang dibayar $total_hargatiket";
    }else{
        $total_hargatiket= $harga_tiket * $jumlahtiket;
        echo"Total Yang dibayar $total_hargatiket";
    }

}elseif($destinasi === "Candi Borobudur"){
    echo"<br><br>";
    echo"Destinasi Yang dituju $destinasi <br>";
    echo"Tiket yang dibeli $jumlahtiket <br>";
    if($jumlahtiket >=5 && $jumlahtiket<= 9){
        echo "Anda mendapatkan Diskon 5%<br>";
        $total_hargatiket= $harga_tiket * $jumlahtiket *(5/100) ;
        echo"Total Yang dibayar $total_hargatiket";

    }elseif($jumlahtiket >=10 && $jumlahtiket<= 19){
        echo "Anda mendapatkan Diskon 10%<br>";
        $total_hargatiket= $harga_tiket * $jumlahtiket *(10/100) ;
        echo"Total Yang dibayar $total_hargatiket";
    }elseif($jumlahtiket >=20){
        echo "Anda mendapatkan Diskon 15%<br>";
        $total_hargatiket= $harga_tiket * $jumlahtiket *(15/100) ;
        echo"Total Yang dibayar $total_hargatiket";
    }else{
        $total_hargatiket= $harga_tiket * $jumlahtiket;
        echo"Total Yang dibayar $total_hargatiket";
    }

}elseif($destinasi === "Candi Prambanan"){
    echo"<br><br>";
    echo"Destinasi Yang dituju $destinasi <br>";
    echo"Tiket yang dibeli $jumlahtiket <br>";
    if($jumlahtiket >=5 && $jumlahtiket<= 9){
        echo "Anda mendapatkan Diskon 5%<br>";
        $total_hargatiket= $harga_tiket * $jumlahtiket *(5/100) ;
        echo"Total Yang dibayar $total_hargatiket";

    }elseif($jumlahtiket >=10 && $jumlahtiket<= 19){
        echo "Anda mendapatkan Diskon 10%<br>";
        $total_hargatiket= $harga_tiket * $jumlahtiket *(10/100) ;
        echo"Total Yang dibayar $total_hargatiket";
    }elseif($jumlahtiket >=20){
        echo "Anda mendapatkan Diskon 15%<br>";
        $total_hargatiket= $harga_tiket * $jumlahtiket *(15/100) ;
        echo"Total Yang dibayar $total_hargatiket";
    }else{
        $total_hargatiket= $harga_tiket * $jumlahtiket;
        echo"Total Yang dibayar $total_hargatiket";
    }

}elseif($destinasi === "Keraton Yogyakarta"){
    echo"<br><br>";
    echo"Destinasi Yang dituju $destinasi <br>";
    echo"Tiket yang dibeli $jumlahtiket <br>";
    if($jumlahtiket >=5 && $jumlahtiket<= 9){
        echo "Anda mendapatkan Diskon 5%<br>";
        $total_hargatiket= $harga_tiket * $jumlahtiket *(5/100) ;
        echo"Total Yang dibayar $total_hargatiket";

    }elseif($jumlahtiket >=10 && $jumlahtiket<= 19){
        echo "Anda mendapatkan Diskon 10%<br>";
        $total_hargatiket= $harga_tiket * $jumlahtiket *(10/100) ;
        echo"Total Yang dibayar $total_hargatiket";
    }elseif($jumlahtiket >=20){
        echo "Anda mendapatkan Diskon 15%<br>";
        $total_hargatiket= $harga_tiket * $jumlahtiket *(15/100) ;
        echo"Total Yang dibayar $total_hargatiket";
    }else{
        $total_hargatiket= $harga_tiket * $jumlahtiket;
        echo"Total Yang dibayar $total_hargatiket";
    }

}elseif($destinasi === "Malioboro"){
    echo"<br><br>";
    echo"Destinasi Yang dituju $destinasi <br>";
    echo"Tiket yang dibeli $jumlahtiket <br>";
    if($jumlahtiket >=5 && $jumlahtiket<= 9){
        echo "Anda mendapatkan Diskon 5%<br>";
        $total_hargatiket= $harga_tiket * $jumlahtiket *(5/100) ;
        echo"Total Yang dibayar $total_hargatiket";

    }elseif($jumlahtiket >=10 && $jumlahtiket<= 19){
        echo "Anda mendapatkan Diskon 10%<br>";
        $total_hargatiket= $harga_tiket * $jumlahtiket *(10/100) ;
        echo"Total Yang dibayar $total_hargatiket";
    }elseif($jumlahtiket >=20){
        echo "Anda mendapatkan Diskon 15%<br>";
        $total_hargatiket= $harga_tiket * $jumlahtiket *(15/100) ;
        echo"Total Yang dibayar $total_hargatiket";
    }else{
        $total_hargatiket= $harga_tiket * $jumlahtiket;
        echo"Total Yang dibayar $total_hargatiket";
    }

}elseif($destinasi === "Goa Pindul"){
    echo"<br><br>";
    echo"Destinasi Yang dituju $destinasi <br>";
    echo"Tiket yang dibeli $jumlahtiket <br>";
    if($jumlahtiket >= 5 && $jumlahtiket<= 9){
        echo "Anda mendapatkan Diskon 5%<br>";
        $total_hargatiket= $harga_tiket * $jumlahtiket *(5/100) ;
        echo"Total Yang dibayar $total_hargatiket";

    }elseif($jumlahtiket >=10 && $jumlahtiket<= 19){
        echo "Anda mendapatkan Diskon 10%<br>";
        $total_hargatiket= $harga_tiket * $jumlahtiket *(10/100) ;
        echo"Total Yang dibayar $total_hargatiket";
    }elseif($jumlahtiket >=20){
        echo "Anda mendapatkan Diskon 15%<br>";
        $total_hargatiket= $harga_tiket * $jumlahtiket *(15/100) ;
        echo"Total Yang dibayar $total_hargatiket";
    }else{
        $total_hargatiket= $harga_tiket * $jumlahtiket;
        echo"Total Yang dibayar $total_hargatiket";
    }

}
    if(isset($_POST["pesan"])){
        $hargamakanan ; 
        $hargaminuman;
        $jumlahmakanan = $_POST['pb'];
        $jumlahminuman = $_POST['pbm'];
        $namamakanan = $_POST['makanan'];
        $namaminuman = $_POST['minuman'];

        echo"Makanan Yang dipesan : $namamakanan <br>";
        echo "Pesan Berapa : $pb <br>" ;
        echo"Minuman Yang dipesan : $namaminuman";
        echo "Pesan Berapa : $pb <br>";
        }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method ='POST'>
            <table>
            <tr>
                <td>Masukan Uang</td>
                <td>:</td>
                <td><input type="number" name="bayar"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

<?php
if(isset($_POST["bayar"])){

}
?>