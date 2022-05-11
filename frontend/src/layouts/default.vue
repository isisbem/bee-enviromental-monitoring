<script setup>
import Navbar from '../components/Navbar.vue';
import Footer from '../components/Footer.vue';
</script>

<template>
  <main class="container h-100 flex flex-col relative transition-colors duration-100 bg-white dark:bg-true-gray-900 h-full min-h-screen">
    <Navbar />
    <!-- <div class="container grid-cols-2">
      
    </div> -->
    <router-view />
    <Footer class="mt-auto" />
  </main>
</template>
