require('./bootstrap');
window.Vue = require('vue')
/****************************Import Vue-Router4-Next****************************/
import { createApp } from 'vue'
import { createWebHistory, createRouter } from "vue-router";
/****************************Import Vue-Router4-Next****************************/
import moment from 'moment'
import { Form, HasError, AlertError } from './Vform'
import Swal from 'sweetalert2'

import VueProgressBar from "@aacassandra/vue3-progressbar";

import  Herokucert from './SFCVue/HerokuCert.vue'


var Emitter = require('tiny-emitter');




window.Spanish = Form

/*******************************Global SWAL2*************************************************/
window.Swal = Swal
window.Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})
/*******************************Global SWAL2*************************************************/


/****************************Implement Vue-Router4-Next****************************/
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
    path: "/user-profile",
    name: "UserProfile",
    props: true,
    component: require('./SFCVue/Profile.vue').default,
  },

  {
    path: "/invoice",
    name: "Invoice",
    component: require('./SFCVue/Invoice.vue').default,
  },

  {
    path: "/post-res",
    name: "PostRes",
    component: require('./SFCVue/PostRes.vue').default,
  },


  {
    path: '/requirement-files',
    name: 'Requirement Files',
    props: true,
    component: Herokucert
  },

  {
    path: '/user-file-uploads',
    name: "FileUser",
    props: true,
    component: require('./SFCVue/FileUser.vue').default
  },

];

const router = createRouter({
  history: createWebHistory(''),
  routes: routes,
  linkActiveClass: ''
});
/****************************Implement Vue-Router4-Next****************************/



/******************************************https://github.com/scottcorgan/tiny-emitter****************/
window.CustomEventHandler = new Emitter();
/******************************************https://github.com/scottcorgan/tiny-emitter****************/

/** <!-- https://www.npmjs.com/package/@aacassandra/vue3-progressbar --> **/
const options = {
  color: "#bffaf3",
  failedColor: "#874b4b",
  thickness: "5px",
  transition: {
    speed: "0.2s",
    opacity: "0.6s",
    termination: 300,
  },
  autoRevert: true,
  location: "left",
  inverse: false,
};
/** <!-- https://www.npmjs.com/package/@aacassandra/vue3-progressbar --> **/

const ParentClassController = {

  components: {

    Herokucert

  }, //End of Component
  name: "RouterComponent",

  props: {

  }, // End of props object property

  data() {

    return {


      props: {
        AuthType: {
          type: String
        },
        AuthType: {
          type: String
        }
      },
      vmAttr__InpTS_IndexBladeSearch: '',



    } // End of Returned Data to be use on child instance

  }, // End of vue data

  methods: {


    evaKUCLI__InpTS_ButtS_SearchIt(){
      let theThisKWPointsTo = this
      let iodashDeb = {
        iodash: _.debounce( () => {
          CustomEventHandler.emit('Search Implementation',function(){
            return theThisKWPointsTo
          })
        },1000),

        iodashForUserUploads: _.debounce( () => {
          CustomEventHandler.emit('Search Implementation On User Uploads',function(){
            return theThisKWPointsTo
          })
        },1000)

      }
      iodashDeb.iodash()
      iodashDeb.iodashForUserUploads()
      //CustomEventHandler.emit('Search Implementation', function(){})},1000)
    }


  },

  computed: {

  } // End of computed object property
} // End Scope of Parent Controller

//Component Instance and its Property Attr's
const myGlobalLibScripts = Vue.createApp(ParentClassController)

/*******************************Momentjs*************************************************/
myGlobalLibScripts.config.globalProperties.$filters = {
  globalVueFilterHelperMomentjs(created) {
    return moment(created).format('MMMM Do YYYY')
  }
}
/*******************************Momentjs*************************************************/

myGlobalLibScripts.component('on-the-fly-component', {
  props: ['myAttr'],
  template: ``
})

myGlobalLibScripts.component('send-http-request', {

})

myGlobalLibScripts.component(HasError.name, HasError)
myGlobalLibScripts.component(AlertError.name, AlertError)

/** <!-- https://www.npmjs.com/package/@aacassandra/vue3-progressbar --> **/
myGlobalLibScripts.use(VueProgressBar, options)
/** <!-- https://www.npmjs.com/package/@aacassandra/vue3-progressbar --> **/

myGlobalLibScripts.use(router)
myGlobalLibScripts.mount('#laravue-app')
