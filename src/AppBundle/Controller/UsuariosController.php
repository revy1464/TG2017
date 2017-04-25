<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Perfiles;

class UsuariosController extends Controller
{
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Usuarios:index.html.twig', [
            'texto' => "Probando desde el controlador de Usuario"
        ]);
    }
    
    public function addPerfilAction() {//Agrega un perfil de Usuario
        $perfil= new Perfiles();
        $perfil->setIdperfilUsuario("Sec");
        $perfil->setNombrePerfil("Secretaria");
        $perfil->setDescripcionPerfil("Perfil Agregado desde UsuariosController");
        
        $em=$this->getDoctrine()->getEntityManager();
        $em->persist($perfil);
        $flush=$em->flush();
        
        if($flush!=null){echo "El perfil no se ha creado correctamente";}
        else{echo "Perfil Creado";}
        
        die();
    }
}
