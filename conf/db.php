<?php
require_once('../sys_cfg/latex.cfg.php');

$db = new mysqli($db_host,$db_user,$db_pass,$db_database);

if($db->connect_errno){
    print "ไม่สามารถเชื่อมต่อฐานข้อมูลได้`";
    exit();
}
$db-> set_charset("utf8mb4");


function pq($str,$force=false){
    if((is_numeric($str)||empty($str))&&!$force) return $str;
    return "'".$str."'";
}