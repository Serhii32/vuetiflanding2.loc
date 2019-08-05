<template>
	<v-container fluid pa-0>
		<v-layout wrap>
			<v-img width="100%" height="100vh" :src="require('../assets/first-block.jpg')">
				
			</v-img>
		</v-layout>
		<v-layout wrap>
			<video-player  class="vjs-custom-skin" :options="playerOptions" :playsinline="true"></video-player>
		</v-layout>
		<v-layout wrap>
			<v-tabs>
				<v-tab v-for="(doorType, i) in doorTypes" :key="i" :href="'#tab-' + i">{{ doorType.name }}</v-tab>
					<v-tab-item v-for="(doorType, i) in doorTypes" :key="i" :value="'tab-' + i">{{ doorType.description }}</v-tab-item>
			</v-tabs>
		</v-layout>
		<v-layout wrap>
			<swiper :options="swiperOption">
				<swiper-slide>Slide 1</swiper-slide>
				<swiper-slide>Slide 2</swiper-slide>
				<swiper-slide>Slide 3</swiper-slide>
				<swiper-slide>Slide 4</swiper-slide>
				<swiper-slide>Slide 5</swiper-slide>
				<swiper-slide>Slide 6</swiper-slide>
				<swiper-slide>Slide 7</swiper-slide>
				<div class="swiper-pagination" slot="pagination"></div>
			</swiper>
		</v-layout>
		<v-layout wrap>
			<v-tabs>
				<v-tab v-for="(uniqueDoor, i) in uniqueDoors" :key="i" :href="'#tab-' + i">{{ uniqueDoor.name }}</v-tab>
					<v-tab-item v-for="(uniqueDoor, i) in uniqueDoors" :key="i" :value="'tab-' + i">{{ uniqueDoor.description }}</v-tab-item>
			</v-tabs>
		</v-layout>
		<v-layout wrap align-center justify-center fill-height>
			<v-flex xs12 md4>
				<v-hover v-slot:default="{ hover }">
					<v-card width="100%" height="500px">
						<v-card-media :src="require('../assets/first-block.jpg')" height="200px"></v-card-media>
						<v-card-title  primary-title>I'm a title</v-card-title>
						<v-card-text>I'm card text</v-card-text>
					</v-card>
				</v-hover>
			</v-flex>
			<v-flex xs12 md4>
				<v-hover v-slot:default="{ hover }">
					<v-card width="100%" height="500px">
						<v-card-media :src="require('../assets/first-block.jpg')" height="200px"></v-card-media>
						<v-card-title  primary-title>I'm a title</v-card-title>
						<v-card-text>I'm card text</v-card-text>
					</v-card>
				</v-hover>
			</v-flex>
			<v-flex xs12 md4>
				<v-hover v-slot:default="{ hover }">
					<v-card width="100%" height="500px">
						<v-card-media :src="require('../assets/first-block.jpg')" height="200px"></v-card-media>
						<v-card-title  primary-title>I'm a title</v-card-title>
						<v-card-text>I'm card text</v-card-text>
					</v-card>
				</v-hover>
			</v-flex>
		</v-layout>
	</v-container>
</template>
<script>
	export default {
		data () {
			return {
				doorTypes: [
					{
						name: 'Деревянные',
						description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
					},
					{
						name: 'МДФ',
						description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
					},
					{
						name: 'Шпонированные',
						description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
					},
					{
						name: 'Под покраску',
						description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
					}
				],
				uniqueDoors: [
					{
						name: 'Деревянные',
						description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
					},
					{
						name: 'МДФ',
						description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
					},
					{
						name: 'Шпонированные',
						description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
					},
					{
						name: 'Под покраску',
						description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
					}
				],
				swiperOption: {
					effect: 'coverflow',
					grabCursor: true,
					centeredSlides: true,
					slidesPerView: 'auto',
					coverflowEffect: {
						rotate: 50,
						stretch: 0,
						depth: 100,
						modifier: 1,
						slideShadows : true
					},
					pagination: {
						el: '.swiper-pagination'
					}
				},
				playerOptions: {
					height: '360',
					autoplay: true,
					muted: true,
					language: 'ru',
					playbackRates: [0.7, 1.0, 1.5, 2.0],
					sources: [{
					type: "video/mp4",
					// mp4
					src: "http://vjs.zencdn.net/v/oceans.mp4",
					// webm
					// src: "https://cdn.theguardian.tv/webM/2015/07/20/150716YesMen_synd_768k_vp8.webm"
					}],
					poster: "https://surmon-china.github.io/vue-quill-editor/static/images/surmon-1.jpg",
				}
			}
		},
	}
</script>