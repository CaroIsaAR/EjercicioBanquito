<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_01e7084e25287071b0abfd9c23e69bd90f8198c1c7034bcbfbf07a37b774f055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04264d2089bd423562ddb3ce66f416c58938d4956ab97a4a516f20208aa12b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04264d2089bd423562ddb3ce66f416c58938d4956ab97a4a516f20208aa12b33->enter($__internal_04264d2089bd423562ddb3ce66f416c58938d4956ab97a4a516f20208aa12b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f7cd61aeb0284e454de236d6fb6c1da49e5a1c702d0239569ffaa7ed200c0ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7cd61aeb0284e454de236d6fb6c1da49e5a1c702d0239569ffaa7ed200c0ea4->enter($__internal_f7cd61aeb0284e454de236d6fb6c1da49e5a1c702d0239569ffaa7ed200c0ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04264d2089bd423562ddb3ce66f416c58938d4956ab97a4a516f20208aa12b33->leave($__internal_04264d2089bd423562ddb3ce66f416c58938d4956ab97a4a516f20208aa12b33_prof);

        
        $__internal_f7cd61aeb0284e454de236d6fb6c1da49e5a1c702d0239569ffaa7ed200c0ea4->leave($__internal_f7cd61aeb0284e454de236d6fb6c1da49e5a1c702d0239569ffaa7ed200c0ea4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d1b03d5332b60c34258b02169530de3e2f91758fea27443eb3db2e10350271bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b03d5332b60c34258b02169530de3e2f91758fea27443eb3db2e10350271bb->enter($__internal_d1b03d5332b60c34258b02169530de3e2f91758fea27443eb3db2e10350271bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_deae37eb1348153783ecf32664c1bd94cdff0c9f3db3e50db8dfde4756aa1f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deae37eb1348153783ecf32664c1bd94cdff0c9f3db3e50db8dfde4756aa1f5c->enter($__internal_deae37eb1348153783ecf32664c1bd94cdff0c9f3db3e50db8dfde4756aa1f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_deae37eb1348153783ecf32664c1bd94cdff0c9f3db3e50db8dfde4756aa1f5c->leave($__internal_deae37eb1348153783ecf32664c1bd94cdff0c9f3db3e50db8dfde4756aa1f5c_prof);

        
        $__internal_d1b03d5332b60c34258b02169530de3e2f91758fea27443eb3db2e10350271bb->leave($__internal_d1b03d5332b60c34258b02169530de3e2f91758fea27443eb3db2e10350271bb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f6ac338a4eccd13e9c5e79ad15c4e710d01ad29fdb95e7c6de1375639e7ab65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f6ac338a4eccd13e9c5e79ad15c4e710d01ad29fdb95e7c6de1375639e7ab65->enter($__internal_2f6ac338a4eccd13e9c5e79ad15c4e710d01ad29fdb95e7c6de1375639e7ab65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_208e9199c91f02480748c08439ea27e25bdfc9bb66bc0bea3889f1053a22369c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208e9199c91f02480748c08439ea27e25bdfc9bb66bc0bea3889f1053a22369c->enter($__internal_208e9199c91f02480748c08439ea27e25bdfc9bb66bc0bea3889f1053a22369c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>";
        
        $__internal_208e9199c91f02480748c08439ea27e25bdfc9bb66bc0bea3889f1053a22369c->leave($__internal_208e9199c91f02480748c08439ea27e25bdfc9bb66bc0bea3889f1053a22369c_prof);

        
        $__internal_2f6ac338a4eccd13e9c5e79ad15c4e710d01ad29fdb95e7c6de1375639e7ab65->leave($__internal_2f6ac338a4eccd13e9c5e79ad15c4e710d01ad29fdb95e7c6de1375639e7ab65_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5468ee136e9f9173b22165959991f13b424f747581976f4653ddfd4aac91b9b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5468ee136e9f9173b22165959991f13b424f747581976f4653ddfd4aac91b9b1->enter($__internal_5468ee136e9f9173b22165959991f13b424f747581976f4653ddfd4aac91b9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8717e0770b40d23a7f4c6c6d56cb9e2682533d54aa4518b073bec1624fa90de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8717e0770b40d23a7f4c6c6d56cb9e2682533d54aa4518b073bec1624fa90de7->enter($__internal_8717e0770b40d23a7f4c6c6d56cb9e2682533d54aa4518b073bec1624fa90de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        
        $__internal_8717e0770b40d23a7f4c6c6d56cb9e2682533d54aa4518b073bec1624fa90de7->leave($__internal_8717e0770b40d23a7f4c6c6d56cb9e2682533d54aa4518b073bec1624fa90de7_prof);

        
        $__internal_5468ee136e9f9173b22165959991f13b424f747581976f4653ddfd4aac91b9b1->leave($__internal_5468ee136e9f9173b22165959991f13b424f747581976f4653ddfd4aac91b9b1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 13,  84 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\symfony\\mi-primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
