<?php

/* TikuQuestionsBundle:Default:me.html.twig */
class __TwigTemplate_6558dea37251994a3b9f78b1d6338fbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TikuQuestionsBundle::layout.html.twig");

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TikuQuestionsBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "\t<style>
\t\t.nav-zjp li a{padding:5px;}
\t
\t</style>


";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "        <div class=\"row-fluid\">
                <div class=\"span4\" style=\"border-right: 1px solid #CCC;\">
                <ul class=\"nav nav-list nav-zjp\" style=\"text-align:center;\">
";
        // line 17
        echo "\t\t\t\t\t\t  <li><a href=\"#\">练习历史</a></li>
\t\t\t\t\t\t  <li><a href=\"#\">我的错题</a></li>
\t\t\t\t\t\t  <li><a href=\"#\">我的收藏</a></li>
\t\t\t\t\t\t  <li><a href=\"#\">我的积分</a></li>
\t\t\t\t\t\t  <li class=\"active\"><a href=\"#\">我的评估</a></li>
\t\t\t\t</ul>
                
                </div>
                <div class=\"span8\">
                
                
                ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "                </div>
         </div>
";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TikuQuestionsBundle:Default:me.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 28,  66 => 29,  64 => 28,  51 => 17,  46 => 13,  43 => 12,  68 => 31,  65 => 30,  44 => 11,  41 => 10,  33 => 4,  30 => 3,);
    }
}
