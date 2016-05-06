<html>
<head>
  <title><?php
        include("conn.php");
        $q = "SELECT  `value`
              FROM  `cms_config`
              WHERE  `key` =  'html_title'
              LIMIT 1";
        mysql_query("SET NAMES GB2312");
        $rs = mysql_query($q, $conn);
        if(!$rs){die("Valid result!");}
        $row = mysql_fetch_row($rs);
        echo (count($row)==0||$row[0]=="")?"GeeKlub":$row[0];
        mysql_free_result($rs);
    ?></title>
  <meta http-equiv="content-type" content="text/heml; charet=utf-8"/>
</head>
<body style="margin:0;padding:0">
  <iframe runat="server" src="themes/<?php
        $q = "SELECT  `value`
              FROM  `cms_config`
              WHERE  `key` =  'theme'
              LIMIT 1";
        mysql_query("SET NAMES GB2312");
        $rs = mysql_query($q, $conn);
        if(!$rs){die("html");}
        $row = mysql_fetch_row($rs);
        echo ((count($row)==0||$row[0]=="")?"html":$row[0])."/";
        mysql_free_result($rs);
    ?>"  width="100%" height="100%" frameborder="no" border="0" marginwidth="0" marginheight="0" scrolling="no" allowtransparency="yes"></iframe>
</body>
</html>
