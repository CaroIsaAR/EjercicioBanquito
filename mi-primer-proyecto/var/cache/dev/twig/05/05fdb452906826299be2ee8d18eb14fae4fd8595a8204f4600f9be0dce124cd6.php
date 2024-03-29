<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6025d28b4bb5d7d4c336996b705f029ccdfd6bbb49ae5255d024dbd9806c9b9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_482368c3fe12653a0fb35572a895ca12d5ef9607cdde63d2a9012121d36b9f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_482368c3fe12653a0fb35572a895ca12d5ef9607cdde63d2a9012121d36b9f9e->enter($__internal_482368c3fe12653a0fb35572a895ca12d5ef9607cdde63d2a9012121d36b9f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1678139244e8a827412e53c974d6ae4df41113e55ac54d38d1df1439fdbf5b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1678139244e8a827412e53c974d6ae4df41113e55ac54d38d1df1439fdbf5b15->enter($__internal_1678139244e8a827412e53c974d6ae4df41113e55ac54d38d1df1439fdbf5b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_482368c3fe12653a0fb35572a895ca12d5ef9607cdde63d2a9012121d36b9f9e->leave($__internal_482368c3fe12653a0fb35572a895ca12d5ef9607cdde63d2a9012121d36b9f9e_prof);

        
        $__internal_1678139244e8a827412e53c974d6ae4df41113e55ac54d38d1df1439fdbf5b15->leave($__internal_1678139244e8a827412e53c974d6ae4df41113e55ac54d38d1df1439fdbf5b15_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e741d9cd3dc42e0f90fbbd52c0ac6ab67329097ec0a28b54440a4ca7e9fda86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e741d9cd3dc42e0f90fbbd52c0ac6ab67329097ec0a28b54440a4ca7e9fda86->enter($__internal_4e741d9cd3dc42e0f90fbbd52c0ac6ab67329097ec0a28b54440a4ca7e9fda86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d9fe04fdc85e8c93b94d49e9fa110d645b5cfb364bfe04e29c59a2d21fd3fa31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9fe04fdc85e8c93b94d49e9fa110d645b5cfb364bfe04e29c59a2d21fd3fa31->enter($__internal_d9fe04fdc85e8c93b94d49e9fa110d645b5cfb364bfe04e29c59a2d21fd3fa31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>";
        
        $__internal_d9fe04fdc85e8c93b94d49e9fa110d645b5cfb364bfe04e29c59a2d21fd3fa31->leave($__internal_d9fe04fdc85e8c93b94d49e9fa110d645b5cfb364bfe04e29c59a2d21fd3fa31_prof);

        
        $__internal_4e741d9cd3dc42e0f90fbbd52c0ac6ab67329097ec0a28b54440a4ca7e9fda86->leave($__internal_4e741d9cd3dc42e0f90fbbd52c0ac6ab67329097ec0a28b54440a4ca7e9fda86_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_187fe38085781db6467bc628c27ef35c346226b7e0f2e687692993b8c7d465ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187fe38085781db6467bc628c27ef35c346226b7e0f2e687692993b8c7d465ba->enter($__internal_187fe38085781db6467bc628c27ef35c346226b7e0f2e687692993b8c7d465ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d0f8c327a8af55f4268ff4c85e5901244aa0aee015999982af9761e5078a279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d0f8c327a8af55f4268ff4c85e5901244aa0aee015999982af9761e5078a279->enter($__internal_0d0f8c327a8af55f4268ff4c85e5901244aa0aee015999982af9761e5078a279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")";
        
        $__internal_0d0f8c327a8af55f4268ff4c85e5901244aa0aee015999982af9761e5078a279->leave($__internal_0d0f8c327a8af55f4268ff4c85e5901244aa0aee015999982af9761e5078a279_prof);

        
        $__internal_187fe38085781db6467bc628c27ef35c346226b7e0f2e687692993b8c7d465ba->leave($__internal_187fe38085781db6467bc628c27ef35c346226b7e0f2e687692993b8c7d465ba_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d15b84ea4d46395b27871d6f5b30f934293da196b693acec261d0fe731458e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d15b84ea4d46395b27871d6f5b30f934293da196b693acec261d0fe731458e40->enter($__internal_d15b84ea4d46395b27871d6f5b30f934293da196b693acec261d0fe731458e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77f3d4b01e23902951f2b28f0842f570aa2f1ee2ed401bda70819ae25703c68b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f3d4b01e23902951f2b28f0842f570aa2f1ee2ed401bda70819ae25703c68b->enter($__internal_77f3d4b01e23902951f2b28f0842f570aa2f1ee2ed401bda70819ae25703c68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_77f3d4b01e23902951f2b28f0842f570aa2f1ee2ed401bda70819ae25703c68b->leave($__internal_77f3d4b01e23902951f2b28f0842f570aa2f1ee2ed401bda70819ae25703c68b_prof);

        
        $__internal_d15b84ea4d46395b27871d6f5b30f934293da196b693acec261d0fe731458e40->leave($__internal_d15b84ea4d46395b27871d6f5b30f934293da196b693acec261d0fe731458e40_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 141,  213 => 140,  199 => 137,  190 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\symfony\\mi-primer-proyecto\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
