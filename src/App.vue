<template>
  <v-app>
    <v-app-bar v-scroll="onScroll" app flat :color="menuBGColor">
      <v-toolbar-title class="headline text-uppercase">
        <span>Vuetify</span>
        <span class="font-weight-light">MATERIAL DESIGN</span>
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <v-btn text href="https://github.com/vuetifyjs/vuetify/releases/latest" target="_blank">
        <span class="mr-2">Latest Releasefff</span>
      </v-btn>
    </v-app-bar>
    <v-content class="pa-0">
      <Index/>
    </v-content>
    <v-footer dark padless>
      <v-card class="flex" flat tile>
        <v-card-title class="teal">
          <strong class="subheading">Get connected with us on social networks!</strong>
          <v-spacer></v-spacer>
          <v-btn v-for="icon in icons" :key="icon" class="mx-4" dark icon>
            <v-icon size="24px">{{ icon }}</v-icon>
          </v-btn>
        </v-card-title>

        <v-card-actions class="grey darken-3 justify-center">
          {{ new Date().getFullYear() }} — <strong>Doors</strong>
        </v-card-actions>
      </v-card>
    </v-footer>
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
    menuBGColor: null,
    icons: [
      'fab fa-facebook',
      'fab fa-twitter',
      'fab fa-google-plus',
      'fab fa-linkedin',
      'fab fa-instagram',
    ],
  }),
  mounted() {
    this.onScroll()
  },
  methods: {
    onScroll() {
      this.menuBGColor = window.pageYOffset > 0 ? 'white' : 'transparent'
    }
  }
};
</script>
