<?php
namespace Core\Table;


use Core\Database\Database;

class Table{

    protected $table;
    protected $db;


    public function __construct(Database $db){
        $this->db = $db;
        if(is_null($this->table)){
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name)) . 's';        
        }
        
    } 

    public function ask(){
        return $this->query('SELECT * FROM ' . $this->table);
    }

    public function query($statment, $attributes = null, $one = false){
        if($attributes){
            return $this->db->prepare(
                $statment, $attributes, 
                str_replace('Table', 'Entity', get_class($this)), 
                $one
            );
        }else{
            return $this->db->query(
                $statment,  
                str_replace('Table', 'Entity', get_class($this)), 
                $one
            );
        }
    }

    public function find($id){

        return $this->query("
            SELECT *
            FROM  {$this->table}
            WHERE id= ?
            ", [$id], true
        );
        
    }

    public function count(){
        return $this->query("
            SELECT COUNT(*) as numbers
            FROM  {$this->table}

            "
        );
    }
    
    public function update($id, $fields){
        $sql_parts = [];
        $attributes = [];
        foreach ($fields as $k => $v){
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $attributes[] = $id;
        $sql_part = implode(', ', $sql_parts);

        return $this->query("
            UPDATE {$this->table}
            SET $sql_part 
            WHERE id = ? ", $attributes, true
        );
    }
    
    public function create( $fields){
        $sql_parts = [];
        $attributes = [];
        foreach ($fields as $k => $v){
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $sql_part = implode(', ', $sql_parts);
        
        return $this->query("
            INSERT INTO {$this->table}
            SET $sql_part", 
            $attributes, true
        );
    }
    
    public function delete($id){
        
        return $this->query("
            DELETE FROM {$this->table}
            WHERE id= ?",
            [$id], true
        );
    }
    
    public function extract($key, $value) {
        $records= $this->ask();
        $res = [];
        foreach ($records as $v){
            $res[$v->$key] = $v->$value;
        }
        return $res;
    }
}