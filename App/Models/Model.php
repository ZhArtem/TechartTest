<?php

namespace App\Models;

use App\DB\DB;

class Model
{
    protected $db = null;

    public function __construct()
    {
        $this->db = DB::connToDB();
    }
}
