<?php

namespace Tiku\QuestionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TikuQuestionsBundle:Index:index.html.twig');
    }
}
