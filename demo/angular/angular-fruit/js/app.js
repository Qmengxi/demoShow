var myapp=angular.module('myapp',["ngRoute"]);

//配置路由
myapp.config(["$routeProvider",function($routeProvider){
	$routeProvider.when("/main",{
		templateUrl:"template/main.html",
		controller:"mainController"
	}).when("/detail/:id",{
		templateUrl:"template/detail.html",
		controller:"detailController"
	}).when("/buycar",{
		templateUrl:"template/buycar.html",
		controller:"buycarController"
	}).when("/login",{
		templateUrl:"template/login.html",
		controller:"loginController"
	}).when("/register",{
		templateUrl:"template/register.html",
		controller:"registerController"
	}).otherwise({
		redirectTo:"/main"
	})
}])
