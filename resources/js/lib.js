require('./bootstrap');
window.Vue = require('vue')
import { createApp } from 'vue'
import { createWebHistory, createRouter } from "vue-router";

import { Form, HasError, AlertError } from './Vform'

window.Spanish = Form


const routes = [
  {
    path: '/:pathMatch(.*)',
    name: "Dashvue",
    component: require('./SFCVue/Dashboard.vue').default,
  },

  {
    path: '/users',
    name: 'Users',
    component: require('./SFCVue/Users.vue').default
  },

  {
    path: "/profile",
    name: "Profile",
    component: require('./SFCVue/Profile.vue').default,
  },

  {
    path: "/test",
    name: "Test",
    component: require("./SFCVue/Test.vue").default,
  },

  {
    path: "/sample",
    name: "Sample",
    component: require("./SFCVue/Sample.vue").default,
  }

];

const router = createRouter({
  history: createWebHistory(''),
  routes: routes,
  linkActiveClass: ''
});





const ParentClassController = {

  components: {



  }, //End of Component

  data() {

    return {

      greet: 'Hello Index.blade.php'


    } // End of Returned Data to be use on child instance

  } // End of vue data

} // End Scope of Parent Controller

//Component Instance and its Property Attr's
const myDOMScripts = Vue.createApp(ParentClassController)
myDOMScripts.component('on-the-fly-component', {
  props: ['myAttr'],
  template: ``
})

myDOMScripts.component(HasError.name, HasError)
myDOMScripts.component(AlertError.name, AlertError)
myDOMScripts.use(router)
myDOMScripts.mount('#laravue-app')
