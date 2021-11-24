import axios from 'axios';

export default {
       async getEmployees(context, payload){
            let data;
            data = localStorage.getItem('employees')
            if(!data){

                const response = await axios({
                method: 'GET',
                    url: `http://127.0.0.1:8000/api/employees`,
                    headers: {
                       'Accept': '*/*',	
                       'Content-Type': 'application/json'
                  }
              });


                data = JSON.stringify(response.data.data);
                localStorage.setItem('employees', data);
            }

            context.commit('setEmployees', data);

        }

}