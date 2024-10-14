<?php
    namespace app\controllers;
    use app\controllers\Controller;
    // use app\models\UsuarioModel;

    class UsuarioController{

        function index(){
            Controller::view('usuario');
        }

    }