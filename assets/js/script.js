// Search
let data = true;
$(document).ready(function () {
    $("#live_search").keyup(function () {
        let input = $(this).val()
        // console.log(input);
        if (input != "") {
            $.ajax({
                url: "modules/search.php",
                method: "POST",
                data: { input: input },
                success: function (data) {
                    $("#searchresult").html(data);
                }
            })
            $("#myTable_paginate").css("display", "none")
            $("#myTable_length").css("display", "none")
        } else {
            $.ajax({
                url: "modules/Nsearch.php",
                method: "POST",
                data: { input: input },
                success: function (data) {
                    $("#searchresult").html(data);
                }
            })
            $("#myTable_paginate").css("display", "block")
            $("#myTable_length").css("display", "block")
            // alert("error")
            // $("#searchresult").css("display", "none")
        }
    })
    // if (data) {
    //     $.ajax({
    //         url: "modules/tableData.php",
    //         method: "POST",
    //         // data: { input: input },
    //         success: function (data) {
    //             $("#searchresult").html(data);
    //         }
    //     })
    // }
})

// Edit Modal
edits = document.getElementsByClassName('editBtn');
Array.from(edits).forEach(element => {
    element.addEventListener("click", (e) => {
        tr = e.target.parentNode.parentNode;
        // Sno
        sno = tr.getElementsByTagName("td")[0].innerText;
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

// Insert Modal
inserts = document.getElementById('inserts')
inserts.addEventListener("click", (e) => {
    $('#InsertModal').modal('toggle');
})

// Data tables
$(document).ready(function () {
    $('#myTable').DataTable({});
});