(function() {
  'use strict';

  angular
    .module('angular')
    .controller('MainController', MainController);

  /** @ngInject */
  function MainController($timeout, webDevTec, toastr,$scope,$stateParams,$http,datasource,basket) {
    var vm = this;
    vm.classAnimation = '';
    vm.creationDate = 1457873297619;
    vm.showToastr = showToastr;
    $scope.selectedCategory = {"cid":"","category_name":"all"};
    activate();
    function activate()
     {

        $http.get(datasource+'?f=5')
          .success(function(data) {
           $scope.categories =data;  
         });

          $http.get(datasource+'?f=7')
          .success(function(data) {
           $scope.data =data;  
         });

      $timeout(function() {
        vm.classAnimation = 'rubberBand';
      }, 4000);

    }

    function showToastr() {
      toastr.info('Fork <a href="https://github.com/Swiip/generator-gulp-angular" target="_blank"><b>generator-gulp-angular</b></a>');
      vm.classAnimation = '';
    }

    if ($stateParams.cid)
     {
      $scope.category_id = $stateParams.cid;
      $scope.lookingfor = $stateParams.cname;
      $scope.searcheddata = [];
      $scope.selectedCategory = {"cid":$stateParams.cid,"category_name":$stateParams.cname};
    }

    $scope.cart_total =  basket.getCart();
  }
})();
