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

class WorkbenchController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render(
            'workbench/index.html.twig',
            [
                'projects' => 'projects'
            ]
        );
    }
}