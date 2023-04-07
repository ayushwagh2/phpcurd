<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{

    public function __construct()
    {
    }

    public function setData($tableName,$data){
        $db = \Config\Database::connect('default');
        $builder = $db->table($tableName);
        $insertResult = $builder->insert($data);
        if (!empty($insertResult)) {
            return 1;
        } else {
            return 0;
        }
    }

    public function getData($tableName, $where = null, $orderBy = null, $limit = null) {
        $db = \Config\Database::connect('default');
        $builder = $db->table($tableName);
        if ($where != null) {
            $builder->where($where);
        }
        $query = $builder->get();
        return $query->getResult();
    }
    

}