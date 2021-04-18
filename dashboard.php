<?php 
    session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php echo $_SESSION['name']; ?>
    <h1>Welcome To DashBoard</h1>
    <?php echo $_SESSION['user_id']; ?>
    </h1>
    <a href="logout.php">logout</a> <br>
    <a href="" data-toggle="modal" data-target="#information">Information</a>

    <div class="modal fade" tabindex="-1" id="information">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" id="frminfor">
                    <div class="modal-header">
                        <h5 class="modal-title">Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">

                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="">Full name</label>
                                    <input type="text" class="form-control" name="txt_full" placeholder="" required>
                                </div>

                                <div class="form-group col-6">
                                    <label for="">Lastname</label>
                                    <input type="text" class="form-control" name="txt_last" placeholder="" required>
                                </div>
                            </div>
                            <span> sex </span>
                            <div class="row">
                            
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex"
                                        id="exampleRadios1" value="m" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Male
                                    </label>
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex"
                                        id="exampleRadios2" value="f">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Female
                                    </label>
                                </div>
                            </div>


                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="">Address</label>
                                <input type="text" class="form-control" name="txt_add" placeholder="" required>
                            </div>

                            <div class="form-group col-6">
                                <label for="">Region</label>
                                <input type="text" class="form-control" name="txt_re" placeholder="" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="">Postalcode</label>
                                <input type="text" class="form-control" name="txt_pos" placeholder="" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" name="txt_pho" placeholder="" required>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="btn-sub" value="submit">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

<script>
        $(document).ready(function(){
            console.log("Function Ready!.");

            $("#frminfor").submit(function(e){
                console.log("information login!");
                event.preventDefault();
                $.ajax({
                    url: "information.php",
                    type: "POST",
                    data :$('form#frminfor').serialize(),
                    success: function(data) {
                            console.log("Success",data);
                            //location.reload();
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