export default {
	async login(contaxt, payload){
			// console.log(payload)

		const response = await fetch('http://127.0.0.1:8000/api/login', {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json'
				},
				data: {...payload}
			});
		console.log(response);

		}
}