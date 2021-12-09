  <template>
  <main class="mx-auto mt-4 max-w-7xl px-4 sm:mt-6 sm:px-6 md:mt-8 lg:mt-10 lg:px-8 xl:mt-19">
    <div class="grid-cols-5 flex flex-auto">
      <h3 class="text-3xl tracking-tight font-extrabold sm:text-lg md:text-4xl">
        <span class="block text-center text-black">Frequently</span>
        <span class="block text-center text-yellow-500">Asked</span>
        <span class="block text-center text-black">Questions</span>
        <div class="w-full">
          <img class="max-w-sm" src="../assets/images/undraw_faq.png">
        </div>
      </h3>
      <div class="flex flex-col"> 
        <h4 class="text-base text-gray-700 tracking-tight m-4 sm:text-lg md:text-xl">Qui puoi trovare le domande più frequenti che ci vengono poste, se ne hai altre non esitare a contattarci!</h4>
        <div class="w-full px-4 pt-16">
          <div class="w-full max-w-xl p-2 mx-auto bg-yellow-500 rounded-2xl">
            <Disclosure v-slot="{ open }">
              <DisclosureButton
                class="flex justify-between w-full px-4 py-2 text-sm font-medium text-left text-dark-500 bg-yellow-400 rounded-lg hover:bg-yellow-500 focus:outline-none focus-visible:ring focus-visible:ring-yellow-500 focus-visible:ring-opacity-75"
              >
                <span><b>Domanda 1</b></span>
                <ChevronUpIcon
                  :class="open ? 'transform rotate-180' : ''"
                  class="w-5 h-5 text-black"
                />
              </DisclosureButton>
              <DisclosurePanel class="px-4 pt-4 pb-2 text-sm text-black">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque nulla non soluta porro iusto, eos ea blanditiis qui reprehenderit incidunt minus enim distinctio fuga ipsa accusantium quis odio odit sapiente!
              </DisclosurePanel>
            </Disclosure>
            <Disclosure as="div" class="mt-2" v-slot="{ open }">
              <DisclosureButton
                class="flex justify-between w-full px-4 py-2 text-sm font-medium text-left text-dark-500 bg-yellow-400 rounded-lg hover:bg-yellow-500 focus:outline-none focus-visible:ring focus-visible:ring-yellow-500 focus-visible:ring-opacity-75"
              >
                <span><b>Domanda 2</b></span>
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

