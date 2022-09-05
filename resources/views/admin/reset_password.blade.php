<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>RENTAL SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="/css/home2.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="icon" href="image/logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="body">
	<div class="co_login">
		<div class="row">
			<div class="col-lg-12">
				<div class="cont">
					<div class="count-head">
						<h2>Recover your password</h2>
					</div>
					<div class="form sign-in">	
					<form method="post" action="{{url('/admin/store_password')}}/{{$id}}">
						@csrf				    
					    <label>
					        <span>Enter Password</span>
					        <input type="text" name="password">
					        @if($errors->has('password')) <p class="error_mes text-danger">{{ $errors->first('password') }}</p> @endif
					        <span class="underline"></span>
					    </label>
					    <label>
					        <span>Re-Enter Password</span>
					        <input type="text" name="confirm_password">
					        @if($errors->has('confirm_password')) <p class="error_mes text-danger">{{ $errors->first('confirm_password') }}</p> @endif
					        <span class="underline"></span>
					    </label>
					    <button class="submit" type="submit">Send me email</button>
					</form>
				        <div class="extra-login clearfix">
                            <span>Or Login With</span>
                        </div>
                        <div class="social-list">
                            <a href="#" class="facebook-bg"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="twitter-bg"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="google-bg"><i class="fab fa-google"></i></a>
                            <a href="#" class="linkedin-bg"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        
				    </div>

			    </div>
			</div>
		</div>	    
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">
	    $(".show_code").click(function(){
        $(".c_code").show();
      });

	    setTimeout(function() { $(".error_mes").fadeOut(1500); },5000);
  </script>
</body> 
</html>




