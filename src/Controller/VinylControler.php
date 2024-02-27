<?php
namespace App\Controller ;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylControler {

    #[Route('/')]
    public function homepage(){

       return new Response('Title: rayen dlimi');
    }


}