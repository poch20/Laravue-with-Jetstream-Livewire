//require('./bootstrap');

window.Vue = require('vue')

/****************************Import Vue-Router4-Next****************************/
import { createApp } from 'vue'
import { createWebHistory, createRouter } from "vue-router";
/****************************Import Vue-Router4-Next****************************/


/****************************Implement Vue-Router4-Next****************************/
const routes = [
  {
    path: '/test',
    name: "Test",
    component: require('./SFC/Test.vue').default,
  },

  {
    path: '/sample',
    name: 'Sample',
    component: require('./SFC/Sample.vue').default
  },


];


const router = createRouter({
  history: createWebHistory(''),
  routes: routes,
  linkActiveClass: ''
});
/****************************Implement Vue-Router4-Next****************************/

const MasterGlobalParentClassController = {

  components: {



  }, //End of Component

  data() {

    return {

      greet: 'Hello Index.blade.php'


    } // End of Returned Data to be use on child instance

  } // End of vue data

} // End Scope of Parent Controller

//Component Instance and its Property Attr's


const myGlobalScripts = Vue.createApp(MasterGlobalParentClassController)
myGlobalScripts.use(router)
myGlobalScripts.mount('#blade-dynamic-laravel-php')
