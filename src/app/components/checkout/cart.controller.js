(function() {
  'use strict';

  angular
    .module('angular')
    .controller('CartController', CartController);

  /** @ngInject */
  function CartController($timeout, webDevTec, toastr,$stateParams,$http,datasource,basket,$location,$window) {
    var vm = this;
    vm.classAnimation = '';
    vm.creationDate = 1457873297619;
    vm.pagecounter = 0;
    vm.alertMsg = function(data)
    {
        toastr.error(data, 'ERROR');
    }
    vm.CheckOutContinue=function()
    {
      //btnstate=2 registration page &  =1 guest user
        if(vm.btnstate==1)   
     {
          $location.path("/checkout");
     }
     if(vm.btnstate==2)   
     {
          $location.path("/register");
     }
    }
    vm.CustomerDetails = function()
    {
      $location.path("/checkout");
    }

    vm.step1_SelectDeliveryAddress = function()
    {
      if (vm.delivery_area!=undefined && vm.delivery_area!="") 
      {
          $window.localStorage.setItem("delivery_address",vm.delivery_area);
          $location.path("/checkout/selectdeliverytimings");
      }
      else
      {
        vm.alertMsg("Please select delivery address!");
      }
    }

    vm.step2_SelectDeliveryTimings = function()
    {

      if (vm.delivery_date!=undefined && vm.delivery_date!="" && vm.delivery_time!=undefined && vm.delivery_time!="") 
      {
          $window.localStorage.setItem("delivery_time",vm.delivery_time);
          $window.localStorage.setItem("delivery_date",vm.delivery_date);
         $location.path("/checkout/billing");
      }
      else
      {
        vm.alertMsg("Please select delivery date and time!");
      }
    }
vm.step3_selectPaymentMethod = function(p)
{
   $window.localStorage.setItem("payment_type",p);
}
    vm.submitOrder = function()
    {
       var  ptype=$window.localStorage.getItem("payment_type");
       var  delivery_address=$window.localStorage.getItem("delivery_address");
       var  devtime=$window.localStorage.getItem("delivery_time");
       var  devdate=$window.localStorage.getItem("delivery_date");


        var data =angular.toJson({user_id:basket.getUserId(),total_amount:basket.cartTotalAmount(),discount_amount:0,grand_total:basket.cartTotalAmount(),payment_type:ptype,payment_status:1,special_instruction:'test order',delivery_address:delivery_address,delivery_date:devdate,delivery_time:devtime,isConfirmed:1,datalist:basket.getCartData()});
        var request = $http({
            method: "post",
            url: datasource+"?f=10",
            data: data,
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        });
        request.success(function (data) {
       
          if (data.status=="success") 
          {
             toastr.success("Your order has been successfully saved!<br> We will shortly contact with you");    
             $location.path("/checkout/selectdeliveryaddress");
          }else
          {
           vm.alertMsg();
          }
         
        });
    }
  }
})();
