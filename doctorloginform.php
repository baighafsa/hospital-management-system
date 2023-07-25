<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Login</title>
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  

  <script>

    $(document).ready(function(){
        $("form").submit(function(event){
            var formValid=true;
            $("input").each(function(){
                if($.trim($(this).val())==""){
                    $(this).addClass("is-invalid");
                    formValid=false;
                } else{
                    $(this).removeClass("is-invalid");
                }

            });
            if(!formValid){
                event.preventDefault();
            }
        });

        $("input").change(function(){
            if($.trim($(this).val())!=""){
                $(this).removeClass("is-invalid");
            }
        });
    });
        </script>
        <style>
            .is-invalid{
                border-color:red;
            }
        </style>
<body>
<h1>Login Form</h1>
    <form action="doclogindb.php" method="post" id="dform">

    
    <label for="docemail">EmailAddress:</label>
    <input type="email" id="docemail" name="docemail" placeholder="abc@gmail.com">
    <br>
    <br>
    
    
    <label for="docpw">Password:</label>
    <input type="password" id="docpw" name="docpw" placeholder="*****">
    <br>
    <br>

    <input type="submit" value="Login" id="btn">
    </form>
</body>
</html>