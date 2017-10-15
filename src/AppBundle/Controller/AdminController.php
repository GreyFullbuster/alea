<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
	/**
     * @Route("/")
     */
	public function indexAction(Request $request)
    {
        // you can override this method to perform additional checks and to
        // perform more complex logic before redirecting to the other methods
    }
}