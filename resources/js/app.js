import { createApp } from 'vue';
import ChartComponent from './components/ChartComponent.vue';

const app = createApp({});

// Registering components
app.component('chart-component', ChartComponent);

app.mount('#app');