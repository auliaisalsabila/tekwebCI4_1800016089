<?php
namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class user_data extends Model {
    protected $table = 'user';
    protected $allowedFields = ['firstname','lastname','email','password','date_create','date_update'];
}

?>