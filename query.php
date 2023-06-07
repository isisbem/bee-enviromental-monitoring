<?php
require_once './database.php';

  $queryO = "SELECT COUNT(*) FROM eventi WHERE eventoDateTime >= DATE_SUB(CURDATE(), INTERVAL 10 DAY)
  AND eventoTipo = 'O';";

  $queryI = "SELECT COUNT(*) FROM eventi WHERE eventoDateTime >= DATE_SUB(CURDATE(), INTERVAL 10 DAY)
  AND eventoTipo = 'I';";

  $resultI = $conn->query($queryI);
  $resultO = $conn->query($queryO);

  $row = $resultI->fetch_assoc();
  $apiI = $row['COUNT(*)'];
//   echo $apiI;

  while($row = $resultO->fetch_assoc())
  {
    $apiO[] = $row;
  }
    
  $oggi = date('Y-m-d');
  
  for($i = 0; $i < 6; $i++) {
    // echo $date = date('Y-m-d',strtotime("-" .$i . " days"));  
    $hour = date('H',strtotime("-" .$i . " hour"));
    // SELECT * FROM eventi WHERE HOUR(eventoDateTime) = "10" AND DATE(eventoDateTime) = "2023-06-05" AND eventoTipo = 'I'

    $entrateOgniOra = "SELECT COUNT(*) FROM eventi WHERE HOUR(eventoDateTime) = 06 AND DATE(eventoDateTime) = $oggi AND eventoTipo = 'I'";
    $resultEntrateOgniOra = $conn->query($entrateOgniOra);
    $row = $resultEntrateOgniOra->fetch_assoc();
    $api_in_ogni_ora[$i] = $row['COUNT(*)'];

    $usciteOgniOra = "SELECT COUNT(*) FROM eventi WHERE HOUR(eventoDateTime) > $hour-5 AND DATE(eventoDateTime) = $oggi AND eventoTipo = 'O'";
    $resultUsciteOgniOra = $conn->query($usciteOgniOra);
    while($row = $resultUsciteOgniOra->fetch_assoc()) {
      $api_out_ogni_ora[] = $row['COUNT(*)'];
    }

    
    // $arrogniora = "";
    // for($x = 0; $x < 6; $x++){
    //   $arrogniora = $arrogniora . array_values($api_in_ogni_ora)[$x];
    // }
  }
  print_r($api_in_ogni_ora);

  // echo $arrogniora = strrev($arrogniora);
  // print_r($arrogniora);


  // print_r($arrUscita);
  // print_r($api_out_ogni_ora);
  // echo $date = date('Y-m-d',strtotime("-" .$x . " days"));
  ?>