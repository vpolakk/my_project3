<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestVerstkaController extends AbstractController
{   /**
 * @Route("/test/verstka")
 */
    public function number(): Response
    {
        return $this->render('test/verstka.html.twig');
    }
}