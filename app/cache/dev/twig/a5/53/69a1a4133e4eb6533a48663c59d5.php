<?php

/* TikuQuestionsBundle:Default:me.pinggu.html.twig */
class __TwigTemplate_a55369a1a4133e4eb6533a48663c59d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TikuQuestionsBundle:Default:me.html.twig");

        $this->blocks = array(
            'js' => array($this, 'block_js'),
            'jqueryjs' => array($this, 'block_jqueryjs'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TikuQuestionsBundle:Default:me.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_js($context, array $blocks = array())
    {
        // line 6
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/js/Chart.js"), "html", null, true);
        echo "\"></script>

";
    }

    // line 10
    public function block_jqueryjs($context, array $blocks = array())
    {
        // line 11
        echo "var pieData = [
\t\t\t\t{
\t\t\t\t\tvalue: 30,
\t\t\t\t\tcolor:\"#F38630\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tvalue : 50,
\t\t\t\t\tcolor : \"#E0E4CC\"
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tvalue : 100,
\t\t\t\t\tcolor : \"#69D2E7\"
\t\t\t\t}
\t\t\t
\t\t\t];

\tvar myPie = new Chart(document.getElementById(\"canvas\").getContext(\"2d\")).Pie(pieData);
";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "                              <canvas id=\"canvas\" height=\"450\" width=\"450\"></canvas>
";
    }

    public function getTemplateName()
    {
        return "TikuQuestionsBundle:Default:me.pinggu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 31,  65 => 30,  44 => 11,  41 => 10,  33 => 6,  30 => 5,);
    }
}
