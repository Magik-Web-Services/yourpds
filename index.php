<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Data dataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <title>Document</title>
</head>

<body>
    <?php
    // Load the database configuration file 
    include_once 'modules/dbConnect.php';
    // Add Modals
    include_once 'modules/Modals.php';
    // Insert Data
    // include_once 'modules/insertData.php';
    ?>
    <section class="form">
        <div class='form_con'>
            <i class="fa-solid search_icons fa-magnifying-glass" style="color: #262c31;"></i>
            <input id="live_search" type="text" name="search" placeholder="Search...">
            <!-- <input id="search" type="submit" name="submit" value="Search"> -->
        </div>
        <span id="inserts">
            <i class="fa-solid fa-plus fa-xl"></i>
        </span>
    </section>

    <section id="table">
        <table border="1" class="display" id="myTable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Model</th>
                    <th>Meneration</th>
                    <th>Model Number</th>
                    <th>Yourpds</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="searchresult">
                <?php 
                include("modules/tableData.php") 
                ?>
            </tbody>
        </table>
    </section>

    <!-- JQuery cdn -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- Data dataTables -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <!--  -->
    <script src="assets/js/script.js"></script>
</body>

</html>