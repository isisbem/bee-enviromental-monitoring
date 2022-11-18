  <template>
  <main class="mx-auto mt-4 max-w-7xl px-4 sm:mt-6 sm:px-6 md:mt-8 lg:mt-10 lg:px-8 xl:mt-19 overflow-x-hidden">
    <div class="flex flex-col md:flex-row justify-center items-start min-h-full h-full">
      <h3 class="text-3xl tracking-tight font-extrabold sm:text-lg md:text-4xl">
        <span class="block text-center text-black transition-colors duration-500">Frequently</span>
        <span class="block text-center text-yellow-400">Asked</span>
        <span class="block text-center text-black transition-colors duration-500">Questions</span>
        <div class="w-full">
          <img class="h-45 mt-8 max-w-sm" src="../assets/images/logo-faq.svg">
        </div>
      </h3>
      <div class="flex flex-col ml-10 self-start"> 
        <h4 class="text-base text-center text-gray-700 tracking-tight m-4 sm:text-lg md:text-xl">Qui puoi trovare le domande più frequenti che ci vengono poste, se ne hai altre non esitare a <a target="_blank" href="https://www.instagram.com/openbeetracker/" class="underline underline-offset-2">contattarci qui</a>!</h4>
        <!--<a class="h-8 justify-center content-center max-w-sm mx-auto" target="_blank" href="https://www.instagram.com/openbeetracker/">
          <button class="rounded-full p-2 border-2 border-black mx-auto bg-yellow-500 hover:bg-yellow-200">
            <img src="../assets/images/iconmonstr-instagram-11.svg">
          </button>
        </a>-->
        <div class="w-full px-4">
          <div class="w-full max-w-xl">
            <Disclosure v-slot="{ open }">
              <DisclosureButton
                class="flex justify-between w-full px-4 py-2 text-sm font-medium text-left text-dark-500 bg-yellow-300 rounded-lg hover:bg-yellow-200 focus:outline-none focus-visible:ring focus-visible:ring-yellow-500 focus-visible:ring-opacity-75"
              >
                <span><b>Domanda 1</b></span>
                <ChevronUpIcon
                  :class="open ? 'transform rotate-180' : ''"
                  class="w-5 h-5 text-black"
                />
              </DisclosureButton>
              <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-black">
                Come attaccate il tag al dorso delle api?
              </DisclosurePanel>
            </Disclosure>
            <Disclosure as="div" class="mt-2" v-slot="{ open }">
              <DisclosureButton
                class="flex justify-between w-full px-4 py-2 text-sm font-medium text-left text-dark-500 bg-yellow-300 rounded-lg hover:bg-yellow-200 focus:outline-none focus-visible:ring focus-visible:ring-yellow-500 focus-visible:ring-opacity-75"
              >
                <span><b>Domanda 2</b></span>
                <ChevronUpIcon
                  :class="open ? 'transform rotate-180' : ''"
                  class="w-5 h-5 text-black"
                />
              </DisclosureButton>
              <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-black">
                La colla che usate per attaccare i tag al dorso delle api danneggia la loro vita?
              </DisclosurePanel>
            </Disclosure>
            <Disclosure as="div" class="mt-2" v-slot="{ open }">
              <DisclosureButton
                class="flex justify-between w-full px-4 py-2 text-sm font-medium text-left text-dark-500 bg-yellow-300 rounded-lg hover:bg-yellow-200 focus:outline-none focus-visible:ring focus-visible:ring-yellow-500 focus-visible:ring-opacity-75"
              >
                <span><b>Domanda 3</b></span>
                <ChevronUpIcon
                  :class="open ? 'transform rotate-180' : ''"
                  class="w-5 h-5 text-black"
                />
              </DisclosureButton>
              <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-black">
                Da dove è nata l'idea di questo progetto?              </DisclosurePanel>
            </Disclosure>
            <Disclosure as="div" class="mt-2" v-slot="{ open }">
              <DisclosureButton
                class="flex justify-between w-full px-4 py-2 text-sm font-medium text-left text-dark-500 bg-yellow-300 rounded-lg hover:bg-yellow-200 focus:outline-none focus-visible:ring focus-visible:ring-yellow-500 focus-visible:ring-opacity-75"
              >
                <span><b>Domanda 3</b></span>
                <ChevronUpIcon
                  :class="open ? 'transform rotate-180' : ''"
                  class="w-5 h-5 text-black"
                />
              </DisclosureButton>
              <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-black">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur mollitia voluptatem earum est voluptates corporis cum quas? Natus perspiciatis, ratione ipsa fugiat, mollitia atque cumque rem debitis temporibus quibusdam quos?
              </DisclosurePanel>
            </Disclosure>
            <Disclosure as="div" class="mt-2" v-slot="{ open }">
              <DisclosureButton
                class="flex justify-between w-full px-4 py-2 text-sm font-medium text-left text-dark-500 bg-yellow-300 rounded-lg hover:bg-yellow-200 focus:outline-none focus-visible:ring focus-visible:ring-yellow-500 focus-visible:ring-opacity-75"
              >
                <span><b>Domanda 3</b></span>
                <ChevronUpIcon
                  :class="open ? 'transform rotate-180' : ''"
                  class="w-5 h-5 text-black"
                />
              </DisclosureButton>
              <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-black">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur mollitia voluptatem earum est voluptates corporis cum quas? Natus perspiciatis, ratione ipsa fugiat, mollitia atque cumque rem debitis temporibus quibusdam quos?
              </DisclosurePanel>
            </Disclosure>
            <Disclosure as="div" class="mt-2" v-slot="{ open }">
              <DisclosureButton
                class="flex justify-between w-full px-4 py-2 text-sm font-medium text-left text-dark-500 bg-yellow-300 rounded-lg hover:bg-yellow-200 focus:outline-none focus-visible:ring focus-visible:ring-yellow-500 focus-visible:ring-opacity-75"
              >
                <span><b>Domanda 3</b></span>
                <ChevronUpIcon
                  :class="open ? 'transform rotate-180' : ''"
                  class="w-5 h-5 text-black"
                />
              </DisclosureButton>
              <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-black">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur mollitia voluptatem earum est voluptates corporis cum quas? Natus perspiciatis, ratione ipsa fugiat, mollitia atque cumque rem debitis temporibus quibusdam quos?
              </DisclosurePanel>
            </Disclosure>  
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { ChevronUpIcon } from '@heroicons/vue/solid'

export default {
  components: {
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    ChevronUpIcon,
  },
}
</script>
    <!---->


