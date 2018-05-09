<?php require_once "header.inc.php"; ?>
<?php require_once "src/cuttingStock.php"; ?>

<div class="container">

<?php

// Tratando array e fazendo a requisição

$inputs = explode("\n", $_POST['inputs']);
$inputs = array_filter(array_merge(array(0), $inputs));
$outputs = explode("\n", $_POST['outputs']);

$resp = cuttingStock($inputs, $outputs);

echo "<p>";
	echo "<h3>Resultados</h3>";
	echo "<br>";
	// Verificando tamanho do array
	
	$num_of_pieces = count($inputs); 
	
	// Otimização
	
	for ($i=1; $i<=$num_of_pieces; $i++) { 
		echo "<div class='lead'>&bull; Cortes a fazer na peça ".$i.":</div>";
		
		echo "<div class='progress'>";
		$i2 = 0;
		foreach($resp['piecesToCut'] as $chop) {
			
			if ($chop['inputPiece'] == $i) {
				$perc = (($chop['sizeToCut']/$inputs[$i])*100);
				if ($i2 % 2 == 0) {
					echo "<div class='progress-bar' role='progressbar' ";
				} else {
					echo "<div class='progress-bar progress-bar-info' role='progressbar' ";
				}				
				echo "style='width: ".$perc."%;' aria-valuenow='".$chop['sizeToCut']."' aria-valuemin='0' aria-valuemax='".$inputs[$i]."'>";
				echo $chop['sizeToCut'];
				echo "</div>";
				$i2++;
			}
		}
		echo "</div>";
		echo "<br>";
	}

	// Exibição dos resultados
	
	echo "<h3>Sobras</h3>";
	echo "<br>";
	foreach ($resp['leftovers'] as $thePiece => $thePieceLeftover) {
		echo "&bull; A peça número ".$thePiece." tem ".$thePieceLeftover." sobra(s)";
		echo "<br>";
	}
echo "</p>";
?>
</div>
<?php require_once "footer.inc.php"; ?>