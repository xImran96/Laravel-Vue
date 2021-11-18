import { createRouter, createWebHistory } from "vue-router";


import Login from "./components/auth/Login.vue";
import App from "./components/App.vue";
import Dashboard from "./components/pages/Dashboard.vue";


const routes = [

		{

		path: "/",
		name: "login",
		component: Login
		
		},

		{
		
		path: "/dashboard",
		name: "index",
		component: Dashboard
		
		},

]


export default createRouter({
	history: createWebHistory(),
	routes
});



