<?php

/* TikuQuestionsBundle::layout.html.twig */
class __TwigTemplate_fcea0129a197b5f0510831ca1d580505 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'jqueryjs' => array($this, 'block_jqueryjs'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>



<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/css/bootstrap.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/css/messenger-theme-future.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/css/messenger.css"), "html", null, true);
        echo "\" />
";
        // line 13
        $this->displayBlock('css', $context, $blocks);
        // line 14
        echo "
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/js/messenger.js"), "html", null, true);
        echo "\"></script>

";
        // line 19
        $this->displayBlock('js', $context, $blocks);
        // line 20
        echo "
<script>
\$(document).ready(function(e) {

\t/*
    Messenger.options = {
\textraClasses: 'messenger-fixed messenger-on-bottom messenger-on-right',
\ttheme: 'future'
\t}
\t
\tMessenger().post({
\t  message: \"Weeeeee\",
\t  hideAfter: 3,
\t  hideOnNavigate: true
\t});*/
    ";
        // line 35
        if (array_key_exists("js", $context)) {
            // line 36
            echo "    ";
            echo (isset($context["js"]) ? $context["js"] : $this->getContext($context, "js"));
            echo "
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        $this->displayBlock('jqueryjs', $context, $blocks);
        // line 41
        echo "    

});

</script>



</head>

<body>



<div style=\"width:1000px;margin:0px auto;\">
<div class=\"container-fluid\">
\t<div class=\"row-fluid\">
\t\t<div class=\"span12\">
\t\t\t<div class=\"navbar\">
\t\t\t\t<div class=\"navbar-inner\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t <a data-target=\".navbar-responsive-collapse\" data-toggle=\"collapse\" class=\"btn btn-navbar\"><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></a> <a href=\"/app_dev.php/\" class=\"brand\">酷题库</a>
\t\t\t\t\t\t<div class=\"nav-collapse collapse navbar-responsive-collapse\">
\t\t\t\t\t\t\t<ul class=\"nav\">
";
        // line 71
        echo "\t\t\t\t\t\t\t\t<li id=\"qa\">
\t\t\t\t\t\t\t\t\t<a href=\"/app_dev.php/qa\">问答</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li id=\"tiku\">
\t\t\t\t\t\t\t\t\t<a href=\"/app_dev.php/tiku\">错题库</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li id=\"reg\">
\t\t\t\t\t\t\t\t\t<a href=\"/app_dev.php/reg\">现在注册</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"nav pull-right\">
\t\t\t\t\t\t\t\t<li id=\"awards\">
\t\t\t\t\t\t\t\t\t<a href=\"/app_dev.php/awards\">奖品</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li id=\"login\">
\t\t\t\t\t\t\t\t\t<a href=\"/app_dev.php/login\">登录</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"divider-vertical\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">我的账户<strong class=\"caret\"></strong></a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"/app_dev.php/me\"><i class=\" icon-pencil\"></i>&nbsp&nbsp练习历史</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-bell\"></i>&nbsp&nbsp我的错题</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\" icon-heart\"></i>&nbsp&nbsp我的收藏</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-shopping-cart\"></i>&nbsp&nbsp我的积分</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"divider\">
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-off\"></i>&nbsp&nbsp退出</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t";
        // line 121
        $this->displayBlock('body', $context, $blocks);
        // line 123
        echo "\t\t\t<div class=\"row-fluid\" style=\"border-top:1px solid #F2F2F2;padding-top:10px;\">
\t\t\t\t<div class=\"span8\">
\t\t\t\t\t<blockquote>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tgithub是一个全球化的开源社区.
\t\t\t\t\t\t</p> <small>关键词 <cite>开源</cite></small>
\t\t\t\t\t</blockquote>
\t\t\t\t</div>
\t\t\t\t<div class=\"span4\">
\t\t\t\t\t <address> <strong>Twitter, Inc.</strong><br /> 795 Folsom Ave, Suite 600<br /> San Francisco, CA 94107<br /> <abbr title=\"Phone\">P:</abbr> (123) 456-7890</address>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

</div>
</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "首页";
    }

    // line 13
    public function block_css($context, array $blocks = array())
    {
    }

    // line 19
    public function block_js($context, array $blocks = array())
    {
    }

    // line 39
    public function block_jqueryjs($context, array $blocks = array())
    {
        // line 40
        echo "    ";
    }

    // line 121
    public function block_body($context, array $blocks = array())
    {
        // line 122
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "TikuQuestionsBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 122,  229 => 121,  225 => 40,  222 => 39,  217 => 19,  212 => 13,  206 => 5,  183 => 123,  181 => 121,  129 => 71,  103 => 41,  101 => 39,  98 => 38,  92 => 36,  90 => 35,  73 => 20,  71 => 19,  66 => 17,  62 => 16,  58 => 15,  55 => 14,  53 => 13,  49 => 12,  45 => 11,  41 => 10,  37 => 9,  30 => 5,  24 => 1,);
    }
}
