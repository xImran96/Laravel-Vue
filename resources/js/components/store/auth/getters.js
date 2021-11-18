export default {
		userId(state){
			return state.userId || localStorage.getItem('userId');
		},

		token(state){
			return state.token || localStorage.getItem('access_token');
		},

		getName(state){
			return state.appName;
		},
}