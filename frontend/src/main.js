import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import { setupLayouts } from "virtual:generated-layouts";

import "virtual:windi.css";

import App from './App.vue'
import generatedRoutes from "virtual:generated-pages";


const router = createRouter({
  history: createWebHistory(),
  routes: setupLayouts(generatedRoutes),
});

const app = createApp(App)
app.use(router)

app.mount('#app')
