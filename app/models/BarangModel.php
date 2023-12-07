<?php

namespace App\Models;

use App\Core\Model;

class BarangModel extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_barang";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $barang = $_POST['namabarang'];
            $warna = $_POST['warna'];
            $merek = $_POST['merek'];

            $sql = "INSERT INTO tb_barang
            SET namabarang=:namabarang, warna=:warna, merek=:merek";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":namabarang", $barang);
            $stmt->bindParam(":warna", $warna);
            $stmt->bindParam(":merek", $merek);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_barang WHERE id=:id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $barang = $_POST['namabarang'];
            $warna = $_POST['warna'];
            $merek = $_POST['merek'];
            $id = $_POST['id'];

            $sql = "UPDATE tb_barang SET namabarang=:namabarang, warna=:warna, merek=:merek WHERE id=:id";

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":namabarang", $barang);
            $stmt->bindParam(":warna", $warna);
            $stmt->bindParam(":merek", $merek);
            $stmt->bindParam(":user_id", $id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_barang WHERE id=:id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id", $id);
            $stmt->execute();
      }
}
