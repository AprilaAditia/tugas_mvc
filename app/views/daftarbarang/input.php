<h2>Input Barang</h2>

<form action="<?php echo URL; ?>/daftarbarang/save" method="post">
    <table>
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="namabarang" required></td>
        </tr>
        <tr>
            <td>Warna Barang</td>
            <td><input type="text" name="warna" required></td>
        </tr>
        <tr>
            <td>Merek Barang</td>
            <td><input type="text" name="merek" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>