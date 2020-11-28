<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");

if($_POST["query"] != '')
{
 $search_array = explode(",", $_POST["query"]);
 $search_text = "'" . implode("', '", $search_array) . "'";
 $query = "
 SELECT * FROM manuscripts 
 WHERE manuscriptTitle IN (".$search_text.") 
 ORDER BY idManuscript DESC
 ";
}
else
{
 $query = "SELECT * FROM manuscripts ORDER BY idManuscript DESC";
}

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '';

if($total_row > 0)
{
 foreach($result as $row)
 {
  $output .= '
  <tr>
   <td>'.$row["CustomerName"].'</td>
   <td>'.$row["Address"].'</td>
   <td>'.$row["City"].'</td>
   <td>'.$row["PostalCode"].'</td>
   <td>'.$row["Country"].'</td>
  </tr>
  ';
 }
}
else
{
 $output .= '
 <tr>
  <td colspan="5" align="center">No Data Found</td>
 </tr>
 ';
}

echo $output;


?>