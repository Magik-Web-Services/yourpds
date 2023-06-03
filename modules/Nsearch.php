<?php
include("dbConnect.php");
$sql2 = "select * from yourpds_data limit 10";
$result = $conn->query($sql2);

while ($row = $result->fetch_assoc()) {
    echo "
                <tr>
                <td>" . $row["sno"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["model"] . "</td>
                <td>" . $row["generation"] . "</td>
                <td>" . $row["model_number"] . "</td>
                <td>" . $row["yourpds"] . "</td>
                <td> 
                <i class=' editBtn fa-solid fa-pen-to-square'></i>
                <i  id=" . $row['sno'] . " class=' deleteBtn fa-solid fa-trash-can'></i>
                </td>   
            </tr>
                ";
}
?>

