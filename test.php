<?php
 require_once('assets/Config/const.php');
 $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);


$sql = "SELECT * FROM seller_item";
$result = mysqli_query($mysqli, $sql);
while($row = mysqli_fetch_assoc($result)){
    echo '<img src="data:gun/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';


}

?>