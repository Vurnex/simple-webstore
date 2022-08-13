<?php

namespace App\Controllers;

use App\Models\TransactionsModel;

class Sales extends BaseController
{
    
    public function index()
    {

        $session = session();

        $currentUser = $session->get('user_name');

        //used to toggle display of confirmation boxes
        $_SESSION['success2'] = null;

        $model = model(TransactionsModel::class);
    
        $data = [
            'transactions'  => $model->getSales(),
        ];


        echo view('templates/header', $data);
        echo view('sales', $data);
        echo view('templates/footer', $data);
    
    }


    public function delete($id)
	{

        $session = session();

        $_SESSION['success2'] = "";

        //connect to database and access students2 table
        $db      = \Config\Database::connect();
        $builder = $db->table('transactions');

        $model = new TransactionsModel();

		$builder->delete(['id' => $id]);        
        
        $data = [
            'transactions'  => $model->getSales(),
        ];

        $_SESSION['success2'] = "true";

        echo view('templates/header', $data);
        echo view('sales', $data);
        echo view('templates/footer', $data);
	}
}