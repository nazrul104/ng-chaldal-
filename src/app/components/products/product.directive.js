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
          obj: '='
      },
      controller: productListController,
      controllerAs: 'vm',
      bindToController: true
    };

    return directive;

    /** @ngInject */
    function productListController(moment,toastr,$http,datasource,basket,$window) {
      var vm = this;
      vm.total_amount =0.00;
      vm.total_item = 0;
      vm.relativeDate = moment(vm.creationDate).fromNow();
     /* vm.cartdata =  JSON.parse(basket.getCartData());*/
     if ($window.localStorage.getItem("cdata")) {
       vm.cartdata =  angular.fromJson($window.localStorage.getItem("cdata"));
       vm.total_amount = basket.cartTotalAmount();
       vm.total_item = basket.cartDataCounter();
     }
      $http.get(datasource+'?f=6&main_category_id='+vm.obj.cid)
      .success(function(data) 
      {
        vm.searcheddata =data;  
      });

    vm.AddItemIntoCart = function(item_id,item_name,item_price)
    {
          // This function add items into cart
          // Firstly, if items in cart > 0 then looping inside of cart data to identify whether new added item already exists or not.
          // if it's already available in cart then just unit amount of item & update the array.
          // otherwise, set new array object of item into cart data

             vm.cdata = {item_id: item_id,item_name: item_name,item_price: item_price,item_unit:1};
       /* basket.setCartData(vm.cdata);*/
        // vm.classAnimation = '';
          vm.isGet=0;
        if ($window.localStorage.getItem("cdata")) {
           vm.cartdata =  angular.fromJson(basket.getCartData());
            vm.cartdata.OrderList.forEach(function(e, i)
             {
                if (e.item_id==item_id) 
                { 
                    vm.cdata = {item_id: item_id,item_name: item_name,item_price: item_price,item_unit:e.item_unit+1};
                    basket.updateCartdata(i,vm.cdata);
                    toastr.success(item_name+" added successfully!");
                    vm.isGet=1;
                    vm.total_amount = basket.cartTotalAmount();
                }  
            });
            // if this new item not available in cart
               if(vm.isGet!=1)
              {
               basket.setCartData(vm.cdata);
               toastr.success(item_name+" added successfully!");
             
              }
         }else
         {
          // if no items in cart
             vm.cdata = {item_id: item_id,item_name: item_name,item_price: item_price,item_unit:1};
             basket.setCartData(vm.cdata);
            toastr.success(item_name+" added successfully!");
         }
      vm.cartdata =  angular.fromJson(basket.getCartData());
      vm.total_amount = basket.cartTotalAmount();
      vm.total_item = basket.cartDataCounter();
    }
       
  }
  }

})();
