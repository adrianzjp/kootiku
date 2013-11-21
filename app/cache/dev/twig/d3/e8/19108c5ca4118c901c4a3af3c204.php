<?php

/* TikuQuestionsBundle:Default:login.html.twig */
class __TwigTemplate_d3e819108c5ca4118c901c4a3af3c204 extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "用户登录";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t\t\t<div class=\"row-fluid\">
\t\t\t\t<div class=\"span8\">
                <form class=\"form-horizontal\">
                                        <fieldset>
                                          <div id=\"legend\" class=\"\">
                                            <legend class=\"\">用户登录</legend>
                                          </div>
                                        <div class=\"control-group\">
                                    
                                              <!-- Text input-->
                                              <label class=\"control-label\" for=\"input01\">用户名</label>
                                              <div class=\"controls\">
                                                <input placeholder=\"注册邮箱\" class=\"input-xlarge\" type=\"text\">
                                                <p class=\"help-block\"></p>
                                              </div>
                                            </div>
                                    
                                        <div class=\"control-group\">
                                    
                                              <!-- Text input-->
                                              <label class=\"control-label\" for=\"input01\">密码</label>
                                              <div class=\"controls\">
                                                <input placeholder=\"请输入密码\" class=\"input-xlarge\" type=\"text\">
                                                <p class=\"help-block\"></p>
                                              </div>
                                            </div>
                                    
                                        
                                    
                                        
                                    
                                        
                                    
                                        <div class=\"control-group\">
                                              <label class=\"control-label\"></label>
                                              <div class=\"controls\">
                                          <!-- Multiple Checkboxes -->
                                          <label class=\"checkbox\">
                                            <input value=\"记住密码\" type=\"checkbox\">
                                            记住密码
                                          </label>
                                      </div>
                                    
                                            </div>
                                    
                                        
                                    
                                        <div class=\"control-group\">
                                              <label class=\"control-label\"></label>
                                    
                                              <!-- Button -->
                                              <div class=\"controls\">
                                                <button class=\"btn btn-success\">登录</button>
                                              </div>
                                            </div>
                                    
                                        </fieldset>
                                     </form>
                
\t\t\t\t</div>
\t\t\t\t<div class=\"span4\">
              
                
               
\t\t\t\t</div>
\t\t\t</div>
\t\t";
    }

    public function getTemplateName()
    {
        return "TikuQuestionsBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
