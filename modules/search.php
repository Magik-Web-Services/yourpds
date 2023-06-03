<!-- Database -->
<?php
    include("dbConnect.php");

    if (isset($_POST['input'])) {
        $input = $_POST['input'];
        $sql = "select * from yourpds_data where model_number like '%$input%' or model like '%$input%' or yourpds like '%$input%'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $sno = $row["sno"];
                $name = $row["name"];
                $model = $row["model"];
                $generation = $row["generation"];
                $model_number = $row["model_number"];
                $yourpds = $row["yourpds"];
    
    ?>

            <tr>
                <td><?php   echo $sno; 
                    ?></td>
                <td><?php  echo $name; 
                    ?></td>
                <td><?php  echo $model; 
                    ?></td>
                <td><?php  echo $generation; 
                    ?></td>
                <td><?php  echo $model_number; 
                    ?></td>
                <td><?php  echo $yourpds; 
                    ?></td>
                <td>
                    <i class='editBtn fa-solid fa-pen-to-square'></i>
                    <i id="<?php // echo $sno; 
                            ?>" class='deleteBtn fa-solid fa-trash-can'></i>
                </td>
            </tr > 
<?php
            };
        }
    }
    ?>

<!-- Arrary -->

<?php
//     include("array.php");

// if (isset($_POST['input'])) {
//     $input = $_POST['input'];

//     $input = $_POST['input'];
//     for ($row = 0; $row < count($details); $row++) {
//         if (strpos(strtolower($details[$row][5]), strtolower($input)) !== false or strpos(strtolower($details[$row][4]), strtolower($input)) !== false) {
//                 echo "
//                 < tr >
//                     <td>" . $details[$row][0] . "</td>
//                     <td>" . $details[$row][1] . "</td>
//                     <td>" . $details[$row][2] . "</td>
//                     <td>" . $details[$row][3] . "</td>
//                     <td>" . $details[$row][4] . "</td>
//                     <td>" . $details[$row][5] . "</td>
//                     <td> 
//                     <i class=' editBtn fa-solid fa-pen-to-square'></i>
//                     <i  id=" . $details[$row][0] . " class=' deleteBtn fa-solid fa-trash-can'></i>
//                     </td>   
//                 </tr > ";
//         }
//     }
// }
?>





















































    <script>
     // Edit Modal
        edits = document.getElementsByClassName('editBtn');
    Array.from(edits).forEach(element => {
            element.addEventListener("click", (e) => {
                tr = e.target.parentNode.parentNode;
                // Sno
                sno = tr.getElementsByTagName("td")[0].innerText;
                console.log(sno)
                snoEdit.value = sno;
                // Name
                Name = tr.getElementsByTagName("td")[1].innerText;
                nameEdit.value = Name;
                // Model
                model = tr.getElementsByTagName("td")[2].innerText;
                modelEdit.value = model;
                // Generation
                generation = tr.getElementsByTagName("td")[3].innerText;
                generationEdit.value = generation;
                // modal_number
                modal_number = tr.getElementsByTagName("td")[4].innerText;
                modal_numberEdit.value = modal_number;
                // 
                yourpds = tr.getElementsByTagName("td")[5].innerText;
                yourpdsEdit.value = yourpds;


                $('#editModal').modal('toggle');
            })
        })

        // Delete Modal
        deletes = document.getElementsByClassName('deleteBtn');
    Array.from(deletes).forEach(element => {
            element.addEventListener("click", (e) => {
                sno = e.target.id

                if (confirm("Are you sure you want to delete this data!")) {
                    console.log("yes");
                    window.location = `index.php?delete=${sno}`;
                } else {
                    console.log("no");
                }
            })
        })
    </script>