<?php
/**
 * Created by PhpStorm.
 * User: skadl
 * Date: 2018-07-17
 * Time: 오후 4:44
 */

require "predis/autoload.php";
PredisAutoloader::register();

try {
    $redis = new PredisClient();

// This connection is for a remote server
    /*
    $redis = new PredisClient(array(
    "scheme" => "tcp",
    "host" => "153.202.124.2",
    "port" => 6379
    ));
    */
} catch (Exception $e) {
    die($e->getMessage());
}