
<!-- Creare un form dove poter memorizzare le informazioni tipiche di un utente in un social -->
<!--  network: -->

<!-- nickname; -->

<!-- numero di post; -->

<!-- numero di follower; -->

<!-- numero di seguiti. -->

<!-- Nei social network sono considerati influencer coloro che hanno più di 10000 follower. -->
<!--  Inoltre, sono considerati content  -->
<!-- creator coloro che hanno un numero di post maggiore di 1000. -->


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Social Network</title>
<style>
.container {
    text-align: center;
    width: 100%;
    height: 250px;
    border-width: 2px;
    border-color: black;
    background-color:gray;
}
</style>
</head>
<body>
	
	<div class="container">
	<h1>Compila con i dati riquiesti </h1>
	<form action="socialN.php" method="POST">
		Nickname:<input type="text" min="1" name="nickname"required> <br><br>
        Numero di post:<input type="number" min="1" name="post"required><br><br> 
        Numero di follower:<input type="number" min="1" name="follower"required> <br><br>
        Numero di seguiti:<input type="number" min="1" name="seguiti"required> <br><br>
		
		
		<input type="submit" value="Invia"><br><br>
		
	</form>
	
	<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nickname = $_POST['nickname'];
      $post = $_POST['post'];
      $follower = $_POST['follower'];
      $seguiti = $_POST['seguiti'];

      
     

      
      if ($follower >= 10000) {
          if ($post >= 1000) {
              echo "<p>L'utente è un influencer di alto livello e un content creator attivo.</p>";
          } else {
              echo "<p>L'utente è un influencer di alto livello con un basso numero di post recenti.</p>";
          }
      } else if ($follower >= 1000) {
          echo "<p>L'utente è un influencer di medio livello.</p>";
      } else if ($post >= 1000) {
          echo "<p>L'utente è un content creator attivo con un basso numero di follower.</p>";
      } else {
          echo "<p>L'utente non ha ancora raggiunto un livello significativo come influencer o content creator.</p>";
      }
    }
    ?>
	
	</div>

</body>
</html>>