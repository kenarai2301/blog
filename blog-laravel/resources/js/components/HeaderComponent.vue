<template>
<div>
  <v-navigation-drawer v-model="drawer" app>
      <v-list dense>
        <v-list-item @click="">
          <v-list-item-action>
            <v-icon>mdi-home</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title @click="toDashboard">Home</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
        <v-list-item @click="">
          <v-list-item-action>
            <v-icon>mdi-contact-mail</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title @click="toUser">User</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>

    <v-app-bar app color="indigo" dark>
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
      <v-toolbar-title>Application</v-toolbar-title>
    </v-app-bar>
</div>
</template>


<script>
  export default {
    props: {
      source: String,
    },

    data: () => ({
      drawer: null,
    }),
    methods: {
      toUser(){
        return this.$router.push('/user');
      },
      toDashboard(){
        return this.$router.push('/')
      }
    },
  }
</script>