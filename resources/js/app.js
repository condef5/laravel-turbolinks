import  Turbolinks from 'turbolinks';
import './bootstrap';
import vue from 'vue';
import Notify from 'handy-notification'
import 'select2';

Turbolinks.start()

window.Vue = vue
window.Notify = Notify

$(document).ready(function() {
    $('.js-example-basic-single').select2();
});

// document.addEventListener("turbolinks:load", function() {
//     $('.select2').select2();
// })

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });

