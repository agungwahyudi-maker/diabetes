<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="hasil.php" method="post" data-aos="flip-left" data-aos-easing="ease-out-cubic"
        data-aos-duration="2000">
        <h2 data-aos="fade-up" data-aos-delay="50">Cek Diabetes</h2>
        <table>
            <tr>
                <td>Jumlah Hamil</td>
                <td><input type="double" name="x1"></td>
            </tr>
            <tr>
                <td>Kadar Glukosa</td>
                <td><input type="double" name="x2"></td>
            </tr>
            <tr>
                <td>Tekanan Darah</td>
                <td><input type="double" name="x3"></td>
            </tr>
            <tr>
                <td>Usia</td>
                <td><input type="double" name="x4"></td>
            </tr>
            <tr>
                <td></td>
                <td id="submit">
                    <input id="bawah" type="submit" value="Prediksi" name="prediksi">
                    <input id="bawah" type="reset" value="Hapus">
                </td>

            </tr>

        </table>
    </form>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

</body>

</html>