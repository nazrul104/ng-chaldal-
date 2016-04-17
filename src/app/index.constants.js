/* global malarkey:false, moment:false */
(function() {
  'use strict';

  angular
    .module('angular')
    .constant('malarkey', malarkey)
    .constant('datasource', "http://localhost/API-shop_test/web_api_router.php")
    .constant('product_image', "http://localhost/API-shop_test/img/")
    .constant('moment', moment);

})();
