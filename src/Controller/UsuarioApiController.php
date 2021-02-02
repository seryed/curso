<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UsuarioRepository;
use App\Entity\Usuario;
use App\Entity\Domicilio;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcherInterface;


/**
 * @Rest\Route("/api")
 */
class UsuarioApiController extends AbstractFOSRestController
{
 
    /**
     * @Rest\Get("/entrar", name="entrar")
     * @return Response
     */
    public function ingreso(Request $request){
       
       return $this->render("principal/respuesta.html.twig");      
    }
      
    /**
     * @Rest\Post("/entrarP", name="entrarP")
     * @Rest\RequestParam(name="usuario", description="nombre del usuario", strict=false, nullable=true)
     * @param Request $request
     * @param ParamFetcherInterface $paramFetcher
     * @return Response
     */
    public function ingresoP(Request $request, ParamFetcherInterface $paramFetcher){
        $nombre = $request->get('usuario');
        
        return $this->render("principal/respuesta.html.twig",['nombre' => $nombre]);      
     }

    /**
     * @Rest\Post("/confirmarLogin", name="confirmarLogin")
     * @Rest\RequestParam(name="usuario", description="nombre del usuario", strict=false, nullable=true)
     * @Rest\RequestParam(name="password", description="password del usuario", strict=false, nullable=true)
     * @param Request $request
     * @param ParamFetcherInterface $paramFetcher
     * @return Response
     */
    public function confirmarlogin(Request $request, ParamFetcherInterface $paramFetcher)
    {        
        $nombre = $paramFetcher->get('usuario');
        $password = $paramFetcher->get('password');
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository(Usuario::class)->findOneByNombre($nombre);
        dump($usuario);
       // $usuario = $em->getRepository('App:Usuario')->findOneBy(['nombre' => $nombre,
       // 'contrasenia' => $password]);

         if(!empty($usuario)){
                    $url ="principal/respuesta.html.twig";
                    $respuesta = 'Encontrado';
                    $error = '';
                }
                 else
                {
                    $url ="principal/login.html.twig";
                    $respuesta = 'NoEncontrado';
                    $error = 'Usuario o contraseña invalido';
                };
       //return JsonResponse(['resultado' => $respuesta, 'error' => $error]);
       return $this->render($url, ['respuesta' =>$respuesta,'error'=>$error,'nombre' => $nombre]);
    }

    
}
