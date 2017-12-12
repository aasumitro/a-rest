<?php

/*
|----------------------------------------------------
| Sistem Routing biar makin cuantek la urlnya       |
|----------------------------------------------------
*/

/*
|-----------------------------------------------------
| Bagian tampilin pagenya
|-----------------------------------------------------
| pada bagian ini kita nampilin pagenya biar
| pass user datang enak bisa liat sesuatu walau
| ini cuma untuk api saja haha
| disini ada 2 versi memanggil si home ada yang pake
| controller sama yang langsung get cuma yang di pake
| saya adalah yang pake controller biar gaul ehh MVC
|
| ini versi langsunya tanpa controller
|
| $app->get('/', function($request, $response){
|     Menampilkan twig template
|     return $this->view->render($response, 'home.twig');
| });
*/

    //Versi controllernya
    $app->get('/', 'DefaultController:index')->setName('home');


/*
|----------------------------------------------------
| Bagian Apinya                                     |
|----------------------------------------------------
*/

    //---------------------- Example APIs ------------------------------

        //Api untuk test perumpamaan user
        $app->get('/example', 'ExampleCrud:index');
        $app->get('/example/api/v1/datas', 'ExampleCrud:datas'); // get all
        $app->get('/example/api/v1/data/{id}', 'ExampleCrud:data'); // get by id
        $app->post('/example/api/v1/create/data', 'ExampleCrud:create'); //create with name
        $app->post('/example/api/v1/update/data', 'ExampleCrud:update'); //create with name
        $app->post('/example/api/v1/delete/data/{id}', 'ExampleCrud:delete'); //delete by id

    //---------------------- Example APIs ------------------------------


/*
|----------------------------------------------------
| User Authentication                               |
|----------------------------------------------------
| User Auth APIs
| Version 1.0
|
*/
    //Register
    $app->post('/api/v1/auth/singup', 'AuthController:postSingUp');
    //Login
    $app->post('/api/v1/auth/singin', 'AuthController:postSingIn');
    //Change Password
    $app->post('/api/v1/auth/password/change', 'AuthController:postChangePassword');

    //Test method Routes
    $app->post('/api/test', 'AuthController:getApiKeyById');