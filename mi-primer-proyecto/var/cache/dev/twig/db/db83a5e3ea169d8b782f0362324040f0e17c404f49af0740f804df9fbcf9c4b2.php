<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6e29ce9b88d8c4126f2fd70a666c4f050ee51ec8393e0f6b0e9fcdfa0e478674 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b54f17ce3a45844c02816a2cbc274c0dece00bbee556816510b64f27592c82d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b54f17ce3a45844c02816a2cbc274c0dece00bbee556816510b64f27592c82d7->enter($__internal_b54f17ce3a45844c02816a2cbc274c0dece00bbee556816510b64f27592c82d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_842bb8ca5aff9df8709ae9cf0a6b0c33b6f802c94b8a3ec9e1084b9097ee60c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842bb8ca5aff9df8709ae9cf0a6b0c33b6f802c94b8a3ec9e1084b9097ee60c2->enter($__internal_842bb8ca5aff9df8709ae9cf0a6b0c33b6f802c94b8a3ec9e1084b9097ee60c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b54f17ce3a45844c02816a2cbc274c0dece00bbee556816510b64f27592c82d7->leave($__internal_b54f17ce3a45844c02816a2cbc274c0dece00bbee556816510b64f27592c82d7_prof);

        
        $__internal_842bb8ca5aff9df8709ae9cf0a6b0c33b6f802c94b8a3ec9e1084b9097ee60c2->leave($__internal_842bb8ca5aff9df8709ae9cf0a6b0c33b6f802c94b8a3ec9e1084b9097ee60c2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_38858927d4d322990ff2a08f515e4a450a49dd0086012da3dfc8284f8327e050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38858927d4d322990ff2a08f515e4a450a49dd0086012da3dfc8284f8327e050->enter($__internal_38858927d4d322990ff2a08f515e4a450a49dd0086012da3dfc8284f8327e050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_094a494dd3541f04db94c0700a9839131f52a14061730ac49e67f82d0b3ddea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_094a494dd3541f04db94c0700a9839131f52a14061730ac49e67f82d0b3ddea7->enter($__internal_094a494dd3541f04db94c0700a9839131f52a14061730ac49e67f82d0b3ddea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>";
        }
        // line 9
        $this->displayParentBlock("head", $context, $blocks);
        
        $__internal_094a494dd3541f04db94c0700a9839131f52a14061730ac49e67f82d0b3ddea7->leave($__internal_094a494dd3541f04db94c0700a9839131f52a14061730ac49e67f82d0b3ddea7_prof);

        
        $__internal_38858927d4d322990ff2a08f515e4a450a49dd0086012da3dfc8284f8327e050->leave($__internal_38858927d4d322990ff2a08f515e4a450a49dd0086012da3dfc8284f8327e050_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e812a3a63aa8e2e33948caf11ef5d93d58aa83a1ee4a35667f0b0d1afe78122d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e812a3a63aa8e2e33948caf11ef5d93d58aa83a1ee4a35667f0b0d1afe78122d->enter($__internal_e812a3a63aa8e2e33948caf11ef5d93d58aa83a1ee4a35667f0b0d1afe78122d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0c4e557e1d3c52f54227b0feea62d060893019baeca7056f4aaa4534e226e60b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4e557e1d3c52f54227b0feea62d060893019baeca7056f4aaa4534e226e60b->enter($__internal_0c4e557e1d3c52f54227b0feea62d060893019baeca7056f4aaa4534e226e60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>";
        }
        // line 21
        echo "    </span>";
        
        $__internal_0c4e557e1d3c52f54227b0feea62d060893019baeca7056f4aaa4534e226e60b->leave($__internal_0c4e557e1d3c52f54227b0feea62d060893019baeca7056f4aaa4534e226e60b_prof);

        
        $__internal_e812a3a63aa8e2e33948caf11ef5d93d58aa83a1ee4a35667f0b0d1afe78122d->leave($__internal_e812a3a63aa8e2e33948caf11ef5d93d58aa83a1ee4a35667f0b0d1afe78122d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2b4696f0565ef2a78cc1c41bfeb2db9749348fe59a35892974536f45d4879b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b4696f0565ef2a78cc1c41bfeb2db9749348fe59a35892974536f45d4879b5->enter($__internal_a2b4696f0565ef2a78cc1c41bfeb2db9749348fe59a35892974536f45d4879b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cc7919d20908ec8a48416e416808e6b071d247e63c911cb5a4c763a580f052f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7919d20908ec8a48416e416808e6b071d247e63c911cb5a4c763a580f052f2->enter($__internal_cc7919d20908ec8a48416e416808e6b071d247e63c911cb5a4c763a580f052f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>";
        }
        
        $__internal_cc7919d20908ec8a48416e416808e6b071d247e63c911cb5a4c763a580f052f2->leave($__internal_cc7919d20908ec8a48416e416808e6b071d247e63c911cb5a4c763a580f052f2_prof);

        
        $__internal_a2b4696f0565ef2a78cc1c41bfeb2db9749348fe59a35892974536f45d4879b5->leave($__internal_a2b4696f0565ef2a78cc1c41bfeb2db9749348fe59a35892974536f45d4879b5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 33,  123 => 32,  118 => 28,  116 => 27,  114 => 25,  105 => 24,  95 => 21,  90 => 17,  88 => 16,  84 => 14,  79 => 13,  70 => 12,  60 => 9,  55 => 6,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\symfony\\mi-primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
