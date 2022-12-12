<?php
include 'Database.php';


class Model
{
      function save()
      {
            $array=[];
            foreach(get_object_vars($this) as $rr){
                  array_push($array,$rr);
            }

            $sql = "insert into ".get_class($this)." values(NULL,$array) ";
            echo get_class($this);
            print_r($array);
      }

}
