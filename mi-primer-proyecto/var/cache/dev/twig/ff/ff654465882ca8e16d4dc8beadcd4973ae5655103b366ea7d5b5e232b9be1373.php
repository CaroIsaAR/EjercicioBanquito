<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d1e92f4cdacbd9736a263565cad3ad7a61ebadb6f0c89cce94c888e82f3ef57a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dec7d0549f30f04cee19b4b751f2f3a09dc1d43b4feb2e62a97c474c826969e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dec7d0549f30f04cee19b4b751f2f3a09dc1d43b4feb2e62a97c474c826969e9->enter($__internal_dec7d0549f30f04cee19b4b751f2f3a09dc1d43b4feb2e62a97c474c826969e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7e819683678f78c629ceb1ba410e0d5f4f44239a99b7f0d565cd25750ea48e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e819683678f78c629ceb1ba410e0d5f4f44239a99b7f0d565cd25750ea48e3f->enter($__internal_7e819683678f78c629ceb1ba410e0d5f4f44239a99b7f0d565cd25750ea48e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dec7d0549f30f04cee19b4b751f2f3a09dc1d43b4feb2e62a97c474c826969e9->leave($__internal_dec7d0549f30f04cee19b4b751f2f3a09dc1d43b4feb2e62a97c474c826969e9_prof);

        
        $__internal_7e819683678f78c629ceb1ba410e0d5f4f44239a99b7f0d565cd25750ea48e3f->leave($__internal_7e819683678f78c629ceb1ba410e0d5f4f44239a99b7f0d565cd25750ea48e3f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8b2ee552124277b9c4c5d7b62cd7d160203ed39f41be2542de2d1ae9e73c8f8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b2ee552124277b9c4c5d7b62cd7d160203ed39f41be2542de2d1ae9e73c8f8b->enter($__internal_8b2ee552124277b9c4c5d7b62cd7d160203ed39f41be2542de2d1ae9e73c8f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9d0ba4f3bc1b8a4661971411af132af4aec94b22bc1fb5c1360dcb8ea5101421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0ba4f3bc1b8a4661971411af132af4aec94b22bc1fb5c1360dcb8ea5101421->enter($__internal_9d0ba4f3bc1b8a4661971411af132af4aec94b22bc1fb5c1360dcb8ea5101421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        ob_start();
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        
        $__internal_9d0ba4f3bc1b8a4661971411af132af4aec94b22bc1fb5c1360dcb8ea5101421->leave($__internal_9d0ba4f3bc1b8a4661971411af132af4aec94b22bc1fb5c1360dcb8ea5101421_prof);

        
        $__internal_8b2ee552124277b9c4c5d7b62cd7d160203ed39f41be2542de2d1ae9e73c8f8b->leave($__internal_8b2ee552124277b9c4c5d7b62cd7d160203ed39f41be2542de2d1ae9e73c8f8b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 30,  56 => 9,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\symfony\\mi-primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
