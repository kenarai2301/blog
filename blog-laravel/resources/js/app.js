

//import
import Vue from 'vue';
import 'swiper/dist/css/swiper.css'
import Swiper from 'swiper';
import App from './App.vue';
import Vuetify from 'vuetify'
import router from './router';
import StatusCard from './components/StatusCard'
// //use
Vue.use(Vuetify)
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
  Vue.component('stats-card',StatusCard)


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

var swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
});


new Vue({
  router,
  render: h => h(App),
  vuetify: new Vuetify()
}).$mount('#app')


