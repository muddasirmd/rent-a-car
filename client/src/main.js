import { createApp } from 'vue'
import App from './App.vue'
import './assets/css/styles.css'
import './index.css'
import router from './router/router'
import endpoints from '@/assets/api/endpoints';
import VCalendar from 'v-calendar';
import 'v-calendar/style.css';




// createApp(App).use(router).mount('#app')
const app = createApp(App);
app.provide('endpoints', endpoints) // Provide the endpoints object
app.use(router);
// Use plugin with optional defaults
app.use(VCalendar, {})

app.mount('#app');
