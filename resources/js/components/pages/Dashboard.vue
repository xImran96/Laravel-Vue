<template>
	<div>
		<navbar></navbar>
		<main-dash></main-dash>
	</div>
</template>
<script>

import Navbar from '../headers/Nav.vue';
import MainDash from './Main.vue';

export default{
	components:{
		Navbar,
		MainDash
		
	}
};

</script>
<style scoped>


</style>