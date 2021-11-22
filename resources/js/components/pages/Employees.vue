<template>
	<div>
		<navbar></navbar>
		<main-employees></main-employees>
	</div>
</template>
<script>

import Navbar from '../headers/Nav.vue';
import MainEmployees from './MainEmployees.vue';
export default {
	components: {
		Navbar,
		MainEmployees
	}

}
</script>
<style scope>

</style>