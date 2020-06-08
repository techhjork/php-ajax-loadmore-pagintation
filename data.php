<?php
try{
$con = new PDO("mysql:host=localhost;dbname=pdo",'root','');
}catch(PDOExeception $error){
 echo "Connection ERROR ".$error->getMessage();
}
if(isset($_POST['page'])){
 $page = $_POST['page'];	
}else{
$page = 0;
}
$limit = 3;
$sql = "SELECT * FROM user LIMIT {$page} , {$limit}";
$run =$con->query($sql);

//if($total>0){
$data ="";
while($row = $run->fetch(PDO::FETCH_BOTH)):
$lastid = $row['id'];
$data .= "<tr><td>{$row['id']}</td><td>{$row['user']}</td><td>{$row['pass']}</td></tr>";
endwhile;
$data .= "<tr><td colspan='3' class='align-center'><button class='btn btn-success px-4' id='loadmore' data-id='{$lastid}'>Load More</button></td></tr>";

// }else{
// 	$data ="<table><tr><td>NO DATA FOUND</td></tr><table>";
// }
echo $data;
?>
