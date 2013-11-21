<?php

/* TikuQuestionsBundle:Default:tiku.html.twig */
class __TwigTemplate_57031ebbe14d10d3a1b89882984195d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TikuQuestionsBundle::layout.html.twig");

        $this->blocks = array(
            'js' => array($this, 'block_js'),
            'css' => array($this, 'block_css'),
            'jqueryjs' => array($this, 'block_jqueryjs'),
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
    public function block_js($context, array $blocks = array())
    {
        // line 4
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/js/unslider.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/js/jquery.icheck.js"), "html", null, true);
        echo "\"></script>

";
    }

    // line 9
    public function block_css($context, array $blocks = array())
    {
        // line 11
        echo "<style>

body {
margin: 0;
padding: 0;
}
.banner { position: relative; overflow: auto;background:#f1f1f1;margin-bottom:30px;padding:60px 0px ;padding-top:}
.banner li { list-style: none; }
.banner ul li { padding-bottom:40px;}
        
.banner ul li .testitem{margin:0px 95px 0px 50px; font-size:28px;line-height:38px;font-family: Times,Helvetica,\"Courier New\",Courier, monospace; }
.banner ul li .choices{font-size:22px;line-height:26px;font-family: Times,Helvetica,\"Courier New\",Courier, monospace; }

.banner .dots {
\t\tposition: absolute;
\t\tleft: 0;
\t\tright: 0;
\t\tbottom: 30px;
\t\tpadding:0px 40px;
\t\twidth:70%;
\t}
.banner .dots li {
\tdisplay: inline-block;
\twidth: 6px;
\theight: 6px;
\tmargin: 4px 8px;
\t
\ttext-indent: -999em;
\t
\tborder: 2px solid #8a8a8a;
\tborder-radius: 6px;
\t
\tcursor: pointer;
\topacity: .4;
\t
\t-webkit-transition: background .5s, opacity .5s;
\t-moz-transition: background .5s, opacity .5s;
\ttransition: background .5s, opacity .5s;
}
.banner .dots li.active {
\tbackground: #2d2d2d;
\topacity: 1;
}
</style>

<link rel=\"stylesheet\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tiku/css/square.css"), "html", null, true);
        echo "\" />

";
    }

    // line 60
    public function block_jqueryjs($context, array $blocks = array())
    {
        // line 61
        echo "    var unslider = \$('.banner').unslider({
\tspeed: 350,               //  The speed to animate each slide (in milliseconds)
\tdelay: false,              //  The delay between slide animations (in milliseconds)
\tcomplete: function() {},  //  A function that gets called after every slide animation
\tkeys: true,               //  Enable keyboard (left, right) arrow shortcuts
\tdots: true,               //  Display dot navigation
\tfluid: false,              //  Support responsive design. May break non-responsive designs
});
    

    \$('.carousel-control').click(function() {
        var fn = this.className.split(' ')[2];

        //  Either do unslider.data('unslider').next() or .prev() depending on the className
        unslider.data('unslider')[fn]();
        
    });
    
    \$('input').iCheck({
    checkboxClass: 'icheckbox_square',
    radioClass: 'iradio_square',
    increaseArea: '20%' // optional
  });
";
    }

    // line 86
    public function block_body($context, array $blocks = array())
    {
        // line 87
        echo "        <div class=\"row-fluid\">
                <div class=\"span12\" style=\"position: relative;\">
                
\t                <div class=\"banner\">
\t\t\t\t\t    <ul>
\t\t\t\t\t    ";
        // line 92
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 93
            echo "\t\t\t\t\t        <li>
\t\t\t\t\t        \t<div class=\"testitem\">
\t\t\t\t\t        \t\t<div class=\"content\">
\t\t\t\t\t        \t\t (";
            // line 96
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo ")I ___ going to England by air next week.
\t\t\t\t\t        \t\t 
\t\t\t\t\t        \t\t
\t\t\t\t\t        \t\t</div>
\t\t\t\t\t        \t\t";
            // line 105
            echo "\t\t\t\t\t       
\t\t\t\t\t        \t\t<div class=\"choices\">
\t\t\t\t\t        \t\t
\t\t\t\t\t\t        \t\t<div style=\"margin:20px 0px;\">
\t\t\t\t\t\t\t        \t\t<div style=\"float:left;margin-right:30px;\"><input type=\"radio\" name=\"iCheck";
            // line 109
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\"></div>
\t\t\t\t\t\t\t        \t\t<div>A. The Green family are</div>
\t\t\t\t\t\t\t        \t\t<div style=\"clear:both\"></div>
\t\t\t\t\t\t        \t\t</div>
\t\t\t\t\t\t        \t\t<div style=\"margin:20px 0px;\">
\t\t\t\t\t\t\t        \t\t<div style=\"float:left;margin-right:30px;\"><input type=\"radio\" name=\"iCheck";
            // line 114
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" checked></div>
\t\t\t\t\t\t\t        \t\t<div>B. The Greens family areB.</div>
\t\t\t\t\t\t\t        \t\t<div style=\"clear:both\"></div>
\t\t\t\t\t\t        \t\t</div>
\t\t\t\t\t\t        \t\t<div style=\"margin:20px 0px;\">
\t\t\t\t\t\t\t        \t\t<div style=\"float:left;margin-right:30px;\"><input type=\"radio\" name=\"iCheck";
            // line 119
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\"></div>
\t\t\t\t\t\t\t        \t\t<div>C. The Green's family are</div>
\t\t\t\t\t\t\t        \t\t<div style=\"clear:both\"></div>
\t\t\t\t\t\t        \t\t</div>
\t\t\t\t\t\t        \t\t<div style=\"margin:20px 0px;\">
\t\t\t\t\t\t\t        \t\t<div style=\"float:left;margin-right:30px;\"><input type=\"radio\" name=\"iCheck";
            // line 124
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\"></div>
\t\t\t\t\t\t\t        \t\t<div>D. Green family are</div>
\t\t\t\t\t\t\t        \t\t<div style=\"clear:both\"></div>
\t\t\t\t\t\t        \t\t</div>
\t\t\t\t\t        \t\t
\t\t\t\t\t        \t\t</div>
\t\t\t\t\t        \t\t
\t\t\t\t\t        \t
\t\t\t\t\t        \t</div>
\t\t\t\t\t        
\t\t\t\t\t        
\t\t\t\t\t        </li>
\t\t\t\t\t      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "\t\t\t\t\t        
\t\t\t\t\t    </ul>
\t\t\t\t\t    <div style=\"clear:both\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"position: absolute;width:200px;right:0px;bottom:80px;\">
\t\t\t\t\t\t<a data-slide=\"prev\" href=\"#\" class=\"left carousel-control prev\">‹</a>
\t\t\t\t\t\t<a data-slide=\"next\" href=\"#\" class=\"right carousel-control next\">›</a>
                \t</div>
        </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "TikuQuestionsBundle:Default:tiku.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 137,  189 => 124,  181 => 119,  173 => 114,  165 => 109,  159 => 105,  152 => 96,  147 => 93,  143 => 92,  136 => 87,  133 => 86,  106 => 61,  103 => 60,  96 => 56,  49 => 11,  46 => 9,  39 => 5,  34 => 4,  31 => 3,);
    }
}
