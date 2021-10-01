<?php
$me = $ress['name'];
$action =0;
$sql = "select * from request where distributor='$me' && action='$action'  order by request_id desc";
$qry = mysqli_query($conn , $sql);
$numre = mysqli_num_rows($qry);
$i = 1;
?>