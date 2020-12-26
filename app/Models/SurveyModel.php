<?php

namespace App\Models;

use CodeIgniter\Model;

class SurveyModel extends Model
{
    protected $table      = 'survey';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nim', 'nama', 'gender', 'p1', 'p2', 'p3', 'p4'];

    protected $useTimestamps = true;
}
