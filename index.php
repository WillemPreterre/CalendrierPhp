<?php $month = array(
     "Janvier",
     "Février",
     "Mars",
     "Avril",
     "Mai",
     "Juin",
     "Juillet",
     "Août",
     "Septembre",
     "Octobre",
     "Novembre",
     "Décembre"
 );

 $dayWeek = array(
     "Lundi",
     "Mardi",
     "Mercredi",
     "Jeudi",
     "vendredi",
     "Samedi",
     "Dimanche");
     // Mois et année récupération
     $monthDate = date("m");
      $yearsDate = date("Y");

      // récupération du nombre de jour dans le mois actuel
      $dayNumber = cal_days_in_month(CAL_GREGORIAN, $monthDate, $yearsDate);

      //récupération jour actuel
      $day = date("n");
 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="grid-container">
  <div class="date">     
    <!-- Suppr -->
  <?php echo date("M, Y");?>
  <!-- Suppr -->
  <?php echo  "{$dayNumber}"?>

<!-- Boucle du nombre de jour dans le mois -->
  <?php 
  for ($day; $day <= $dayNumber; $day++) {
    echo $day;
}?>
  <?php 
  for ($month; $month <= 12; $month[]++) {
    echo $month;
}?>
  
  </div>
  <div class="flecheD">
    <img src="https://img.icons8.com/flat-round/64/000000/arrow-right.png"/>
  </div>
  <div class="flecheG">
    <img src="https://img.icons8.com/flat-round/64/000000/arrow-left.png"/>
  </div>
  <div class="month">
    <form action="" method="GET">
      <label for="month">Choisi un mois</label>
      <select name="month" id="month">
      <option value="January"></option>
      </select> 
    </form>
  </div>   
  <div class="years">
  <label for="years">Choisi une année</label>
      <select name="years" id="years">
      <option value="2021"></option>
      </select> 
  </div>
  <div class="valide">
    <button class="myButton" type="button">Validé</button>
</div>
  <div class="lundi"><?php echo $dayWeek[0] ?></div>
  <div class="mardi"><?php echo $dayWeek[1] ?></div>
  <div class="mercredi"><?php echo $dayWeek[2] ?></div>
  <div class="jeudi"><?php echo $dayWeek[3] ?></div>
  <div class="vendredi"><?php echo $dayWeek[4] ?></div>
  <div class="samedi"><?php echo $dayWeek[5] ?></div>
  <div class="dimanche"><?php echo $dayWeek[6] ?></div>
  <div class="un"></div>
  <div class="deux"></div>
  <div class="trois"></div>
  <div class="quatre"></div>
  <div class="cinq"></div>
  <div class="six"></div>
  <div class="sept"></div>
  <div class="huit"></div>
  <div class="neuf"></div>
  <div class="dix"></div>
  <div class="onze"></div>
  <div class="douze"></div>
  <div class="treize"></div>
  <div class="quatorze"></div>
  <div class="quinze"></div>
  <div class="seize"></div>
  <div class="dix-sept"></div>
  <div class="dix-huit"></div>
  <div class="dix-neuf"></div>
  <div class="vingts"></div>
  <div class="vingt-un"></div>
  <div class="vingt-deux"></div>
  <div class="vingt-trois"></div>
  <div class="vingt-quatre"></div>
  <div class="vingt-cinq"></div>
  <div class="vingt-six"></div>
  <div class="vingt-sept"></div>
  <div class="vingt-huit"></div>
  <div class="vingt-neuf"></div>
  <div class="trente"></div>
  <div class="trente-un"></div>
</div>
</body>
</html>