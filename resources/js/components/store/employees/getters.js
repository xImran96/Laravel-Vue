export default {

    getEmployees(state){
        return JSON.parse(state.employees) || JSON.parse(localStorage.getItem('employees'));
    }

}