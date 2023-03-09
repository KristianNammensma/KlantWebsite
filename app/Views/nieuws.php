

<link rel="stylesheet" href="./css/nieuwspagina.css">
<?php
 $userModel = new \App\Models\UserModel(); 

 $user = $userModel->findAll();



	if(isset($_POST['submit']))
	{
    $img = $_POST['img'] ?? '';
    $tussenV = $_POST['titel'] ?? ''; // $pageNumber = $_GET['page'] ?? 1; als  
    $achterN = $_POST['datum'] ?? '';
    $straat = $_POST['info'] ?? '';
   
   
    $data = [
       'img'  => $img,
       'titel' => $tussenV,
       'datum'  => $achterN,
       'info' => $straat,
       ];
		$userModel->insert($data);
	}

  if(isset($_POST['delete']))
  {
    $userModel->delete($_POST['delete']);
  }

// $userModel->insert($data);


var_dump($data);



?>


<container>
	<form action="" method="post">

			<input placeholder='foto url' class="files"  required name='img'type='file'>
			<input placeholder='titel' name='titel'type='text'>
			<input placeholder='datum d/m/y' required name='datum'type='date'>
			<input placeholder='info' required name='info'type='text'>
			<input type="submit" id="submit" name="submit" value="submit">
	</form> 
</container>

<h2>Voorbeeld van nieuwsblok</h2>

<container class="containernieuws">

  <?php foreach($user as $u): ?>

	  <div class="row">
      <img src="./imgs/<?=$u['img']?>">
      <div class="background">
        <h1><?=$u['titel']?></h1>
        <p class="date"><?=$u['datum']?></p>
        <p class="bgtext"><?=$u['info']?></p>

          <form action="" method="post">
            <input type="submit" class="btn" name="delete" value="<?=$u['id']?>">
          </form>

      </div>
  </div>

<?php endforeach; ?>

</container>