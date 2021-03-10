<?php 
print_r($_GET);
//  year
$yearNow  = date("Y");
// $monthDate = date("m");

if( isset($_GET['month'] ) ) {
  $monthDate = $_GET['month'];

}else {
  $monthDate = date("n");
}

if( isset($_GET['years'])) {
  $yearNow = $_GET['years'];
}else {
  $yearNow = date("Y");
}

// Détermine si une variable est déclarée et est différente de null




$month = array(

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


 $dayWeek = array(
     1 => "Lundi",
     "Mardi",
     "Mercredi",
     "Jeudi",
     "vendredi",
     "Samedi",
     "Dimanche");

     // Mois et année récupération

      $yearsDate = date("Y");

      // récupération du nombre de jour dans le mois actuel
      $dayNumber = cal_days_in_month(CAL_GREGORIAN, $monthDate, $yearsDate);

      //récupération jour actuel
      $day = date("j");

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

    <?php echo $month[$monthDate] ;?>



<!-- Boucle du nombre de jour dans le mois -->

  </div>
  
  <!-- Flèche -->
  <div class="flecheD">
    <img src="https://img.icons8.com/flat-round/64/000000/arrow-right.png"/>
  </div>
  <div class="flecheG">
    <img src="https://img.icons8.com/flat-round/64/000000/arrow-left.png"/>
  </div>

  <!-- Mois -->
  <form action="" method="get">
  <div class="month">
   
    <label for="monthNumber"></label>
    <select name="month" id="monthNumber">
      <!-- " : " et endforeach permet d'écrire plus simplement le code html  -->
      <!-- Boucle mois -->
        <?php foreach ($month as $index => $name) : ?> 

          <option value="<?php echo $index ?>"><?php echo $name ?></option> 

        <?php endforeach;?>
      </select> 

  </div>   


  <!-- Année -->
  <div class="years">

      <label for="yearsNumber"></label>
        <select name="years" id="yearsNumber">
          <?php for ($year = $yearNow - 100; $year <= $yearNow + 100; $year++) : ?>
            <option value="<?php echo $year ?>"> <?php echo $year ?></option>;
          <?php endfor; ?>
        </select> 

  </div>

  <div class="valide">
    <input type="submit" class="myButton" value="Validé">
</div>
</form>
<!-- Boucle pour les jours de la semaine -->
<?php foreach ($dayWeek as $index => $name) : ?>
  <div class="<?php echo strtolower($name) ?>">
    <?php echo $name ?>
  </div>
<?php endforeach;?>

<?php 
      // for ($day; $day <= $dayNumber; $day++) {
      // echo $day;
      for ($day = 1; $day <= 30 ; $day++) : ?>
        <div class="<?php echo strtolower($day) ?>">
        <?php echo $day ?>
        </div>
        <?php endfor;?>

  
</div>
</body>
</html>