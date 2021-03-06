<?php
/*
 * Class Database extend Al PDO query
 */
class Database extends PDO
{
    public function __construct() 
    { // try catch exp
        try
        {
            if(parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS));
        } 
        catch (Exception $ex) 
        {
            $ex->getCode();
            header('location:errors/db_error.php');
           // echo '';
            exit();
        }
    }
    
    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC)
    {
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) 
        {
            $sth->bindValue("$key", $value);
        }
        
        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }
    
    /**
     * insert
     * @param string $table A name of table to insert into
     * @param string $data An associative array
     * @auery like this $this->db->insert('tablname',$data);
     */
    public function insert($table, $data)
    {
        ksort($data);
        
        $fieldNames = implode('`, `', array_keys($data));
        $fieldValues = ':' . implode(', :', array_keys($data));
        
        $sth = $this->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");
        
        foreach ($data as $key => $value) 
        {
            $sth->bindValue(":$key", $value);
        }
        
        $sth->execute();
    }
    
    /**
     * update
     * @param string $table A name of table to insert into
     * @param string $data An associative array
     * @param string $where the WHERE query part
     */
    public function update($table, $data, $where)
    {
        ksort($data);
        
        $fieldDetails = NULL;
        foreach($data as $key=> $value) 
        {
            $fieldDetails .= "`$key`=:$key,";
        }
        $fieldDetails = rtrim($fieldDetails, ',');
        
        $sth = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");
        
        foreach ($data as $key => $value) 
        {
            $sth->bindValue(":$key", $value);
        }
        
        $sth->execute();
    }
    
    /**
     * delete
     * 
     * @param string $table
     * @param string $where
     * @param integer $limit
     * @return integer Affected Rows
     */
    public function delete($table, $where, $limit = 1)
    {
         $this->exec("DELETE FROM $table WHERE $where LIMIT $limit");
    }
}