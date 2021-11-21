import { createRouter, createWebHistory } from "vue-router";

import Login from "./components/auth/Login.vue";
import App from "./components/App.vue";
import Dashboard from "./components/pages/Dashboard.vue";
import store from './components/store/index';


const routes = [

		{

		path: "/",
		name: "login",
		component: Login
		
		},

		{
			path: "/dashboard",
			name: "index",
			component: Dashboard,
			meta: {
				requiresAuth: true
				}
		
		},

		{
			path: "/employees",
			name: "employees",
			component: Dashboard,
			meta: {
				requiresAuth: true
				}
		
		},

]


const router =  createRouter({
	history: createWebHistory(),
	routes
});


router.beforeEach(function(to, _, next){

	if(to.meta.requiresAuth && !store.getters.token){
		next('/')
	}else{
		next()
	}

});

export default router;


