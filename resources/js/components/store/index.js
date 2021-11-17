import { createStore } from 'vuex';
import authModule from './auth/index'
const store = createStore({
	modules: {
		auth: authModule
	},

	state(){
		return {

		}
	},

	
	getters: {

	}



});
export default store;