<template>
	<v-toolbar app>
		<v-toolbar-title class="headline text-uppercase" style="min-width: 250px">
			<span>Vuetify</span>
		</v-toolbar-title>
		<v-toolbar-items class="hidden-sm-and-down">
			<v-btn flat :to="{ name: 'about' }">
				<v-icon left>directions_bus</v-icon>About
			</v-btn>
		</v-toolbar-items>
		<v-spacer></v-spacer>
		<v-toolbar-items class="hidden-sm-and-down">
			<v-btn flat :to="{ name: 'auth.login' }">
				<v-icon left>lock</v-icon>Login
			</v-btn>
			<v-btn flat :to="{ name: 'auth.register' }">
				<v-icon left>people</v-icon>Register
			</v-btn>
		</v-toolbar-items>
		<v-toolbar-side-icon></v-toolbar-side-icon>
	</v-toolbar>
</template>

<script>
	export default {};
</script>

<style>
</style>
