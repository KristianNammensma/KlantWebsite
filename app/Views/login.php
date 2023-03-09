<?php
      $userModel = new \App\Models\loginModel(); 

        $user = $_POST['username'] ?? '';
        $passw = $_POST['passw'] ?? '';



        if($passw == "SuperSecretPassword" )
        {
          $passw = '$2y$10$txR2/KzEa6NRuAUhV2Nel...IJeTtS4mMLYBZ3bc1rWIg87JN8g6i';
        }else
        {
          $passw = 'HEHEHEHHAWWWWWWWWWWWWWWWWWWWWWW';
        }


        $usercheck = $userModel->find('1');

        
        $hash = $usercheck['password'];



          if($hash == $passw && $user == $usercheck['username'])
          {


            echo '<form action="diensten" method="post"><input name="submit" type="submit" value="Edit de Diensten"></form>';

            echo '<form action="nieuws" method="post"><input name="submit" type="submit" value="Edit nieuws"></form>';

            echo '<form action="ervaringen" method="post"><input name="submit" type="submit" value="Edit de ervaringen"></form>';

          }else
          {
            echo "<p>Is dit wel jouw website?<p>";

            $theroute = '';
          }

  
?>

<style>

  body
  {
    background-color:  white;
  }
  p
  {
    text-align: center;
    font-size: 40px;
  }
  form
  {
    display: flex;
    align-items: center;
    justify-content: center;
  }
  input
  {
    width: 10vw;
    height: 5vh;
    margin: .2vw;
    border-radius: 5px;
  }
  #submit
  {
    background-color:   #0d5eff;
    border:   #0d5eff;
    color: white;
    box-shadow: black 2px 2px 5px;
    font-weight: bold;
    font-family: "Open Sans", sans-serif;
    font-size: 16px;
  }
</style>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
      <input placeholder="username" name="username" type="text">
      <input placeholder="password" name="passw" type="password">
      <input id="submit" name="submit" type="submit">
  </form>

</body>
</html>