<template>
	<v-container fluid pa-0>
		<v-layout wrap>
			<v-img width="100%" height="100vh" :src="require('../assets/first-block.jpg')">
				
			</v-img>
		</v-layout>
		<v-layout wrap>
			<v-tabs>
				<v-tab v-for="(tabItem, i) in tabItems" :key="i">{{ tabItem.name }}</v-tab>			   
			</v-tabs>
			<v-tabs-items>
		    	<v-tab-item v-for="(tabItem, i) in tabItems" :key="i">
			    	<v-card>
			        	<v-card-text>{{ tabItem.description }}</v-card-text>
			    	</v-card>
				</v-tab-item>
			</v-tabs-items>
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
	      }
	    },
	    mounted() {
	    	console.log(this.tabItems)
	    }
	}
</script>