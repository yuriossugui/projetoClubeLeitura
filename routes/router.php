<?php

function load(string $controller, string $action)
{
    try {
        // se controller existe
        $controllerNamespace = "app\\controllers\\{$controller}";

        if (!class_exists($controllerNamespace)) {
            throw new Exception("O controller {$controller} não existe");
        }

        $controllerInstance = new $controllerNamespace();

        if (!method_exists($controllerInstance, $action)) {
            throw new Exception(
                "O método {$action} não existe no controller {$controller}"
            );
        }

        $controllerInstance->$action((object) $_REQUEST);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

$router = [
  "GET" => [
    '/login'=>fn()=>load('LoginController','login'),
    '/genero'=>fn()=>load('LivroController','generoIndex'),
    '/encontros'=>fn()=>load('EncontroController','index'),
    '/livros'=>fn()=>load('LivroController','index'),
    '/membros'=>fn()=>load('MembroController','index'),
    "/" => fn () => load("HomeController", "index"),
    "/contact" => fn () => load("ContactController", "index"),
  ],
  "POST" => [
    "/contact" => fn () => load("ContactController", "store"),
    '/login'=>fn()=>load('LoginController','validacao'),
  ],
];
