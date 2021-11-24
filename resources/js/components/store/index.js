import { createStore } from 'vuex';
import authModule from './auth/index'
import employeeModule from './employees/index'
const store = createStore({
	modules: {
		auth: authModule,
		employee: employeeModule
		
	},

	state(){
		return {

		}
	},

	getters: {

	}

});

export default store;