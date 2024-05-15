<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;





class ClienteController extends AbstractController

{
    /**
     * @Route("/cliente/list")
     */
    public function list():Response
    {

        $response = new Response('<html>Esta es la lista de clientes en el sistema.</html>');
        return $response;
        
    }


    /**
     * @Route("/cliente/new")
     * 
     */
    public function new():Response
    {
        $response=new Response();
        $response->setContent('<html>Esta es la ruta para crear nuevos clientes</html>');
        return $response;
    }


    /**
     * @Route("/cliente/json")
     */
    public function clienteJson():JsonResponse
    {

        $response= new JsonResponse();
        $response->setData([
            'success' => true,
            'data' => [
                ['id'=>1,'nombre'=>'Renata Miranda'],
                ['id'=>2,'nombre'=>'Mateo Barrios'],
                ['id'=>3,'nombre'=>'Juan Miranda'],
                ]
            ]);
            return $response;
   

    }

    /**
     * @Route("/cliente/listado")
     */
    public function listado(Request $request):JsonResponse
    {   
        //le pasamos por url el nombre del libro con id 4 , /cliente/listado?nombre=Pepe Pompin
        $nombre=$request->get('nombre');
        $nombrePorDefecto=$request->get('nombre','Peligroso');

        // dump($nombre);
        // die;
        $response= new JsonResponse();
        $response->setData([
            'success' => true,
            'data' => [
                ['id'=>1,'nombre'=>'Renata Miranda'],
                ['id'=>2,'nombre'=>'Mateo Barrios'],
                ['id'=>3,'nombre'=>'Juan Miranda'],
                ['id'=>4,'nombre'=>$nombrePorDefecto]
                ]
            ]);
            return $response;
            

    }

}




