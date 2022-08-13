<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
  
class Dashboard extends Controller
{
    public function index()
    {
        $session = session();

        $currentUser = $session->get('user_name');

        if ($currentUser == "admin") {

            echo view('templates/header');
            echo view('adminview');
            echo view('templates/footer');
        }
        else {
            echo view('templates/header');
            echo view('home');
            echo view('templates/footer');
        }
 
    }
}