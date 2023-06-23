<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_675cfcff11f0fc1ae574d7a17be0a447eedb6216c6026fab4cf3ca13c6bf14d3 extends Twig_Template
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
        $__internal_bdbef435b7de60b261558db2914a7d812a6060f84c4141073a3e45b5e281bec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdbef435b7de60b261558db2914a7d812a6060f84c4141073a3e45b5e281bec4->enter($__internal_bdbef435b7de60b261558db2914a7d812a6060f84c4141073a3e45b5e281bec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_c870dbbc439b3c928631d7223a895b3ab46273c3a93e6ce448805e436b44b13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c870dbbc439b3c928631d7223a895b3ab46273c3a93e6ce448805e436b44b13c->enter($__internal_c870dbbc439b3c928631d7223a895b3ab46273c3a93e6ce448805e436b44b13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_bdbef435b7de60b261558db2914a7d812a6060f84c4141073a3e45b5e281bec4->leave($__internal_bdbef435b7de60b261558db2914a7d812a6060f84c4141073a3e45b5e281bec4_prof);

        
        $__internal_c870dbbc439b3c928631d7223a895b3ab46273c3a93e6ce448805e436b44b13c->leave($__internal_c870dbbc439b3c928631d7223a895b3ab46273c3a93e6ce448805e436b44b13c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\symfony\\mi-primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
