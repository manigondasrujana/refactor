<?php
namespace activerecord;
abstract class model {
    protected $tableName;
    public function save()
	    {
	if ($this->id != '') {
	$sql = $this->update($this->id);
 	        } else {
		            $sql = $this->insert();
	 }
$db = dbConn::getConnection();
        $statement = $db->prepare($sql);
  echo '<h2>I just saved record: </h2>';
	echo '<hr/>';
	}
 
 public function updateRecord()
	    {
	
	$sql = $this->update($this->id);
     
$db = dbConn::getConnection();
        $statement = $db->prepare($sql);
  $statement->execute();
  echo '<h2>I just updated record: </h2>';
	echo '<hr/>';
	}
	private function insert() {
 $modelName=get_called_class();
        $tableName = $modelName::tname();
        
        $array = get_object_vars($this);
        $columnString = implode(',', array_flip($array));
        $valueString = ':'.implode(',:', array_flip($array));
 
        print_r($columnString);
 
        $sql =  'INSERT INTO '.$tableName.' ('.$columnString.') VALUES (1000,"msruj@gmail.com","abc","xyz",456,"abc","M","Test")';
 
        return $sql;
        
	    }
        private function update($id) {
   
        $modelName=get_called_class();
        $tableName = $modelName::tname();
         $sql = ' UPDATE '.$tableName.' SET fname="kanduru" WHERE id= 3 ';
   
        return $sql;
 	    }
	 public function delete($id) {
           $db = dbConn::getConnection();
        $modelName=get_called_class();
        $tableName = $modelName::tname();
        $sql = 'DELETE FROM '.$tableName.' WHERE id='.$id;
        $statement = $db->prepare($sql);
        $statement->execute();
        echo '<h2>I just deleted record</h2>' . $this->id;
		 echo '<hr/>';    
		     }
}