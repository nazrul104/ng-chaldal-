(function() {
  'use strict';

  angular
    .module('angular')
    .controller('UsersController', UsersController);

  /** @ngInject */
  function UsersController($timeout, webDevTec,toastr,$stateParams,$http,datasource,basket,$location)
   {
    var vm = this;
    vm.classAnimation = '';
    vm.creationDate = 1457873297619;
    vm.pagecounter = 0;
    vm.useremail = "nazrul.mailme@gmail.com";
    vm.password = "123456";
     vm.alertMsg = function()
    {
        toastr.error('Invalid email and password', 'ERROR');
    }
   if(basket.getSession()==true)
   {
        $location.path("/checkout/selectdeliveryaddress");
   }

    vm.loginAuth = function()
    {

     if(vm.useremail!=null && vm.useremail!="" && vm.password!=null && vm.password!="")
     { 
        var data =angular.toJson({email:vm.useremail,password:vm.password});
        var request = $http({
            method: "post",
            url: datasource+"?f=9",
            data: data,
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        });
        request.success(function (data) {
          if (data.status=="success") 
          {
             basket.setSession(data.user_id);
             $location.path("/checkout/selectdeliveryaddress");
          }else
          {
           vm.alertMsg();
          }
         
        });
    }
       else
   {
       toastr.error('Please enter valid email and password', 'ERROR');
   }
   }


   vm.userRegistration = function()
   {
    
   }
  }
})();
