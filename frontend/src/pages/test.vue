<script setup>
import Navbar from '../components/Navbar.vue';
import Main from '../components/Main.vue';
import { useDark, useToggle } from '@vueuse/core'

const products = [
  {
    id: 1,
    name: 'Basic Tee',
    href: '#',
    imageSrc: 'https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg',
    imageAlt: "Front of men's Basic Tee in black.",
    price: '$35',
    color: 'Black',
  }]
</script>

<script>
import { Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { ChevronDownIcon } from '@heroicons/vue/solid'

export default {
  components: {
    Menu,
    MenuButton,
    MenuItem,
    MenuItems,
    ChevronDownIcon,
  },
  data() {
    return {
      hover: false,
    };
  }
};
</script>
<template>
  <div class="relative bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto">
      <div class="relative z-10 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
        <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
          <div class="sm:text-center lg:text-left">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
              <span class="block text-yellow-500 xl:inline">Open</span>
              <span class="block xl:inline">Bee</span>
              <span class="block text-yellow-500 xl:inline">Tracker</span>
            </h1>
            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda perferendis nihil alias illum rerum deserunt optio, amet magni vel maiores porro itaque veniam, modi repellendus tenetur sunt corporis veritatis? Exercitationem!
            </p>
            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
              <div class="rounded-md shadow">
                <!--<a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                    Informazioni dettagliate
                </a>
              </div>
              <div class="mt-3 sm:mt-0 sm:ml-3">
                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                  Graficazione
                </a> -->
                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent rounded-md text-gray-100 bg-black hover:bg-yellow-500 md:py-4 md:text-lg md:px-10">
                    Informazioni dettagliate
                </a>
              </div>
              <div class="mt-3 sm:mt-0 sm:ml-3">
                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent rounded-md text-gray-100 bg-black hover:bg-yellow-500 md:py-4 md:text-lg md:px-10">  Graficazione
                </a>
              </div>
              <div>
                <div>
                  <span
                    @mouseover="hover = true"
                    @mouseleave="hover = false"
                  >
                    Prova a HOverarmi
                  </span>
                  <span v-if="hover"><img src="../assets/images/logo-insta.svg"></span>
                </div>
              <Menu as="div" class="mx-100 relative inline-block text-left">
                <div>
                  <MenuButton class="focus:outline-none">
                    Contattci Qui
                    <ChevronDownIcon class="-mr-1 ml-2 h-5 w-5" aria-hidden="true" />
                  </MenuButton>
                  </div>
                </Menu>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
    <footer class="flex justify-center items-center space-x-3">
    <div v-if="isDark">
    <a href="https://www.instagram.com/openbeetracker/" target="_blank">
      <img src="../assets\images/instagram.png" class="h-10 w-10">
    </a>
    </div>
    <a href="https://www.instagram.com/openbeetracker/" target="_blank">
      <img src="../assets\images/logo-insta.svg" class="h-10 w-10">
    </a>    
    <a href="https://www.youtube.com/channel/UCApS3abjBtJ1s1E4VZDBLag" target="_blank">
      <img src="../assets\images/logo-yt-custom-2.svg" class="h-10 w-10">
    </a>
  </footer>
  <div class="bg-white">
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Customers also purchased</h2>

      <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <div v-for="product in products" :key="product.id" class="group relative">
          <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
            <img :src="product.imageSrc" :alt="product.imageAlt" class="w-full h-full object-center object-cover lg:w-full lg:h-full" />
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a :href="product.href">
                  <span aria-hidden="true" class="absolute inset-0" />
                  {{ product.name }}
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">{{ product.color }}</p>
            </div>
            <p class="text-sm font-medium text-gray-900">{{ product.price }}</p>
          </div>
        </div>
      </div>
    </div>
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
</template>
