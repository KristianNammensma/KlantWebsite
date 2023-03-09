<link rel="stylesheet" href="../css/dienstpagina.css">
<?php
 $userModel = new \App\Models\ervaringModel(); 

 $user = $userModel->findAll();



	if(isset($_POST['submit']))
	{
		$img = $_POST['img'] ?? '';
		$tussenV = $_POST['info'] ?? ''; // $pageNumber = $_GET['page'] ?? 1; als  
		$straat = $_POST['naam'] ?? '';
		$bedrijf = $_POST['bedrijf'] ?? '';
	   
	   
		$data = [
		   'img'  => $img,
		   'info' => $tussenV,
		   'naam' => $straat,
		   'bedrijf' => $bedrijf,
		   ];
		   
		$userModel->insert($data);
	}

  if(isset($_POST['delete']))
  {
    $userModel->delete($_POST['delete']);
  }
  
  else
  {
    echo "actie is op dit moment leeg" . "<br>";
	var_dump($data);
  }

// $userModel->insert($data);






?>

<container>
	<form action="" method="post">

			<input placeholder='profielfoto url' class="files"  required name='img'type='file'>
			<input placeholder='inhoud van de recentie' id="info" required name='info'type='text'>
      <input placeholder='naam' name='naam'type='text'>
      <input placeholder='Bedrijf' name='bedrijf'type='text'>
			<input type="submit" id="submit" name="submit" value="submit">
	</form> 
</container>

<h2>Voorbeeld van Ervaringen</h2>

<div class="ervaring-inhoud-inhoud">

  <?php foreach($user as $u):?>
				<div class="quote">
						<p><?=$u['info']?></p>
				</div>

				<div class="client">
					<figure id="client-pfp"><?=$u['img']?></figure>
					<div class="client-info">
						<p id="name"><?=$u['naam']?></p>
						<p id="extra"><?=$u['bedrijf']?></p>
					</div>
				</div>

				<form action="" method="post">
					<input type="submit" class="btn" name="delete" value="<?=$u['id'] ?? ''?>">
          		</form>
        
  <?php endforeach; ?>
</div>


