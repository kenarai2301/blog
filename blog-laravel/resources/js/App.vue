<template>
<div>
  <v-app>
   <header-component></header-component>
   <router-view></router-view>
   <footer-component></footer-component>
  </v-app>
</div>
</template>


<script>
  import HeaderComponent from './components/HeaderComponent.vue';
  import FooterComponent from './components/FooterComponent.vue';
export default {

   components: {
      HeaderComponent,FooterComponent
   }
}
</script>