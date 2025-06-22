<?php
class TransaksiModel {
    private $conn;

 

    public function insert($jumlah, $jenis, $kategori, $tanggal, $deskripsi, $user_id) {
        $stmt = $this->conn->prepare("INSERT INTO transaksi (jumlah, jenis, kategori, tanggal, deskripsi, user_id) VALUES (?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("sssssi", $jumlah, $jenis, $kategori, $tanggal, $deskripsi, $user_id);

        if ($stmt->execute()) {
            return true;
        } else {
            die("Gagal menyimpan transaksi: " . $stmt->error);
        }
    }

}
?>
