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
    <div class="bg-white shadow overflow-hidden transition-colors duration-100 sm:rounded-lg dark:bg-true-gray-900">
    <div class="sm:mx-auto px-4 py-5 sm:px-6">
      <h3 class="text-2xl leading-6 font-medium text-gray-900 dark:text-yellow-500">
        Dettagli Applicazione
      </h3>
      <p class="mt-1 max-w-2xl text-sm text-gray-500 dark:text-gray-200">
        Dettagli principali dell'applicativo
      </p>
    </div>
    <div class="border-t border-gray-300">
      <dl>
        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-300 dark:bg-true-gray-900">
          <dt class="text-lg font-medium text-yellow-500 dark:text-gray-200">
            Nome completo
          </dt>
          <dd class="mt-1 font-bold text-md text-gray-900 dark:text-gray-300 sm:mt-0 sm:col-span-2">
            Open Bee tracker
          </dd>
        </div>
        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-300 dark:bg-true-gray-900">
          <dt class="text-lg font-medium text-yellow-500 dark:text-gray-200">
            Applicazione creata da
          </dt>
          <dd class="mt-1 font-semibold text-md text-gray-900 dark:text-gray-300 sm:mt-0 sm:col-span-2">
            Antonio Iorio, Miloš Kovaćevič, Cristian Radev, Luca Gamberini e 4 IA anno 21/22
          </dd>
        </div>
        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-300 dark:bg-true-gray-900">
          <dt class="text-lg font-medium text-yellow-500 dark:text-gray-200">
            Indirizzo Email
          </dt>
          <a href="mailto:open.beetracker@gmail.com">
            <dd class="mt-1 font-bold text-md underline text-gray-900 dark:text-gray-300 sm:mt-0 sm:col-span-2">
              open.beetracker@gmail.com
            </dd>
          </a>
        </div>
        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-300 dark:bg-true-gray-900">
          <dt class="text-lg font-medium text-yellow-500 dark:text-gray-200">
            Informazioni generali
          </dt>
          <dd class="mt-1 text-md text-gray-900 dark:text-gray-300 sm:mt-0 sm:col-span-2">
            Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.
          </dd>
        </div>
        <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-300 dark:bg-true-gray-900">
          <dt class="text-lg font-medium text-yellow-500 dark:text-gray-200">
            Social
          </dt>
          <dd class="my-1 text-md text-gray-900 dark:text-gray-300 sm:mt-0 sm:col-span-2">
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
                  <span v-if="hover"><img class="ml-10 h-8 w-8" src="../assets/images/Logo Insta Custom 1.svg"></span>
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
                  <span v-if="hover1"><img class="ml-10 h-8 w-8" src="../assets/images/Logo YT Custom 2.svg"></span>
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
                  <span v-if="hover2"><img class="ml-10 h-8 w-8" src="../assets/images/"></span>
                </div>
              </div>
            </div>
            <div>
          <!--<a class="h-15 justify-center content-center max-w-sm mx-auto" target="_blank">
                <button class="rounded-full p-3 border-2 mx-auto">
                  <img class="h-10" src="../assets/images/Logo Insta Custom 1.svg">
                </button>
              </a>-->
            </div>
          </dd>  
        </div>
      </dl>
    </div>
  </div>
</template>
