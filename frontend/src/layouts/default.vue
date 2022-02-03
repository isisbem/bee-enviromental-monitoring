<script setup>
import Navbar from '../components/Navbar.vue';
import Footer from '../components/Footer.vue';
</script>

<template>
  <main class="relative transition-colors duration-100 bg-white dark:bg-true-gray-900 h-full min-h-screen">
    <Navbar />
    <!-- <div class="container grid-cols-2">
      
    </div> -->
    <router-view />
    <Footer />
  </main>
</template>

