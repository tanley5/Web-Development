<?php
    //Global Variables
    $ec = 0;
    $email="";
    $phone="";
    
    //Regex library
    $emailregex = '/[a-z0-9]+([-+._][a-z0-9]+){0,2}@.*?(\.(a(?:[cdefgilmnoqrstuwxz]|ero|(?:rp|si)a)|b(?:[abdefghijmnorstvwyz]iz)|c(?:[acdfghiklmnoruvxyz]|at|o(?:m|op))|d[ejkmoz]|e(?:[ceghrstu]|du)|f[ijkmor]|g(?:[abdefghilmnpqrstuwy]|ov)|h[kmnrtu]|i(?:[delmnoqrst]|n(?:fo|t))|j(?:[emop]|obs)|k[eghimnprwyz]|l[abcikrstuvy]|m(?:[acdeghklmnopqrstuvwxyz]|il|obi|useum)|n(?:[acefgilopruz]|ame|et)|o(?:m|rg)|p(?:[aefghklmnrstwy]|ro)|qa|r[eosuw]|s[abcdeghijklmnortuvyz]|t(?:[cdfghjklmnoprtvwz]|(?:rav)?el)|u[agkmsyz]|v[aceginu]|w[fs]|y[etu]|z[amw])\b){1,2}/';
    $phoneregex = "/(\d{3})\D?\D?(\d{3})\D?(\d{4})/";
    //Sending and receiving inputs
    
    //Email validation
    if(!empty($_POST['email']))
    {
        $email=$_POST['email'];
        //Validate email input
        if (!preg_match($emailregex,$email)) 
        {
            $ec += 1;
        }
    }
    else 
    {
        $ec += 1;
    }

    //Phone validation
    if(!empty($_POST['tel']))
    {
        $phone=$_POST['tel'];
        //Validate email input
        if (!preg_match($phoneregex,$phone)) 
        {
            $ec += 2;
        }
    }
    else 
    {
        $ec += 2;
    }
    //Sending back the errorcode with values to index
    if($ec)
    {
        header('location:index.php?em='.$email.'&tel='.$phone.'&ec='.$ec);
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\style.css">
    <title>Process</title>
    
    <link href="./css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="./css/cover.css" rel="stylesheet">
</head>
<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link" href="index.php">Home</a>
            </nav>
            </div>
        </header>
        <main role="main" class="inner cover">
            <?php
                $pphone = $phone;
                $pemail = $email;
            ?>
            <h1 class="cover-heading">Data Is valid, Thank You</h1>
            <?php
                echo '<p>Your phone number: '.$pphone.'</p>';
                echo '<p>Your email: '.$pemail.'</p>';
            ?>
        </main>
    </div>
</body>
</html>

