<?php $month = array(

     1 =>"Janvier",
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
 print_r($month);

 $dayWeek = array(
     1 => "Lundi",
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
  
  <!-- Flèche -->
  <div class="flecheD">
    <img src="https://img.icons8.com/flat-round/64/000000/arrow-right.png"/>
  </div>
  <div class="flecheG">
    <img src="https://img.icons8.com/flat-round/64/000000/arrow-left.png"/>
  </div>

  <!-- Mois -->
  <div class="month">
    <form action="" method="GET">
    <select name="month" id="month">
      <label for="month">Choisi un mois</label>
      <!-- Boucle mois -->
        <?php foreach ($month as $index => $name) : ?> 
<!-- " : " et endforeach permet d'écrire plus simplement le code html  -->
          <option value="$name"><?php echo strtolower($name) ?></option> 
        <?php echo $name ?>
        <?php endforeach;?>
      </select> 
    </form>
  </div>   

  <!-- Année -->
  <div class="years">
    <label for="years">Choisi une année</label>
      <select name="years" id="years">
      <option value="2021"></option>
      </select> 
  </div>

  <div class="valide">
    <button class="myButton" type="button">Validé</button>
</div>

<!-- Boucle pour les jours de la semaine -->
<?php foreach ($dayWeek as $index => $name) : ?>

 <div class="<?php echo strtolower($name) ?>">
 <?php echo $name ?>
</div>
<?php endforeach;?>


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