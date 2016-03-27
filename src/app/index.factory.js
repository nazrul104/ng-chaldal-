(function() {
  'use strict';

  angular
    .module('angular')
    .factory('basket', function () {
      var items =10;
      var cartData={"OrderList":[]};
      return {
        setCartData:function(data)
        {
         
          if(window.localStorage.getItem("cdata")!=null)
          {
               cartData =JSON.parse(window.localStorage.getItem("cdata"));
               cartData.OrderList.push(data);
               window.localStorage.setItem("cdata",JSON.stringify(cartData));
          }else
          {

               cartData.OrderList.push(data);
              
               window.localStorage.setItem("cdata",JSON.stringify(cartData));
          }
        },
        getCartData:function()
        {
            cartData =window.localStorage.getItem("cdata");
           return cartData;
        },
        updateCartdata:function(i,data)
        {
            cartData =JSON.parse(window.localStorage.getItem("cdata"));
            cartData.OrderList[i]=data;
            window.localStorage.setItem("cdata",JSON.stringify(cartData));
        },
         cartTotalAmount:function()
        {
            var total=0.00;
            cartData =JSON.parse(window.localStorage.getItem("cdata"));
             cartData.OrderList.forEach(function(e, i)
            {
                total=total+(parseFloat(e.item_price)*e.item_unit);
            });
             return total;
        },
          cartDataCounter:function()
        {
              var t=0;
             cartData =JSON.parse(window.localStorage.getItem("cdata"));
            cartData.OrderList.forEach(function(e, i)
            {
            t=t+e.item_unit;
            });
          
           return t;
        }
      };
    })

})();
