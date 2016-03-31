(function() {
  'use strict';

  angular
    .module('angular')
    .config(routerConfig);

  /** @ngInject */
  function routerConfig($stateProvider, $urlRouterProvider) {
    $stateProvider
      .state('home', {
        url: '/',
        templateUrl: 'app/main/main.html',
        controller: 'MainController',
        controllerAs: 'main'
      })
      .state('search', {
        url: '/search/:cid/:cname',
        templateUrl: 'app/main/main.html',
        controller: 'MainController',
        controllerAs: 'main'
      }) 

        .state('shopping_cart', {
        url: '/shopping_cart',
        templateUrl: 'app/components/checkout/checkout_login.html',
        controller: 'CartController',
        controllerAs: 'cart'
      }) 
        .state('checkout', {
        url: '/checkout',
        templateUrl: 'app/components/checkout/checkout_gust.html',
        controller: 'CartController',
        controllerAs: 'cart'
      }) 

       .state('selectdeliveryaddress', {
        url: '/checkout/selectdeliveryaddress',
        templateUrl: 'app/components/checkout/checkout_deliveryarea.html',
        controller: 'CartController',
        controllerAs: 'cart'
      }) 

      .state('billing', {
        url: '/checkout/billing',
        templateUrl: 'app/components/checkout/chekout_payment.html',
        controller: 'CartController',
        controllerAs: 'cart'
      }) 

        .state('selectdeliverytimings', {
        url: '/checkout/selectdeliverytimings',
        templateUrl: 'app/components/checkout/checkout_deliverytimings.html',
        controller: 'CartController',
        controllerAs: 'cart'
      }) 
        .state('register', {
        url: '/register',
        templateUrl: 'app/components/checkout/register.html',
        controller: 'CartController',
        controllerAs: 'cart'
      }) ;
    $urlRouterProvider.otherwise('/');
  }

})();
