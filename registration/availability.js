function checkAvailability() {
    jQuery.ajax({
        url: "check_availability.php",
        data: 'username=' + $("#username").val(),
        type: "POST",
        success: function(data) {
            $("#user-availability-status").html(data);
        },
        error: function() {}
    });
}

function emailAvailability() {
    jQuery.ajax({
        url: "check_availability.php",
        data: 'email=' + $("#email").val(),
        type: "POST",
        success: function(data) {
            $("#email-availability-status").html(data);
        },
        error: function() {}
    });
}

function idAvailability() {
    jQuery.ajax({
        url: "check_availability.php",
        data: 'nic=' + $("#nic").val(),
        type: "POST",
        success: function(data) {
            $("#id-availability-status").html(data);
        },
        error: function() {}
    });
}