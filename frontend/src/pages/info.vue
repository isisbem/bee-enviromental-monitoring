<script>
  export default {
  data() {
    return {
      hover: false,
      hover1: false,
      hover2: false,
    };
  }
}
</script>

<template>
    <div class="bg-white shadow overflow-hidden transition-colors duration-100 sm:rounded-lg">
    <div class="sm:mx-auto px-4 py-5 sm:px-6">
      <h3 class="text-2xl leading-6 font-medium text-gray-900 dark:text-yellow-500">
        Dettagli Applicazione
      </h3>
      <p class="mt-1 max-w-2xl text-sm text-gray-500">
        Dettagli principali dell'applicativo
      </p>
    </div>
    <div class="border-t border-gray-300">
      <dl>
        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-300">
          <dt class="text-lg font-medium text-yellow-500">
            Nome completo
          </dt>
          <dd class="mt-1 font-bold text-md text-gray-900 dark:text-gray-300 sm:mt-0 sm:col-span-2">
            Open Bee tracker
          </dd>
        </div>
        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-300">
          <dt class="text-lg font-medium text-yellow-500">
            Applicazione creata da
          </dt>
          <dd class="mt-1 font-semibold text-md text-gray-900 dark:text-gray-300 sm:mt-0 sm:col-span-2">
            Antonio Iorio, Miloš Kovaćevič, Cristian Radev, Luca Gamberini e 4 IA anno 21/22
          </dd>
        </div>
        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-300">
          <dt class="text-lg font-medium text-yellow-500">
            Indirizzo Email
          </dt>
          <a href="mailto:open.beetracker@gmail.com">
            <dd class="mt-1 font-bold text-md underline text-gray-900 dark:text-gray-300 sm:mt-0 sm:col-span-2">
              open.beetracker@gmail.com
            </dd>
          </a>
        </div>
        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-300">
          <dt class="text-lg font-medium text-yellow-500">
            Informazioni generali
          </dt>
          <dd class="mt-1 text-md text-gray-900 dark:text-gray-300 sm:mt-0 sm:col-span-2">
            Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.
          </dd>
        </div>
        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-lg font-medium text-yellow-500">
            Social
          </dt>
          <dd class="my-1 text-md text-gray-900 sm:mt-0 sm:col-span-2">
            Abbiamo messo a disposizione vari social utilizzabili per contattarci, comunicarci suggerimenti riguardo migliorie oppure semplicemente rimanere aggiornati sul futuro del progetto. I social attivi sono i seguenti:<br>
            <div class="max-w-30">
              <div class="grid grid-cols-2">
                <div class="mt-2">
                  <span
                    @mouseover="hover = true"
                    @mouseleave="hover = false"
                  >
                  <a class="underline font-semibold mb-2" href="https://www.instagram.com/openbeetracker/" target="_blank">Instagram</a>
                  </span>
                </div>
                <div>
                  <span v-if="hover"><img class="ml-10 h-8 w-8" src="../assets/images/logo-insta.svg"></span>
                </div>
              </div>
              <div class="grid grid-cols-2">
                <div class="mt-2">
                  <span
                    @mouseover="hover1 = true"
                    @mouseleave="hover1 = false"
                  >
                  <a class="underline font-semibold mb-2" href="https://www.youtube.com/channel/UCApS3abjBtJ1s1E4VZDBLag" target="_blank">YouTube</a>
                  </span>
                </div>
                <div>
                  <span v-if="hover1"><img class="ml-10 h-8 w-8" src="../assets/images/logo-yt-custom-2.svg"></span>
                </div>
              </div>
              <div class="grid grid-cols-2">
                <div class="mt-2">
                  <span
                    @mouseover="hover2 = true"
                    @mouseleave="hover2 = false"
                  >
                  <a class="underline font-semibold mb-2" href="https://www.twitter.com/" target="_blank">Twitter</a>
                  </span>
                </div>
                <div>
                  <!-- <span v-if="hover2"><img class="ml-10 h-8 w-8" src="../assets/images/"></span> -->
                </div>
              </div>
            </div>
            <div>
          <!--<a class="h-15 justify-center content-center max-w-sm mx-auto" target="_blank">
                <button class="rounded-full p-3 border-2 mx-auto">
                  <img class="h-10" src="../assets/images/logo-insta.svg">
                </button>
              </a>-->
            </div>
          </dd>  
        </div>
      </dl>
    </div>
    <div class="border-t border-gray-300 mx-auto">
      <p class="text-center text-bee font-semibold tracking-wide uppercase text-3xl font-title my-10">FlowChart</p>
      <img class="mx-auto my-5" src="../assets/images/logo-main-fine.svg"> 
      <div class="text-center">
        <a href="\file\ape.fprg" download="BeeFlowChart.fprg">
          <button class="transition-colors focus:outline-none text-white bg-bee hover:bg-yellow-400 focus:ring-4 focus:ring-yellow-200 font-medium rounded-lg text-lg px-10 py-5 mr-2 mb-2 mt-5">Scarica qua il FlowChart</button>
        </a>
      </div>
    </div>
  </div>
</template>
