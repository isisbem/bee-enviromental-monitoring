<template>
  <div class="mt-5 mx-auto max-w-7xl px-4 sm:mt-3 sm:px-6 md:mt-4 lg:mt-5 lg:px-8 xl:mt-10">
    <div class="sm:flex flex-col justify-center items-center text-center">
      <!-- <img src="../assets/images/Logo BEM - Ape.svg" class="h-30 w-30 mx-auto"> -->
      <img src="../assets/images/Logo BEM - Scritta.svg" class="h-50 w-80 mx-auto">
      <!-- <h1 class="text-4xl tracking-tight font-extrabold flex justify-center items-center sm:text-5xl md:text-6xl">
        <span class="text-yellow-500">Open</span>
        <span class="text-black transition-colors duration-700 dark:text-white">Bee</span>
        <span class="text-yellow-500">Tracker</span>
      </h1> -->
      <p class="mt-5 text-base text-gray-500 sm:mt-8 sm:text-lg sm:max-w-xl sm:mx-auto md:text-xl">
        Il progetto OpenBeeTracker permette di monitorare i movimenti dell api, come entrata o uscita dall'alveare, tramite dei sensori di dimensione molto piccola posizionati su di esse
      </p>
      <div class="mt-8 sm:flex sm:justify-center lg:justify-start w-full max-w-lg space-x-4">
          <!-- <a href="./info" class="cursor-help w-full transition duration-100 flex items-center justify-center px-8 py-3 border border-transparent rounded-md text-gray-100 bg-black hover:bg-yellow-500 md:py-4 md:text-lg md:px-10 dark:bg-yellow-500 dark:text-black dark:hover:bg-black dark:hover:text-white">
            Informazioni dettagliate
          </a> -->
        <router-link to="/info" class="w-full transition-colors focus:outline-none text-white bg-bee hover:bg-yellow-400 focus:ring-4 focus:ring-yellow-200 font-medium rounded-lg text-lg px-6 py-4 mr-2 mb-2">Informazioni dettagliate</router-link>
        <router-link to="/grafici" class="w-full transition-colors focus:outline-none text-white bg-bee hover:bg-yellow-400 focus:ring-4 focus:ring-yellow-200 font-medium rounded-lg text-lg px-6 py-4 mr-2 mb-2">Graficazione dati</router-link>
      </div>
    </div>
    <div class="h-px bg-gray-200 w-full mt-10"></div>
  </div>
</template>
