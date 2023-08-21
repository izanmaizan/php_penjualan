<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php penjualan</title>
</head>

<body>
    <div align="center">
        <form action="proses.php" id="form1" method="post" name="form1">
            <p>&nbsp;</p>
            <table width="400" height="201" border="1">
                <tr>
                    <td colspan="2" bgcolor="#666666">
                        <div class="putih" align="center">
                            <strong>PENJUALAN</strong>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="124" bgcolor="#cccccc">Nama Barang</td>
                    <td width="243" bgcolor="#cccccc">&nbsp;
                        <input type="text" name="nama_barang" id="">
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#cccccc">Harga</td>
                    <td bgcolor="#cccccc">&nbsp;
                        <input type="text" name="harga" id="">
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#cccccc">Quantity</td>
                    <td bgcolor="#cccccc">&nbsp;
                        <input type="text" name="jumlah" id="">
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#cccccc">Status</td>
                    <td bgcolor="#cccccc">
                        <p>
                            <label>
                                <input type="radio" name="status" id="status_0" value="Pelanggan" checked="checked">
                                Pelanggan
                            </label>
                            <label>
                                <input type="radio" name="status" id="status_1" value="Bukan pelanggan">
                                Bukan pelanggan
                            </label>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#cccccc">Kota</td>
                    <td bgcolor="#cccccc"><select name="kota" id="">
                            <option>Jakarta</option>
                            <option>Bandung</option>
                            <option>Surabaya</option>
                        </select>&nbsp;</td>
                </tr>
                <tr>
                    <td height="28" bgcolor="#cccccc">&nbsp;</td>
                    <td bgcolor="#cccccc">
                        <input type="submit" value="Hitung">&nbsp;
                        <input type="reset" value="Hapus">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>