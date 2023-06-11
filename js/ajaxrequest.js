$(document).ready(function(){

    //Ajax Call form Already Exists Email Verification
    
    $("#stuemail").on("keypress blur",function(){
        var stuemail = $("#stuemail").val();
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        $.ajax({

            url: "Student/addstudent.php",
            method: "POST",
            data:{
                checkemail: "checkmail",
                stuemail: "stuemail",
            },
            success: function(data){
                // console.log(data);
                if(data != 0)
                {
                    //for Already Existing..
            $("#statusMsg2").html('<small style="color:red;">Email Id Already Exists!</small>');
            $("#signup").attr("disabled", true);
            }
                    //if Email if Valid..
            else if (data == 0 && reg.test(stuemail)) {
            $("#statusMsg2").html('<small style="color:green;"> There you Go!</small>');
            $("#signup").attr("disabled", false);
            }
                    //for Invalid Email...
            else if (!reg.test(stuemail)) {
            $("#statusMsg2").html('<small style="color:red;">Please Enter Valid Email eg.. example@gmail.com!</small>');
            $("#signup").attr("disabled", false);   
            }
                    //if Email is Blank..
            if(stuemail == "")
            {
            $("#statusMsg2").html('<small style="color:red;">Please Enter Email!</small>');
            }

            },
        });
    });
});

    // function for Student Registration...
function addStu()
{
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var stuname = $("#stuname").val();
    var stuemail = $("#stuemail").val();
    var stupass = $("#stupass").val();

    // Checking Form fields on form submission (if all fields are Empty)
    if(stuname.trim() == "")
    {
        // for Name
        $("#statusMsg1").html('<small style="color:red;">Please Enter Name !</small>');
        $("#stuname").focus();
        return false;
    }
    else if(stuemail.trim() == "")
    {
        // for Email..
        $("#statusMsg2").html('<small style="color:red;">Please Enter Email !</small>');
        $("#stuemail").focus();
        return false;
    }
    //Email validation
    else if(stuemail.trim() != "" && !reg.test(stuemail)){
        $("#statusMsg2").html('<small style="color:red;">Please Enter Valid Email eg.. example@gmail.com !</small>');
        $("#stuemail").focus();
        return false;
    }

    else if(stupass.trim() == "")
    {   
        // for Password..
        $("#statusMsg3").html('<small style="color:red;">Please Enter Password !</small>');
        $("#stupass").focus();
        return false;
    }
    // If All fields are OK..
    else
    {
    $.ajax({
        url:'Student/addstudent.php',
        method: 'POST',
        dataType: "json",
        data:{
            stusignup: "stusignup",
            stuname : stuname,
            stuemail : stuemail,
            stupass : stupass,
        },
        success:function(data)
        {
            console.log(data)
            if(data == "OK")
            {
                $("#successMsg").html("<span class='alert alert-success'>Registration Successful !</span>");
                clearStuRegField();
            }
            else if(data == "Failed"){

                $("#successMsg").html("<span class='alert alert-danger'>Unable to Register</span>");
            }
        },
    });

}
}

// Function for Empty All Fields (after submission)
function clearStuRegField()
{
    $("#stuRegForm").trigger("reset");
    $("#statusMsg1").html(" ");
    $("#statusMsg2").html(" ");
    $("#statusMsg3").html(" ");

}


// Ajax Call for Student Login Verification...
function checkStuLogin()
{
    var stuLogemail = $("#stuLogemail").val();
    var stuLogpass = $("#stuLogpass").val();

    $.ajax({
        url: "Student/addstudent.php",
        method:"POST",
        data: {
            checkLogemail: "checklogmail",
            stuLogEmail: stuLogemail,
            stuLogPass: stuLogpass,
        },
        success:function(data){
            if(data == 0)
            {
                $("#statusLogMsg").html('<small clss="alert alert-danger">Invalid Email or Password !</small>');
            }
            else if(data == 1)
            {
                $("#statusLogMsg").html('<div class="spinner-border text-success" role="status"></div>');
                setTimeout(()=>{
                    window.location.href = "index.php";
                }, 1000);
            }

        },
    });
}










