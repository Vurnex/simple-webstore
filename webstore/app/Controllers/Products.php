<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class Products extends BaseController
{
    
    public function index()
    {

        $session = session();

        $currentUser = $session->get('user_name');

        //used to toggle display of confirmation boxes
        $_SESSION['success2'] = null;

        $model = new ProductsModel(); 
    
        $data = [
            'products'  => $model->getProducts()
        ];

        if ($currentUser == "admin") {

            echo view('templates/header', $data);
            echo view('productadminview', $data);
            echo view('templates/footer', $data);
        }
        else {
            
            echo view('templates/header');
            echo view('products', $data);
            echo view('templates/footer');
        }
    
    }

    public function delete()
	{

        $session = session();

        $id = $_GET['id'];

        //connect to database and access students2 table
        $db      = \Config\Database::connect();
        $builder = $db->table('products');

        $model = new ProductsModel();

		$builder->delete(['id' => $id]);        
        
        $data = [
            'products'  => $model->getProducts(),
        ];

        $_SESSION['success2'] = "true";

        echo view('templates/header', $data);
        echo view('productadminview', $data);
        echo view('templates/footer', $data);
	}

    

}