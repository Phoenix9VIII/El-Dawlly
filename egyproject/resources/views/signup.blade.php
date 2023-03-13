<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@if(session('check_email'))
<script>alert("Your Email Exist Please go to login Page");</script>
@endif

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

{!! Form::open(['url' => 'save','files'=>true]) !!}

<script src="https://use.fontawesome.com/1dec14be15.js"></script>
    <div class="container-fluid stylish-form">
      <h2 class="text-center">Government Services</h2>
      <div class="row mar20" >
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="inner-section">
            <form action="user" method="post">
              <div class="mar20 inside-form">
                <h2 class="font_white text-center">Welcome</h2>
                <ul>
                  <li class="icon-holder dsp-flex">
                    <i class="fa fa-facebook "></i>
                  </li>
                  <li class="icon-holder dsp-flex">
                    <i class="fa fa-twitter "></i>
                  </li>
                  <li class="icon-holder dsp-flex">
                    <i class="fa fa-instagram "></i>
                  </li>
                </ul>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-pencil "></i></span>
                  <input type="text" class="form-control" name="t_name" required placeholder="Name...">
                </div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope "></i></span>
                  <input type="email" class="form-control" name="t_email" required placeholder="Email...">
                </div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock "></i></span>
                  <input type="password" class="form-control" name="t_password" required placeholder="Password...">
                </div>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock "></i></span>
                  <input type="password" class="form-control" name="t_password2" required placeholder="Confirm Password...">
                </div>
                <div class="footer text-center">
                <button>Signup</button>
                </div>
              </div>
            </form>
          </div>
          <link rel="stylesheet" href="css/Signup.css">
 {!! Form::close() !!}
</body>
</html>