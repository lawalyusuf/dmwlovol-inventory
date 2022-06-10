//Vue components. It will recursively scan this directory for the Vue
//components and automatically register them with their "basename".

let login = require('./components/auth/login.vue').default;
let register = require('./components/auth/register.vue').default;
let home = require('./components/auth/home.vue').default;


//export the routes
export const routes = [
    { path: '/login', component: login, name: 'login' },
    { path: '/register', component: register, name: 'register' },
    { path: '/home', component: home, name: 'home' }

]