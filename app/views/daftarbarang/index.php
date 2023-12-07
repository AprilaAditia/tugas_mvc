<h2>Barang</h2>

<a href="<?php echo URL; ?>/daftarbarang/input" class="btn">Input Barang</a>

<table>
      <tr>
            <th>NO</th>
            <th>Nama Barang</th>
            <th>Warna Barang</th>
            <th>Merek Barang</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['namabarang']; ?></td>
                  <td><?php echo $row['warna']; ?></td>
                  <td><?php echo $row['merek']; ?></td>
                  <td><a href="<?php echo URL; ?>/daftarbarang/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/daftarbarang/delete/<?php echo $row['id']; ?>" class="btn" style="background-color: red" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>