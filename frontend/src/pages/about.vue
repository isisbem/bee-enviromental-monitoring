<template>
  <main>
    <div class="mt-5 sm:flex flex-col justify-center items-center text-center flex-grow mx-auto font-serif">  
      <p class="text-center text-bee font-semibold tracking-wide uppercase text-3xl font-title my-3">Chi siamo?</p>
      <div class="mx-5 border border-yellow-400 border-4 border-double">
        <img src="../assets/images/fotogruppo.png" class="h-max w-max" >
      </div>
      <div class="mt-10 mb-20 p-5 md:container border-1 border-black rounded-lg dark:border-white">
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
    <div class="bg-white">
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
    <div class="grid grid-rows-3"> 
      <div class="container">
        <p class="text-center text-bee font-semibold tracking-wide uppercase text-3xl font-title">Dove siamo?</p>
        <p class="mt-5 mx-10 text-lg text-center text-gray-500 dark:text-true-gray-400">La nostra arnea di sperimentazione si trova nell' <a class="underline hover:no-underline text-black" href="https://bem.goiss.edu.it/" target="_blank">I.S.I.S. BEM</a> (sede Staranzano). Questa è posta nel giardino del retro della scuola. Qua sotto si può trovare una mappa esplorabile posta all'entrata principale.</p>
        <iframe class="mx-auto mt-5 p-0.5 bg-bee w-full h-full" src="https://www.google.com/maps/embed?pb=!4v1649334139755!6m8!1m7!1sUw8yM8AmJdGep2ws7w__Tw!2m2!1d45.80424854558367!2d13.51056052364267!3f221.22875545248564!4f-10.714724616806095!5f1.2236759176200285" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <p class="text-center text-bee font-semibold tracking-wide uppercase text-3xl font-title mt-10">Arnia Didattica</p>
        <p class="mt-5 mx-10 text-lg text-center text-gray-500 dark:text-true-gray-400">Ecco alcune immagini all'arnia didattica</p>
      </div>
    </div>
    <!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
  
<!--<div v-for="(i) in immagini">
      <img :src="immagini[1].src" class="h-50 w-50 img-fluid" :key="i" />
    </div>-->  
  </main>
</template>

<script setup>
const products = [
  {
    id: 1,
    name: 'Antonio Iorio',
    imageSrc: '../../public/immagine-about-prova.jpeg',
    color: 'Web developer',
  },
  {
    id: 2,
    name: 'Federico Scapati',
    imageSrc: '../../public/people/scap.JPG',
    color: 'Un po de que, un po de quello là',
  },
  {
    id: 3,
    name: 'Alberto Pocar',
    imageSrc: '../../public/people/beto.JPG',
    color: 'Team Creativo',
  },
  {
    id: 4,
    name: 'Alessio Sanda',
    imageSrc: '../../public/people/ale.JPG',
    color: 'Team Creativo',
  },
  {
    id: 1,
    name: 'Cristian Radev',
    imageSrc: '../../public/people/cristian.JPG',
    color: 'Team Sviluppo',
  },
  {
    id: 2,
    name: 'Antonio Iorio',
    imageSrc: '../../public/people/io.JPG',
    color: 'Web developer',
  },
  {
    id: 3,
    name: 'Antonio Iorio',
    imageSrc: '../../public/immagine-about-prova.jpeg',
    color: 'Web developer',
  },
  {
    id: 4,
    name: 'Antonio Iorio',
    imageSrc: '../../public/immagine-about-prova.jpeg',
    color: 'Web developer',
  },
]
</script>
<script>


  const immagini = [
  {
    name: '1',
    src: '../assets/images/coso,jpeg'
  },
  {
    name: '2',
    src: ''
  },
  {
    name: '3',
    src: ''
  },
]
</script>
<style>

.flip-box-inner {
  transition: transform 0.7s;
  transform-style: preserve-3d;
}

.flip-box:active .flip-box-inner{
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-back {
  transform: rotateY(180deg);
  background-color: rgb(224, 224, 224);
}
</style>

