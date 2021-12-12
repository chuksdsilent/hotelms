<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MORREN-XRIS</title>
    <link href="{{asset("bootstrap/css/bootstrap.css")}}" rel="stylesheet" />
    <style>
        .container{
            margin-top: 5rem;
        }
        .card{
            width: 25rem;
            border-radius: 1rem;
        }
       
        body  {
            background: linear-gradient(332deg, #3dae91, #44d01b, #d0cc1b, #cf1bd0, #d0441b);
            background-size: 1000% 1000%;

            -webkit-animation: AnimationName 24s ease infinite;
            -moz-animation: AnimationName 24s ease infinite;
            animation: AnimationName 24s ease infinite;
        }

        @-webkit-keyframes AnimationName {
            0%{background-position:0% 31%}
            50%{background-position:100% 70%}
            100%{background-position:0% 31%}
        }
        @-moz-keyframes AnimationName {
            0%{background-position:0% 31%}
            50%{background-position:100% 70%}
            100%{background-position:0% 31%}
        }
        @keyframes AnimationName {
            0%{background-position:0% 31%}
            50%{background-position:100% 70%}
            100%{background-position:0% 31%}
        }
    </style>
</head>
<body>
    <div class="morren-login">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="card">
                    <div class="card-body">
                        <div class="form">
                            <div class="alert alert-danger" id="alert">Invalid Username/Password</div>
                            <h3>Login</h3>
                            <hr />
                            <div class="form-group mb-4">
                                <label for="" class="mb-3">Username</label>
                                <input type="text" id="username" class="form-control">
                            </div>
                            <div class="form-group mb-4">
                                <label for="" class="mb-3">Password</label>
                                <input type="password" id="password" class="form-control">
                            </div>
                            <div class="form-group mb-4">
                                <button id="login" class="btn btn-primary"> <span id="showLogin">Login</span><span id="processing">Processing...</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{asset("jquery.js")}}"></script>
<script>

    $("#alert").hide();
    $("#processing").hide();
    $("#login").on("click", function(){
        $("#processing").show();
        $("#showLogin").hide();

        const formData = {username:  $("#username").val(),  password: $("#password").val()}
        const host = window.location
        $.ajax({
            type: "POST",
            url: host + "/login",
            data: formData,
            dataType: "json",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            encode: true,
            success: function(data) {

                console.log("coming data is", data.data.activate)
                if(data.success && data.data.activate === 1){
                    console.log("second level worked")
                    window.location.href = host + "/dashboard";
                }else{
                    $("#alert").show();
                }
            },
            error: function(err) {
                $("#alert").show();
                console.log("NÃO FUNFOU!");
                console.log(err)
                $("#processing").hide();
                $("#showLogin").show();

            },
            complete: function(data) {
                $("#processing").hide();
                $("#showLogin").show();
            }

        });
    })
</script>
</body>
</html>