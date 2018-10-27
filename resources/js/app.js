import  Turbolinks from 'turbolinks';
import './bootstrap';
import vue from 'vue';

Turbolinks.start()

window.Vue = vue

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

