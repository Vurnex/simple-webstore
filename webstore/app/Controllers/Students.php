<?php

namespace App\Controllers;

use App\Models\StudentsModel;

class Students extends BaseController
{
    
    public function index()
    {

        $session = session();

        $currentUser = $session->get('user_name');

        //used to toggle display of confirmation boxes
        $_SESSION['success2'] = null;

        $model = model(StudentsModel::class);
    
        $data = [
            'students2'  => $model->getStudents(),
        ];

        if ($currentUser == "admin") {

            echo view('templates/header', $data);
            echo view('studentadminview', $data);
            echo view('templates/footer', $data);
        }
        else {
            
            echo view('templates/header');
            echo view('studentview', $data);
            echo view('templates/footer');
        }
    
    }


    public function delete($id)
	{

        $session = session();

        $_SESSION['success2'] = "";

        //connect to database and access students2 table
        $db      = \Config\Database::connect();
        $builder = $db->table('students2');

        $model = new StudentsModel();

		$builder->delete(['id' => $id]);        
        
        $data = [
            'students2'  => $model->getStudents(),
        ];

        $_SESSION['success2'] = "true";

        echo view('templates/header', $data);
        echo view('studentadminview', $data);
        echo view('templates/footer', $data);
	}
}