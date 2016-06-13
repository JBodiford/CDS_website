$(document).ready(function () {
    $("input#submit").click(function(){
        $.ajax({
            type: "POST",
            url: "contact.php", //process to mail
            data: $('form.contact').serialize(),
            success: function(msg){
                $("#thanks").html(msg) //hide button and show thank you
                $("#form-content").modal('hide'); //hide popup  
            },
            error: function(){
                alert("failure");
            }
        });
    });
});