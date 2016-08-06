var app = angular.module('setif.angular', ['ui.bootstrap']);
app.controller('SliderControl', function ($scope) {
  $scope.myInterval = 5000;
  var slides = $scope.slides = [];
  $scope.addSlide = function() {
    var newWidth = slides.length + 1;
    slides.push({
      image: '../setif/assets/images/slider/0' + newWidth + '.jpg'//,
      
    });
  };
  for (var i=0; i<4; i++) {
    $scope.addSlide();
  }
});
app.controller('ContactControl', function ($scope) {
    $scope.submitted = false;
    $scope.contacinfo = false;
    $scope.submitContactForm = function() {
    if ($scope.contactForm.$valid) {
        $scope.contactForm.contacinfo = true;
    }
    else
    {
      $scope.contactForm.submitted = true;
      $scope.contactForm.contacinfo = false;
    }
  }   
});
app.controller('NewMemberControl', function($scope,$modal,$http,$templateCache)
{
    $scope.submitted = false;
    $scope.success = false;
    $scope.submitSignupForm = function() {
        if ($scope.signupForm.$valid) {
                // Initialising the variable.
                $scope.return = [];
                //console.log($scope.member.dob);
                // Getting the list of users through ajax call.
                $http({
                  url: site_url + 'index.php/member/insertNewMember',
                  method: "POST",
                  data: $.param($scope.member),
                  cache: $templateCache,
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function (response, status, header, config) {
                    $scope.return = response;
                    var modalInstance = $modal.open({
                    templateUrl: 'sigupModel.html',
                    controller: 'ModalInstanceCtrl',
                    size: 'lg',
                    resolve: {
                        id: function () {
                          return $scope.return.membershipid;
                        },
                        message: function () {
                          return 'Messsage success';
                        },
                        success: function ()
                        {
                            return $scope.return.success;
                        }
                        
                    }
                    
            });
    });
               // alert($scope.return.membershipid);
                
                  
            }
            else
            {
              $scope.signupForm.submitted = true;
              
            }
        
        
  }  
});
app.controller('ModalInstanceCtrl', function ($scope, $modalInstance,id,message,success) {
  $scope.id = id;
  $scope.message = message;
  $scope.success = success;
  
  $scope.ok = function () {
    $modalInstance.close();
  };
  $scope.cancel = function () {
    $modalInstance.dismiss('cancel');
  };
});

app.controller('CalendarControl', function ($scope) {
  $scope.today = function() {
    var date = new Date(2013, 9, 22);
    $scope.dt = date.getFullYear()+'-'+date.getMonth()+1+'-'+date.getDate();
  
    
  };
  $scope.today();
  $scope.clear = function () {
    $scope.dt = null;
  };
 $scope.open = function($event){
    $event.preventDefault();
    $event.stopPropagation();
    $scope.opened = true;
 };

  ///$scope.dateOptions = {
    //formatYear: 'yy',
  ///  startingDay: 1
  //};
  $scope.formats = ['dd-MMMM-yyyy', 'yyyy/MM/dd', 'dd.MM.yyyy', 'shortDate'];
  $scope.format = $scope.formats[0];
});

app.controller('ActivityControl', function ($scope,$http)
{   
    $scope.activitylist = '';
    $scope.activityenable = false;
    init();
    function init()
    {
        $http({
        url: site_url + 'index.php/activity/getActivity',
        method: "GET",
        params: {"year":'2013',"type": ''}
        }).success(function (data) {
            $scope.activitylist = data.activity;
            $scope.activityenable = data.activity.length>0?true:false;
            
        });
    }
    $scope.submitActivityFrontForm = function() {
        $http({
        url: site_url + 'index.php/activity/getActivity',
        method: "GET",
        params: {"year":$scope.activity.activityyear,"type":$scope.activity.activitytype}
        }).success(function (data) {
            $scope.activitylist = data.activity;
            $scope.activityenable = data.activity.length>0?true:false;
        });
    };
});
app.controller('MemberMgmtControl',function($scope,$http,$modal)
{   
    $scope.memberlist = '';
    $scope.memberlistenable = false;
    init();
    function init()
    {
        $http({
        url: site_url + 'index.php/admin/membersList',
        method: "GET",
        params: {"membershipid":'',"name":''}
        }).success(function (data) {
            $scope.memberlist = data;
            $scope.memberlistenable = data.length>0?true:false;
        });
    }
    $scope.submitMemberFilterForm = function() {
        $http({
        url: site_url + 'index.php/admin/membersList',
        method: "GET",
        params: {"membershipid":$scope.membermgmt.membershipid,"name":$scope.membermgmt.name}
        }).success(function (data) {
            $scope.memberlist = data;
            $scope.memberlistenable = data.length>0?true:false;
            
        });
    };
    $scope.editMember = function(id)
    {
        $http({
                url: site_url + 'index.php/admin/getMember',
                method: "GET",
                params: {"membershipid":id}
                }).success(function (data) {
                    var modalInstance = $modal.open({
                        templateUrl: 'updateModalContent.html',
                        controller: 'updateModalInstanceCtrl',
                        size: 'md',
                        resolve: {
                            details: function () {
                              return data[0];
                            }                            
                          }
                      });
                });
    };
    $scope.deleteMember = function(id)
    {
        var modalInstance = $modal.open({
            templateUrl: 'confirmModalContent.html',
            controller: 'ConfirmModalInstanceCtrl',
            size: 'sm',
            resolve: {
                value: function () {
                  return id;
                },
                message: function(){
                    return "Are You Sure Delete";
                }
              }
          });
          modalInstance.result.then(function (selectedItem) {
            $http({
                url: site_url + 'index.php/admin/deleteMember',
                method: "GET",
                params: {"membershipid":selectedItem}
                }).success(function (data) {
                    $scope.membermgmt.membershipid = '';
                    $scope.membermgmt.name='';
                    init();
                });
          });
    };
});
app.controller('ConfirmModalInstanceCtrl', function ($scope,$modalInstance,value,message) {
  $scope.value = value;
  $scope.message = message;
  $scope.ok = function () {
    $modalInstance.close(value);
  };
  $scope.cancel = function () {
    $modalInstance.dismiss('cancel');
  };
});
app.controller('updateModalInstanceCtrl',function($scope,$http,$modalInstance,$templateCache,details){
    $scope.fname = details.fname;
    $scope.lname = details.lname;
    $scope.sex = details.sex;
    $scope.occupation = details.occupation;
    $scope.phone = details.phone;
    $scope.email = details.email;
    $scope.bloodgroup = details.bloodgroup;
    $scope.address = details.address;
    $scope.schemes = details.schemes;
    $scope.dob = details.dob;
    $scope.membershipid = details.membershipid;
    $scope.ok = function () {
    $http({
        url: site_url + 'index.php/admin/updateMember',
        method: "POST",
        data: $.param($scope.member),
        cache: $templateCache,
        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
      }).success(function (data) {
          $modalInstance.close();
          alert("Updated Sucessfully"+details.membershipid);
    });
   };
  $scope.cancel = function () {
    $modalInstance.dismiss('cancel');
  };
});


app.controller('NewActivityControl',function($scope,$http,$templateCache){
    $scope.message = '';
    $scope.submitActivityForm = function() {
                $http({
                  url: site_url + 'index.php/admin/insertNewActivity',
                  method: "POST",
                  data: $.param($scope.activity),
                  cache: $templateCache,
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function (response) {
                    $scope.activity = '';
                    $scope.message = 'Activity Updated successfully..........';
                });
};
});