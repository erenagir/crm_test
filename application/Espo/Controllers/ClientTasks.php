<?php
// Espo/Controllers/ClientTasks.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
class ClientTasks
{
    #[Route('/ClientTasks')]
    public function number(): Response
    {
        
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}