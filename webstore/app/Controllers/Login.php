<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class Login extends Controller
{
    public function index()
    {
        //Form Helper to help create form elements
        helper(['form']);
        echo view('login');
    }

    //this is where inputs are verified
    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('user_email', $email)->first();
        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_name'     => $data['user_name'],
                    'user_email'    => $data['user_email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('http://localhost:8080/dashboard/');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('http://localhost:8080/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('http://localhost:8080/login');
        }
    }
  
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('http://localhost:8080/login');
    }
} 