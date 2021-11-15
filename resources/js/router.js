import { createRouter, createWebHistory } from "vue-router";


import Login from "./components/auth/Login.vue";
import App from "./components/App.vue";


const routes = [

		{

		path: "/",
		name: "login",
		component: Login
		
		},

		{
		
		path: "/dashboard",
		name: "index",
		component: Login
		
		},

]


export default createRouter({
	history: createWebHistory(),
	routes
});



