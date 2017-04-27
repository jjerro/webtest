// Add Record
function addRecord() {
    // get values
    var username = $("#username").val();
    var nama = $("#nama").val();
    var nip = $("#nip").val();
    var kontak = $("#kontak").val();
    var tentang = $("tentang").val();
    var passw = $("#password").val();

    // Add record
    $.post("ajax/addRecord.php", {
        username: username,
        nama: nama,
        nip: nip,
        kontak: kontak,
        tentang: tentang,
        password: password
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#username").val("");
        $("#nama").val("");
        $("#nip").val("");
        $("#kontak").val("");
        $("#tentang").val("");
        $("#password").val("");
    });
}

// READ records
function readRecords() {
    $.get("ajax/readRecords.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}


function DeleteUser(id) {
    var conf = confirm("Apakah anda ingin menghapus User ini?");
    if (conf == true) {
        $.post("ajax/deleteUser.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readUserDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_username").val(user.username);
            $("#update_nama").val(user.nama);
            $("#update_nip").val(user.nip);
            $("#update_kontak").val(user.kontak);
            $("#update_tentang").val(user.tentang);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var username = $("#update_username").val();
    var nama = $("#update_nama").val();
    var nip = $("#update_nip").val();
    var kontak = $("#update_kontak").val();
    var tentang = $("update_tentang").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php", {
            id: id,
            username: username,
            nama: nama,
            nip: nip,
            kontak: kontak,
            tentang: tentang
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});