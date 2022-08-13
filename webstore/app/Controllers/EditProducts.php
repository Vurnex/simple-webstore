<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\ProductsModel;
  
class EditProducts extends Controller

{

    public function index()
    {

        $session = session();

        $_SESSION['success3'] = null;
        $_SESSION['fail1'] = null;

        //include helper form
        helper(['form']);

        $data = [];

        
        echo view('editproducts', $data);

  
    }

    public function save(){        
        
        $db      = \Config\Database::connect();
        $builder = $db->table('products');

        $session = session();

        //get changes
        $smartphonePrice = $_POST['smartphonePrice'];
        $smartphoneDesc = $_POST['smartphoneDesc'];

        $laptopPrice = $_POST['laptopPrice'];
        $laptopDesc = $_POST['laptopDesc'];

        $batterypackPrice = $_POST['batterypackPrice'];
        $batterypackDesc = $_POST['batterypackDesc'];

        $smartwatchPrice = $_POST['smartwatchPrice'];
        $smartwatchDesc = $_POST['laptopDesc'];

        $headphonesPrice = $_POST['headphonesPrice'];
        $headphonesDesc = $_POST['headphonesDesc'];

        $wirelessPrice = $_POST['wirelessPrice'];
        $wirelessDesc = $_POST['wirelessDesc'];

        $bluetoothPrice = $_POST['bluetoothPrice'];
        $bluetoothDesc = $_POST['bluetoothDesc'];

        if ($smartphonePrice && $smartphoneDesc != null){

            try {
            
            $builder->set('price', $smartphonePrice);
            $builder->set('description', $smartphoneDesc);
            $builder->where('prodID', 1);
            $builder->update();
            // gives UPDATE `products` SET `price` = '$smartphonePrice' WHERE `prodID` = 1

            $_SESSION['success3'] = true;
            $_SESSION['fail1'] = null;

            }

            catch(Exception $e) {

            }

        }

        if ($laptopPrice && $laptopDesc != null){
            
            $builder->set('price', $laptopPrice);
            $builder->set('description', $laptopDesc);
            $builder->where('prodID', 2);
            $builder->update();

            $_SESSION['success3'] = true;
            $_SESSION['fail1'] = null;

        }

        if ($batterypackPrice && $batterypackDesc != null){
            
            $builder->set('price', $batterypackPrice);
            $builder->set('description', $batterypackDesc);
            $builder->where('prodID', 3);
            $builder->update();

            $_SESSION['success3'] = true;
            $_SESSION['fail1'] = null;

        }

        if ($smartwatchPrice && $smartwatchDesc != null){
            
            $builder->set('price', $smartwatchPrice);
            $builder->set('description', $smartwatchDesc);
            $builder->where('prodID', 4);
            $builder->update();

            $_SESSION['success3'] = true;
            $_SESSION['fail1'] = null;

        }

        if ($headphonesPrice && $headphonesDesc != null){
            
            $builder->set('price', $headphonesPrice);
            $builder->set('description', $headphonesDesc);
            $builder->where('prodID', 5);
            $builder->update();

            $_SESSION['success3'] = true;
            $_SESSION['fail1'] = null;

        }

        if ($wirelessPrice && $wirelessDesc != null){
            
            $builder->set('price', $wirelessPrice);
            $builder->set('description', $wirelessDesc);
            $builder->where('prodID', 6);
            $builder->update();

            $_SESSION['success3'] = true;
            $_SESSION['fail1'] = null;

        }

        if ($bluetoothPrice && $bluetoothDesc != null){

            
            $builder->set('price', $bluetoothPrice);
            $builder->set('description', $bluetoothDesc);
            $builder->where('prodID', 7);
            $builder->update();

            $_SESSION['success3'] = true;
            $_SESSION['fail1'] = null;

        }

        else{
            
            $session = session();

            $_SESSION['fail1'] = true;
            $_SESSION['success3'] = null;

        }

        echo view('editproducts');

    }
  
  
}