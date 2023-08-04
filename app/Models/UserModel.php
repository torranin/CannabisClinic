<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'user';
    protected $allowedFields = ['user_name','user_password','user_status','fname','lname','user_create_at'];
}