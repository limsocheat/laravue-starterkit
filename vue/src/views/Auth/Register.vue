<template>
	<div>
		<v-container fluid fill-height>
			<v-layout align-center justify-center>
				<v-flex xs12 sm8 md4>
					<v-card class="elevation-12">
						<v-toolbar dark color="primary">
							<v-toolbar-title>Register form</v-toolbar-title>
						</v-toolbar>
						<v-card-text>
							<v-form>
								<v-text-field prepend-icon="email" name="email" label="E-mail" type="text"></v-text-field>
								<v-text-field prepend-icon="phone" name="phone" label="Phone Number" type="number"></v-text-field>
								<v-text-field prepend-icon="lock" name="password" label="Password" type="password"></v-text-field>
							</v-form>
							<v-btn round block color="primary" @click="submit">Register</v-btn>
						</v-card-text>
						<v-card-actions>
							<p>Already have an account?</p>
							<v-spacer></v-spacer>
							<v-btn :to="{ name: 'auth.login' }" flat small right="true">Login</v-btn>
						</v-card-actions>
					</v-card>
				</v-flex>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
	export default {
		data() {
			return {};
		},
		methods: {}
	};
</script>

<style></style>
