<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Abbonamento in palestra</title>
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
	<h1>Inserisca i numeri </h1>
	<form action="index.php" method="POST">
		Numero1:<input type="number" min="1" name="n1"required> 
		<select name="operazione" id="operazioe">
        <option value="">Selezione operazione</option>
        <option value="somma">+</option>
        <option value="resta">-</option>
        <option value="molti">*</option>
        <option value="divisione">/</option>
        
    </select>
        Numero2:<input type="number" min="1" name="n2"required> 
		
		
		<input type="submit" value="Invia">
		
	</form>
	
	<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $n1 = $_POST['n1'];
      $n2 = $_POST['n2'];
      $operazione = $_POST['operazione'];

      
     

      
      if ($operazione === "somma") {
        $risultato = $n1 + $n2;
        echo "<p>Risultato: $n1  +   $n2   =  $risultato</p>";
      } else if ($operazione === "resta") {
        $risultato = $n1 - $n2;
        echo "<p>Risultato: $n1  -   $n2   =  $risultato</p>";
      } else if ($operazione === "molti") {
        $risultato = $n1 * $n2;
        echo "<p>Risultato: $n1  *   $n2   =  $risultato</p>";
      } else if ($operazione === "divisione") {
        if ($n2 === 0) {
          echo "<p>Errore: impossibile dividere per zero!</p>";
        } else {
          $risultato = $n1 / $n2;
          echo "<p>Risultato: $n1  /   $n2   =  $risultato</p>";
        }
      }
    }
    ?>
	
	</div>

</body>
</html>>