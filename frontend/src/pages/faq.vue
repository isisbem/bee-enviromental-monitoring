
<script>
/*  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");

      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }*/
</script>

<template>
  <main class="mt-5 mx-auto max-w-7xl px-4 sm:mt-6 sm:px-6 md:mt-8 lg:mt-10 lg:px-8 xl:mt-19">
    <div class="sm:flex flex-col justify-center items-center text-center">
      <h1 class="text-3xl tracking-tight font-extrabold flex justify-center items-center sm:text-4xl md:text-5xl">
        <span class="block text-yellow-500">Frequently</span>
        <span class="block text-black">Asked</span>
        <span class="block text-yellow-500">Questions</span>
      </h1>
      <span class="mt-10 h-px w-full bg-gray-300" />
      <div class="mt-3 mx-auto max-w-7xl px-4 sm:mt-6 sm:px-6 md:mt-8 lg:mt-10 lg:px-8 xl:mt-17">
      <button class="accordion w-full bg-yellow-600 rounded py-1">Domanda 1</button>
        <div class="py-3 bg-white overflow: hidden;">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti neque aperiam mollitia nobis esse ullam magni magnam a at voluptatibus vero, doloribus ipsa voluptatum qui? Provident facilis sed tenetur aliquam?</p>
        </div>

        <button class="accordion w-full bg-yellow-600 rounded py-1">Domanda 2</button>
        <div class="py-3 bg-white overflow: hidden;">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quo saepe fugiat corrupti molestias dolores optio delectus voluptatibus ad doloremque sequi odit, expedita, excepturi veritatis neque magnam, eveniet exercitationem deserunt?</p>
        </div>

        <button class="accordion w-full bg-yellow-600 rounded py-1">Domanda 3</button>
        <div class="py-3 bg-white overflow: hidden;">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quo saepe fugiat corrupti molestias dolores optio delectus voluptatibus ad doloremque sequi odit, expedita, excepturi veritatis neque magnam, eveniet exercitationem deserunt?</p>
        </div>
        
        <button class="accordion w-full bg-yellow-600 rounded py-1">Domanda 4</button>
        <div class="py-3 bg-white overflow: hidden;">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quo saepe fugiat corrupti molestias dolores optio delectus voluptatibus ad doloremque sequi odit, expedita, excepturi veritatis neque magnam, eveniet exercitationem deserunt?</p>
        </div>
        
        <button class="accordion w-full bg-yellow-600 rounded py-1">Domanda 4</button>
        <div class="py-3 bg-white overflow: hidden;">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quo saepe fugiat corrupti molestias dolores optio delectus voluptatibus ad doloremque sequi odit, expedita, excepturi veritatis neque magnam, eveniet exercitationem deserunt?</p>
        </div>

      </div>
    </div>
  </main>
</template>
