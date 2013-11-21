<?php

/* TikuQuestionsBundle:Default:courses.html.twig */
class __TwigTemplate_f89799838221828489da5ecfdaafc5a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TikuQuestionsBundle::layout.html.twig");

        $this->blocks = array(
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "        <div class=\"row-fluid\">
                <div class=\"span4\" style=\"border-right: 1px solid #CCC;\">
                \t<div class=\"thumbnail\" style=\"width:200px;height:200px;margin:10px auto;\">
\t\t\t\t\t\t<img alt=\"300x200\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/images/city.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t初中语法面面观
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p>全面的英文语法训练题库。</p>
\t\t\t\t\t\t\t<p>万全的英文语法获胜宝典。</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                \t<div class=\"thumbnail\" style=\"width:200px;height:200px;margin:10px auto;\">
\t\t\t\t\t\t<img alt=\"300x200\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/images/city.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t中考数学重难点
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p>直击历届中考数学重难点，全面，精确！</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                \t<div class=\"thumbnail\" style=\"width:200px;height:200px;margin:10px auto;\">
\t\t\t\t\t\t<img alt=\"300x200\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/images/city.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                
                
                </div>
                <div class=\"span8\">
                              <table class=\"table table-striped table-hover\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t编号
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t章节
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t学习状态
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chapters"]) ? $context["chapters"] : $this->getContext($context, "chapters")));
        foreach ($context['_seq'] as $context["index"] => $context["chapter"]) {
            // line 62
            echo "\t\t\t\t\t\t";
            $context["index"] = ((isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")) + 1);
            // line 63
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["chapter"]) ? $context["chapter"] : $this->getContext($context, "chapter")), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<i class=\"icon-info-sign\"></i>&nbsp&nbsp未学习
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<i class=\"icon-hand-right\"></i>&nbsp&nbsp进入学习
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['chapter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
                </div>
            </div>
";
    }

    public function getTemplateName()
    {
        return "TikuQuestionsBundle:Default:courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 79,  116 => 68,  110 => 65,  106 => 63,  103 => 62,  99 => 61,  64 => 29,  50 => 18,  36 => 7,  31 => 4,  28 => 3,);
    }
}
