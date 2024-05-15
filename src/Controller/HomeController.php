<?php
namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController {
    /**
    * @Route("/home" )
    */
    public function home(): Response
    {
        return new Response
        (
            '<html><h1>VETERINARIA EL ANIMALITO</h1></html>'
        );
    }


    /**
     * @Route("/home/saludoUno/{nombre}/{apellido}")
     */
    public function saludar($nombre,$apellido){

        return new Response
        (
            '<html><h1>Bienvenido '.$nombre.' '.$apellido.'</h1></html>'
        );

    }

    /**
     * @Route("home/saludarDos/{edad}/{profesion}")
     */
    public function datos($edad,$profesion){
        return new Response(
            '<html>HOLA TUS DATOS SON: 
                <ul>edad:'.$edad.'</ul>
                <ul>profesion:'.$profesion.'</ul></html>');
    }











}