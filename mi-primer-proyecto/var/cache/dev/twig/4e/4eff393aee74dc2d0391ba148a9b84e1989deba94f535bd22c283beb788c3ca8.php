<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_99e9d196b7926f6444ed2d84ffa294273e16caa73cf1358f7c5658f28e3910c2 extends Twig_Template
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
        $__internal_e5a8309d67715025389d663c7802b1cce51f92be3a19e333b16a32ceca1658b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5a8309d67715025389d663c7802b1cce51f92be3a19e333b16a32ceca1658b7->enter($__internal_e5a8309d67715025389d663c7802b1cce51f92be3a19e333b16a32ceca1658b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_b0546df6edc8d6866c7da988028e3eb38679e114bdceb63e7a2925411d0768c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0546df6edc8d6866c7da988028e3eb38679e114bdceb63e7a2925411d0768c5->enter($__internal_b0546df6edc8d6866c7da988028e3eb38679e114bdceb63e7a2925411d0768c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_e5a8309d67715025389d663c7802b1cce51f92be3a19e333b16a32ceca1658b7->leave($__internal_e5a8309d67715025389d663c7802b1cce51f92be3a19e333b16a32ceca1658b7_prof);

        
        $__internal_b0546df6edc8d6866c7da988028e3eb38679e114bdceb63e7a2925411d0768c5->leave($__internal_b0546df6edc8d6866c7da988028e3eb38679e114bdceb63e7a2925411d0768c5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\xampp\\htdocs\\symfony\\mi-primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
