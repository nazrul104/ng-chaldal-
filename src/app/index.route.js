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
        controllerAs: 'vm'
      }) 

        .state('login', {
        url: '/login',
        templateUrl: 'app/components/users/login.html',
        controller: 'UsersController',
        controllerAs: 'vm'
      }) 
        .state('checkout', {
        url: '/checkout',
        templateUrl: 'app/components/checkout/checkout_gust.html',
        controller: 'CartController',
        controllerAs: 'vm'
      }) 

       .state('selectdeliveryaddress', {
        url: '/checkout/selectdeliveryaddress',
        templateUrl: 'app/components/checkout/checkout_deliveryarea.html',
        controller: 'CartController',
        controllerAs: 'vm'
      }) 

      .state('billing', {
        url: '/checkout/billing',
        templateUrl: 'app/components/checkout/chekout_payment.html',
        controller: 'CartController',
        controllerAs: 'vm'
      }) 

        .state('selectdeliverytimings', {
        url: '/checkout/selectdeliverytimings',
        templateUrl: 'app/components/checkout/checkout_deliverytimings.html',
        controller: 'CartController',
        controllerAs: 'vm'
      }) 
        .state('register', {
        url: '/register',
        templateUrl: 'app/components/users/registration.html',
        controller: 'UsersController',
        controllerAs: 'vm'
      }) ;
    $urlRouterProvider.otherwise('/');
  }

})();
