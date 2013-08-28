<?php

/* TikuQuestionsBundle:Index:index.html.twig */
class __TwigTemplate_9605da919d88b904c9c13117d9e756c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>首页</title>



<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/css/bootstrap.min.css"), "html", null, true);
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

<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/js/messenger.js"), "html", null, true);
        echo "\"></script>

<script>
\$(document).ready(function(e) {
    Messenger.options = {
\textraClasses: 'messenger-fixed messenger-on-bottom messenger-on-right',
\ttheme: 'future'
\t}
\t
\tMessenger().post({
\t  message: \"Weeeeee\",
\t  hideAfter: 3,
\t  hideOnNavigate: true
\t});

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
\t\t\t\t\t\t <a data-target=\".navbar-responsive-collapse\" data-toggle=\"collapse\" class=\"btn btn-navbar\"><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></a> <a href=\"#\" class=\"brand\">考神来了</a>
\t\t\t\t\t\t<div class=\"nav-collapse collapse navbar-responsive-collapse\">
\t\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">主页</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">课程</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">现在注册</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"nav pull-right\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">登录</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"divider-vertical\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">我的账户<strong class=\"caret\"></strong></a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">下拉导航1</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">下拉导航2</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">其他</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"divider\">
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">链接3</a>
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
\t\t\t<div class=\"carousel slide\" id=\"carousel-251295\">
\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t<li class=\"active\" data-slide-to=\"0\" data-target=\"#carousel-251295\">
\t\t\t\t\t</li>
\t\t\t\t\t<li data-slide-to=\"1\" data-target=\"#carousel-251295\">
\t\t\t\t\t</li>
\t\t\t\t\t<li data-slide-to=\"2\" data-target=\"#carousel-251295\">
\t\t\t\t\t</li>
\t\t\t\t</ol>
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t<div class=\"item active\">
\t\t\t\t\t\t<img alt=\"\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/images/1.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t棒球
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t棒球运动是一种以棒打球为主要特点，集体性、对抗性很强的球类运动项目，在美国、日本尤为盛行。
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img alt=\"\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/images/2.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t冲浪
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t冲浪是以海浪为动力，利用自身的高超技巧和平衡能力，搏击海浪的一项运动。运动员站立在冲浪板上，或利用腹板、跪板、充气的橡皮垫、划艇、皮艇等驾驭海浪的一项水上运动。
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t<img alt=\"\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/images/3.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t自行车
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t以自行车为工具比赛骑行速度的体育运动。1896年第一届奥林匹克运动会上被列为正式比赛项目。环法赛为最著名的世界自行车锦标赛。
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> <a data-slide=\"prev\" href=\"#carousel-251295\" class=\"left carousel-control\">‹</a> <a data-slide=\"next\" href=\"#carousel-251295\" class=\"right carousel-control\">›</a>
\t\t\t</div>
\t\t\t<ul class=\"thumbnails\">
\t\t\t\t<li class=\"span4\">
\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t<img alt=\"300x200\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/images/people.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t大牛视频
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t也称普林斯顿结构，是一种将程序指令存储器和数据存储器合并在一起的存储器结构。程序指令存储地址和数据存储地址指向同一个存储器的不同物理位置。
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"#\">浏览</a> <a class=\"btn\" href=\"#\">分享</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"span4\">
\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t<img alt=\"300x200\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/images/city.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t考试资料
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t哈佛结构是一种将程序指令存储和数据存储分开的存储器结构，它的主要特点是将程序和数据存储在不同的存储空间中，进行独立编址。
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"#\">浏览</a> <a class=\"btn\" href=\"#\">分享</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li class=\"span4\">
\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t<img alt=\"300x200\" src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/images/sports.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t讨论社区
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t改进型的哈佛结构具有一条独立的地址总线和一条独立的数据总线，两条总线由程序存储器和数据存储器分时复用，使结构更紧凑。
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"#\">浏览</a> <a class=\"btn\" href=\"#\">分享</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div class=\"row-fluid\" style=\"border-top:1px solid #F2F2F2;padding-top:10px;\">
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

    public function getTemplateName()
    {
        return "TikuQuestionsBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 173,  210 => 157,  191 => 141,  173 => 126,  159 => 115,  145 => 104,  54 => 16,  50 => 15,  46 => 14,  41 => 12,  37 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }
}
