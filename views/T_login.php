  
<?php include_once "../Php_code/validation_login.php" ;?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="../css/login.css" >

</head>
<body>



<div>

    <div>

        <div class="text-center">
            <div class="login-form">

                <div>
                  

                        <div class="row">
                            <div class="col-sm-4 col-xs-12 text-center">
                                <img src="../storage/Images/logo-name.png" height="92" />
                            </div>

                            <div class="col-sm-8 col-xs-12">
                                <blockquote>
                                    <p class="EUP">Eastern Prime UNIVERSITY</p>
                                    <small class="EPU_slogan">Bringing ambition to life</small>
                                </blockquote>
                            </div>
                        </div>
                    
                </div>

                <div>
                <br />
                    <div class="login_header">Sign in with your username.</div>
					
	<form action="" method="post" >                        
				<table align="center" >

					<div class="form-group">
                            <input autocomplete="off" class="form-control" type="text" value="<?php echo $uname?>" name="uname" placeholder="User Name"  />
                         
							<span style="color:red;"><?php echo $err_uname;?></span>
							
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" value="<?php echo $pass?>" name="pass" placeholder="Password"  />
                            <span style="color:red;"><?php echo $err_pass;?></span>
                        </div>
                        
						<div>
						 
  
</div>
  
</div>

                        </div>
                        <div class="form-group">
                            
							<input type="submit" class="btn btn-block btn-primary p-lg-left-right" name="login" value="login" style="color:white;"> 
                        </div>                        </div>
				</table>                     
                        
</form>
                
</body>

 
</html>

			</form>
		
	</body>
</html>

