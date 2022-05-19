<template>
  <main>
    <div class="mt-5 sm:flex flex-col justify-center items-center text-center flex-grow mx-auto font-serif">  
      <p class="text-center text-bee font-semibold tracking-wide uppercase text-3xl font-title my-3">Chi siamo?</p>
      <div class="mx-5 border border-yellow-400 border-4 border-double">
        <img src="../assets/images/fotogruppo.png" class="h-max w-max" >
      </div>
      <div class="mt-10 mb-5 p-5 md:container border-1 border-black rounded-lg dark:border-white">
        <p class="text-center text-gray-700  dark:text-white">
          Vi state chiedendo chi siamo, <b>bene</b>! Noi siamo una classe quarta dell'istituto tecnico 
          Guglielmo Marconi, di Staranzano. Ci è stato affidato il compito di gestire
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, autem sequi sint vitae obcaecati quia harum facere repellat quaerat, molestias accusamus minima. Similique modi minima dolorum mollitia, necessitatibus cupiditate doloribus.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime necessitatibus, vel voluptas tempore magni id blanditiis. Cum ipsum, error saepe harum iusto, est autem repudiandae dolor possimus voluptatum suscipit rem!
          </p>
      </div>
     <!--   <div class = "flex flex-row mx-auto space-x-6 flip-box-back">
          <h2>Prova</h2>
          <p>questa è una prova, minchia</p>
          <div><img class="rounded-lg" src="../assets/images/immagine-about-prova.jpeg" ></div>
          <div><img class="rounded-lg" src="../assets/images/immagine-about-prova.jpeg" ></div>
          <div><img class="rounded-lg" src="../assets/images/immagine-about-prova.jpeg" ></div>
      </div>
        <div class = "flex flex-row mx-auto space-x-6">
          <div><img class="rounded-lg" src="../assets/images/immagine-about-prova.jpeg" ></div>
          <div><img class="rounded-lg" src="../assets/images/immagine-about-prova.jpeg" ></div>
          <div><img class="rounded-lg" src="../assets/images/immagine-about-prova.jpeg" ></div>
        </div>
    </div> -->
  </div>
    <div class="bg-trasparent">
      <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <p class="text-center text-bee font-semibold tracking-wide uppercase text-3xl font-title">Team</p>
        <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
          <div v-for="product in products" :key="product.id" class="group relative">
            <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-80 lg:h-80 lg:aspect-none">
              <img :src="product.imageSrc" class="w-full h-full object-center object-cover lg:w-full lg:h-full" />
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                    <span aria-hidden="true" class="absolute inset-0" />
                    {{ product.name }}
                </h3>
                <p class="mt-1 text-sm text-gray-500">{{ product.color }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mb-5"> 
      <div class="container">
        <p class="text-center text-bee font-semibold tracking-wide uppercase text-3xl font-title">Dove siamo?</p>
        <p class="mt-5 mx-10 text-lg text-center text-gray-500 dark:text-true-gray-400">La nostra arnia di sperimentazione si trova nell' <a class="underline hover:no-underline text-black" href="https://bem.goiss.edu.it/" target="_blank">I.S.I.S. BEM</a> (sede Staranzano). Questa è posta nel giardino del retro della scuola. Qua sotto si può trovare una mappa esplorabile posta all'entrata principale.</p>
        <div class="videoWrapper">
          <iframe class="mt-5 p-0.5 bg-bee w-full h-full" src="https://www.google.com/maps/embed?pb=!4v1649334139755!6m8!1m7!1sUw8yM8AmJdGep2ws7w__Tw!2m2!1d45.80424854558367!2d13.51056052364267!3f221.22875545248564!4f-10.714724616806095!5f1.2236759176200285" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <p class="text-center text-bee font-semibold tracking-wide uppercase text-3xl font-title mt-10">Arnia Didattica</p>
        <p class="mt-5 mx-10 text-lg text-center text-gray-500 dark:text-true-gray-400">Ecco alcune immagini della nostra arnia didattica e api che ospita</p>        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
          <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 gap-x-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
            <a v-for="index in arnia" :key="index.id" class="group">
              <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 border border-yellow-300 border-2 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                <img :src="index.imageSrc" :alt="index.imageAlt" class="w-full h-full object-center object-cover group-hover:opacity-75" />
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="container ">
        <p class="text-center text-bee font-semibold tracking-wide uppercase text-3xl font-title">Come abbiamo lavorato?</p>
        <p class="mt-10 mb-10 mx-auto text-lg text-center text-gray-500 dark:text-true-gray-400">Inizialmente abbiamo pensato al come far entrare le api dentro l'arnia in modo che vengano controllate dai due sensori e dai relativi RFID. Dopo questo ragionamento abbiamo creato un entrata peronalizzata:</p>
        <div class="mb-10 border rounded-lg border-yellow-500 border-opacity-75 border-2 p-1">
          <img class="rounded-lg" src="/arnia/entrata.JPG">
        </div>
        <p class="mb-10 mx-auto text-lg text-center text-gray-500 dark:text-true-gray-400">All'interno di questa struttura di legno costruita interamente a mano, sono stati inseriti i due sensori (negli appositi spazi posti lateralmente visualizzabili nella figura sopra) in modo da rilevare l'eventuale passaggio dell'ape e stabilirne la direzione</p>
        <div class="mb-10 rounded-lg">
          <img class="rounded-lg mx-auto border border-yellow-500 border-opacity-75 border-2 p-1" src="../assets/images/sensore.jpg">
        </div>
        <p class="mb-10 mx-auto text-lg text-center text-gray-500 dark:text-true-gray-400">Dopo aver alloggiato i sensori all'entrata dell'alveare, ci siamo posti il problema dei sensori RFID che verranno rilevati. Questi infatti sono talmente tanto piccoli da essere difficili da vedere ad occhio nudo. Ogni sensore corrisponde ad un codice univoco che lo identifica. Tramite il suo ID riusciamo a verificare quale ape è entrata/uscita dall'arnia. <br>Qui sotto si può notare il confronto fra la punta di una penna a sfera ed ll sensore RFID utilizzato posto sulle api:</p>
        <div class="mb-10 rounded-lg">
          <img class="rounded-lg mx-auto border border-yellow-500 border-opacity-75 border-2 p-1" src="../assets/images/sensore-ape.jpg">
        </div>
         <p class="mb-10 mx-auto text-lg text-center text-gray-500 dark:text-true-gray-400">Per questo progetto ci siamo anche dovuti sporcare le mani per far sì che arrivasse l'energia ai sensori ed a tutto il circuito in generale. Per fare ciò ci siamo armati di pale e strumentazioni varie da giardinaggio e ci siamo rimboccati le maniche. Per far si che i collegamenti fossero al sicuro da agenti esterni abbiamo fatto passare, tramite una canaletta, i cavi sotto terra. Qui sotto è presente un time-lapse che ritrae noi mentre lavoriamo per realizzare il tunnel sotteraneo per i collegamenti:</p>
        <video controls loop class="border border-yellow-500 border-2 border-double p-1">
          <source src="../assets/video/timelapse.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    </div>
  </main>
</template>

<style>
.videoWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
}
.videoWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

.carousel-container {
  width: 1280px;
  margin: 50px auto;
  min-height: 200px;
  position: relative;
}
@media screen and (max-width: 768px) {
  .carousel-container {
    width: 80%;
  }
}
@media screen and (max-width: 1024px) {
  .carousel-container {
    width: 85%;
  }
}
.carousel-container .carousel-inner {
  overflow: hidden;
}
.carousel-container .track {
  display: inline-flex;
  transition: transform 0.5s;
}
.carousel-container .card-container {
  width: 259px;
  flex-shrink: 0;
  height: 250px;
  padding-right: 15px;
  box-sizing: border-box;
}
.carousel-container .card-container .card {
  width: 100%;
  height: 100%;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 10px;
  display: flex;
  flex-direction: column;
}
.nav button {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  border: 1px solid #aaa;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
}
.nav .prev {
  left: -30px;
  display: none;
}
.nav .prev.show {
  display: block;
}
.nav .next {
  right: -30px;
}
.nav .next.hide {
  display: none;
}

.card > * {
  flex: 1;
}
.card .img {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 30px;
}
.card .info {
  flex-basis: 40px;
  background: #333;
  color: #fff;
  flex-grow: 0;
  padding: 10px;
  box-sizing: border-box;
}
</style>

<script setup>
const products = [
  {
    id: 1,
    name: 'Antonio Iorio',
    imageSrc: 'people/io.JPG',
    color: 'Web developer',
  },
  {
    id: 2,
    name: 'Federico Scapati',
    imageSrc: 'people/scap.JPG',
    color: 'Un po de que, un po de quello là',
  },
  {
    id: 3,
    name: 'Alberto Pocar',
    imageSrc: 'people/beto.JPG',
    color: 'Team Creativo',
  },
  {
    id: 4,
    name: 'Alessio Sanda',
    imageSrc: 'people/ale.JPG',
    color: 'Team Creativo',
  },
  {
    id: 1,
    name: 'Cristian Radev',
    imageSrc: 'people/cristian.JPG',
    color: 'Team Sviluppo',
  },
  {
    id: 2,
    name: 'Antonio Iorio',
    imageSrc: 'people/io.JPG',
    color: 'Web developer',
  },
  {
    id: 3,
    name: 'Antonio Iorio',
    imageSrc: 'immagine-about-prova.jpeg',
    color: 'Web developer',
  },
  {
    id: 4,
    name: 'Antonio Iorio',
    imageSrc: 'immagine-about-prova.jpeg',
    color: 'Web developer',
  },
];

const arnia = [
  {
    imageSrc: 'arnia/entrata.JPG',
  },
  {
    imageSrc: 'arnia/arnea/arnea1.JPG',
  },
  {
    imageSrc: 'arnia/arnea/arnea2.JPG',
  },
  {
    imageSrc: 'arnia/arnea/a3.JPG',
  },
  {
    imageSrc: 'arnia/arnea/a4.JPG',
  },
  {
    imageSrc: 'arnia/arnea/a5.JPG',
  },
  {
    imageSrc: 'arnia/arnea/a6.JPG',
  },
  {
    imageSrc: 'arnia/arnea/a7.JPG',
  },
  {
    imageSrc: 'arnia/fumo.JPG',
  },
  {
    imageSrc: 'arnia/api/api2.JPG',
  },
  {
    imageSrc: 'arnia/api/api3.JPG',
  },
  {
    imageSrc: 'arnia/api/api4.JPG',
  },
  {
    imageSrc: 'arnia/api/api5.JPG',
  },
  {
    imageSrc: 'arnia/api/api6.JPG',
  },
  {
    imageSrc: 'arnia/api/api7.JPG',
  },
  {
    imageSrc: 'arnia/api/api8.JPG',
  },
  {
    imageSrc: 'arnia/api/ape1.jpeg',
  }
  
];

</script>

