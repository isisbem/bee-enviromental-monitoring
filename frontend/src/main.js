import { createApp } from 'vue'
import VueClickAway from "vue3-click-away";
import { setupLayouts } from "virtual:generated-layouts";
import { createRouter, createWebHistory } from 'vue-router'
import VueApexCharts from "vue3-apexcharts" 

import "virtual:windi.css";

import App from './App.vue'
import generatedRoutes from "virtual:generated-pages";


const router = createRouter({
  history: createWebHistory(),
  routes: setupLayouts(generatedRoutes),
});

const app = createApp(App)
app.use(router)
app.use(VueClickAway)
app.use(VueApexCharts)

app.mount('#app')

