<script setup>
import { onMounted, ref, watch } from 'vue'
import { useDark, useToggle } from '@vueuse/core'
import { Switch } from '@headlessui/vue' 

const links = [
  {
    name: 'Grafici',
    url: '/graph'
  },
  {
    name: 'Chi siamo',
    url: '/about'
  },
  {
    name: 'FAQ',
    url: '/faq'
  }
]

const mobileMenu = ref(false)
</script>

<template>
  <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
      <a href="/" class="flex items-center">
          <img src="../assets/images/Logo-OBT.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
          <!-- <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"></span> -->
      </a>
      <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 text-lg font-medium">
          <!-- <li>
            <a href="#" class="block py-2 pr-4 pl-3 text-white bg-yellow-300 rounded md:bg-transparent md:text-yellow-300 md:p-0 dark:text-white" aria-current="page">Home</a>
          </li> -->
          <li v-for="link in links">
            <router-link :to="link.url" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-yellow-300 md:p-0">{{ link.name }}</router-link>
          </li>
        </ul>
      </div>
    </div>
</nav>
  <!-- <div id="app" class="max-w-7xl mx-auto">
    <div class="relative transition-colors duration-100 z-10 bg-white dark:bg-true-gray-900">
      <div>
        <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
          <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
            <div class="flex items-center flex-grow flex-shrink-0">
              <div class="flex items-center justify-between w-full md:w-auto">
                <router-link to="/">
                  <span class="sr-only">Workflow</span>
                  <img class="h-16 mb-5 w-auto sm:h-12" src="../assets/images/Logo BEM - Ape.svg">
                </router-link>
                <div class="-mr-2 flex items-center md:hidden">
                  <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-500 dark:bg-true-gray-900" aria-expanded="false" @click="mobileMenu = true">
                    <span class="sr-only">Open main menu</span> -->
                    <!-- Heroicon name: outline/menu -->
                    <!-- <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
            <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
              <router-link v-for="link in links" :key="link.name" :to="link.url" class="font-medium text-gray-500 hover:text-gray-900 dark:text-white dark:hover:text-true-gray-500">
                {{ link.name }}
              </router-link> -->

              <!-- <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Chi siamo</a>

              <a href="#" class="font-medium text-gray-500 hover:text-gray-900">FAQ</a> -->

              <!-- <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Company</a> -->

              <!-- <a href="#" class="font-medium text-yellow-600 hover:text-yellow-500">Log in</a> -->
            <!-- </div>
            <Switch
              @click="toggleDark()"
              :class="isDark ? 'bg-yellow-500' : 'bg-black'"
              class="relative focus:outline-none hidden md:inline-flex items-center h-6 rounded-full w-11"
              >
              <span class="sr-only">Dark mode</span>
              <span
                :class="isDark ? 'translate-x-6' : 'translate-x-1'"
                class="transition duration-200 ease-in-out inline-block w-4 h-4 transform bg-white rounded-full"
              />
            </Switch>
          </nav>
        </div>

        <transition
          appear
          enter-active-class="duration-150 ease-out"
          enter-from-class="opacity-0 scale-95"
          enter-to-class="opacity-100 scale-100"
          leave-active-class="duration-100 ease-in"
          leave-from-class="opacity-100 scale-100"
          leave-to-class="opacity-0 scale-95"
        >
          <div v-if="mobileMenu" v-click-away="onMobileMenuClickAway" class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
            <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden dark:bg-true-gray-900">
              <div class="px-5 pt-4 flex items-center justify-between">
                <div>
                  <img class="h-14 w-auto" src="../assets/images/Logo BEM - Ape.svg">
                </div>
                <div class="-mr-2">
                  <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-500 dark:bg-true-gray-900" @click="mobileMenu = false">
                    <span class="sr-only">Close main menu</span> -->
                    <!-- Heroicon name: outline/x -->
                    <!-- <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="px-2 pt-2 pb-3 space-y-1 dark:bg-true-gray-900">
                <a v-for="link in links" :key="link.name" href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 dark:bg-true-gray-900 dark:text-white dark:hover:text-true-gray-500">
                  {{ link.name }}
                </a> -->

                <!-- <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Features</a>

                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Marketplace</a>

                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Company</a> -->
              <!-- </div> -->
              <!-- <a href="#" class="block w-full px-5 py-3 text-center font-medium text-yellow-600 bg-gray-50 hover:bg-gray-100">
                Log in
              </a> -->
              <!-- <Switch
                v-model="enabled"
                :class="enabled ? 'bg-yellow-500' : 'bg-black'"
                class="relative ml-5 mb-4 inline-flex items-center h-6 rounded-full w-11"
                >
                <span class="sr-only">Dark mode</span>
                <span
                  :class="enabled ? 'translate-x-6' : 'translate-x-1'"
                  class="transition duration-200 ease-in-out inline-block w-4 h-4 transform bg-white rounded-full"
                />
              </Switch>
            </div>
          </div>
        </transition>
      </div>
    </div>
  </div> -->
  <!-- <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80" alt="">
  </div> -->
</template>


