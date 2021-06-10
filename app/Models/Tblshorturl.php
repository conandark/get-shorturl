<?php

namespace App\Models;

use CodeIgniter\Model;

class Tblshorturl extends Model
{
    protected $table      = 'tblshorturl';
    protected $primaryKey = 'id';
    protected $allowedFields = ['short_url', 'full_url'];

}
