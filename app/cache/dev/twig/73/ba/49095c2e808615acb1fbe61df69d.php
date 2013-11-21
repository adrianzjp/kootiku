<?php

/* TikuQuestionsBundle:Default:index.html.twig */
class __TwigTemplate_73ba49095c2e808615acb1fbe61df69d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TikuQuestionsBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "首页";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t\t\t<div class=\"carousel slide\" id=\"carousel-251295\">
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
        // line 16
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
        // line 27
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
        // line 38
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
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/images/people.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t经典例题
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t历年经典考题，看过来！<br />
\t\t\t\t\t\t\t酷题库收录了历年经典考题，按照知识点进行分类，有的放矢，全面攻克。<br />
\t\t\t\t\t\t\t每道例题都有细心的解答，我们用心，学生放心！
\t\t\t\t\t\t\t
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
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/images/city.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t题型归纳
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t同类题目，一网打尽！<br />
\t\t\t\t\t\t\t酷题库的老师日夜奋战，为同学们准备了一场归纳盛宴。<br />
\t\t\t\t\t\t\t在此，每一道题目同学们都可以找到同类题目，学会举一反三，祝君成功！
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
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/images/sports.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t即刻问答
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t有问题，来这里！<br />
\t\t\t\t\t\t\t\t酷题库的老师将在24小时内给您进行专业详尽的知识回复。<br />
\t\t\t\t\t\t\t\t其实不仅仅如此，通常还会富有酷题库老师的学习建议哦，快来提问吧！
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"#\">浏览</a> <a class=\"btn\" href=\"#\">分享</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t
";
    }

    public function getTemplateName()
    {
        return "TikuQuestionsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 90,  119 => 72,  97 => 53,  79 => 38,  65 => 27,  51 => 16,  38 => 5,  35 => 4,  29 => 2,);
    }
}
