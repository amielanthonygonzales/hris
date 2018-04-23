<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';

//Employee Controller
//app
$route['employee/(:any)/(:any)'] = 'app/Employee_Controller/view/$1/$2';
$route['register-employee'] = 'app/Employee_Controller/registerEmployee';
$route['employee-list'] = 'app/Employee_Controller/employeeList';
$route['employee-edit/(:any)'] = 'app/Employee_Controller/employeeEdit/$1';
//api
$route['get-all-department'] = 'api/Employee_Controller/getAllDepartment';
$route['add-employee'] = 'api/Employee_Controller/addEmployee';
$route['get-all-employee'] = 'api/Employee_Controller/getAllEmployee';
$route['get-employee/(:any)'] = 'api/Employee_Controller/getEmployee/$1';
$route['update-employee/(:any)'] = 'api/Employee_Controller/updateEmployeeInfo/$1';
$route['delete-employee/(:any)'] = 'api/Employee_Controller/deleteEmployeeInfo/$1';
$route['employee-datatable'] = 'api/Employee_Controller/dataTable';
$route['get-session'] = 'api/Employee_Controller/getEmployeeSession';
$route['profile'] = 'api/Employee_Controller/getEmployeeProfile';
$route['email'] = 'api/Employee_Controller/sendEmail';
$route['notification'] = 'api/Employee_Controller/sendNotification';


//Company
//app
$route['company'] = 'app/Company_Controller/view';
//api
$route['add-company'] = 'api/Company_Controller/addCompany';
$route['getAllCompanyInfo'] = 'api/Company_Controller/getAllCompanyInfo';

//Dashboard
//api
$route['get-all-hr-info'] = 'api/Dashboard_Controller/getAllHrInfo';
$route['dashboard-datatable'] = 'api/Dashboard_Controller/datatableDashboard';
//app
$route['dashboard'] = 'app/Dashboard_Controller/dashboard';
$route['dashboard-company'] = 'app/Dashboard_Controller/company';
$route['employee-register'] = 'app/Dashboard_Controller/registerEmployee';
$route['dashboard-department'] = 'app/Dashboard_Controller/department';
$route['dashboard-sss'] = 'app/Dashboard_Controller/sss';
$route['dashboard-pagibig'] = 'app/Dashboard_Controller/pagibig';
$route['dashboard-sss-reference'] = 'app/Dashboard_Controller/sssReference';



//Department Controller
//app
$route['department'] = 'app/Department_Controller/view';


//api
$route['add-department'] = 'api/Department_Controller/addDepartment';
$route['get-department'] = 'api/Department_Controller/getAllDepartment';
$route['delete-department/(:any)'] = 'api/Department_Controller/deleteDepartment/$1';
$route['update-department/(:any)'] = 'api/Department_Controller/updateDepartment/$1';
$route['get-department-name/(:any)'] = 'api/Department_Controller/getDepartmentName/$1';
$route['department-datatable'] = 'api/Department_Controller/datatableDepartment';

//Pag-Ibig
//api
$route['get-data-pagibig'] = 'api/Pagibig_Controller/getData';
$route['get-data-per-page/(:any)'] = 'api/Pagibig_Controller/getDataPerPage/$1';

//SSS
//api
$route['get-data-sss/(:any)'] = 'api/SSS_Controller/getDataPerPage/$1';
$route['get-all-reference'] = 'api/SSS_Controller/getAllReference';
$route['add-reference'] = 'api/SSS_Controller/addReference';
$route['sss-datatable'] = 'api/SSS_Controller/datatableSSS';
//app
$route['add-sss-reference'] = 'app/SSS_Controller/viewAddReference';

//Payed Contribution
//api
$route['saved-contribution'] = 'api/Paid_Controller/addContribution';
$route['get-contributions'] = 'api/Paid_Controller/getContributions';



// $route['register-employee'] = 'RegisterEmp_Controller/registerEmp';
// $route['employee'] = 'RegisterEmp_Controller/employeeTable';
$route['index'] = 'RegisterEmp_Controller/login';
$route['logout'] = 'RegisterEmp_Controller/logout';
$route['employee-view/(:any)'] = 'RegisterEmp_Controller/viewEmployee/$1';
$route['changeStatus/(:any)'] = 'RegisterEmp_Controller/changeStatus/$1';

$route['register-company'] = 'RegisterCompany_Controller/registerCompany';

$route['sss'] = 'SSS_Controller/index';
$route['sss-view/(:any)'] = 'SSS_Controller/sssView/$1';
$route['sss-edit/(:any)'] = 'SSS_Controller/sssEdit/$1';
$route['sss-update/(:any)'] = 'SSS_Controller/sssUpdate/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
