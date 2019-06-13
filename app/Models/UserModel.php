<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
        protected $table      = 'users';
        protected $primaryKey = 'id';

        protected $returnType = 'array';
        protected $useSoftDeletes = true;

        protected $allowedFields = ['name', 'email'];

        protected $useTimestamps = false;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';

        protected $validationRules    = [
                'name' => 'required|alpha_numeric_space|min_length[3]',
                'email' =>'required|valid_email|is_unique[users.email]'
        ];
        protected $validationMessages = [
                'email' =>[
                        'is_unique'=>'Lo sentimos. Tu correo ya esta siendo usado por otro usuario'
                ]
        ];
        protected $skipValidation     = false;
}