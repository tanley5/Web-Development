<?php
    if(isset($_GET['em'])) $emvalues = $_GET['em']; else $emvalues = "";
    if(isset($_GET['tel'])) $telvalues = $_GET['tel']; else $telvalues = "";
    if(isset($_GET['ec'])) $ecvalues = $_GET['ec']; else $ecvalues = 0;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Signin</title>

    <link href="./css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="./css/style.css" rel="stylesheet">
  </head>
<body class="text-center">

    <form action="process.php" method="POST" class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        Email   :
        <label for="inputEmail" class="sr-only">Email address</label>
            <input id="inputEmail" type="text" name="email" placeholder = "Please enter an email" value="<?php echo $emvalues;?>"><br>
        Phone:
        <label for="inputPhone" class="sr-only">Email address</label>
            <input id="inputPhone" type="tel" name="tel" placeholder = "(XXX)XXX-XXXX" value="<?php echo $telvalues;?>"><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <button class="btn btn-lg btn-primary btn-block" type="reset">Reset</button>
        <?php
            if ($ecvalues != 0)
            {
                echo '<div class="alert alert-danger" role="alert">';
                    switch($ecvalues)
                    {
                        case 3: echo '<p class="warning">Please enter a valid email</p>';
                        case 2: echo '<p class="warning">Please enter a valid telephone</p>';break;
                        case 1: echo '<p class="warning">Please enter a valid email</p>';break;
                    }
                echo '</div>';
            }
        ?>        
    </form>   
</body>
</html>
