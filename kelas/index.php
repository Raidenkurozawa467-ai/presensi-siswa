
<?php

require_once __DIR__ . "/../config/Database.php";
require_once __DIR__ . "/../classes/Kelas.php";

$database = new Database();
$db = $database->getConnection();

$kelas = new Kelas($db);

$dataKelas = $kelas->getAll();

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
</head>
<body>

    <h1>Data Kelas</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID Kelas</th>
                <th>Nama Kelas</th>
                <th>Jurusan</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($dataKelas as $row): ?>
                <tr>
                    <td><?= htmlspecialchars((string) $row['id_kelas']) ?></td>
                    <td><?= htmlspecialchars($row['nama_kelas']) ?></td>
                    <td><?= htmlspecialchars($row['jurusan']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
