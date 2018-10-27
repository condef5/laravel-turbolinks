import  Turbolinks from 'turbolinks';
import './bootstrap';
import vue from 'vue';
import Notify from 'handy-notification'

Turbolinks.start()

window.Vue = vue
window.Notify = Notify

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

