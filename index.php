<?php
require_once('queryController.php');
?>

<html>
<head>
    <title>
    </title>
</head>
<body>
<h1>Welcome</h1>
<h3><?php

    $execute->getQueryAction($execute->setStringAction('query1'));

    foreach($execute->result as $item){
        echo $item['id']. ' ' . $item['user_name'] .'<br />';
    }

    ?></h3>
</body>
</html>