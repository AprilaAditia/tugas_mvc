<h2>Daftar Barang</h2>

<form action="<?php echo URL; ?>/daftarbarang/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id']; ?>">
    <table>
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="nama_barang" value="<?php echo $data['row']['namabarang']; ?>" required></td>
        </tr>
        <tr>
            <td>Warna Barang</td>
            <td><input type="text" name="warna_barang" value="<?php echo $data['row']['warna']; ?>" required></td>
        </tr>
        <tr>
            <td>Merek Barang</td>
            <td><input type="text" name="merek_barang" value="<?php echo $data['row']['merek']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>