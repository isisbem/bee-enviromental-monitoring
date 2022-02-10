<script>

import { AcademicCapIcon, UsersIcon, UserGroupIcon } from '@heroicons/vue/outline'

const features = [
  { 
    icon:AcademicCapIcon,
    name: 'I.S.I.S. BEM, Brignoli-Einaudi-Marconi',
    description:
      'Ci tenevamo a ringraziare la scuola da cui proveniamo, l\'I.S.I.S. BEM, per averci proposto questo progetto molto innovativo servito anche come percorso di crescita personale e sviluppo di competenze',
  },
  {   
    icon: UsersIcon,
    name: 'Insegnanti',
    description:
      'Ci teniamo anche a ringraziare gli insegnanti Massimo Lapira e Sandro Pierdomenico per averci seguito e impostato in questo progetto insegnandoci a lavorare in gruppo e ad organizzare il lavoro in modo più efficente.',
  },
  {   
    icon: UserGroupIcon,
    name: '4 IA 2021/2022',
    description:
      'Ci ringraziamo anche da soli in quanto siamo soddisfatti del lavoro effettuato. Ci siamo divisi in gruppi uniformi in modo da aiutarci a vicenda. Con l\'aiuto degli insegnanti abbiamo creato tre macro aree di lavoro: Area Tecnica, Area Creativa e Area Gestione. Per maggiori informazioni vi mandiamo alla pagina \"Chi siamo?\".',
  },
  {   
    name: 'Qualcos\'altro',
    description:
      'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.'
  },
]

export default {
  setup() {
    return {
      features,
    }
  },
}
</script>

<template>
    <footer class="mt-30 w-full p-2 transition-colors duration-100 bg-true-gray-50 dark:bg-true-gray-900" >
        <div class="mt-6 mb-10 md:ml-150">
            <div class="flex flex-row space-x-10">    
                <a href="https://www.instagram.com/openbeetracker/" target="_blank">
                    <img src="../assets\images/iconmonstr-instagram-11.svg" class="h-12 w-12">
                </a>    
                <a href="https://www.youtube.com/channel/UCApS3abjBtJ1s1E4VZDBLag" target="_blank">
                    <img src="../assets\images/iconmonstr-youtube-6.svg" class="h-12 w-12">
                </a>
            </div>
        </div>
        <div classx="py-12 bg-white">
            <div class="mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h2 class="text-base text-yellow-500 font-semibold tracking-wide uppercase">Ringraziamenti</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                        Ringraziamo soprattutto i seguenti partecipanti al progetto
                    </p>
                    <p class="mt-4 max-w-2xl text-xl text-gray-500 dark:text-gray-400 lg:mx-auto">
                        Enti e persone che hanno permesso alla realizzazione del progetto
                    </p>
                </div>
                <div class="mt-10">
                    <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                        <div v-for="feature in features" :key="feature.name" class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-yellow-500 text-white">
                            <component :is="feature.icon" class="h-6 w-6" aria-hidden="true" />
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900 dark:text-white">{{ feature.name }}</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500 dark:text-true-gray-400">
                            {{ feature.description }}
                        </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </footer>
</template>
