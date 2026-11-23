
<?php

require_once "BaseModel.php";

class Kelas extends BaseModel
{
    protected string $table = "kelas";

    public function __construct(PDO $db)
    {
        parent::__construct($db);
    }

    public function create($nama_kelas, $jurusan)
    {
        $query = "INSERT INTO kelas (nama_kelas, jurusan)
                  VALUES (?, ?)";

        $stmt = $this->db->prepare($query);

        return $stmt->execute([
            $nama_kelas,
            $jurusan
        ]);
    }
}
