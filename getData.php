<?php
  $code = 0;
  if (isset($_GET["start"])&&isset($_GET["count"])){
    @$start = $_GET["start"];
    @$count = $_GET["count"];
    include("conn.php");
    $q = "SELECT  *
          FROM  `cms_content`
          LIMIT {$start},{$count}";
    mysql_query("SET NAMES GB2312");
    $rs = mysql_query($q, $conn);
    if(!$rs){die("Valid result!");}
    $AR = array();
    while(($row = mysql_fetch_assoc($rs))&&(($count--)>0)) $AR[$count] = $row;
    if (count($AR)==0){
       echo json_encode(array("code"=>"-1","content"=>"nomore"));
       exit;
     }
    echo(json_encode(array("code"=>"1","content"=>$AR)));
  }else echo json_encode(array("code"=>"-2","content"=>"parse error"));
 ?>
