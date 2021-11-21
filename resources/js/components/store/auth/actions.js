import axios from 'axios';

export default {
	async login(contaxt, payload){
			

		const response = await axios({
		  method: 'POST',
  			url: `http://127.0.0.1:8000/api/login`,
  			headers: {
 				'Accept': '*/*',	
				'Content-Type': 'application/json'
			},
			data: JSON.stringify({
				...payload	
			})
		});

		const userData = response.data.data;

		console.log(response.data.data)

		localStorage.setItem('userId', response.data.data.user.id)

		localStorage.setItem('access_token', response.data.data.tokenData.token);

		contaxt.commit('setUser', {
					userId: response.data.data.user.id,
					token: response.data.data.tokenData.token
			});

		},

		async logout(contaxt, state){
			console.log(contaxt.rootGetters.token);

			const responce = await axios({
		  				method: 'POST',
  							url: `http://127.0.0.1:8000/api/logout`,
  							headers: {
 								'Accept': '*/*',	
								'Content-Type': 'application/json',
								'Authorization':`Bearer ${contaxt.rootGetters.token}`
							}
					});

			
			localStorage.removeItem('userId');
			localStorage.removeItem('access_token');

			contaxt.commit('setUser', {
					userId: null,
					token: null
			});

		}


}