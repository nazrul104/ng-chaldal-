/* global malarkey:false, moment:false */
(function() {
  'use strict';

  angular
    .module('angular')
    .constant('malarkey', malarkey)
    .constant('datasource', "http://localhost/API-shop/trigger.php")
    .constant('product_image', "http://localhost/API-shop/img/")
    .constant('moment', moment);

})();
