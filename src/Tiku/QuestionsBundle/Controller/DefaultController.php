<?php

namespace Tiku\QuestionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TikuQuestionsBundle:Default:index.html.twig',array(
		    			'js'=>'$("li#mainpage").addClass("active")'));
    }
    
    public function loginAction(){
    	return $this->render('TikuQuestionsBundle:Default:login.html.twig',array(
    			'js'=>'$("li#login").addClass("active")'
    			));
    	
    }
    
    public function coursesAction(){
    	
    	$chapters=array('名词','代词','冠词','数词','形容词','副词','介词',
    			'连词','动词概说','助动词和情态动词','动词的一般现在时','动词的一般过去时',
    			'动词的进行时','动词的将来时','动词的完成时','被动语态','非谓语动词',
    			'句子的成分和基本句型','句子的种类','疑问句','句子的结构','主谓一致','直接引语与间接引语','倒装句');
    	return $this->render('TikuQuestionsBundle:Default:courses.html.twig',array('chapters'=>$chapters,
    			'js'=>'$("li#courses").addClass("active")'
		    			));
    }
    
    public function registerAction(){
    	
    	return $this->render('TikuQuestionsBundle:Default:register.html.twig',array(
		    			'js'=>'$("li#reg").addClass("active")'
		    			));
    }
    
    public function qaAction(){
		return $this->render('TikuQuestionsBundle:Default:login.html.twig',array(
		    			'js'=>'$("li#qa").addClass("active")'
		    			));    	
    	
    }
    public function awardsAction(){
		return $this->render('TikuQuestionsBundle:Default:login.html.twig',array(
		    			'js'=>'$("li#awards").addClass("active")'
		    			));    	
    	
    }
    
    public function tikuAction(){
		return $this->render('TikuQuestionsBundle:Default:tiku.html.twig',array(
		    			
		    			));    	
    }
    public function meAction(){
		return $this->render('TikuQuestionsBundle:Default:me.pinggu.html.twig',array(
		    			
		    			));    	
    }
}
