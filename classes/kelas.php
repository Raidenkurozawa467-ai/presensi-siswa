
<?php

require_once "BaseModel.php";

class Kelas extends BaseModel
{
    protected string $table = "kelas";

    public function __construct(PDO $db)
    {
        parent::__construct($db);
    }
}
