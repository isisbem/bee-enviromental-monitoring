<template>
  <div class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
    <div class="sm:flex flex-col justify-center items-center text-center">
      <h1 class="text-4xl tracking-tight font-extrabold flex justify-center items-center sm:text-5xl md:text-6xl">
        <span class="text-yellow-500">Open</span>
        <span class="text-black transition-colors duration-500 dark:text-white">Bee</span>
        <span class="text-yellow-500">Tracker</span>
      </h1>
      <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0 dark:text-gray-100">
        Il progetto OpenBeeTracker permette di monitorare i movimenti dell api, come entrata o uscita dall'alveare, tramite dei sensori di dimensione molto piccola posizionati su di esse
      </p>
      <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
        <div class="rounded-md shadow">
          <a href="#" class="w-full transition duration-100 flex items-center justify-center px-8 py-3 border border-transparent rounded-md text-gray-100 bg-black hover:bg-yellow-500 md:py-4 md:text-lg md:px-10 dark:bg-yellow-500 dark:text-black dark:hover:bg-black dark:hover:text-white">
            Informazioni dettagliate
          </a>
        </div>
        <div class="mt-3 sm:mt-0 sm:ml-3">
          <a href="./graph" class="w-full transition duration-100 flex items-center justify-center px-8 py-3 border border-transparent rounded-md text-gray-100 bg-black hover:bg-yellow-500 md:py-4 md:text-lg md:px-10 dark:bg-yellow-500 dark:text-black dark:hover:bg-black dark:hover:text-white">
            Graficazione dati
          </a>
        </div>
      </div>
    </div>
  </div>
</template>
