<?php
header('content-type:application/json;charset=utf-8');
// header('content-type:text/xml;charset=utf-8');
echo file_get_contents('./data.json');
?>