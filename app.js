var app = angular.module('myApp', []);

app.controller('mainCtrl', function($scope) {
//    $scope.fname = 'John Doe';
    
   $scope.ps = 'No';
   $scope.disableps = true;
   $scope.smr = 'No';
   $scope.disablesmr = true;
    
    $scope.checksmr = function () {
        if ($scope.smr == 'No')
            {
                $scope.disablesmr = true;
            }else
                {
                    $scope.disablesmr = false;
                }
    };
        
    $scope.checkps = function () {
        if ($scope.ps == 'No')
            {
                $scope.disableps = true;
            }else
                {
                    $scope.disableps = false;
                }
    };
    
//   
//            $scope.data4 = {
//        availableOptions: [
//            {
//                id: 'Afghan',
//                name: 'Afghan'
//            },
//            {
//                id: 'Albanian',
//                name: 'Albanian'
//            },
//            {
//                id: 'Algerian',
//                name: 'Algerian'
//            },
//            {
//                id: 'American',
//                name: 'American'
//            },
//            {
//                id: 'Andorran',
//                name: 'Andorran'
//            },
//            {
//                id: 'Angolan',
//                name: 'Angolan'
//            },
//            {
//                id: 'Antiguans',
//                name: 'Antiguans'
//            },
//            {
//                id: 'Argentinean',
//                name: 'Argentinean'
//            },
//            {
//                id: 'Armenian',
//                name: 'Armenian'
//            },
//            {
//                id: 'Australian',
//                name: 'Australian'
//            },
//            {
//                id: 'Austrian',
//                name: 'Austrian'
//            },
//            {
//                id: 'Azerbaijani',
//                name: 'Azerbaijani'
//            }
//    ],
//        selectedOption: {
//            id: '',
//            name: ''
//        }
//    };
  
  
});