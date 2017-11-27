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
        //echo $valueString;
        print_r($columnString);
        if($tableName=='accounts')
        {
         $sql =  'INSERT INTO '.$tableName.' ('.$columnString.') VALUES (1000,"msruj@gmail.com","abc","xyz",456,"abc","M","Test")';
        } else
        {
        $sql =  'INSERT INTO '.$tableName.' ('.$columnString.') VALUES (1000,"msruj@gmail.com",45,2017-06-04,2017-07-08,"hi",0)';
        }
        return $sql;
 	    }
        private function update($id) {
        $modelName=get_called_class();
        $tableName = $modelName::tname();
         $sql = ' UPDATE '.$tableName.' SET fname="kanduru" WHERE id='.$id ;
         
        return $sql;
        /*  
        $array = get_object_vars($this);
        $update = " ";
        $sql = 'UPDATE '.$tableName.' SET ';
         foreach ($array as $record=>$item){
            if( ! empty($item)) {
                $sql .= $update . $record . ' = "'. $item .'"';
                $update = ", ";
            }
        }
         $sql .= ' WHERE id='.$id;
      
        return $sql;
*/      
	        //echo 'I just updated record' . $this->id;
	    	echo '<hr/>';
	    }
	 public function delete($id) {
           $db = dbConn::getConnection();
        $modelName=get_called_class();
        $tableName = $modelName::tname();
        $sql = 'DELETE FROM '.$tableName.' WHERE id='.$id;
        echo $sql;
        $statement = $db->prepare($sql);
        $statement->execute();
	         echo '<h2>I just deleted record</h2>' . $this->id;
		 echo '<hr/>';    
		     }
}