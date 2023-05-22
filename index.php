<?php
require_once 'utils/base.php';
?>

<body>
  <main class="bg-neutral-50 divide-y divide-neutral-200 pb-20">
    <section class="flex grow h-full items-center justify-between p-20">
      <div class="max-w-lg space-y-4 select-none z-10">
          <h1 class="font-extrabold text-amber-400 text-5xl drop-shadow-sm">Bee Enviromental Monitoring</h1>
        <h2 class="font-bold text-3xl">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>

        <button class="text-xl !mt-8 font-medium flex items-center justify-center space-x-3 bg-amber-400 hover:bg-amber-500 transition-all duration-100 px-5 py-2 rounded-full">
          <span>Scopri i grafici</span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 011.06 0l7.5 7.5a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 11-1.06-1.06l6.22-6.22H3a.75.75 0 010-1.5h16.19l-6.22-6.22a.75.75 0 010-1.06z" clip-rule="evenodd" />
          </svg>
        </button>
      </div>
      <div>
        <img src="./static/images/logo-ape.svg" alt="splash" class="drop-shadow-xl h-auto w-[25rem]">
      </div>
    </section>

    <!-- Contatti -->
    <section class="bg-neutral-50 h-full flex flex-grow">
      <div class="mx-auto w-full">
        <div class="text-center mt-14">
          <h1 class="font-bold text-amber-400 text-6xl uppercase select-none tracking-wider">Contattaci</h1>
          <p class="mt-2 text-neutral-500 font-medium text-xl">Hai qualche domanda o vuoi saperne di più?</p>
        </div>

        <div class="px-40">
          <div class="grid grid-cols-1 gap-20 mt-16 md:grid-cols-2 lg:grid-cols-3 bg-white border border-gray-200 p-10 rounded-2xl px-20 min-w-full">
            <div class="flex flex-col items-center justify-center text-center">
              <span class="p-4 text-amber-500 rounded-full bg-amber-100/80">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-7 w-7" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                </svg>
              </span>

              <h2 class="mt-4 text-xl font-medium text-neutral-800">Instagram</h2>
              <!-- <a class="mt-2 text-amber-500" href="https://instagram.com/beeenvironmentalmonitoring" target="_blank">@beeenvironmentalmonitoring</a> -->
            </div>

            <div class="flex flex-col items-center justify-center text-center">
              <span class="p-4 text-amber-500 rounded-full bg-amber-100/80">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-7 w-7" viewBox="0 0 16 16">
                  <path d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z"/>
                </svg>
              </span>
              
              <h2 class="mt-4 text-xl font-medium text-neutral-800">Email</h2>
              <!-- <a class="mt-2 text-amber-500" href="mailto:openbeetracker@gmail.com">openbeetracker@gmail.com</a> -->
            </div>

            <div class="flex flex-col items-center justify-center text-center">
              <span class="p-4 text-amber-500 rounded-full bg-amber-100/80">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-7 w-7" viewBox="0 0 16 16">
                  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                </svg>
              </span>
              
              <h2 class="mt-4 text-xl font-medium text-neutral-800">Youtube</h2>
              <!-- <a class="mt-2 text-amber-500" href="https://www.youtube.com/channel/UCApS3abjBtJ1s1E4VZDBLag" target="_blank">BeeEnvironmentalMonitoring</a> -->
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
