angular.module('listado_contenido',[])
 .component('contenidos',{
     templateUrl : '/templates/contenidos.php',
     controller : function ($http,$scope){
         var ctrl = this;
         var initContenidos = function () {
            $http.get('/api/contenido')
                .then(function (response){
                    ctrl.contenidos = response.data;
                    console.log(ctrl.contenidos);
                })
                .catch(function (){
                    ctrl.contenidos = [];
                })
         }
         initContenidos();
     }
 });