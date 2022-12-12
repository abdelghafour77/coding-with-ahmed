<?php
include 'Database.php';


class Model
{


      function save()
      {
            $table = get_class($this)::$db_table;
            // $table = self::$db_table;
            $cols = [];
            $values = [];
            // unset($this->db_table);
            foreach ($this as $key => $value) {
                  $cols[] = $key;
                  $values[] = $value;
            }


            $data = "INSERT INTO $table (" . implode(',', $cols) . ") VALUES('" . implode("','", $values) . "')";
            // echo $data;
            Database::executeQuery($data);
            // var_dump($cols);
            // var_dump($values);
            // echo implode(',', $cols);
            // echo '<br>' . implode(',', $values);
      }
      // function save()
      // {
      //       $array=[];
      //       foreach(get_object_vars($this) as $rr){
      //             array_push($array,$rr);
      //       }

      //       $sql = "insert into ".get_class($this)." values(NULL,$array) ";
      //       echo get_class($this);
      //       print_r($array);
      // }

}
