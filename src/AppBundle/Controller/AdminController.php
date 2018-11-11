<?php
/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 11/11/2018
 * Time: 23:06
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    public function indexAction(Request $request)
    {
        $user = $this->getUser();
        return $this->render(
            '/admin/index.html.twig',
            [
                'user' => $user
            ]
        );
    }
}