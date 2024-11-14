<?php

namespace App\Models;

use CodeIgniter\Model;

class Candidate extends Model
{
    protected $table = 'candidates';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'firstname',
        'lastname',
        'date_of_birth',
        'active',
        'cover_text'
    ];
}