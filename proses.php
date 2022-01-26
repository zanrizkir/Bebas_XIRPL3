<?php

if(isset($_POST["pilih"])) {
    $destinasi = $_POST["pilih"];
    $harga_tiket;

    if($destinasi == "Bukit Bintang") {
        $harga_tiket = 10000;

    }else if($destinasi == "Pantai Sadranan") {
        $harga_tiket = 15000;

    }else if($destinasi == "Candi Borobudur") {
        $harga_tiket = 50000;

    }else if($destinasi == "Candi Prambanan") {
        $harga_tiket = 50000;

    }else if($destinasi == "Keraton Yogyakarta") {
        $harga_tiket = 5000;

    }else if($destinasi == "Malioboro") {
        $harga_tiket = 5000;
    }else if($destinasi == "Goa Pindul") {
        $harga_tiket = 100000;
    }
}           

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if($destinasi == 'Pendopo Lawas') : ?>
    <title>Cafe Pendopo Lawas</title>
    <?php else : ?>
        <title>.</title>
        <?php endif ?>
</head>
<body>
    <center>
    <?php if($destinasi === 'Pendopo Lawas') : ?>
        <h2>Cafe Pendopo Lawas</h2>
        <div>
            <h3>Menu</h3>
            <table border='1' cellpadding="10px">
                <tr>
                    <th>No</th>
                    <th>Makanan</th>
                    <th>Harga</th>
                    <th>No</th>
                    <th>Minuman</th>
                    <th>Harga</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Basreng</td>
                    <td>Rp 5000</td>
                    <td>1</td>
                    <td>Kopikap</td>
                    <td>Rp. 3000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Gehu</td>
                    <td>Rp. 4000</td>
                    <td>2</td>
                    <td>Ale-ale</td>
                    <td>Rp. 2000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Cireng</td>
                    <td>Rp. 8000</td>
                    <td>3</td>
                    <td>Power F</td>
                    <td>Rp. 2500</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Martabak</td>
                    <td>Rp. 15000</td>
                    <td>4</td>
                    <td>Marimas</td>
                    <td>Rp. 1500</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Seblak </td>
                    <td>Rp. 10000</td>
                    <td>5</td>
                    <td>Jasjus</td>
                    <td>Rp. 3000</td>
                </tr>
            </table>
            </center>
            <br><br><br>
            <h3>Silahkan Pesan</h3>
            <form action="bayar.php" method="POST">
            <table>
                <tr>
                    <td>Pilih Makanan</td>
                    <td>:</td>
                    <td>
                    <select name = "makanan">
                        <option selected hidden ></option>
                        <option value = "Basreng">Basreng</option>
                        <option value = "Gehu">Gehu</option>
                        <option value = "Cireng">Cireng</option>
                        <option value = "Martabak">Martabak</option>
                        <option value = "Seblak">Seblak</option>
                    </select>
                    </td>
                    <tr>
                        <td>Pesan Berapa</td>
                        <td>:</td>
                        <td><input type="number" name="pb"></td>
                    </tr>
                    <tr>
                        <td>Pilih Minuman</td>
                        <td>:</td>
                        <td>
                    <select name = "minuman">
                        <option selected hidden ></option>
                        <option value = "Kopikap">Kopikap</option>
                        <option value = "Ale-ale">Ale-ale</option>
                        <option value = "Power F">Power F</option>
                        <option value = "Marimas">Marimas</option>
                        <option value = "Jasjus">Jasjus</option>
                    </select>
                    </td>
                    </tr>
                    <tr>
                        <td>Pesan Berapa</td>
                        <td>:</td>
                        <td><input type="number" name="pbm"></td>
                    </tr>
                    <td>
                    <input type = "submit" name = "pesan" value = "Beli">
                    </td>
            </form>       
                </tr>
            </table>
            
        </div>
    <?php else : ?>
        <h2>Lanjutkan Pembelian</h2>
        <table>
        <tr>
            <tr>
                <td>Destinasi yang dipilih</td>
                <td>:</td>
                <td><?=$destinasi?></td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td>:</td>
                <td><?=$harga_tiket ?> /Orang</td>
            </tr>
        </tr>
        </table>
        <br>
        <form action="bayar.php" method='post'>
            <input type="number" name="jumlah" id="jumlah">
            <input type="hidden" name="hargatiket" value="<?=$harga_tiket?>">
            <input type="hidden" name="destinasi" value="<?=$destinasi?>">
            <button type="submit" name="beli" >Beli</button>
        </form>
        <?php endif?>
</body>
</html>