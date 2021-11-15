import { createStore } from 'vuex';

const store = createStore({

	state(){
		return {
			userId: null,
			token: null,
			tokenExpiry: null,
			didLogout: false
		}
	},

	mutations: {
		setUser(state, payload){
			state.userId = payload.userId;
			state.token = payload.token;
			state.tokenExpiry = payload.tokenExpiry;
			state.didLogout = false;
		}

	},

	actions: {
		login(contaxt, payload){
			
		}

	},

	getters: {
		userId(state){
			return state.userId;
		},

		token(state){
			return state.token;
		}
	}



})