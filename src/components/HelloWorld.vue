<script setup>
import { ref } from 'vue'

defineProps({
  msg: String
})

const count = ref(0)
</script>

<template>
  <h1>{{ msg }}</h1>

  <p>
    Cose strane:
    <a href="https://translate.google.com/" target="_blank">Traduttore</a>
    +
    <a href="https://www.google.it/" target="_blank">Google</a>
  </p>

  <p>
    <a href="https://www.youtube.com/" target="_blank">
      Youtube
    </a> 
    |
    <a href="https://v3.vuejs.org/" target="_blank">Vue 3 Documentation</a>
  </p>

  <button type="button" @click="count--">conta: {{ count }}</button>
  <p>
    Edit
    <code>components/HelloWorld.vue</code> to test hot module replacement.
  </p>

  <p>
    {{ testo }}
  </p>

  <input v-model="testo" style="width: 180px" />
</template>

<script>
export default {
  data() {
    return {
      testo: ""
    }
  }
}
</script>

<style scoped>
a {
  color: #42b983;
}
</style>
