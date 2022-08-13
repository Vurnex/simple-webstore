<?php

namespace App\Controllers;

use App\Models\ProductsModel;
use App\Models\TransactionsModel;

class Cart extends BaseController
{
    
    public function index()
    {
        $session = session();
        
        $currentUser = $session->get('user_name');

        //used to toggle display of confirmation boxes
        //$_SESSION['success2'] = null;

        $model = new ProductsModel(); 
    
        $data = [
            'products'  => $model->getProducts(),
        ];

        if ($currentUser == "admin") {

            echo view('templates/header', $data);
            echo view('cart', $data);
            echo view('templates/footer', $data);
        }
        else {
            
            echo view('templates/header');
            echo view('cart', $data);
            echo view('templates/footer');
        }
    
    }

    public function complete()
    {
        $session = session();

        $currentUser = $session->get('user_name');
        
        $model = new TransactionsModel();

        $itemspurchased = " ";

        date_default_timezone_set('America/Chicago');

        $date = date('Y-m-d H:i:s');

        $total = $_POST['totaledInput'];

        $itemspurchased = $_SESSION['itemsCombined'];

        $data = [
            'datepurchased'     => $date,
            'subtotal'          => $total,
            'itemspurchased'    => $itemspurchased,
            'user'              => $currentUser,
        ];

        $model->save($data); 

        echo view('templates/header');
        echo view('complete');
        echo view('templates/footer');

    }

}