// Import necessary modules from Vue and Vue Router
import { createRouter, createWebHistory } from 'vue-router';

// Import components to route to
import Landing from '@/pages/landing.vue';
import Details from '@/pages/details.vue';

// Define your routes
const routes = [
  { path: '/', component: Landing },
  { path: '/details/:id', component: Details }
];

// Create the router instance and pass in the routes
const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;