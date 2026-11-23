
<?php

require_once __DIR__ . "/BaseModel.php";

class Siswa extends BaseModel
{
    protected string $table = "siswa";

    public function __construct(PDO $db)
    {
        parent::__construct($db);
    }

    public function getAllWithKelas(): array
    {
        $query = "SELECT
                    siswa.nisn,
                    siswa.nama,
                    siswa.alamat,
                    kelas.nama_kelas
                  FROM siswa
                  INNER JOIN kelas
                  ON siswa.id_kelas = kelas.id_kelas";

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}
