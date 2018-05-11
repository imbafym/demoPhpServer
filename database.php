<?php 
//Get Heroku ClearDB connection information
$cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server   = $cleardb_url["us-cdbr-iron-east-04.cleardb.net"];
$cleardb_username = $cleardb_url["be6db3f7179383"];
$cleardb_password = $cleardb_url["0d1d1593"];
$cleardb_db       = substr($cleardb_url["path"],1);

$active_group = 'default';
$query_builder = TRUE;


$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);
$connection = new mysqli($server, $username, $password, $db);

if(!$connection){
  echo "Connection not successful v2";
}
//
//$db['default'] = array(
//    'dsn'   => '',
//    'hostname' => $cleardb_server,
//    'username' => $cleardb_username,
//    'password' => $cleardb_password,
//    'database' => $cleardb_db,
//    'dbdriver' => 'mysqli',
//    'dbprefix' => '',
//    'pconnect' => FALSE,
//    'db_debug' => (ENVIRONMENT !== 'production'),
//    'cache_on' => FALSE,
//    'cachedir' => '',
//    'char_set' => 'utf8',
//    'dbcollat' => 'utf8_general_ci',
//    'swap_pre' => '',
//    'encrypt' => FALSE,
//    'compress' => FALSE,
//    'stricton' => FALSE,
//    'failover' => array(),
//    'save_queries' => TRUE
//);

?>
