(function() {
  'use strict';

  angular
    .module('angular')
    .directive('asideCategory', asideCategory);

  /** @ngInject */
  function asideCategory() {
    var directive = {
      restrict: 'E',
      templateUrl: 'app/components/category/category.html',
      scope: {
          obj: '@',
      },
      controller: CategoryController,
      controllerAs: 'vm',
      bindToController: true
    };

    return directive;

    /** @ngInject */
    function CategoryController(moment,$scope,$http,datasource) {
              $http.get(datasource+'?f=5')
          .success(function(data) {
           $scope.categories =data;  
         });
      var vm = this;

      // "vm.creation" is avaible by directive option "bindToController: true"
      vm.relativeDate = moment(vm.creationDate).fromNow();
    }
  }

})();
