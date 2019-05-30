<template>
	<v-app>
		<Header/>
		<v-content>
			<router-view></router-view>
		</v-content>
	</v-app>
</template>

<script>
	import Header from "@/components/master/Header";
	import Home from "./views/Home";

	export default {
		name: "App",
		components: {
			Header,
			Home
		},
		data() {
			return {
				//
			};
		}
	};
</script>
