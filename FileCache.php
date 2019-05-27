<?php
class FileCache implements CacheInterface {
    //write data in file

    function __construct() {

    }
    function fileContentsToJson(string $key, $contents){
        $jsonFromFile = json_decode($contents,true);

        file_put_contents("json/$key",$jsonFromFile);
    }

    public function set(string $key, $values, int $duration)
    {
        fileContentsToJson($key,$values);
    }

    public function get(string $key)
    {
        file_get_contents("jsonData/$key");
    }


}