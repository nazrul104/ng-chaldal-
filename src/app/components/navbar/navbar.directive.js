(function() {
  'use strict';

  angular
    .module('angular')
    .directive('acmeNavbar', acmeNavbar);

  /** @ngInject */
  function acmeNavbar() {
    var directive = {
      restrict: 'E',
      templateUrl: 'app/components/navbar/navbar.html',
      scope: {
          obj: '='
      },
      controller: NavbarController,
      controllerAs: 'vm',
      bindToController: true
    };
    return directive;
    /** @ngInject */
    function NavbarController(moment) {
      var vm = this;
      vm.relativeDate = moment(vm.creationDate).fromNow();
    }
  }

})();
