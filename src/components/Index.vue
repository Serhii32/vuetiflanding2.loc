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
				<v-tab v-for="(tabItem, i) in tabItems" :key="i" :href="'#tab-' + i">{{ tabItem.name }}</v-tab>
				<!-- <v-tabs-items> -->
					<v-tab-item v-for="(tabItem, i) in tabItems" :key="i" :value="'tab-' + i">{{ tabItem.description }}</v-tab-item>
				<!-- </v-tabs-items>		    -->
			</v-tabs>
		</v-layout>
		<v-layout wrap>
			<v-card max-width="344" class="mx-auto">
				<v-card-title>I'm a title</v-card-title>
				<v-card-text>I'm card text</v-card-text>
				<v-card-actions>
					<v-btn text>Click</v-btn>
				</v-card-actions>
			</v-card>
		</v-layout>
	</v-container>
</template>
<script>
	export default {
		data () {
			return {
				tabItems: [
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