<html>
    <head>
        <title>Form Parkir</title>
</head>
<body>
    <header>
    <h1>Form Parkir</h1>
</header>
    <form action="proses_parkir.php" method="POST">
        <fieldset>
            <p>
                <label for="Nama">Jenis Kendaraan:</label>
                <input type="Text" name="Nama"/>
           </p>
           <p>
               <label for="Tarif">Tarif Parkir:</label>
               <p><input type="radio" name="Tarif" value="5000">5000</p>
               <p><input type="radio" name="Tarif" value="6000">6000</p>
               <p><input type="radio" name="Tarif" value="7000">7000</p>
           </p>
<p>
    <input type="submit"value="kirim data"name="simpan"/>
</p>
</fieldset>
</form>
</body>
</html>