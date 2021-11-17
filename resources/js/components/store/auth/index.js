import mutations from './mutations';
import actions from './actions';
import getters from './getters';


export default {
	state(){
		return {
			userId: null,
			token: null,
			tokenExpiry: null,
			didLogout: false,
			appName: 'Imrania'
		}
	},
	mutations,
	actions,
	getters
}