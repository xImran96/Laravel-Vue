<template>
	<div class="relative md:ml-64 bg-blueGray-50">
        <top-nav></top-nav>
      
	<div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">

        </div>
      <employee-table></employee-table>
    </div>

</template>
<script>
import TopNav from '../headers/TopNav.vue';

import EmployeeTable from './EmployeeTable.vue';
export default {
	components: {
		TopNav,
    EmployeeTable
	}

};
</script>
<style scoped>



</style>