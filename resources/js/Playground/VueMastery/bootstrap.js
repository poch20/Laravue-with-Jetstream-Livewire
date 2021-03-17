window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

try {

  window.$ = window.jQuery = require('jquery');
  //var $ = require( "jquery" );


  require('bootstrap');
  require('admin-lte');

 } catch (e) {}

window.axios = require('axios').default;;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
