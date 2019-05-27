<?php
class FileCache implements CacheInterface {
    //write data in file

    function __construct() {

    }
    function fileContentsToJson($dataHer){
      $string = file_get_contents("jsonFile/$dataHer");
      return  json_decode($string,true);
    }

    public function set(string $key, $values, int $duration)
    {

    }

    public function get()
    {
        // TODO: Implement get() method.
    }


}