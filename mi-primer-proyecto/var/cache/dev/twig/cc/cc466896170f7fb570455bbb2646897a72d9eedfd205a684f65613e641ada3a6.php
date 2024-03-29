<?php

/* @Debug/Profiler/dump.html.twig */
class __TwigTemplate_e621b3fd2124f5fae47a098d2249b89daf5d44ce10390d477e74ee8a0b800f9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Debug/Profiler/dump.html.twig", 1);
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
        $__internal_72da0e6b578dc2cbfba5abd0c593ffef476405e9672f825cccf23b5ebf9e6994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72da0e6b578dc2cbfba5abd0c593ffef476405e9672f825cccf23b5ebf9e6994->enter($__internal_72da0e6b578dc2cbfba5abd0c593ffef476405e9672f825cccf23b5ebf9e6994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Debug/Profiler/dump.html.twig"));

        $__internal_01893270db9c10b68552a5504d343f4c83704a00bb95bf3cadc428e6c9c96ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01893270db9c10b68552a5504d343f4c83704a00bb95bf3cadc428e6c9c96ddf->enter($__internal_01893270db9c10b68552a5504d343f4c83704a00bb95bf3cadc428e6c9c96ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Debug/Profiler/dump.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72da0e6b578dc2cbfba5abd0c593ffef476405e9672f825cccf23b5ebf9e6994->leave($__internal_72da0e6b578dc2cbfba5abd0c593ffef476405e9672f825cccf23b5ebf9e6994_prof);

        
        $__internal_01893270db9c10b68552a5504d343f4c83704a00bb95bf3cadc428e6c9c96ddf->leave($__internal_01893270db9c10b68552a5504d343f4c83704a00bb95bf3cadc428e6c9c96ddf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9aa98cb444aa42a1405e8b43b9e57283d0f2bf1dbb675ea87ffced01ce470d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa98cb444aa42a1405e8b43b9e57283d0f2bf1dbb675ea87ffced01ce470d3a->enter($__internal_9aa98cb444aa42a1405e8b43b9e57283d0f2bf1dbb675ea87ffced01ce470d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_582487a6cff89d2d2bb8a4e6900f458cf7c3a7b65f719c47f578cfd4d0a04178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_582487a6cff89d2d2bb8a4e6900f458cf7c3a7b65f719c47f578cfd4d0a04178->enter($__internal_582487a6cff89d2d2bb8a4e6900f458cf7c3a7b65f719c47f578cfd4d0a04178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dumpsCount", array())) {
            // line 5
            ob_start();
            // line 6
            echo twig_include($this->env, $context, "@Debug/Profiler/icon.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dumpsCount", array()), "html", null, true);
            echo "</span>";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 10
            ob_start();
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "getDumps", array(0 => "html"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
                // line 12
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <span>";
                // line 14
                if ($this->getAttribute($context["dump"], "file", array())) {
                    // line 15
                    $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()));
                    // line 16
                    if (($context["link"] ?? $this->getContext($context, "link"))) {
                        // line 17
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? $this->getContext($context, "link")), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 19
                        echo "                            <abbr title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</abbr>";
                    }
                } else {
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                }
                // line 24
                echo "                    </span>
                    <span class=\"sf-toolbar-file-line\">line";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "line", array()), "html", null, true);
                echo "</span>";
                // line 27
                echo $this->getAttribute($context["dump"], "data", array());
                echo "
                </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 32
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
        }
        
        $__internal_582487a6cff89d2d2bb8a4e6900f458cf7c3a7b65f719c47f578cfd4d0a04178->leave($__internal_582487a6cff89d2d2bb8a4e6900f458cf7c3a7b65f719c47f578cfd4d0a04178_prof);

        
        $__internal_9aa98cb444aa42a1405e8b43b9e57283d0f2bf1dbb675ea87ffced01ce470d3a->leave($__internal_9aa98cb444aa42a1405e8b43b9e57283d0f2bf1dbb675ea87ffced01ce470d3a_prof);

    }

    // line 36
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a08b405a47ff6219dafd5d343e9f43c39d181f3b999976d6aa73e0aedd73574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a08b405a47ff6219dafd5d343e9f43c39d181f3b999976d6aa73e0aedd73574->enter($__internal_5a08b405a47ff6219dafd5d343e9f43c39d181f3b999976d6aa73e0aedd73574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5869c4b3a4c5299044c171d3c3ca5ded822b01d7697135490d0dc98048b45b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5869c4b3a4c5299044c171d3c3ca5ded822b01d7697135490d0dc98048b45b32->enter($__internal_5869c4b3a4c5299044c171d3c3ca5ded822b01d7697135490d0dc98048b45b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 37
        echo "    <span class=\"label";
        echo ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dumpsCount", array()) == 0)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 38
        echo twig_include($this->env, $context, "@Debug/Profiler/icon.svg");
        echo "</span>
        <strong>Debug</strong>
    </span>";
        
        $__internal_5869c4b3a4c5299044c171d3c3ca5ded822b01d7697135490d0dc98048b45b32->leave($__internal_5869c4b3a4c5299044c171d3c3ca5ded822b01d7697135490d0dc98048b45b32_prof);

        
        $__internal_5a08b405a47ff6219dafd5d343e9f43c39d181f3b999976d6aa73e0aedd73574->leave($__internal_5a08b405a47ff6219dafd5d343e9f43c39d181f3b999976d6aa73e0aedd73574_prof);

    }

    // line 43
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9407cec34bea1c0049951357a656e8b5038f3da1fb78630ef44638014105f29c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9407cec34bea1c0049951357a656e8b5038f3da1fb78630ef44638014105f29c->enter($__internal_9407cec34bea1c0049951357a656e8b5038f3da1fb78630ef44638014105f29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_574beeaf3b96a4b83447bd8989ec1632449a205fb2103afe2305c7b241c56da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574beeaf3b96a4b83447bd8989ec1632449a205fb2103afe2305c7b241c56da1->enter($__internal_574beeaf3b96a4b83447bd8989ec1632449a205fb2103afe2305c7b241c56da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 44
        echo "    <h2>Dumped Contents</h2>";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "getDumps", array(0 => "html"), "method"));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
            // line 47
            echo "        <div class=\"sf-dump sf-reset\">
            <span class=\"metadata\">In";
            // line 49
            if ($this->getAttribute($context["dump"], "line", array())) {
                // line 50
                $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()));
                // line 51
                if (($context["link"] ?? $this->getContext($context, "link"))) {
                    // line 52
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? $this->getContext($context, "link")), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                    echo "</a>";
                } else {
                    // line 54
                    echo "                        <abbr title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                    echo "</abbr>";
                }
            } else {
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
            }
            // line 59
            echo "                line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "line", array()), "html", null, true);
            echo "</a>:
            </span>

            <div class=\"sf-dump-compact hidden\" id=\"sf-trace-";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">
                <div class=\"trace\">";
            // line 64
            echo (($this->getAttribute($context["dump"], "fileExcerpt", array())) ? ($this->getAttribute($context["dump"], "fileExcerpt", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()))));
            echo "
                </div>
            </div>";
            // line 68
            echo $this->getAttribute($context["dump"], "data", array());
            echo "
        </div>";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 71
            echo "        <div class=\"empty\">
            <p>No content was dumped.</p>
        </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_574beeaf3b96a4b83447bd8989ec1632449a205fb2103afe2305c7b241c56da1->leave($__internal_574beeaf3b96a4b83447bd8989ec1632449a205fb2103afe2305c7b241c56da1_prof);

        
        $__internal_9407cec34bea1c0049951357a656e8b5038f3da1fb78630ef44638014105f29c->leave($__internal_9407cec34bea1c0049951357a656e8b5038f3da1fb78630ef44638014105f29c_prof);

    }

    public function getTemplateName()
    {
        return "@Debug/Profiler/dump.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 71,  227 => 68,  222 => 64,  218 => 62,  209 => 59,  206 => 57,  198 => 54,  189 => 52,  187 => 51,  185 => 50,  183 => 49,  180 => 47,  162 => 46,  160 => 44,  151 => 43,  138 => 38,  133 => 37,  124 => 36,  113 => 32,  104 => 27,  101 => 25,  98 => 24,  95 => 22,  87 => 19,  78 => 17,  76 => 16,  74 => 15,  72 => 14,  69 => 12,  65 => 11,  63 => 10,  59 => 7,  55 => 6,  53 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
    {% if collector.dumpsCount %}
        {% set icon %}
            {{ include('@Debug/Profiler/icon.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.dumpsCount }}</span>
        {% endset %}

        {% set text %}
            {% for dump in collector.getDumps('html') %}
                <div class=\"sf-toolbar-info-piece\">
                    <span>
                    {% if dump.file %}
                        {% set link = dump.file|file_link(dump.line) %}
                        {% if link %}
                            <a href=\"{{ link }}\" title=\"{{ dump.file }}\">{{ dump.name }}</a>
                        {% else %}
                            <abbr title=\"{{ dump.file }}\">{{ dump.name }}</abbr>
                        {% endif %}
                    {% else %}
                        {{ dump.name }}
                    {% endif %}
                    </span>
                    <span class=\"sf-toolbar-file-line\">line {{ dump.line }}</span>

                    {{ dump.data|raw }}
                </div>
            {% endfor %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.dumpsCount == 0 ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@Debug/Profiler/icon.svg') }}</span>
        <strong>Debug</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Dumped Contents</h2>

    {% for dump in collector.getDumps('html') %}
        <div class=\"sf-dump sf-reset\">
            <span class=\"metadata\">In
                {% if dump.line %}
                    {% set link = dump.file|file_link(dump.line) %}
                    {% if link %}
                        <a href=\"{{ link }}\" title=\"{{ dump.file }}\">{{ dump.name }}</a>
                    {% else %}
                        <abbr title=\"{{ dump.file }}\">{{ dump.name }}</abbr>
                    {% endif %}
                {% else %}
                    {{ dump.name }}
                {% endif %}
                line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-{{ loop.index0 }}\">{{ dump.line }}</a>:
            </span>

            <div class=\"sf-dump-compact hidden\" id=\"sf-trace-{{ loop.index0 }}\">
                <div class=\"trace\">
                    {{ dump.fileExcerpt ? dump.fileExcerpt|raw : dump.file|file_excerpt(dump.line) }}
                </div>
            </div>

            {{ dump.data|raw }}
        </div>
    {% else %}
        <div class=\"empty\">
            <p>No content was dumped.</p>
        </div>
    {% endfor %}
{% endblock %}
", "@Debug/Profiler/dump.html.twig", "C:\\xampp\\htdocs\\symfony\\mi-primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\DebugBundle\\Resources\\views\\Profiler\\dump.html.twig");
    }
}
