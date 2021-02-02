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


class PrincipalController extends AbstractController
{

    /**
     * @Route("/login", name="login")
     */
    public function login(): Response
    {
        return $this->render('principal/login.html.twig', [
            'controller_name' => 'PrincipalController',
            'entro' => 'Login',
            'error' => ''
        ]);
    }
    /**
     * @Route("/inicio", name="inicio")
     */
    public function inicio(): Response
    {
        return $this->render('principal/index.html.twig', [
            'controller_name' => 'PrincipalController',
            'entro' => 'Principal'
        ]);
    }

    /**
     * @Route("/ingreso", name="ingreso")
     */
    public function ingreso(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository('App:Usuario')->findAll();
        //$domicilio = $em->getRepository('App:Domicilio')->findAll();
     
        // $usuarioNuevo  = new Usuario();
        // $usuarioNuevo->setNombre("PEPE");
        // $usuarioNuevo->setContrasenia("PEPE_PASS");

        // $domicilio = new Domicilio();
        // $domicilio->setDomicilio("torre 2");
        // $domicilio->setLocalidad("La Plata");

        // $usuarioNuevo->setIdDomicilio($domicilio);
        
        // $em->persist($usuarioNuevo);
        // $em->flush();

        return $this->render('principal/index.html.twig', [
            'controller_name' => 'PrincipalController',
            'entro' => 'Ingreso'
        ]);
    }

    /**
     * @Route("/noticia", name="noticia")
     */
    public function prueba(): Response
    {        
        return $this->render('principal/noticia.html.twig', [
            'controller_name' => 'PrincipalController',
            'entro' => 'Noticia',
            'titulo' => 'Titulo de la noticia'
        ]);
        //return new JsonResponse(['data' => 123]);
    }

    //  /**
    //  * @Route("/confirmarlogin", name="confirmarlogin")
    //  */
    // public function confirmarlogin(Request $request): Response
    // {        
    //     $nombre = $request->get('usuario');
    //     $password = $request->get('password');
    //     $em = $this->getDoctrine()->getManager();
    //     $usuario = $em->getRepository('App:Usuario')->findOneBy(['nombre' => $nombre,
    //     'contrasenia' => $password]);
    //     if(  $usuario != null)
    //              return $this->redirectToRoute('ingreso');
    //              else
    //             return $this->render('principal/login.html.twig', [
    //                 'controller_name' => 'PrincipalController',
    //                 'entro' => 'Noticia',
    //                 'titulo' => 'Titulo de la noticia',
    //                 'error' => 'Usuario o contraseña invalido'
    //             ]);
    // }

    
}
