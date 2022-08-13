<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\StudentsModel;

class CreateStudents extends Controller
{
    
    public function index()
    {

        //Form Helper to help create form elements
        helper(['form']);

        $data = [];

        echo view('createstudents', $data);
    
    }

    public function create()
    {

        $session = session();

        $_SESSION['success'] = null;

        helper(['form']);

        $rules = [
            'firstname'         => 'required|min_length[3]|max_length[20]',
            'lname'             => 'required|min_length[3]|max_length[20]',
            'email'             => 'required|min_length[6]|max_length[50]|valid_email|is_unique[students2.email]',
        ];

        //if inputs are valid, get them and store in the database
        if($this->validate($rules)){

            $model = new StudentsModel();

            $data = [

                'FirstName' => $this->request->getVar('firstname'),
                'slug'  => url_title($this->request->getVar('firstname'), '-', true),
                'LastName' => $this->request->getVar('lname'),
                'Major' => $this->request->getVar('major'),
                'CurrentYear' => $this->request->getVar('currentyear'),
                'Email' => $this->request->getVar('email'),
            ];

            $model->save($data);

            $_SESSION['success'] = "true";

            echo view('createstudents');
        
            
        }else{ //else return mistakes that need to be corrected
            
            $data['validation'] = $this->validator;
            echo view('createstudents', $data);
        }


    }

}