<template>
  <v-app>
    <v-app-bar app flat :color="color">
      <v-toolbar-title class="headline text-uppercase">
        <span>Vuetifyd</span>
        <span class="font-weight-light">MATERIAL DESIGN</span>
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <v-btn
        text
        href="https://github.com/vuetifyjs/vuetify/releases/latest"
        target="_blank"
      >
        <span class="mr-2">Latest Releasefff</span>
      </v-btn>
    </v-app-bar>

    <v-content class="pa-0">
      <Index/>
    </v-content>
  </v-app>
</template>

<script>
import Index from './components/Index';

export default {
  name: 'App',
  components: {
    Index,
  },
  data: () => ({
    color: "transparent"
  }),
};
</script>
