<script setup>
import Navbar from '../components/Navbar.vue';
</script>

<template>
  <main class="relative bg-white overflow-hidden h-screen">
    <Navbar />

    <router-view />
  </main>
</template>
