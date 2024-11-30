<?php
$DB_host = "sql112.infinityfree.com";
$DB_user = "if0_37790616";
$DB_pass = "xGg85mj3VS";
$DB_name = "if0_37790616_porfolio ";
try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}
?>