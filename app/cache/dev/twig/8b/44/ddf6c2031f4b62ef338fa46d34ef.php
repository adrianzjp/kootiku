<?php

/* TikuQuestionsBundle:Default:register.html.twig */
class __TwigTemplate_8b44ddf6c2031f4b62ef338fa46d34ef extends Twig_Template
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "用户注册";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        echo "\t\t
\t\t\t<div class=\"row-fluid\">
\t\t\t\t<div class=\"span8\">
                
                
                <form class=\"form-horizontal\">
                            <fieldset>
                              <div id=\"legend\" class=\"\">
                                <legend class=\"\">用户注册</legend>
                              </div>
                            <div class=\"control-group\">
                        
                                  <!-- Text input-->
                                  <label class=\"control-label\" for=\"input01\">邮箱*</label>
                                  <div class=\"controls\">
                                    <input placeholder=\"建议使用qq邮箱\" class=\"input-xlarge\" type=\"text\">
                                    <p class=\"help-block\"></p>
                                  </div>
                                </div>
                        
                            <div class=\"control-group\">
                        
                                  <!-- Text input-->
                                  <label class=\"control-label\" for=\"input01\">用户密码*</label>
                                  <div class=\"controls\">
                                    <input placeholder=\"请输入用户密码\" class=\"input-xlarge\" type=\"text\">
                                    <p class=\"help-block\"></p>
                                  </div>
                                </div>
                                
                                <div class=\"control-group\">
                        
                                  <!-- Text input-->
                                  <label class=\"control-label\" for=\"input01\">确认密码*</label>
                                  <div class=\"controls\">
                                    <input placeholder=\"\" class=\"input-xlarge\" type=\"text\">
                                    <p class=\"help-block\"></p>
                                  </div>
                                </div>
                        
                            
                        
                            <div class=\"control-group\">
                                  <label class=\"control-label\">所在年级*</label>
                                  <div class=\"controls\">
                              <!-- Inline Radios -->
                              <label class=\"radio inline\">
                                <input checked=\"checked\" value=\"预初\" name=\"group\" type=\"radio\">
                                预初
                              </label>
                              <label class=\"radio inline\">
                                <input value=\"初一\" name=\"group\" type=\"radio\">
                                初一
                              </label>
                              <label class=\"radio inline\">
                                <input value=\"初二\" name=\"group\" type=\"radio\">
                                初二
                              </label>
                              <label class=\"radio inline\">
                                <input value=\"初三\" name=\"group\" type=\"radio\">
                                初三
                              </label>
                          </div>
                          
                                </div>
                                <div class=\"control-group\">
                        
                                  <!-- Text input-->
                                  <label class=\"control-label\" for=\"input01\">在读学校</label>
                                  <div class=\"controls\">
                                    <input placeholder=\"\" class=\"input-xlarge\" type=\"text\">
                                    <p class=\"help-block\"></p>
                                  </div>
                                </div>
                                
                                
                        
                                        
                            <div class=\"control-group\">
                                  <label class=\"control-label\"></label>
                        
                                  <!-- Button -->
                                  <div class=\"controls\">
                                    <button class=\"btn btn-success\">立即注册</button>
                                  </div>
                                </div>
                        
                            </fieldset>
                          </form>\t
\t\t\t\t</div>
                <div class=\"span4\">
                
                </div>
\t\t\t\t
\t\t\t</div>
\t\t
\t\t
\t";
    }

    public function getTemplateName()
    {
        return "TikuQuestionsBundle:Default:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  29 => 4,);
    }
}
