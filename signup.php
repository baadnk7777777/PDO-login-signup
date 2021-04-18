<?php 
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>signup</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php if(isset($_SESSION['name'])) {
      header('location: dashboard.php' );
  }
    
  ?>
      <div class="container-fluid">
          <form action="" class="col-6 my-5" method="POST" id="register">
          <h5 class="m-auto"> Register  From </h5>
            <div class="form-group">
                <label for="">username</label>
                <input type="text" class="form-control" name="txt_username" placeholder="Enter Your username" required>
            </div>

            <div class="form-group">
                <label for="">email</label>
                <input type="email" class="form-control" name="txt_email" placeholder="Enter Your email" required>
            </div>

            <div class="form-group">
                <label for="">password</label>
                <input type="password" class="form-control" name="txt_password" placeholder="Enter Your password" required>
            </div>

            <input type="hidden" name="txt_role" value="employee">

            <div class="form-group">
                <input type="submit" value="Register" class="btn btn-success">
                <input type="reset" value="Reset" class="btn btn-light"> <br>
                <a class="mt-3" href="login-page.php">You have my account ?</a>
            </div>
          </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            console.log("Function Ready!.");

            $("#register").submit(function(e){
                console.log("Submit login!");
                event.preventDefault();
                $.ajax({
                    url: "register.php",
                    type: "POST",
                    data :$('form#register').serialize(),
                    success: function(data) {
                            console.log("Success",data);
                            location.href = 'index.php';
                    },
                    error : function(data) {
                        console.log('An error occurred.');
                        console.log(data);
                    },
                });
            });
        });
    </script>



  </body>
</html>