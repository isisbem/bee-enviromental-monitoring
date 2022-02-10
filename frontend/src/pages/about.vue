<template>
  <main >
    <div class="mt-5 sm:flex flex-col justify-center items-center text-center flex-grow mx-40 font-serif">  
      <img src="../assets/images/coso.jpeg" class="h-max w-max" >
      <div class="mt-10 mb-20 p-5 md:container border-1 border-black rounded-lg dark:border-white">
        <p class="indent-18 text-center text-gray-700  dark:text-white">
          Vi state chiedendo chi siamo, <b>bene</b>! Noi siamo una classe quarta dell'istituto tecnico 
          Guglielmo Marconi, di Staranzano. Ci è stato affidato il compito di gestire  
          </p>
      </div>
      <div class="grid gap-20 mb-10 w-40 h-40">  
        <div class="flip-box">
          <div class="flip-box-inner relative">
            <div class="flip-box-front absolute w-50 h-50">
              <img class="rounded-lg" src="../assets/images/immagine about prova.jpeg">
            </div>
            <div class="flip-box-back text-align-center">
              <h2 class="text-color-black dark:text-white">Paris</h2>
              <p class="text-color-black dark:text-white">What an amazing city</p>
            </div>
          </div>
        </div>
      </div>

     <!--   <div class = "flex flex-row space-x-6 flip-box-back">
          <h2>Prova</h2>
          <p>questa è una prova, minchia</p>
          <div><img class="rounded-lg" src="../assets/images/immagine about prova.jpeg" ></div>
          <div><img class="rounded-lg" src="../assets/images/immagine about prova.jpeg" ></div>
          <div><img class="rounded-lg" src="../assets/images/immagine about prova.jpeg" ></div>
      </div>
        <div class = "flex flex-row space-x-6">
          <div><img class="rounded-lg" src="../assets/images/immagine about prova.jpeg" ></div>
          <div><img class="rounded-lg" src="../assets/images/immagine about prova.jpeg" ></div>
          <div><img class="rounded-lg" src="../assets/images/immagine about prova.jpeg" ></div>
        </div>
    </div> -->
    </div>
  </main>
</template>


<style>

.flip-box-inner {
  transition: transform 0.5s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-back {
  transform: rotateY(180deg);
}
</style>

