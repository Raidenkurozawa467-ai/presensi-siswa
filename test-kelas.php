
<?php

require_once "config/Database.php";
require_once "classes/Kelas.php";

$database = new Database();
$db = $database->getConnection();

$kelas = new Kelas($db);

$data = $kelas->getAll();

echo "<pre>";
print_r($data);
echo "</pre>";
