<template>
		<router-view v-slot="slotProps">
			<transition name="route">
				<component :is="slotProps.Component"></component>
			</transition>
		</router-view>
</template>
<script>
export default {

};
</script>
<style>

.route-enter-active{
	transition: all 0.3s ease-out;
}

.route-enter-to,
.route-leave-from{
	opacity: 1;
	transform: translateY(0px);
}


.route-enter-from{
	opacity: 0;
	transform: translateY(-30px);
}


.route-leave-to {
	opacity: 0;
	transform: translateY(30px)
}

.route-leave-active{
	transition: all 0.3s ease-out;
}



</style>