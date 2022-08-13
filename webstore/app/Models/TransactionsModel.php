<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class TransactionsModel extends Model {

    protected $table = 'transactions';
    protected $allowedFields = ['id','datepurchased','subtotal','itemspurchased', 'user'];

    public function getSales()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('transactions');

        $query   = $db->query('SELECT id, datepurchased, subtotal, itemspurchased, user FROM transactions');
        $results = $query->getResultArray();

        return ($results);

    }
}