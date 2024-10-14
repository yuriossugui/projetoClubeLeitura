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
    '/usuario'=>fn()=>load('UsuarioController','index'),
    '/logout'=>fn()=>load('LoginController','logout'),
    '/login'=>fn()=>load('LoginController','login'),
    '/genero'=>fn()=>load('LivroController','generoIndex'),
    '/encontros'=>fn()=>load('EncontroController','index'),
    '/livros'=>fn()=>load('LivroController','index'),
    '/excluirMembro'=>fn()=>load('MembroController','excluirMembro'),
    '/editarMembro'=>fn()=>load('MembroController','editarMembroIndex'),
    '/membros'=>fn()=>load('MembroController','index'),
    "/" => fn () => load("HomeController", "index"),
  ],
  "POST" => [
    '/editarMembro'=>fn()=>load('MembroController','AlterarMembro'),
    '/membro'=>fn()=>load('MembroController','store'),
    '/login'=>fn()=>load('LoginController','validacao'),
    "/contact" => fn () => load("ContactController", "store"),
    "/ex" =>fn()=>load('MembroController','delete')
  ],
];
