<script setup>
import Navbar from '../components/Navbar.vue';
import Main from '../components/Main.vue';
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
                  <span v-if="hover"><img src="../assets/images/Logo Insta Custom 1.svg"></span>
                </div>
              <Menu as="div" class="mx-100 relative inline-block text-left">
                <div>
                  <MenuButton class="focus:outline-none">
                    Contattci Qui
                    <ChevronDownIcon class="-mr-1 ml-2 h-5 w-5" aria-hidden="true" />
                  </MenuButton>
                  </div>

                  <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
                    <MenuItems class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none">
                      <div class="py-1">
                        <MenuItem v-slot="{ active }">
                          <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">INsta</a>
                        </MenuItem>
                        <MenuItem v-slot="{ active }">
                          <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">youtube</a>
                        </MenuItem>
                        <MenuItem v-slot="{ active }">
                          <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">twitter</a>
                        </MenuItem>
                        <MenuItem v-slot="{ active }">
                          <a href="#" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block px-4 py-2 text-sm']">email</a>
                        </MenuItem>
                      </div>
                    </MenuItems>
                  </transition>
                </Menu>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>
</template>
