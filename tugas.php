<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Liburan</title>
</head>

<body>
    <h2><center>PILIHAN LIBURAN</center></h2>
    <ol>
        <li>Bukit Bintang</li>
        <li>Pantai Sadranan</li>
        <li>Candi Borobudur</li>
        <li>Candi Prambanan</li>
        <li>Keraton Yogyakarta</li>
        <li>Malioboro</li>
        <li>Pendopo Lawas</li>
        <li>Goa Pindul</li>
    </ol>

    <form action="proses.php" method="POST">
        <p>
            <label>Pilih Destinasi :</label>
            <select name = "pilih">
                <option selected hidden ></option>
                <option value = "Bukit Bintang">Bukit Bintang</option>
                <option value = "Pantai Sadranan">Pantai Sadranan</option>
                <option value = "Candi Borobudur">Candi Borobudur</option>
                <option value = "Candi Prambanan">Candi Prambanan</option>
                <option value = "Keraton Yogyakarta">Keraton Yogyakarta</option>
                <option value = "Malioboro">Malioboro</option>
                <option value = "Pendopo Lawas">Pendopo Lawas</option>
                <option value = "Goa Pindul">Goa Pindul</option>
            </select>
            <input type = "submit" name = "kirim" value = "Kirim">
        </p>
    </form>

</body>

</html>

