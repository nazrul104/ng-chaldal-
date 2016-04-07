(function() {
  'use strict';

  angular
    .module('angular')
    .factory('basket', function ($window) {
     
      var cartData={"OrderList":[]};
      var isLogged = false;
      var logged_Id = 0;
      return {
        setCartData:function(data)
        {
         
          if($window.localStorage.getItem("cdata")!=null)
          {
               cartData =angular.fromJson($window.localStorage.getItem("cdata"));
               cartData.OrderList.push(data);
               $window.localStorage.setItem("cdata",angular.toJson(cartData));
          }else
          {

               cartData.OrderList.push(data);
              
               $window.localStorage.setItem("cdata",angular.toJson(cartData));
          }
        },
        getCartData:function()
        {
            cartData =$window.localStorage.getItem("cdata");
           return cartData;
        },
        updateCartdata:function(i,data)
        {
            cartData =angular.fromJson($window.localStorage.getItem("cdata"));
            cartData.OrderList[i]=data;
            $window.localStorage.setItem("cdata",angular.toJson(cartData));
        },
         cartTotalAmount:function()
        {
            var total=0.00;
            cartData =angular.fromJson($window.localStorage.getItem("cdata"));
             cartData.OrderList.forEach(function(e)
            {
                total=total+(parseFloat(e.item_price)*e.item_unit);
            });
             return total;
        },
          cartDataCounter:function()
        {
              var t=0;
             cartData =angular.fromJson($window.localStorage.getItem("cdata"));
            cartData.OrderList.forEach(function(e)
            {
            t=t+e.item_unit;
            });
          
           return t;
        },
        setSession:function(user_id)
        {
          isLogged = true;
          logged_Id = user_id;
        },
        getSession:function()
        {
          return isLogged;
        },
        getUserId:function()
        {
          return logged_Id;
        }
      };
    })

})();
