/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

// initalize routers
import VueRouter from 'vue-router'
Vue.use(VueRouter)

// initalize vform
import { Form, HasError, AlertError } from 'vform'
// declare form globally
window.Form=Form;
// register global vform components
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)


import VueProgressBar from 'vue-progressbar'
Vue.use(VueProgressBar, {
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '2px'
})

// laravel-vue-pagination
Vue.component('pagination', require('laravel-vue-pagination'));

import swal from 'sweetalert2'
window.swal = swal;
// Register swal
const toast = swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
}); window.toast = toast;

// pagination 
Vue.component('pagination', require('laravel-vue-pagination'));

// routes goes here
let routes = [
  { path: '/', component: require('./components/Home.vue').default },
  
  { path: '/category-doctors/:category', component: require('./components/doctors/CategoryDoctors.vue').default },
  { path: '/doctor-registration', component: require('./components/doctors/DoctorRegForm.vue').default },
  { path: '/doctor-details/:id',component: require('./components/doctors/DoctorDetails.vue').default },

  { path: '/blood-donor/:blood', component: require('./components/blood_donors/BloodDonors.vue').default },
  { path: '/ambulance', component: require('./components/Ambulance.vue').default },

  { path: '/volunteers', component: require('./components/volunteer/Volunteers.vue').default },
  { path: '/volunteer-form', component: require('./components/volunteer/VolunteersForm.vue').default },

  { path: '/contact-us', component: require('./components/ContactUs.vue').default },


  { path: '*', component: require('./components/NotFound.vue').default }
]
//here, path is the route and component: is the component file. We must create that component inside resources/js/components
const router = new VueRouter({
  mode:'history',
  routes // short for `routes: routes`
})



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('top_menu', require('./components/elements/TopMenu.vue').default);
Vue.component('home_slider', require('./components/elements/HomeSlider.vue').default);

Vue.component('short_links', require('./components/elements/ShortLinks.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.prototype.$photoPath = window.location.origin+'/storage/images/';

const app = new Vue({
    el: '#app',
    router, loading:true,
    
    created: function() {
       this.loading = false;
    },
});
