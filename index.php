
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="demo.css" rel="stylesheet" type="text/css"/>
        <title>login form</title>
    </head>
    <body style="background-color: lightgray;" >
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-black bg-white text-center ">
                        
            <div class="card-body">
                
                <p class="card-title">Sign in to start your session</p>
                <?php
                session_start();
                if(isset($_SESSION['msg']))
                {
                echo $_SESSION['msg'];
                session_destroy();
                }
                ?>
                <form action="pks.php" method="post">
                    <div class="form-group">
                        <label for="name"></label>
                        <input type="text" class="form-control form-control-sm" name="username" placeholder="User name" > 
                    </div>
                    
                <div class="form-group">
                        <input type="password" class="form-control form-control-sm" name="password" placeholder="Password"> 
                    </div>
                    
                     <div class="form-row">
    <div class="col-auto">
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox"> Remember me
        </label>
      </div>
    </div>
      <div id="blank"></div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary btn-sm">Log in</button>
    </div>
  </div>
                
            </form>
            </div>
                </div>
                 </div>
                  </div>
                   </div>
        <script src="js/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
    </body>
</html>
