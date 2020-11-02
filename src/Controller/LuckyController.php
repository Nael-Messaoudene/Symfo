<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{

     /**
      * @Route("/number")php
      */
    public function toto(): Response
    {
        $number = random_int(0, 1000);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}

?>
