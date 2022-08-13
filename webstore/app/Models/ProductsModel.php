<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class ProductsModel extends Model {

    protected $table = 'products';
    protected $allowedFields = ['id','name','price','description', 'prodID'];

    public function getProducts()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('products');

        $query   = $db->query('SELECT id, name, price, description, prodID FROM products');
        $results = $query->getResultArray();

        return ($results);

    }
}