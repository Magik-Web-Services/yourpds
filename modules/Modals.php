<!-- editModal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit the Product</h1>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <form id="editForm" method="post" action="index.php">
                    <label for="sno">
                        <input type="hidden" name="sno" id="snoEdit">
                    </label>
                    <label for="name"> Name:
                        <input type="text" name="name" id="nameEdit">
                    </label>
                    <label for="model"> model:
                        <input type="text" name="model" id="modelEdit">
                    </label>
                    <label for="generation"> Generation:
                        <input type="text" name="generation" id="generationEdit">
                    </label>
                    <label for="modal number"> Model Number:
                        <input type="text" name="modal_number" id="modal_numberEdit">
                    </label>
                    <label for="yourpds"> yourpds:
                        <input type="text" name="yourpds" id="yourpdsEdit">
                    </label>
                    <!-- <label for="edit Product">
                        <input type="submit" value="Edit Product" name="editProduct" id="editProduct">
                    </label> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="editProduct" id="editProduct" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['editProduct'])) {
    $sno = $_POST["sno"];
    $name = $_POST["name"];
    $model = $_POST["model"];
    $generation = $_POST["generation"];
    $model_number = $_POST["modal_number"];
    $yourpds = $_POST["yourpds"];

    $editSql = "UPDATE  `yourpds_data` SET `name`='$name',`model`='$model',`generation`='$generation',`model_number`='$model_number',`yourpds`='$yourpds' WHERE `sno` = $sno";

    $editServer = mysqli_query($conn, $editSql);

    // if ($editServer) {
    //     echo "Product Update";
    // } else {
    //     echo "Product Not Update";
    // }
}
?>

<!-- Delete -->
<?php
if (isset($_GET['delete'])) {
    $sno = $_GET['delete'];
    $deleteSql = "DELETE FROM `yourpds_data` WHERE `sno` = $sno";
    $deleteServer = mysqli_query($conn, $deleteSql);
}
?>


<!-- Insert -->
<div class="modal fade" id="InsertModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Insert the Product</h1>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <form id="editForm" method="post" action="index.php">
                    <label for="name"> Name:
                        <input type="text" name="name">
                    </label>
                    <label for="model"> model:
                        <input type="text" name="model">
                    </label>
                    <label for="generation"> Generation:
                        <input type="text" name="generation">
                    </label>
                    <label for="modal number"> Model Number:
                        <input type="text" name="modal_number">
                    </label>
                    <label for="yourpds"> yourpds:
                        <input type="text" name="yourpds">
                    </label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="insertProduct" id="editProduct" class="btn btn-primary">Insert</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php

if (isset($_POST['insertProduct'])) {
    $name = $_POST["name"];
    $model = $_POST["model"];
    $generation = $_POST["generation"];
    $model_number = $_POST["modal_number"];
    $yourpds = $_POST["yourpds"];

    $insertsql = "INSERT INTO `yourpds_data` (`name`, `model`, `generation`, `model_number`, `yourpds`) VALUES ('$name', '$model', '$generation','$model_number', '$yourpds')";


    $insertServer = mysqli_query($conn, $insertsql);

    // if ($insertServer) {
    //     echo '<script>alert("Insert Success!")</script>';
    // } else {
    //     echo '<script>alert("Insert Success!")</script>';
    // }
}
?>