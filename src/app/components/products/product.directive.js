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
    function productListController(moment,$scope,toastr,$http,datasource,basket) {
      var vm = this;
      var c=0;
      $scope.total_amount =0.00;
      $scope.total_item = 0;
      vm.relativeDate = moment(vm.creationDate).fromNow();
     /* $scope.cartdata =  JSON.parse(basket.getCartData());*/
     if (window.localStorage.getItem("cdata")) {
       $scope.cartdata =  JSON.parse(window.localStorage.getItem("cdata"));
       $scope.total_amount = basket.cartTotalAmount();
       $scope.total_item = basket.cartDataCounter();
     }
      $http.get(datasource+'?f=6&main_category_id='+vm.obj.cid)
      .success(function(data) 
      {
        $scope.searcheddata =data;  
        console.log(data);
      });

    $scope.AddItemIntoCart = function(item_id,item_name,item_price)
    {
          // This function add items into cart
          // Firstly, if items in cart > 0 then looping inside of cart data to identify whether new added item already exists or not.
          // if it's already available in cart then just unit amount of item & update the array.
          // otherwise, set new array object of item into cart data

             $scope.cdata = {item_id: item_id,item_name: item_name,item_price: item_price,item_unit:1};
       /* basket.setCartData($scope.cdata);*/
        // vm.classAnimation = '';
          $scope.isGet=0;
        if (window.localStorage.getItem("cdata")) {
           $scope.cartdata =  JSON.parse(basket.getCartData());
            $scope.cartdata.OrderList.forEach(function(e, i)
             {
                if (e.item_id==item_id) 
                { 
                    $scope.cdata = {item_id: item_id,item_name: item_name,item_price: item_price,item_unit:e.item_unit+1};
                    basket.updateCartdata(i,$scope.cdata);
                    toastr.success(item_name+" added successfully!");
                    $scope.isGet=1;
                    $scope.total_amount = basket.cartTotalAmount();
                }  
            });
            // if this new item not available in cart
               if($scope.isGet!=1)
              {
               basket.setCartData($scope.cdata);
               toastr.success(item_name+" added successfully!");
             
              }
         }else
         {
          // if no items in cart
             $scope.cdata = {item_id: item_id,item_name: item_name,item_price: item_price,item_unit:1};
             basket.setCartData($scope.cdata);
            toastr.success(item_name+" added successfully!");
         }
      $scope.cartdata =  JSON.parse(basket.getCartData());
      $scope.total_amount = basket.cartTotalAmount();
      $scope.total_item = basket.cartDataCounter();
    }
       
  }
  }

})();
