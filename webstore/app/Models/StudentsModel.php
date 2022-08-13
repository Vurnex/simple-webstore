<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentsModel extends Model
{
    protected $table = 'students2';

    protected $allowedFields = ['id','FirstName','LastName','Major','CurrentYear', 'Email', 'slug', 'body'];

    //populate table data using the slug column
    public function getStudents($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}