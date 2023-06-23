<?php

/* @WebProfiler/Collector/twig.html.twig */
class __TwigTemplate_d818aefff0e45cf0942422533e942f1da4e4fdd12694aefdc1ee35d5b64a8d19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/twig.html.twig", 1);
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
        $__internal_ca41ea82e61fc32077fa257e02499becc09f9b2ded80c0717859c74eac6bc905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca41ea82e61fc32077fa257e02499becc09f9b2ded80c0717859c74eac6bc905->enter($__internal_ca41ea82e61fc32077fa257e02499becc09f9b2ded80c0717859c74eac6bc905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $__internal_3179a37e5192b7241e630d7519c520d64044a6de0b5be92513e05cbd06f5b5eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3179a37e5192b7241e630d7519c520d64044a6de0b5be92513e05cbd06f5b5eb->enter($__internal_3179a37e5192b7241e630d7519c520d64044a6de0b5be92513e05cbd06f5b5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca41ea82e61fc32077fa257e02499becc09f9b2ded80c0717859c74eac6bc905->leave($__internal_ca41ea82e61fc32077fa257e02499becc09f9b2ded80c0717859c74eac6bc905_prof);

        
        $__internal_3179a37e5192b7241e630d7519c520d64044a6de0b5be92513e05cbd06f5b5eb->leave($__internal_3179a37e5192b7241e630d7519c520d64044a6de0b5be92513e05cbd06f5b5eb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_80bdf974a3f2b1e7f6cf2b16fa5eb1a96a1e830995911623e9d0bef6e3668a58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80bdf974a3f2b1e7f6cf2b16fa5eb1a96a1e830995911623e9d0bef6e3668a58->enter($__internal_80bdf974a3f2b1e7f6cf2b16fa5eb1a96a1e830995911623e9d0bef6e3668a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0584499c719023e66ee6889ee306eb35328dd29fa3e2dbb847aeae6c5aa87508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0584499c719023e66ee6889ee306eb35328dd29fa3e2dbb847aeae6c5aa87508->enter($__internal_0584499c719023e66ee6889ee306eb35328dd29fa3e2dbb847aeae6c5aa87508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        $context["time"] = (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array())) ? (sprintf("%0.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array()))) : ("n/a"));
        // line 5
        ob_start();
        // line 6
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["time"] ?? $this->getContext($context, "time")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, ($context["time"] ?? $this->getContext($context, "time")), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
        echo "</span>
        </div>";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url"))));
        
        $__internal_0584499c719023e66ee6889ee306eb35328dd29fa3e2dbb847aeae6c5aa87508->leave($__internal_0584499c719023e66ee6889ee306eb35328dd29fa3e2dbb847aeae6c5aa87508_prof);

        
        $__internal_80bdf974a3f2b1e7f6cf2b16fa5eb1a96a1e830995911623e9d0bef6e3668a58->leave($__internal_80bdf974a3f2b1e7f6cf2b16fa5eb1a96a1e830995911623e9d0bef6e3668a58_prof);

    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4fcbff0603d01639660787c8bfaa4380e608d2fcc30c066ffa56505287b7871a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fcbff0603d01639660787c8bfaa4380e608d2fcc30c066ffa56505287b7871a->enter($__internal_4fcbff0603d01639660787c8bfaa4380e608d2fcc30c066ffa56505287b7871a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f5585290bc06c79171a20dab8ff19137d0dcc625fec2f00c7858e0491ae408c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5585290bc06c79171a20dab8ff19137d0dcc625fec2f00c7858e0491ae408c0->enter($__internal_f5585290bc06c79171a20dab8ff19137d0dcc625fec2f00c7858e0491ae408c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 34
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 35
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "</span>
        <strong>Twig</strong>
    </span>";
        
        $__internal_f5585290bc06c79171a20dab8ff19137d0dcc625fec2f00c7858e0491ae408c0->leave($__internal_f5585290bc06c79171a20dab8ff19137d0dcc625fec2f00c7858e0491ae408c0_prof);

        
        $__internal_4fcbff0603d01639660787c8bfaa4380e608d2fcc30c066ffa56505287b7871a->leave($__internal_4fcbff0603d01639660787c8bfaa4380e608d2fcc30c066ffa56505287b7871a_prof);

    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d53073334eb838f60ef2744fd1322cdba9ecd7effc82d85c894b071da824894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d53073334eb838f60ef2744fd1322cdba9ecd7effc82d85c894b071da824894->enter($__internal_8d53073334eb838f60ef2744fd1322cdba9ecd7effc82d85c894b071da824894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fd80f8c38f3a8dc95c9d95ea81fbda90ddcfe02f9f2befd53f64076d8b546e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd80f8c38f3a8dc95c9d95ea81fbda90ddcfe02f9f2befd53f64076d8b546e1c->enter($__internal_fd80f8c38f3a8dc95c9d95ea81fbda90ddcfe02f9f2befd53f64076d8b546e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 41
        if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array()) == 0)) {
            // line 42
            echo "        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>";
        } else {
            // line 48
            echo "        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 52
            echo twig_escape_filter($this->env, sprintf("%0.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array())), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templates", array()));
            foreach ($context['_seq'] as $context["template"] => $context["count"]) {
                // line 87
                echo "                <tr>
                    <td>";
                // line 88
                echo twig_escape_filter($this->env, $context["template"], "html", null, true);
                echo "</td>
                    <td class=\"font-normal\">";
                // line 89
                echo twig_escape_filter($this->env, $context["count"], "html", null, true);
                echo "</td>
                </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "htmlcallgraph", array()), "html", null, true);
            echo "
        </div>";
        }
        
        $__internal_fd80f8c38f3a8dc95c9d95ea81fbda90ddcfe02f9f2befd53f64076d8b546e1c->leave($__internal_fd80f8c38f3a8dc95c9d95ea81fbda90ddcfe02f9f2befd53f64076d8b546e1c_prof);

        
        $__internal_8d53073334eb838f60ef2744fd1322cdba9ecd7effc82d85c894b071da824894->leave($__internal_8d53073334eb838f60ef2744fd1322cdba9ecd7effc82d85c894b071da824894_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 98,  219 => 92,  211 => 89,  207 => 88,  204 => 87,  200 => 86,  179 => 67,  171 => 62,  163 => 57,  155 => 52,  149 => 48,  142 => 42,  140 => 41,  131 => 40,  118 => 35,  115 => 34,  106 => 33,  96 => 30,  91 => 26,  84 => 22,  77 => 18,  70 => 14,  66 => 12,  64 => 11,  59 => 7,  55 => 6,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
    {% set time = collector.templatecount ? '%0.0f'|format(collector.time) : 'n/a' %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/twig.svg') }}
        <span class=\"sf-toolbar-value\">{{ time }}</span>
        <span class=\"sf-toolbar-label\">ms</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>{{ time }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.templatecount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.blockcount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.macrocount }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/twig.svg') }}</span>
        <strong>Twig</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.templatecount == 0 %}
        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    {% else %}
        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.0f'|format(collector.time) }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.templatecount }}</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.blockcount }}</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.macrocount }}</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            {% for template, count in collector.templates %}
                <tr>
                    <td>{{ template }}</td>
                    <td class=\"font-normal\">{{ count }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            {{ collector.htmlcallgraph }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/twig.html.twig", "C:\\xampp\\htdocs\\symfony\\mi-primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\twig.html.twig");
    }
}
