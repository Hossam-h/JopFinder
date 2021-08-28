<?php
$post = $_POST["search"];


$connect=mysqli_connect('localhost','root','','jop-finder');

$output='';
$sql="SELECT `location`,`jop_name`,`company_name` From `jops`
WHERE `jop_name` Like '%".$post."%' ";

$result=mysqli_query($connect,$sql);


if(mysqli_num_rows($result) > 0){

$output.='<h4> Search result <h4/>';
$output.='<div class="table-responsive">  
         
<table class="table table-border">
<tr>
        <th> jop name </th>
        <th> company name </th>
        <th> city name </th>

</tr>'
;

$row=mysqli_fetch_array($result);


while($row=mysqli_fetch_assoc($result)){
    $output.='<tr>
   
    <td> '.$row["location"].' </td>
    <td> ' .$row["jop_name"]. ' </td>
    <td> ' .$row["company_name"].' </td>

</tr>
<table/>
<div/>';

}

echo $output;
}


?>