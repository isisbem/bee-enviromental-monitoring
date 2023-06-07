<?php
require_once './database.php';

if(isset($_GET['api'])) {

  // $queryO = "SELECT COUNT(*) FROM eventi WHERE eventoDateTime >= DATE_SUB(CURDATE(), INTERVAL 10 DAY)
  // AND eventoTipo = 'O';";


  $queryI = "SELECT COUNT(*) FROM voli WHERE eventoIn = 0";
  $queryO = "SELECT COUNT(*) FROM voli WHERE eventoOut = 0";

  // $queryI = "SELECT COUNT(*) FROM eventi WHERE eventoDateTime >= DATE_SUB(CURDATE(), INTERVAL 10 DAY)
  // AND eventoTipo = 'I';";

  

  $resultI = $conn->query($queryI);
  $resultO = $conn->query($queryO);

  // while($row = $resultI->fetch_assoc())
  // {
  //   $apiI[] = $row;
  // }
  $row = $resultI->fetch_assoc();
  $apiI = $row['COUNT(*)'];

  // while($row = $resultO->fetch_assoc())
  // {
  //   $apiO[] = $row;
  // }

  $row = $resultO->fetch_assoc();
  $apiO = $row['COUNT(*)'];
  
  //grafico ad area
  $entrate = array();
 

  for($x = 0; $x < 7; $x++){
    
    $date = date('Y-m-d',strtotime("-" .$x . " days"));
    
    $sqlUscita = "SELECT COUNT(id) FROM eventi WHERE eventoDateTime LIKE '" . $date . "%' AND eventoTipo = 'O'";
    $resultUscita = mysqli_query($conn, $sqlUscita);
    
    $row = mysqli_fetch_assoc($resultUscita);
    $uscita[$date] = $row["COUNT(id)"];
    
    $sqlEntrata = "SELECT COUNT(id) FROM eventi WHERE eventoDateTime LIKE '" . $date . "%' AND eventoTipo = 'I'";
    $resultEntrata = mysqli_query($conn, $sqlEntrata);
        
    $row = mysqli_fetch_assoc($resultEntrata);
    $entrata[$date] = $row["COUNT(id)"];
  }
  
  $arrUscita = "";
  for($x = 0; $x < 7; $x++){
    $arrUscita = $arrUscita . array_values($uscita)[$x];
  }
  $arrUscita = strrev($arrUscita);

  $arrEntrata = "";
  for($x = 0; $x < 7; $x++){
    $arrEntrata = $arrEntrata . array_values($entrata)[$x];
  }
  $arrEntrata = strrev($arrEntrata);

  //3 grafico
  for($x = 0; $x < 6; $x++) {
    $hour = date('H',strtotime("-" .$x . " hour"));
    $date = date('Y-m-d');
    $oggi = date('Y-m-d');
    // SELECT * FROM eventi WHERE HOUR(eventoDateTime) = "10" AND DATE(eventoDateTime) = "2023-06-05" AND eventoTipo = 'I'

    $entrateOgniOra = "SELECT COUNT(*) FROM eventi WHERE HOUR(eventoDateTime) > $hour AND DATE(eventoDateTime) = $oggi AND eventoTipo = 'I'";
    $resultEntrateOgniOra = $conn->query($entrateOgniOra);
    while($row = $resultEntrateOgniOra->fetch_assoc()) {
      $api_in_ogni_ora[] = $row['COUNT(*)'];
    }

    $usciteOgniOra = "SELECT COUNT(*) FROM eventi WHERE HOUR(eventoDateTime) > $hour AND DATE(eventoDateTime) = $oggi AND eventoTipo = 'O'";
    $resultUsciteOgniOra = $conn->query($usciteOgniOra);
    while($row = $resultUsciteOgniOra->fetch_assoc()) {
      $api_out_ogni_ora[] = $row['COUNT(*)'];
    }
  }
  $output = [
    "api_in" => $apiI,
    "api_out" => $apiO,
    "api_in_giornaliere" => $arrEntrata,
    "api_out_giornaliere" => $arrUscita,
    "api_in_ogni_ora" => $api_in_ogni_ora,
    "api_out_ogni_ora" => $api_out_ogni_ora
  ];

  // $apiInEntrata = str_split($output["api_out_giornaliere"]);
  // print_r($apiInEntrata); 

  die(json_encode($output, JSON_PRETTY_PRINT));
  
}

require_once './base.php';
?>

<head>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body>
  <main>
    <h1 class="text-2xl my-3 font-bold text-center text-amber-400 sm:text-3xl sm:mx-auto">Grafici</h1>
    <!-- division -->
    <div class="grid grid-cols-1 grid-api-2 gap-2 text-center min-h-screen h-full mt-2 sm:grid-cols-2">
      <div id="first" class="border-2 border-neutral-300 shadow-2xl bg-white rounded-lg"></div>
      <div id="second" class="border-2 border-neutral-300 shadow-2xl bg-white rounded-lg"></div>
      <div id="third" class="border-2 border-neutral-300 shadow-2xl bg-white rounded-lg"></div>
      <!-- TABLE -->
      <div class="border-2 border-neutral-300 pt-3 shadow-2xl bg-white rounded-lg">
        <section class="container px-4 mx-auto">
        <div class="flex flex-col">
              <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                  <div>
                    <?php 

                      $tabella = "SELECT * FROM voli WHERE durataSec IS NOT NULL GROUP BY tag ORDER BY durataSec DESC LIMIT 20";
                      $result = mysqli_query($conn, $tabella);
                                  
                      if (mysqli_num_rows($result) > 0) {
                          echo "<table class=\"min-w-full text-center text-sm font-light overflow-y-scroll\">
                          <thead
                        class=\"border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600\">
                        <tr>
                          <th scope=\"col\" class=\"px-6 py-4\">Tag</th>
                          <th scope=\"col\" class=\"px-6 py-4\">Entrata nell'arnea</th>
                          <th scope=\"col\" class=\"px-6 py-4\">Uscita dall'arnea</th>
                          <th scope=\"col\" class=\"px-6 py-4\">Durata volo (\")</th>
                        </tr>
                      </thead>
                      <tbody>";
                                          
                          while($row = mysqli_fetch_assoc($result)) {

                              // if($row['durataSec']!=0) {
                              //   $durata = $row['durataSec'];
                              // }
                              // else continue;
                              echo "<tr>";
                              echo "<td>" . $row['tag'] . "</td>";
                              echo "<td>" . $row['eventoIn'] . "</td>";
                              echo "<td>" . $row['eventoOut'] . "</td>";
                              // echo "<td>" . $durata . " s</td>";
                              echo "<td>" . $row['durataSec'] . " s</td>";
                              echo "</tr>";
                          }
                          echo "</tbody>";
                          echo "</table>";
                                  
                          }
                          else
                              echo "0 results";
                      ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
      </div>
    <!--<div class="space-x-5 mt-5 flex">
      <template x-data x-for="i in 3">
        <div class="p-5 bg-neutral-100 flex-1 border border-neutral-200 rounded-lg">
          <h4 class="text-lg text-neutral-400">Lorem Ipsum</h4>
          <h1 class="text-3xl font-bold">10</h1>
        </div>
      </template>
    </div>-->
  <?php

  //grafico a torta
    // $sql =  "SELECT COUNT(id) FROM eventi WHERE eventoTipo = 'O' LIMIT 1";
    
    // $result = mysqli_query($conn, $sql);

    // $entrate = mysqli_fetch_assoc($result);
    
    // $sql =  "SELECT COUNT(id) FROM eventi WHERE eventoTipo = 'O' LIMIT 1";
    
    // $result = mysqli_query($conn, $sql);
    // $uscite = mysqli_fetch_assoc($result);

    // $dato1 = str_replace('"', ' ', array_values($entrate)[0]);
    // $dato2 = str_replace('"', ' ', array_values($uscite)[0]);

    // $data = [$dato1, $dato2]; ?>

    <script>

      const d = new Date();

      var optionsIsto = {
          series: [{
          name: 'In',
          data: [44, 55, 41, 67, 22, 43]
        }, {
          name: 'Out',
          data: [13, 23, 20, 8, 13, 27]
        }],
          chart: {
          type: 'bar',
          stacked: true,
          toolbar: {
            show: true
          },
          zoom: {
            enabled: true
          },
        },
        title : {
          text: 'In/Out ogni ora'
        },
        responsive: [{
          breakpoint: 480,
          options: {
            legend: {
              position: 'bottom',
              offsetX: -10,
              offsetY: 0
            }
          }
        }],
        plotOptions: {
          bar: {
            horizontal: false,
            borderRadius: 10,
            borderRadiusApplication: 'end', // 'around', 'end'
            borderRadiusWhenStacked: 'last', // 'all', 'last'
            dataLabels: {
              total: {
                enabled: true,
                style: {
                  fontSize: '13px',
                  fontWeight: 900
                }
              }
            }
          },
        },
        xaxis: {
          type: 'hours',
          categories: [(d.getHours())-5,(d.getHours())-4,(d.getHours())-3,(d.getHours())-2,
          (d.getHours()-1),(d.getHours())],
        },
        legend: {
          position: 'right',
          offsetY: 40
        },
        fill: {
          opacity: 1
        }
        };

      var isto = new ApexCharts(document.getElementById('third'), optionsIsto);
      isto.render();
    </script>
  </main>
</body>

<script>
  
const day = 24*60*1000*60;

var optionsArea = {
  series: [],
  chart:{
    height: 500,
    type: 'area'
  },
  title:{
    text: 'Api in entrata/uscita per giorno', 
  }, 
  plotOptions: {
    pie: {
      customScale: 1 
    }
},
xaxis: {
    type: 'datetime',
    categories: [Date.now()-day*6, Date.now()-day*5, Date.now()-day*4, Date.now()-day*3, Date.now()-day*2, Date.now()-day*1, Date.now()],
  },
};

  var area = new ApexCharts(document.getElementById('second'), optionsArea);
  area.render();

  
  var optionsPie = {
        chart: {
          type: 'pie',
          options: {
          chart: {
          id: "chart-id"
        }
      }
        },
        title : {
          text: 'Api all\'interno/esterno',
        },
        plotOptions: {
          pie: {
            customScale: 1 
          }
        },
        series: [],
        labels: ['Api all\'interno', 'Api all\'esterno'],
      }

      // series: <?php //echo str_replace('"', ' ', json_encode($data)) ?>,
      var pie = new ApexCharts(document.getElementById('first'), optionsPie);
      pie.render();

  const intervalID = setInterval(logJSONData, 1000);

  async function logJSONData() {
    const response = await fetch('<?php echo $_SERVER['PHP_SELF'] . "?api" ?>');
    const jsonData = await response.json();
    console.log(jsonData);

    area.updateSeries([
      {
        data : jsonData.api_in_giornaliere.split('')
      },
      {
        data: jsonData.api_out_giornaliere.split('')
      }
    ])

    //ERRORE LAMPEGGIA
    
    var newPieSeries = [parseInt(jsonData.api_in), parseInt(jsonData.api_out)];
    pie.updateSeries(newPieSeries);



    // console.log(newData);
    // pie.updateSeries([
    //   {
    //     name: "Api all'interno",
    //     data: jsonData.api_in
    //   },
    //   {
    //     name: "Api all'esterno",
    //     data: jsonData.api_out
    //   }
    // ])
  }


</script>

