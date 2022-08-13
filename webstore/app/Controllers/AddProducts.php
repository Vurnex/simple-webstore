<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\ProductsModel;
  
class AddProducts extends Controller

{

    public function index()
    {

        $session = session();

        $_SESSION['success3'] = null;
        $_SESSION['fail1'] = null;

        //include helper form
        helper(['form']);

        $data = [];

        
        echo view('addproducts', $data);

  
    }
  
    public function save()
    {

        $session = session();

        //get product
        $addedItem = $_POST['iteminput'];


        //Smartphone
        if ($addedItem == "smartphone"){ 

            //include helper form
            helper(['form']);

            //set rules validation form
            $rules = [
                'iteminput'          => 'required|min_length[3]|max_length[20]|is_unique[products.name]',
            ];
            
            if($this->validate($rules)){
                $model = new ProductsModel();

                $data = [
                    'prodID'        => 1,
                    'name'          => "Smartphone",
                    'price'         => 500.00,
                    'description'   => "Sample smartphone.",
                ];

                $model->save($data);

                $_SESSION['success3'] = true;
                $_SESSION['fail1'] = null;

                echo view('addproducts', $data);
            }
            else{            
            
                $session = session();
    
                $_SESSION['fail1'] = true;
                $_SESSION['success3'] = null;
    
                $data['validation'] = $this->validator;
    
                echo view('addproducts', $data);
            }

        }

        //Laptop
        else if ($addedItem == "laptop"){

            //include helper form
            helper(['form']);

            //set rules validation form
            $rules = [
                'iteminput'          => 'required|min_length[3]|max_length[20]|is_unique[products.name]',
            ];
            
            if($this->validate($rules)){
                $model = new ProductsModel();

                $data = [
                    'name'          => "Laptop",
                    'price'         => 400.00,
                    'description'   => "Sample laptop.",
                    'prodID'        => 2,
                ];

                $model->save($data);

                $_SESSION['success3'] = true;
                $_SESSION['fail1'] = null;

                echo view('addproducts', $data);
            }
            else{            
            
                $session = session();
    
                $_SESSION['fail1'] = true;
                $_SESSION['success3'] = null;
    
                $data['validation'] = $this->validator;
    
                echo view('addproducts', $data);
            }

        }

        //Battery Pack
        else if ($addedItem == "batterypack"){

            //include helper form
            helper(['form']);

            //set rules validation form
            $rules = [
                'iteminput'          => 'required|min_length[3]|max_length[20]|is_unique[products.name]',
            ];
            
            if($this->validate($rules)){
                $model = new ProductsModel();

                $data = [
                    'name'          => "Battery Pack",
                    'price'         => 50.00,
                    'description'   => "Sample battery pack.",
                    'prodID'        => 3,
                ];

                $model->save($data);

                $_SESSION['success3'] = true;
                $_SESSION['fail1'] = null;

                echo view('addproducts', $data);
            }
            else{            
            
                $session = session();
    
                $_SESSION['fail1'] = true;
                $_SESSION['success3'] = null;
    
                $data['validation'] = $this->validator;
    
                echo view('addproducts', $data);
            }

        }

        //Smartwatch
        else if ($addedItem == "smartwatch"){

            //include helper form
            helper(['form']);

            //set rules validation form
            $rules = [
                'iteminput'          => 'required|min_length[3]|max_length[20]|is_unique[products.name]',
            ];
            
            if($this->validate($rules)){
                $model = new ProductsModel();

                $data = [
                    'name'          => "Smartwatch",
                    'price'         => 250.00,
                    'description'   => "Sample smartwatch.",
                    'prodID'        => 4,
                ];

                $model->save($data);

                $_SESSION['success3'] = true;
                $_SESSION['fail1'] = null;

                echo view('addproducts', $data);
            }
            else{            
            
                $session = session();
    
                $_SESSION['fail1'] = true;
                $_SESSION['success3'] = null;
    
                $data['validation'] = $this->validator;
    
                echo view('addproducts', $data);
            }

        }

        //Headphones
        else if ($addedItem == "headphones"){

            //include helper form
            helper(['form']);

            //set rules validation form
            $rules = [
                'iteminput'          => 'required|min_length[3]|max_length[20]|is_unique[products.name]',
            ];
            
            if($this->validate($rules)){
                $model = new ProductsModel();

                $data = [
                    'name'          => "Headphones",
                    'price'         => 350.00,
                    'description'   => "Sample headphones.",
                    'prodID'        => 5,
                ];

                $model->save($data);

                $_SESSION['success3'] = true;
                $_SESSION['fail1'] = null;

                echo view('addproducts', $data);
            }
            else{            
            
                $session = session();
    
                $_SESSION['fail1'] = true;
                $_SESSION['success3'] = null;
    
                $data['validation'] = $this->validator;
    
                echo view('addproducts', $data);
            }

        }

        //Wireless Charger
        else if ($addedItem == "wirelesscharger"){

            //include helper form
            helper(['form']);

            //set rules validation form
            $rules = [
                'iteminput'          => 'required|min_length[3]|max_length[20]|is_unique[products.name]',
            ];
            
            if($this->validate($rules)){
                $model = new ProductsModel();

                $data = [
                    'name'          => "Wireless Charger",
                    'price'         => 50.00,
                    'description'   => "Sample wireless charger.",
                    'prodID'        => 6,
                ];

                $model->save($data);

                $_SESSION['success3'] = true;
                $_SESSION['fail1'] = null;

                echo view('addproducts', $data);
            }
            else{            
            
                $session = session();
    
                $_SESSION['fail1'] = true;
                $_SESSION['success3'] = null;
    
                $data['validation'] = $this->validator;
    
                echo view('addproducts', $data);
            }

        }

        //Bluetooth Speaker
        else if ($addedItem == "bluetoothspeaker"){

            //include helper form
            helper(['form']);

            //set rules validation form
            $rules = [
                'iteminput'          => 'required|min_length[3]|max_length[20]|is_unique[products.name]',
            ];
            
            if($this->validate($rules)){
                $model = new ProductsModel();

                $data = [
                    'name'          => "Bluetooth Speaker",
                    'price'         => 100.00,
                    'description'   => "Sample Bluetooth Speaker",
                    'prodID'        => 7,
                ];

                $model->save($data);

                $_SESSION['success3'] = true;
                $_SESSION['fail1'] = null;

                echo view('addproducts', $data);
            }
            else{            
            
                $session = session();
    
                $_SESSION['fail1'] = true;
                $_SESSION['success3'] = null;
    
                $data['validation'] = $this->validator;
    
                echo view('addproducts', $data);
            }

        }

        else{            
            
            $session = session();

            $_SESSION['fail1'] = true;
            $_SESSION['success3'] = null;

            $data['validation'] = $this->validator;

            echo view('addproducts', $data);
        }
          
    }
  
}