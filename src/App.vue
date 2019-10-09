<template>
  <v-app>
    <v-app-bar v-scroll="onScroll" app flat :color="menuBGColor" style="transition: 1s;">
      <img style="height:100%" :src="require('./assets/logo.png')">
      <v-spacer></v-spacer>
      <!-- <p :style="'text-shadow: rgb(30, 27, 27) 3px 3px 10px; margin: 0px 10px ;color: '+ menuTextColor" class="subtitle-1">
        Вінниця, вул. Батозька, 12
      </p>
      <p :style="'text-shadow: rgb(30, 27, 27) 3px 3px 10px; margin: 0px 10px; color: '+ menuTextColor" class="subtitle-1">
        (067)666-28-66
      </p> -->
      <v-toolbar-items class="hidden-sm-and-down" style="max-height: 54px;">
        <v-btn color="#02ae1a" dark large class="mr-2 headerPhone" href="tel:+380671089497">38(067)108-94-97</v-btn>
        <v-btn color="#02ae1a" dark large class="mr-2 headerAddress" href="https://goo.gl/maps/mpkzAz3mE4NVB4Vo8" target="_blanc">Винница, ул. Батожская, 12</v-btn>
        <v-btn color="#02ae1a" dark large class="headerCall" @click.stop="callForm2 = true">Заказать звонок</v-btn>
      </v-toolbar-items>
      <v-toolbar-items class="hidden-md-and-up" style="max-height: 54px;">
        <v-menu>
          <template v-slot:activator="{ on }">
            <v-btn color="#02ae1a" dark large v-on="on" class="mr-2">
              <v-icon size="24px">fas fa-bars</v-icon>
            </v-btn>
          </template>
          <v-list>
            <v-list-item>
              <v-btn color="#02ae1a" dark large class="mr-2 headerPhone" href="tel:+380671089497">38(067)108-94-97</v-btn>
            </v-list-item>
            <v-list-item>
              <v-btn color="#02ae1a" dark large class="mr-2 headerAddress" href="https://goo.gl/maps/mpkzAz3mE4NVB4Vo8" target="_blanc">Винница, ул. Батожская, 12</v-btn>
            </v-list-item>
            <v-list-item>
              <v-btn color="#02ae1a" dark large class="headerCall" @click.stop="callForm2 = true">Заказать звонок</v-btn>
            </v-list-item>
          </v-list>
        </v-menu>
      </v-toolbar-items>
      <!-- <v-tooltip bottom>
        <template v-slot:activator="{ on }">
          <v-btn color="#02ae1a" dark large v-on="on" class="mr-2" href="https://goo.gl/maps/mpkzAz3mE4NVB4Vo8" target="_blanc">
            <v-icon size="24px">fas fa-map-marker-alt</v-icon>
          </v-btn>
        </template>
        <span>Вінниця, вул. Батозька, 12</span>
      </v-tooltip> -->
      <!-- <v-tooltip bottom>
        <template v-slot:activator="{ on }">
          <v-btn color="#02ae1a" dark large v-on="on" class="mr-2" href="tel:+380676662866">
            <v-icon size="24px">fas fa-phone</v-icon>
          </v-btn>
        </template>
        <span>(067)666-28-66</span>
      </v-tooltip> -->
    </v-app-bar>
    <v-content class="pa-0">
      <v-container fluid pa-0>
        <v-layout wrap>
          <v-img width="100%" min-height="1100px" height="100vh" gradient="to right, rgba(0, 0, 0, 0.41), rgba(247, 248, 254, 0.31)" :src="require('./assets/first-block.jpg')">
            <v-layout align-center justify-center row fill-height>
              <v-flex xs12 sm6 class="pa-10">
                <div style="text-shadow: rgb(0, 0, 0) 0px 0px 6px; color: rgb(255, 251, 251);" :class="'display-'+fontNumber+' mx-auto mb-3 text-center'">Входные двери в Виннице</div>
                <div style="text-shadow: rgb(30, 27, 27) 3px 3px 10px; color: rgb(255, 255, 255);" class="headline mx-auto text-center pa-2">Самый большой выставочный зал-магазин в городе</div>
                <v-layout>
                  <v-flex xs6>
                    <p style="text-shadow: rgb(30, 27, 27) 3px 3px 10px; color: rgb(255, 255, 255);" class="title mx-auto"><v-icon style="color: white">fas fa-check</v-icon> Входные двери собственного производства</p>
                    <p style="text-shadow: rgb(30, 27, 27) 3px 3px 10px; color: rgb(255, 255, 255);" class="title mx-auto"><v-icon style="color: white">fas fa-check</v-icon> Бесплатный замер и доставка</p>
                  </v-flex>
                  <v-flex xs6>
                    <p style="text-shadow: rgb(30, 27, 27) 3px 3px 10px; color: rgb(255, 255, 255);" class="title mx-auto"><v-icon style="color: white">fas fa-check</v-icon> Премиум качество</p>
                    <p style="text-shadow: rgb(30, 27, 27) 3px 3px 10px; color: rgb(255, 255, 255);" class="title mx-auto"><v-icon style="color: white">fas fa-check</v-icon> Фурнитура Kale</p>
                  </v-flex>
                </v-layout>
                <!-- <div class="my-2 text-center">
                  <v-btn color="#02ae1a" dark large @click.stop="callForm = true">Заказать просчет</v-btn>
                </div> -->
              </v-flex>
              <v-flex xs12 sm6 class="px-10">
                <v-form class="text-center pa-4 ma-auto" style="background: #ffffffde; border: 2px solid #02ae1a; border-radius: 20px; max-width: 500px" ref="callForm1" lazy-validation>
                  <p class="headline mx-auto text-center pa-2">Заказать входные двери</p>
                  <v-text-field v-model="name1" :rules="[v => !!v || 'Заполните поле']" label="Имя" required></v-text-field>
                  <v-text-field v-model="phone1" :rules="[v => !!v || 'Заполните поле']" label="Телефон" required></v-text-field>
                  <v-btn color="#02ae1a" class="mx-auto" @click="sendForm1" dark large>Отправить</v-btn>
                </v-form>
              </v-flex>
            </v-layout>
          </v-img>
        </v-layout>

        <v-layout class="pa-10" wrap align-center justify-center fill-height>
          <v-flex xs12 class="display-1 font-weight-bold text-uppercase text-center mb-3">как купить двери</v-flex>
          <v-flex xs12 md4 v-for="(point, i) in points" :key="point.title + '_' + i">
            <v-card style="max-width: 400px; min-height: 180px; background: transparent;" width="90%" class="mx-auto my-2 text-center elevation-0">
              <v-layout>
                <v-flex style="color: #EEEEEE" xs2 class="display-1 ">
                  {{point.number}}
                </v-flex>
                <v-flex xs10>
                  <v-card-title  primary-title>
                    <span class="ma-auto text-center">{{point.title}}</span>
                  </v-card-title>
                  <v-card-text v-if="typeof point.description !== 'undefined'" class="text-center">{{point.description}}</v-card-text>
                  <v-btn v-if="typeof point.button !== 'undefined'" color="#02ae1a" dark large :href="point.link" target="_blanc">{{point.button}}</v-btn>
                </v-flex>
              </v-layout>
            </v-card>
          </v-flex>
        </v-layout>

        <v-layout wrap style="margin:20px">
          <!-- <v-img width="100%" height="70vh" gradient="to right, rgba(0, 0, 0, 0.41), rgba(247, 248, 254, 0.31)" :src="require('./assets/text-block.jpg')"> -->
            <v-layout align-center justify-center row fill-height>
              <v-flex style="max-width: 700px" xs12 md6 class="px-10">
                <div style="text-shadow: rgb(253, 253, 253) 0px 0px 6px; color: rgb(0, 0, 0);" class="headline text-uppercase mx-auto mb-3 text-center">Отличительной чертой дверей Симбион является их качество.</div>
                <div style="text-shadow: rgb(255, 255, 255) 3px 3px 10px; color: rgb(0, 0, 0);" class="subtitle-1 mx-auto text-justify">Наша компания уже достаточно долго занимается изготовлением дверей. <br>Мы собрали и объединили специалистов с большим опытом роботы в разработке и производстве входных дверей.<br> Мы изучили новейшие разработки от ведущих производителей входных дверей в Украине и создали надежную конструкцию, которая не уступает по надежности и качеству входным дверям от других производителей.<v-btn v-show="showButton" color="#02ae1a" dark small @click.stop="toggleVisibility()">Читать дальше</v-btn><br><div v-show="showText"> Мы не стремимся сделать дешевые двери, мы хотим их сделать надежными и безопасными. В нашем выставочном зале вы увидите новые модели: эти входные двери созданы нами, не повторяются у конкурентов. Мы постоянно отслеживаем потребности рынка, актуальные цвета и материалы. как в новых моделях так и в разных их цветовых решениях.<br> Компания Симбион постоянно усовершенствует технологические процессы в изготовлении дверей. Благодаря этому нам удается выпускать более качественные и конкурентноспособные двери.<br> В своих дверях мы используем только качественные замки мировых брендов, такие как Kale.<br> Мы настолько уверенны в качестве своих дверей,что даем на них гарантию.<br> Мы стремимся изготавливать и доставлять вам только лучший продукт, и благодаря этому упорству мы за столь короткий срок смогли выйти в лидеры по производству входных дверей, обогнавший многих конкурентов, и поставляем входные двери Симбион в магазины и выставочные залы наших партнеров.</div></div>
              </v-flex>
              <v-flex xs12 md6 class="px-10 text-center" style="height: 100%">
                <img style="max-height:700px; max-width: 100%;" :src="require('./assets/about-image.jpg')">
              </v-flex>
            </v-layout>
          <!-- </v-img> -->
        </v-layout>
        <!-- <v-layout class="pa-10 white" wrap align-center justify-center fill-height>
          <v-flex xs12 md3 v-for="(service, i) in services" :key="service.title + '_' + i">
            <v-card flat style="max-width: 400px; min-height: 200px;" width="90%" class="ma-auto">
              <v-img class="ma-auto" :src="service.photo" width="100%" max-width="150px" max-height="150px"></v-img>
              <v-card-title class="subtitle-1 text-uppercase">
                <span class="ma-auto text-center">{{service.title}}</span>
              </v-card-title>
            </v-card>
          </v-flex>
        </v-layout> -->
        <v-layout wrap>
          <video-player style="width: 100%; max-width: 1200px" class="vjs-custom-skin vjs-big-play-centered ma-auto" :options="playerOptions" :playsinline="true"></video-player>
        </v-layout>
        <v-layout wrap class="pa-10" style="background: #d0d1d2">
          <div class="display-1 font-weight-bold text-uppercase mx-auto mb-3">лидеры продаж</div>
          <swiper :options="swiperOption">
            <swiper-slide v-for="(door, i) in doors" :key="door.name + '_' + i">
              <v-card width="230px" height="480px" class="ma-auto pa-2 text-center" flat>
                <img :src="door.photo" height="400">
                <!-- <v-card-title  primary-title class="text-uppercase">{{door.name}}</v-card-title> -->
                <v-card-title v-if="door.price != '0'" primary-title style="color: #02ae1a">Цена: {{door.price}} грн.</v-card-title>
              </v-card>
            </swiper-slide>
            <div class="swiper-pagination" slot="pagination"></div>
          </swiper>
        </v-layout>
        <v-layout class="pa-10" wrap align-center justify-center fill-height>
          <v-flex xs12 class="display-1 font-weight-bold text-uppercase text-center mb-3">наши преимущества</v-flex>
          <v-flex xs12 md4 v-for="(advantage, i) in advantages" :key="advantage.title + '_' + i">
            <v-card style="max-width: 400px; min-height: 350px;" width="90%" class="mx-auto my-2">
              <v-img :src="advantage.photo" height="200px"></v-img>
              <v-card-title  primary-title>
                <span class="ma-auto text-center">{{advantage.title}}</span>
              </v-card-title>
              <!-- <v-card-text class="text-center">{{advantage.description}}</v-card-text> -->
            </v-card>
          </v-flex>
          <v-flex xs12 class="my-2 text-center">
            <v-btn color="#02ae1a" id="know-btn" dark large @click.stop="callForm3 = true">Узнать стоимость и сроки</v-btn>
          </v-flex>
        </v-layout>
        <v-layout wrap class="pa-10" style="background: #d0d1d2">
          <div class="display-1 font-weight-bold text-uppercase mx-auto mb-3">КАЧЕСТВЕННАЯ ЗАЩИТА</div>
          <!-- <v-tabs color="#02ae1a" centered show-arrows background-color="#d0d1d2">
            <v-tab v-for="(smartDecision, i) in smartDecisions" :key="smartDecision.name + '_' + i">{{ smartDecision.name }}</v-tab>
            <v-tab-item class="pa-5" style="background: #d0d1d2" v-for="(smartDecision, i) in smartDecisions" :key="smartDecision.name + '_' + i">        
              <v-card style="background: #d0d1d2" class="ma-auto pa-2 text-center" flat>
                <img :src="smartDecision.photo" style="width:100%; max-width:700px">
              </v-card>
            </v-tab-item>
          </v-tabs> -->
          <swiper :options="swiperOption">
            <swiper-slide v-for="(door, i) in smartDecisions" :key="door.name + '_' + i">
              <v-card width="230px" height="480px" class="ma-auto pa-2 text-center" flat>
                <img style="max-width: 100%;" :src="door.photo" height="400">
              </v-card>
            </swiper-slide>
            <div class="swiper-pagination" slot="pagination"></div>
          </swiper>
        </v-layout>
        <v-layout wrap style="height: 50vh">
          <!-- <v-img width="100%" height="70vh" gradient="to right, rgba(0, 0, 0, 0.41), rgba(247, 248, 254, 0.31)" :src="require('./assets/text-block.jpg')"> -->
            <v-layout align-center justify-center row fill-height>
              <v-flex xs12 sm6 class="px-10">
                <div style="text-shadow: rgb(253, 253, 253) 0px 0px 6px; color: rgb(0, 0, 0);" class="display-1 text-uppercase mx-auto mb-3 text-center">Обязательно приходите в наш магазин, чтобы увидеть интересующие вас двери вживую!</div>
                <div style="text-shadow: rgb(255, 255, 255) 3px 3px 10px; color: rgb(0, 0, 0);" class="headline text-uppercase mx-auto text-center">Вы будете приятно удивлены нашим сервисом, ассортиментом и качеством дверей</div>
              </v-flex>
              <v-flex xs12 sm6 class="px-10 text-center" style="height: 100%">
                <img style="max-height:100%; max-width: 100%; height: 100%" :src="require('./assets/text-block-image.jpg')">
              </v-flex>
            </v-layout>
          <!-- </v-img> -->
        </v-layout>

        <!-- <v-layout wrap>
          <v-flex xs12 sm8 class="text-center">
            <img style="width: 100%" :src="require('./assets/doors.png')">
          </v-flex>
          <v-flex xs12 sm4 align-center justify-center>
            <div class="title mx-auto text-center pa-2" style="font-weight: 300;"></div>
          </v-flex>
        </v-layout> -->
      </v-container>
    </v-content>
    <v-footer class="font-weight-medium">
      <v-layout wrap>
        <v-flex xs12 sm4 class="ma-auto text-center">
          <img style="max-height:100%" :src="require('./assets/logo.png')">
          <p class="text-center" primary-title>38(067)108-94-97</p>
          <p class="text-center" primary-title>Винница, ул. Батожская, 12</p>
          <p class="text-center" primary-title>Входные двери в Виннице на любой вкус и бюджет</p>
          <p class="text-center" primary-title><a href="https://www.simbion.com.ua/vidi-dverey/vhidni-dveri" target="_blanc">Посмотреть весь каталог дверей</a></p>
        </v-flex>
        <v-flex xs12 sm8 class="ma-auto">
          <iframe style="width:100%; height: 300px; border: none" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2604.7030808701147!2d28.504408315688035!3d49.24411837932713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472d5b3871c6b805%3A0x7993a096cc1f58b5!2sBatozka+St%2C+12%2C+Vinnytsia%2C+Vinnyts&#39;ka+oblast%2C+21000!5e0!3m2!1sen!2sua!4v1565688755143!5m2!1sen!2sua" width="600"></iframe>
        </v-flex>
      </v-layout>
    </v-footer>
    <v-dialog v-model="callForm2" max-width="500">
      <v-form class="text-center pa-4" style="background: white" ref="callForm2" lazy-validation>
        <v-text-field v-model="name2" :rules="[v => !!v || 'Заполните поле']" label="Имя" required></v-text-field>
        <v-text-field v-model="phone2" :rules="[v => !!v || 'Заполните поле']" label="Телефон" required></v-text-field>
        <v-btn color="#02ae1a" class="mx-auto" @click="sendForm2" dark large>Отправить</v-btn>
      </v-form>
    </v-dialog>
    <v-dialog v-model="callForm3" max-width="500">
      <v-form class="text-center pa-4" style="background: white" ref="callForm3" lazy-validation>
        <v-text-field v-model="name3" :rules="[v => !!v || 'Заполните поле']" label="Имя" required></v-text-field>
        <v-text-field v-model="phone3" :rules="[v => !!v || 'Заполните поле']" label="Телефон" required></v-text-field>
        <v-btn color="#02ae1a" class="mx-auto" @click="sendForm3" dark large>Отправить</v-btn>
      </v-form>
    </v-dialog>
    <v-dialog v-model="formSendResultModal" width="500" height="500">
      <div class="subtitle-2" style="background: white">{{resultModalMessage}}</div>
    </v-dialog>
  </v-app>
</template>

<script>
export default {
  name: 'App',
  data: function () {
    return {
      showButton: true,
      showText: false,
      callForm2: false,
      callForm3: false,
      formSendResultModal: false,
      resultModalMessage: '',
      name1: '',
      name2: '',
      name3: '',
      phone1: '',
      phone2: '',
      phone3: '',
      menuBGColor: null,
      fontNumber: this.$vuetify.breakpoint.smAndDown?2:3,
      menuExtended: true,
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
          photo: require('./assets/l1.jpg'),
        },
        {
          name: 'Книжка',
          photo: require('./assets/l2.jpg'),
        },
        {
          name: 'Фрамуги',
          photo: require('./assets/l3.jpg'),
        },
        {
          name: 'Зеркало',
          photo: require('./assets/l4.jpg'),
        },
        {
          name: 'Сдвижные',
          photo: require('./assets/l5.jpg'),
        },
        {
          name: 'Рото-Дверь',
          photo: require('./assets/l6.jpg'),
        },
        {
          name: 'Книжка',
          photo: require('./assets/l7.jpg'),
        },
        {
          name: 'Фрамуги',
          photo: require('./assets/l8.jpg'),
        },
        {
          name: 'Зеркало',
          photo: require('./assets/l9.jpg'),
        },
        {
          name: 'Сдвижные',
          photo: require('./assets/l10.jpg'),
        }
      ],
      doors: [
        {
          name: '',
          photo: require('./assets/d1.png'),
          price: '0'
        },
        {
          name: 'AL-8',
          photo: require('./assets/d2.png'),
          price: '0'
        },
        {
          name: 'Рим-Венециано',
          photo: require('./assets/d3.png'),
          price: '0'
        },
        {
          name: 'Барселона',
          photo: require('./assets/d4.png'),
          price: '0'
        },
        {
          name: 'FL-1',
          photo: require('./assets/d5.png'),
          price: '0'
        },
        {
          name: 'Стандарт текстиль',
          photo: require('./assets/d6.png'),
          price: '0'
        },
        {
          name: 'Тифани ПОО песочная патина',
          photo: require('./assets/d7.png'),
          price: '0'
        },
        {
          name: 'Оливия ПО белый дуб',
          photo: require('./assets/d8.png'),
          price: '0'
        },
        {
          name: 'Горизонталь 3 (светлый дуб)',
          photo: require('./assets/d9.png'),
          price: '0'
        },
        {
          name: 'Горизонталь 3 (светлый дуб)',
          photo: require('./assets/d10.png'),
          price: '0'
        }
      ],
      swiperOption: {
        // effect: 'coverflow',
        grabCursor: false,
        centeredSlides: true,
        // slidesPerView: this.$vuetify.breakpoint.xsOnly? 1 :3,
        slidesPerView: this.$vuetify.breakpoint.smAndDown?1:3,
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
          title: 'Платите не за имя, а за качество',
          description: 'Мы всегда в курсе актуальных тенденций мирового дизайна, которые представлены в наших шоу-румах',
          photo: require('./assets/1.jpg'),
        },
        {
          title: 'Всегда есть в наличии ходовые модели',
          description: 'Фирменные магазины Папа Карло и фабрики Wakewood',
          photo: require('./assets/2.jpg'),
        },
        {
          title: 'Толщина двери 10 см',
          description: 'Изготовим продукцию по индивидуальным параметрам и габаритам',
          photo: require('./assets/3.jpg'),
        },
      ],
      points: [
        {
          title: 'Выберите дверь',
          description: 'В нашем каталоге вы сможете найти множество моделей на любой вкус.',
          button: 'Каталог',
          link: 'https://simbion.com.ua/vidi-dverey/vhidni-dveri',
          number: '01',
        },
        {
          title: 'Закажите замер',
          description: 'Мы предоставляем качественные услуги замерщика.',
          number: '02',
        },
        {
          title: 'Оформите заказ',
          description: 'Нас менеджер свяжется с вами и поможет принять верное решение.',
          number: '03',
        },
        {
          title: 'Доставка',
          description: 'Мы доставляем дверь в любую точку Украины.',
          number: '04',
        },
        {
          title: 'Установка двери',
          description: 'Наши мастера установят дверь быстро и качественно!',
          number: '05',
        }
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
          title: 'Широкий выбор фурнитуры. Подберем под любой интерьер',
          photo: require('./assets/14.png'),
        }
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
          src: "./video/video.mp4",
        }],
        poster: require('./assets/first-block.jpg'),
      }
    }
  },
  mounted() {
    this.onScroll();
  },
  methods: {
    onScroll() {
      this.menuBGColor = window.pageYOffset > 0 ? 'white' : 'transparent'
      this.menuExtended = window.pageYOffset > 0 ? false : true
    },
    sendForm1 () {
      if (this.$refs.callForm1.validate()) {
        this.snackbar = true;
        var self = this;
        this.axios.post('mail.php', {name: this.name1, phone: this.phone1 }).then(function(response) {
          if (response.data.status == 'success') {
            self.resultModalMessage = 'Заявка успешно отправлена';
            window.ga('send', 'event', 'Заказать межкомнатные двери', 'Форма заявки');
          } else {
            self.resultModalMessage = 'Ошибка! Заявка не отправлена';
          }
          self.formSendResultModal = true;
        });
      }
    },
    sendForm2 () {
      if (this.$refs.callForm2.validate()) {
        this.snackbar = true;
        var self = this;
        this.axios.post('mail.php', {name: this.name2, phone: this.phone2 }).then(function(response) {
          self.callForm2 = false;
          if (response.data.status == 'success') {
            self.resultModalMessage = 'Заявка успешно отправлена';
            window.ga('send', 'event', 'Заказать звонок', 'Форма заявки');
          } else {
            self.resultModalMessage = 'Ошибка! Заявка не отправлена';
          }
          self.formSendResultModal = true;
        });
      }
    },
    sendForm3 () {
      if (this.$refs.callForm3.validate()) {
        this.snackbar = true;
        var self = this;
        this.axios.post('mail.php', {name: this.name3, phone: this.phone3 }).then(function(response) {
          self.callForm3 = false;
          if (response.data.status == 'success') {
            self.resultModalMessage = 'Заявка успешно отправлена';
            window.ga('send', 'event', 'Узнать стоимость и сроки', 'Форма заявки');
          } else {
            self.resultModalMessage = 'Ошибка! Заявка не отправлена';
          }
          self.formSendResultModal = true;
        });
      }
    },
    toggleVisibility () {
      this.showButton = !this.showButton;
      this.showText = !this.showText;
    }
  }
};
</script>
<style>
  .v-tooltip__content.v-tooltip__content--fixed {
    position: fixed !important;
  }
  .v-toolbar__content {
    height: 85px !important;
  }
</style>
