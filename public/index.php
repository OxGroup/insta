<?php
/**
 * Created by OxGroup.
 * User: aliaxander
 * Date: 18.05.15
 * Time: 10:34
 */

use Faker\Factory;
use OxApp\models\Domains;
use OxApp\models\HashTags;
use OxApp\models\ParseBase;
use OxApp\models\Proxy;

ini_set("allow_url_fopen", true);
ini_set('display_errors', '1');
date_default_timezone_set('Europe/Moscow');
header('Content-type: text/html; charset=utf-8');
header('Access-Control-Allow-Credentials: true');
$allowHeaders = "X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token, Accept-Encoding";
header('Access-Control-Allow-Headers: ' . $allowHeaders);
header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, OPTIONS');
header('Access-Control-Allow-Origin: *');
$loader = require __DIR__ . '/../vendor/autoload.php';
require(__DIR__ . "/../config.php");
require(__DIR__ . "/../OxApp/Routes.php");
//
//$accounts = "";
//$domains = explode("\n", $accounts);
//foreach ($domains as $domain) {
//    $proxy = str_replace(["\n", " "], "", $domain);
//    if (HashTags::find(['tag' => $domain])->count == 0) {
//        HashTags::add(['tag' => $domain]);
//    }
//}

//
//$domains = explode("\n", $domains);
//foreach ($domains as $domain) {
//    $proxy = str_replace(["\n", " "], "", $domain);
//    Domains::add(['domain' => $domain]);
////}
//$domains = "";
//$domains = explode("\n", $domains);
//foreach ($domains as $domain) {
//    $proxy=str_replace(["\n"," "],"",$domain);
//    Proxy::add(['proxy' => $proxy]);
//}

//$faker = Factory::create();
//$result=[];
//for($i=0;$i<1000;$i++) {
//    if (mt_rand(0, 4) == 1) {
//        $name = $faker->userName . rand(1100, 2017);
//    } elseif (mt_rand(0, 1) == 0) {
//        $name = $faker->firstNameFemale . $faker->lastName . rand(1100, 2017);
//    } else {
//        $name = $faker->lastName . $faker->firstNameFemale . rand(1100, 2017);
//    }
//    $name = mb_strtolower($name);
//    $name = str_replace([".", "'", "`"], ['', '', ''], $name);
//    $subdomain = ['.tk', '.ml', '.ga', '.cf', '.gq'];
//
//    $domain= $name . $subdomain[rand(0, count($subdomain) - 1)];
//    $result[$domain]=1;
//}
//foreach ($result as $domain=>$val){
//    echo $domain."\n";
//}