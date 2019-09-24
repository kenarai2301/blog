

import Vue from 'vue';
import VueRouter from 'vue-router';
import dashboard from './view/Dashboard.vue';
import user from './view/User.vue';


Vue.use(VueRouter)


const routes = [
  {
    path: '/',
    name: 'dashboard',
    component: dashboard
  },
  {
    path: '/user',
    name: 'user',
    component: user
  }
];


export default new VueRouter({ mode: 'history', routes: routes });


