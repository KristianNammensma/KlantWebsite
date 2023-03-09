<link rel="stylesheet" href="../css/dienstpagina.css">
<?php
 $userModel = new \App\Models\dienstModel(); 

 $user = $userModel->findAll();



	if(isset($_POST['submit']))
	{
    $img = $_POST['img'] ?? '';
    $tussenV = $_POST['titel'] ?? ''; // $pageNumber = $_GET['page'] ?? 1; als  
    $straat = $_POST['info'] ?? '';
   
   
    $data = [
       'img'  => $img,
       'titel' => $tussenV,
       'info' => $straat,
       ];
       
		$userModel->insert($data);
	}

  if(isset($_POST['delete']))
  {
    $userModel->delete($_POST['delete']);
  }
  
  else
  {
    echo "actie is op dit moment leeg";
  }

// $userModel->insert($data);


var_dump($data);



?>

<container>
	<form action="" method="post">

			<input placeholder='foto url' class="files"  required name='img'type='file'>
			<input placeholder='titel' name='titel'type='text'>
			<input placeholder='info' id="info" required name='info'type='text'>
			<input type="submit" id="submit" name="submit" value="submit">
	</form> 
</container>

<h2>Voorbeeld van Diensten</h2>

<container class="containernieuws">

  <?php foreach($user as $u): ?>

	  <div id="img1">
      <img id="" src="./imgs/<?=$u['img']?>">
      <div class="background">
        <h1 id="scrolltitle1"><?=$u['titel']?></h1>
        <p id="scrolltext1"><?=$u['info']?></p>

          <form action="" method="post">
            <input type="submit" class="btn" name="delete" value="<?=$u['id'] ?? ''?>">
          </form>

      </div>
  </div>

<?php endforeach; ?>

</container>

