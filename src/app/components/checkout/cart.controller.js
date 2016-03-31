(function() {
  'use strict';

  angular
    .module('angular')
    .controller('CartController', CartController);

  /** @ngInject */
  function CartController($timeout, webDevTec, toastr,$scope,$stateParams,$http,datasource,basket,$location) {
    var vm = this;
    vm.classAnimation = '';
    vm.creationDate = 1457873297619;
    $scope.pagecounter = 0;
    $scope.CheckOutContinue=function()
    {
      //btnstate=2 registration page &  =1 guest user
        if($scope.btnstate==1)   
     {
          $location.path("/checkout");
     }
     if($scope.btnstate==2)   
     {
          $location.path("/register");
     }
    }
    $scope.CustomerDetails = function()
    {
      $location.path("/checkout");
    }

    $scope.loginAuth = function()
    {
       $location.path("/checkout/selectdeliveryaddress");
       $scope.pagecounter += 1; 
    }
  }
})();
