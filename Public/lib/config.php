<?php
/**
 * Created by PhpStorm.
 * User: Slight
 * Date: 2017/2/13
 * Time: 15:19
 */

/**
 *  Charset  UTF-8
 */
header('Content-type:text/html;charset=utf-8');

/**
 *  Access-Control-Allow-Origin
 */
//header("Access-Control-Allow-Origin: *");

/**
 *   API Verification
 *
 *  Role
 *  Hash
 */
define("Role","YiBao");
define("Hash","");


/**
 *  Tuling Api Verification
 */
define("APIkey","");
define("secret","");


/**
 * Database
 * dbHost
 * dbUser
 * dbPassword
 * dbTable
 * dbport
 *
 */
define('dbHost', '127.0.0.1');
define("dbUser","root");
define("dbPassword","wxhxa.666Z");
define("dbTable","DianQ");
define('dbport', '3306');




/**
 *  PASSWORD TOKEN
 */

//Encode
define('ENCODE_CIPHER', MCRYPT_RIJNDAEL_128);
define('ENCODE_MODE', MCRYPT_MODE_ECB);
define('ENCODE_KEY', '93c5680f1d6f3c34036092204ef58b9d');
