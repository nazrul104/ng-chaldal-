(function() {
  'use strict';

  angular
    .module('angular')
    .directive('productList', productList);

  /** @ngInject */
  function productList() {
    var directive = {
      restrict: 'E',
      templateUrl: 'app/components/products/product.html',
      scope: {
          obj: '=',
      },
      controller: productListController,
      controllerAs: 'vm',
      bindToController: true
    };

    return directive;

    /** @ngInject */
    function productListController(moment,$scope,$http,datasource,basket) {
      var vm = this;
      var c=0;
      vm.relativeDate = moment(vm.creationDate).fromNow();
       $scope.cart_total =  basket.getCart();
      $http.get(datasource+'?f=6&main_category_id='+vm.obj.cid)
      .success(function(data) 
      {
        $scope.searcheddata =data;  
      });

    $scope.showMsg = function()
    {
      c=c+1;
      basket.setCart(c);
      $scope.cart_total =  basket.getCart();
    }

    }


  }

})();
