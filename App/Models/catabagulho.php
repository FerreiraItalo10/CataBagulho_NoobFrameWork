<?php

namespace App\Models;

use Core\DataBase;

class catabagulho{

    public static function get ($conditions = null, $columns = null) {
        $table = "dadospessoais";
        $columns = $columns == null ? "*" : $columns;
        $db = DataBase::getInstance();
        $dados = $db->getList($table, $columns, $conditions);

        return $dados;
    }

    public static function record($data = null) {
        if($data != null && is_array($data)) {
            $table = "dadospessoais";
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['updated_at'] = date("Y-m-d H:i:s");

            $db = DataBase::getInstance();
            return $db->insert($table, $data);
        }

        return false;
    }

    public static function update($data = null) {
        if( $data != null && is_array($data) && isset($data['id'])) {
            $table = "dadospessoais";
            $conditions = array('id' => $data['id']);
            $data['id'] = (int)$data['id'];
            $data['updated_at'] = date("Y-m-d H:i:s");

            $db = DataBase::getInstance();
            return $db->insert($table, $data, $conditions);
        }
    }

    public static function delete($id = null) {
        if($id != null) {
            $table = "dadospessoais";
            $columns['id'] = $id;
            $db = Database::getInstance();
            return $db->delete($table, $columns);
        }

        return false;
    }

}

