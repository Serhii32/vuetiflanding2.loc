<template>
  <v-app>
    <v-app-bar v-scroll="onScroll" app flat :color="menuBGColor" style="transition: 1s;">
      <img style="height:100%" :src="require('./assets/logo.png')">
      <v-spacer></v-spacer>
      <v-tooltip bottom>
        <template v-slot:activator="{ on }">
          <v-btn color="#02ae1a" dark large v-on="on" class="mr-2" href="https://goo.gl/maps/mpkzAz3mE4NVB4Vo8" target="_blanc">
            <v-icon size="24px">fas fa-map-marker-alt</v-icon>
          </v-btn>
        </template>
        <span>Вінниця, вул. Батозька, 12</span>
      </v-tooltip>
      <v-tooltip bottom>
        <template v-slot:activator="{ on }">
          <v-btn color="#02ae1a" dark large v-on="on" class="mr-2" href="tel:+380676662866">
            <v-icon size="24px">fas fa-phone</v-icon>
          </v-btn>
        </template>
        <span>(067)666-28-66</span>
      </v-tooltip>
      <v-btn color="#02ae1a" dark large @click.stop="callForm = true">Заказать звонок</v-btn>
    </v-app-bar>
    <v-content class="pa-0">
      <v-container fluid pa-0>
        <v-layout wrap>
          <v-img width="100%" height="100vh" gradient="to right, rgba(0, 0, 0, 0.41), rgba(247, 248, 254, 0.31)" :src="require('./assets/first-block.jpg')">
            <v-layout align-center justify-center row fill-height>
              <v-flex xs12 sm6 class="px-10">
                <div style="text-shadow: rgb(36, 32, 32) 0px 0px 6px; color: rgb(185, 185, 185);" class="display-3 mx-auto mb-3 text-center">Межкомнатные двери в Виннице</div>
                <div style="text-shadow: rgb(30, 27, 27) 3px 3px 10px; color: rgb(255, 255, 255);" class="headline mx-auto text-center">Более 600 моделей в наличии в магазине</div>
                <div class="my-2 text-center">
                  <v-btn color="#02ae1a" dark large href="./pdf/catalog.pdf" target="_blanc">Получить каталог</v-btn>
                </div>
              </v-flex>
              <v-flex xs12 sm6></v-flex>
            </v-layout>
          </v-img>
        </v-layout>
        <v-layout class="pa-10 white" wrap align-center justify-center fill-height>
          <v-flex xs12 md3 v-for="(service, i) in services" :key="service.title + '_' + i">
            <v-card flat style="max-width: 400px; min-height: 200px;" width="90%" class="ma-auto">
              <v-img class="ma-auto" :src="service.photo" width="100%" max-width="150px" max-height="150px"></v-img>
              <v-card-title class="subtitle-1 text-uppercase">
                <span class="ma-auto text-center">{{service.title}}</span>
              </v-card-title>
            </v-card>
          </v-flex>
        </v-layout>
        <v-layout wrap>
          <video-player style="width: 100%" class="vjs-custom-skin vjs-big-play-centered" :options="playerOptions" :playsinline="true"></video-player>
        </v-layout>
        <v-layout wrap class="pa-10" style="background: #d0d1d2">
          <div class="display-1 font-weight-bold text-uppercase mx-auto mb-3">лидеры продаж</div>
          <v-tabs color="#02ae1a" centered show-arrows background-color="#d0d1d2">
            <v-tab v-for="(doorType, i) in doorTypes" :key="doorType.name + '_' + i">{{ doorType.name }}</v-tab>
            <v-tab-item class="pa-5" style="background: #d0d1d2" v-for="(doorType, i) in doorTypes" :key="doorType.name + '_' + i">         
              <swiper :options="swiperOption">
                <swiper-slide v-for="(door, i) in doorType.doors" :key="door.name + '_' + i">
                  <v-card width="230px" height="600px" class="ma-auto pa-2 text-center" flat>
                    <img :src="door.photo" height="400">
                    <v-card-title  primary-title class="text-uppercase">{{door.name}}</v-card-title>
                    <v-card-title primary-title style="color: #02ae1a">Цена: {{door.price}} грн.</v-card-title>
                  </v-card>
                </swiper-slide>
                <div class="swiper-pagination" slot="pagination"></div>
              </swiper>
            </v-tab-item>
          </v-tabs>
        </v-layout>
        <v-layout class="pa-10" wrap align-center justify-center fill-height>
          <v-flex xs12 class="display-1 font-weight-bold text-uppercase text-center mb-3">наши преимущества</v-flex>
          <v-flex xs12 md4 v-for="(advantage, i) in advantages" :key="advantage.title + '_' + i">
            <v-card style="max-width: 400px; min-height: 350px;" width="90%" class="mx-auto my-2">
              <v-img :src="advantage.photo" height="200px"></v-img>
              <v-card-title  primary-title>
                <span class="ma-auto">{{advantage.title}}</span>
              </v-card-title>
              <v-card-text class="text-center">{{advantage.description}}</v-card-text>
            </v-card>
          </v-flex>
        </v-layout>
        <v-layout wrap class="pa-10" style="background: #d0d1d2">
          <div class="display-1 font-weight-bold text-uppercase mx-auto mb-3">умные решения</div>
          <v-tabs color="#02ae1a" centered show-arrows background-color="#d0d1d2">
            <v-tab v-for="(smartDecision, i) in smartDecisions" :key="smartDecision.name + '_' + i">{{ smartDecision.name }}</v-tab>
            <v-tab-item class="pa-5" style="background: #d0d1d2" v-for="(smartDecision, i) in smartDecisions" :key="smartDecision.name + '_' + i">        
              <v-card style="background: #d0d1d2" class="ma-auto pa-2 text-center" flat>
                <img :src="smartDecision.photo" style="width:100%; max-width:700px">
              </v-card>
            </v-tab-item>
          </v-tabs>
        </v-layout>
      </v-container>
    </v-content>
    <v-footer class="font-weight-medium">
      <v-layout wrap>
        <v-flex xs12 sm4 class="ma-auto text-center">
          <img style="max-height:100%" :src="require('./assets/logo.png')">
          <p class="text-center" primary-title>(067)666-28-66</p>
          <p class="text-center" primary-title>Вінниця, вул. Батозька, 12</p>
        </v-flex>
        <v-flex xs12 sm8 class="ma-auto">
          <iframe style="width:100%; height: 300px; border: none" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2604.7030808701147!2d28.504408315688035!3d49.24411837932713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472d5b3871c6b805%3A0x7993a096cc1f58b5!2sBatozka+St%2C+12%2C+Vinnytsia%2C+Vinnyts&#39;ka+oblast%2C+21000!5e0!3m2!1sen!2sua!4v1565688755143!5m2!1sen!2sua" width="600"></iframe>
        </v-flex>
      </v-layout>
    </v-footer>
    <v-dialog v-model="callForm" max-width="500">
      <v-form class="text-center pa-4" style="background: white" ref="callForm" lazy-validation>
        <v-text-field v-model="name" :rules="[v => !!v || 'Заполните поле']" label="Имя" required></v-text-field>
        <v-text-field v-model="phone" :rules="[v => !!v || 'Заполните поле']" label="Телефон" required></v-text-field>
        <v-select v-model="messenger" :items="messengerItems" :rules="[v => !!v || 'Выберите мессенджер']" label="Мессенджер" required></v-select>
        <v-btn color="#02ae1a" class="mx-auto" @click="sendForm" dark large>Отправить</v-btn>
      </v-form>
    </v-dialog>
  </v-app>
</template>

<script>
export default {
  name: 'App',
  data: function () {
    return {
      callForm: false,
      name: '',
      phone: '',
      messenger: null,
      messengerItems: [
        'Viber',
        'Telegram',
        'Facebook Messenger',
        'Whatsapp',
      ],
      menuBGColor: null,
      icons: [
        'fab fa-facebook',
        'fab fa-twitter',
        'fab fa-google-plus',
        'fab fa-linkedin',
        'fab fa-instagram',
      ],
      smartDecisions: [
        {
          name: 'Рото-Дверь',
          photo: require('./assets/s1.jpg'),
        },
        {
          name: 'Книжка',
          photo: require('./assets/s2.jpg'),
        },
        {
          name: 'Фрамуги',
          photo: require('./assets/s3.jpg'),
        },
        {
          name: 'Зеркало',
          photo: require('./assets/s4.jpg'),
        },
        {
          name: 'Сдвижные',
          photo: require('./assets/s5.jpg'),
        }
      ],
      doorTypes: [
        {
          name: 'Окрашенные двери',
          doors: [
            {
              name: 'Дверь',
              photo: require('./assets/door.jpg'),
              price: '1000'
            },
            {
              name: 'Дверь',
              photo: require('./assets/door.jpg'),
              price: '1000'
            },
            {
              name: 'Дверь',
              photo: require('./assets/door.jpg'),
              price: '1000'
            },
            {
              name: 'Дверь',
              photo: require('./assets/door.jpg'),
              price: '1000'
            },
          ]
        },
        {
          name: 'Двери с ПВХ покрытием',
          doors: [
            {
              name: 'VND-01_EV',
              photo: require('./assets/d11.png'),
              price: '4020'
            },
            {
              name: 'SC-04_WY_black',
              photo: require('./assets/d12.png'),
              price: '3999'
            },
            {
              name: 'PD-01_WY',
              photo: require('./assets/d13.png'),
              price: '3035'
            },
            {
              name: 'PD-03_DG',
              photo: require('./assets/d14.png'),
              price: '2904'
            },
          ]
        },
        {
          name: 'Шпонированные',
          doors: [
            {
              name: 'Дверь',
              photo: require('./assets/door.jpg'),
              price: '1000'
            },
            {
              name: 'Дверь',
              photo: require('./assets/door.jpg'),
              price: '1000'
            },
            {
              name: 'Дверь',
              photo: require('./assets/door.jpg'),
              price: '1000'
            },
            {
              name: 'Дверь',
              photo: require('./assets/door.jpg'),
              price: '1000'
            },
          ]
        },
        {
          name: 'Двери из массива без покрытия',
          doors: [
            {
              name: 'Дверь',
              photo: require('./assets/door.jpg'),
              price: '1000'
            },
            {
              name: 'Дверь',
              photo: require('./assets/door.jpg'),
              price: '1000'
            },
            {
              name: 'Дверь',
              photo: require('./assets/door.jpg'),
              price: '1000'
            },
            {
              name: 'Дверь',
              photo: require('./assets/door.jpg'),
              price: '1000'
            },
          ]
        }
      ],
      swiperOption: {
        effect: 'coverflow',
        grabCursor: false,
        centeredSlides: true,
        // slidesPerView: this.$vuetify.breakpoint.xsOnly? 1 :3,
        slidesPerView: this.$vuetify.breakpoint.sm?1:3,
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows : true
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true
        }
      },
      advantages: [
        {
          title: 'Покупай модное',
          description: 'Мы всегда в курсе актуальных тенденций мирового дизайна, которые представлены в нашых шоу-румах',
          photo: require('./assets/1.png'),
        },
        {
          title: 'Прямые поставки',
          description: 'Фирменные магазины Папа Карлов и фабрики Wakewood',
          photo: require('./assets/2.jpg'),
        },
        {
          title: 'Воплощаем идеи',
          description: 'Изготовим продукцию по индивидуальным параметрам и габаритам',
          photo: require('./assets/3.jpg'),
        },
      ],
      services: [
        {
          title: 'Замер в тот же день. Не ждете, а сразу заказываете',
          photo: require('./assets/11.png'),
        },
        {
          title: 'Гарантия от 1 года. Уверенность в высоком качестве дверей',
          photo: require('./assets/12.png'),
        },
        {
          title: 'Доставка до 14 дней. Минимальный срок ожидания',
          photo: require('./assets/13.png'),
        },
        {
          title: 'Более 55 видов ручек. Подбор фурнитуры под ваш  интерьер',
          photo: require('./assets/14.png'),
        },
      ],
      playerOptions: {
        autoplay: true,
        muted: true,
        loop: true,
        aspectRatio: '16:9',          
        language: 'ru',
        playbackRates: [0.7, 1.0, 1.5, 2.0],
        sources: [{
          type: "video/mp4",
          src: "http://vjs.zencdn.net/v/oceans.mp4",
        }],
        poster: "https://surmon-china.github.io/vue-quill-editor/static/images/surmon-1.jpg",
      }
    }
  },
  mounted() {
    this.onScroll()
  },
  methods: {
    onScroll() {
      this.menuBGColor = window.pageYOffset > 0 ? 'white' : 'transparent'
    },
    sendForm () {
      if (this.$refs.callForm.validate()) {
        this.snackbar = true
      } else {
        // axios.post('./mail.php', {name: this.name, phone: this.phone,messenger: this.messenger }).then(function(response) {

        // });
      }
    },
  }
};
</script>
<style>
  .v-tooltip__content.v-tooltip__content--fixed {
    position: fixed !important;
  }
</style>
