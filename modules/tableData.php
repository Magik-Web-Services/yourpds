<!-- Datable -->
<?php
include("dbConnect.php");
$sql2 = "select * from yourpds_data";
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

// Array

// include("array.php");

// for ($row = 0; $row < count($details); $row++) {
//     echo "
//         <tr>
//             <td>" . $details[$row][0] . "</td>
//             <td>" . $details[$row][1] . "</td>
//             <td>" . $details[$row][2] . "</td>
//             <td>" . $details[$row][3] . "</td>
//             <td>" . $details[$row][4] . "</td>
//             <td>" . $details[$row][5] . "</td>
//             <td> 
//             <i class=' editBtn fa-solid fa-pen-to-square'></i>
//             <i  id=" . $details[$row][0] . " class=' deleteBtn fa-solid fa-trash-can'></i>
//             </td>   
//         </tr>";
// }
