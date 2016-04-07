(function() {
  'use strict';

  angular
      .module('angular')
      .service('webDevTec', webDevTec);

  /** @ngInject */
  function webDevTec() {
    var apiurl =""
    var data = [
     { 
      'cid':100900,
      'cname':'Gift'
     },
     { 
      'cid':200900,
      'cname':'Helth'
     },
     { 
      'cid':300900,
      'cname':'Medical'
     },
     { 
      'cid':400900,
      'cname':'Electronic'
     }
    ];

    this.getTec = function(){
      return data;
    };

this.api = function()
{
return apiurl;
}

  }

})();
