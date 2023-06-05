function fetch_student_data() {
    $.ajax({
        url: "fetch-student.php",
        method: "POST",
        success: function (data) {
            const obj = JSON.parse(data);
            if(obj.status == 'success'){
                $('#student_table').html(obj.message);
            }else{
                alert(obj.message);
            }
        }
    });
}

function fetch_library_data() {
    $.ajax({
        url: "fetch-library.php",
        method: "POST",
        success: function (data) {
            const obj = JSON.parse(data);
            if(obj.status == 'success'){
                $('#library_table').html(obj.message);
            }else{
                alert(obj.message);
            }
        }
    });
}

function fetch_library_request_data() {
    $.ajax({
        url: "fetch-library-request.php",
        method: "POST",
        success: function (data) {
            const obj = JSON.parse(data);
            if(obj.status == 'success'){
                $('#library_request_table').html(obj.message);
            }else{
                alert(obj.message);
            }
        }
    });
}

function fetch_library_request_approved_data() {
    $.ajax({
        url: "fetch-library-request-approved.php",
        method: "POST",
        success: function (data) {
            const obj = JSON.parse(data);
            if(obj.status == 'success'){
                $('#library_request_approved_table').html(obj.message);
            }else{
                alert(obj.message);
            }
        }
    });
}

function fetch_library_request_denied_data() {
    $.ajax({
        url: "fetch-library-request-denied.php",
        method: "POST",
        success: function (data) {
            const obj = JSON.parse(data);
            if(obj.status == 'success'){
                $('#library_request_denied_table').html(obj.message);
            }else{
                alert(obj.message);
            }
        }
    });
}

function fetch_library_request_pending_data() {
    $.ajax({
        url: "fetch-library-request-pending.php",
        method: "POST",
        success: function (data) {
            const obj = JSON.parse(data);
            if(obj.status == 'success'){
                $('#library_request_pending_table').html(obj.message);
            }else{
                alert(obj.message);
            }
        }
    });
}

function fetch_library_request_returned_data() {