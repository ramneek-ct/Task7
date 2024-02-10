$(document).ready(function(){
    $(".create_admin").click(function(){
        window.open("admindash.php");
    });

    $(".login").click(function(){
        var userid = $("#user").val();
        var password = $("#password").val();

        $.ajax({
            type:"POST",
            url: "index_insert.php",
            data: {
                userid : userid,
                password : password,
            },
            success: function(response){
            
                if(response == 1){
                    window.location.href = 'content.php';
                }
                else {
                    alert ("User not verified!");
                }
            }
        });
    });

    $(".create").click(function(){
        var fname = $("#first_name").val();
        var mname = $("#middle_name").val();
        var lname = $("#last_name").val();
        var pass = $("#pwd").val();
        var cpass = $("#cpwd").val();

        $.ajax({
            type:"POST",
            url: "admin_insert.php",
            data: {
                fname : fname,
                mname : mname,
                lname : lname,
                pass : pass,
                cpass : cpass
            },
            success: function(response){
                alert(response);
            }
        });
    });

    $(".enter").click(function(){
        var h_image = $("#img_file")[0].files[0];
        var heading = $("#heading").val();
        var paragraph = $("#paragraph").val();
        var image_name = $(".img_name").val();

        var content_form = new FormData();
        content_form.append("image", h_image);
        content_form.append("heading", heading);
        content_form.append("paragraph", paragraph);
        content_form.append("image_name", image_name);
        
        $.ajax({
            type:"POST",
            url: "content_insert.php",
            data: content_form,
            contentType: false,
            processData: false,
            success: function (response) {
            image_name.text(response.img);    
            }
        });
    });

    $(".logout").click(function(){
        $.ajax({
            type: "POST",
            url: "logout.php",
            contentType: false,
            processData: false,
            success: function (response){
                if(response == "logout"){
                    alert ("Logging out");
                    window.location.href = 'index.php';
                }
                else {
                    alert ("Try again");
                }
            }
        })
    })


});