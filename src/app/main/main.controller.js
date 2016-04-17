(function() {
  'use strict';

  angular
    .module('angular')
    .controller('MainController', MainController);

  /** @ngInject */
  function MainController($timeout, webDevTec, toastr,$stateParams,$http,datasource) {
    var vm = this;
    vm.classAnimation = '';
    vm.creationDate = 1457873297619;
    vm.showToastr = showToastr;
    activate();
    function activate()
     {

        $http.get(datasource+'?f=5')
          .success(function(data) {
           vm.categories =data;
         });

          $http.get(datasource+'?f=7')
          .success(function(data) {
           vm.data =data;
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

      vm.category_id = $stateParams.cid;
      vm.lookingfor = $stateParams.cname;
      vm.searcheddata = [];
      vm.selectedCategory = {"cid":$stateParams.cid,"category_name":$stateParams.cname};
    }

    vm.cart_total =  10;
  }
})();
