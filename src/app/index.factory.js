(function() {
  'use strict';

  angular
    .module('angular')
    .factory('basket', function () {
      var items =10
      return {
        setCart:function(s)
        {
          items =s;
        },
        getCart:function()
        {
          return items;
        }
      };
    })

})();
