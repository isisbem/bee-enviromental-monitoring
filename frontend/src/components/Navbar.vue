<script>
export default {
  data() {
    return {
      mobileMenu: false,
      links: [
        {
          name: 'Grafici'
        },
        {
          name: 'Chi siamo'
        },
        {
          name: 'FAQ'
        }
      ]
    }
  },
  methods: {
    onMobileMenuClickAway() {
      this.mobileMenu = false
    }
  }
}
</script>

<template>
  <div class="max-w-7xl mx-auto">
    <div class="relative z-10 bg-white">
      <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
        <polygon points="50,0 100,0 50,100 0,100" />
      </svg>

      <div>
        <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
          <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
            <div class="flex items-center flex-grow flex-shrink-0">
              <div class="flex items-center justify-between w-full md:w-auto">
                <router-link to="/">
                  <span class="sr-only">Workflow</span>
                  <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg">
                </router-link>
                <div class="-mr-2 flex items-center md:hidden">
                  <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-500" aria-expanded="false" @click="mobileMenu = true">
                    <span class="sr-only">Open main menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
            <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
              <a v-for="link in links" :key="link.name" href="#" class="font-medium text-gray-500 hover:text-gray-900">
                {{ link.name }}
              </a>

              <!-- <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Chi siamo</a>

              <a href="#" class="font-medium text-gray-500 hover:text-gray-900">FAQ</a> -->

              <!-- <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Company</a> -->

              <!-- <a href="#" class="font-medium text-yellow-600 hover:text-yellow-500">Log in</a> -->
            </div>
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
            <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
              <div class="px-5 pt-4 flex items-center justify-between">
                <div>
                  <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                </div>
                <div class="-mr-2">
                  <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-yellow-500" @click="mobileMenu = false">
                    <span class="sr-only">Close main menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="px-2 pt-2 pb-3 space-y-1">
                <a v-for="link in links" :key="link.name" href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">
                  {{ link.name }}
                </a>

                <!-- <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Features</a>

                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Marketplace</a>

                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Company</a> -->
              </div>
              <!-- <a href="#" class="block w-full px-5 py-3 text-center font-medium text-yellow-600 bg-gray-50 hover:bg-gray-100">
                Log in
              </a> -->
            </div>
          </div>
        </transition>
      </div>
    </div>
  </div>
  <!-- <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80" alt="">
  </div> -->
</template>
