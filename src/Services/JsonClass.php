<?php
/**
 * Created by PhpStorm.
 * User: Traian
 * Date: 14-Nov-17
 * Time: 2:42 PM
 */

class JsonClass
{
    public function encodeJson($string)
    {

        return json_encode(array("Server_response" => $string));

    }


}