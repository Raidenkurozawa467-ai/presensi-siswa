
<?php

require_once __DIR__ . "/config/Database.php";
require_once __DIR__ . "/classes/Siswa.php";

$database = new Database();
$db = $database->getConnection();

$siswa = new Siswa($db);

$data = $siswa->getAllWithKelas();

echo "<pre>";
print_r($data);
echo "</pre>";
