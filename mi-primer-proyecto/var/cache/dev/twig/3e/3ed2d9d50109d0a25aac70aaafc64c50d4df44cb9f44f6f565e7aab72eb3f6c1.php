<?php

/* base.html.twig */
class __TwigTemplate_9632f828f13b1fffd231950a1ca30213c1af9d5bfeca36705baa6c4299150f80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'formulario' => array($this, 'block_formulario'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71a41071e28fc9c7cf7a923942183921a4fc1a8cf11f74fb3da6f15847864ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a41071e28fc9c7cf7a923942183921a4fc1a8cf11f74fb3da6f15847864ad9->enter($__internal_71a41071e28fc9c7cf7a923942183921a4fc1a8cf11f74fb3da6f15847864ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e993956851f7ad918164810e3fd6aad6fa93ffc22c4f8c6764c084a21a9467aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e993956851f7ad918164810e3fd6aad6fa93ffc22c4f8c6764c084a21a9467aa->enter($__internal_e993956851f7ad918164810e3fd6aad6fa93ffc22c4f8c6764c084a21a9467aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>
    <body>";
        // line 15
        $this->displayBlock('header', $context, $blocks);
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 33
        $this->displayBlock('footer', $context, $blocks);
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "    </body>
</html>

";
        
        $__internal_71a41071e28fc9c7cf7a923942183921a4fc1a8cf11f74fb3da6f15847864ad9->leave($__internal_71a41071e28fc9c7cf7a923942183921a4fc1a8cf11f74fb3da6f15847864ad9_prof);

        
        $__internal_e993956851f7ad918164810e3fd6aad6fa93ffc22c4f8c6764c084a21a9467aa->leave($__internal_e993956851f7ad918164810e3fd6aad6fa93ffc22c4f8c6764c084a21a9467aa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_51e305f9914ad38065ad328db54d657931694cf376e96a7840997665ce33b666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51e305f9914ad38065ad328db54d657931694cf376e96a7840997665ce33b666->enter($__internal_51e305f9914ad38065ad328db54d657931694cf376e96a7840997665ce33b666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_51c2ab3a8a784a15fe1a8633f5efe5d4b7169e4f398ed0f70155b7d4b661f8b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c2ab3a8a784a15fe1a8633f5efe5d4b7169e4f398ed0f70155b7d4b661f8b6->enter($__internal_51c2ab3a8a784a15fe1a8633f5efe5d4b7169e4f398ed0f70155b7d4b661f8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Banquito";
        
        $__internal_51c2ab3a8a784a15fe1a8633f5efe5d4b7169e4f398ed0f70155b7d4b661f8b6->leave($__internal_51c2ab3a8a784a15fe1a8633f5efe5d4b7169e4f398ed0f70155b7d4b661f8b6_prof);

        
        $__internal_51e305f9914ad38065ad328db54d657931694cf376e96a7840997665ce33b666->leave($__internal_51e305f9914ad38065ad328db54d657931694cf376e96a7840997665ce33b666_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_439f2d2a9bbed3ba94111c031aaa38dd6d6b4fa898a9fb07bae4b5468c1e0383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_439f2d2a9bbed3ba94111c031aaa38dd6d6b4fa898a9fb07bae4b5468c1e0383->enter($__internal_439f2d2a9bbed3ba94111c031aaa38dd6d6b4fa898a9fb07bae4b5468c1e0383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_962a41439883046497ae82c594686e59525f04990d5d019130015bb8139126df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962a41439883046497ae82c594686e59525f04990d5d019130015bb8139126df->enter($__internal_962a41439883046497ae82c594686e59525f04990d5d019130015bb8139126df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/materialize.min.css"), "html", null, true);
        echo "\">
            <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/all.min.css"), "html", null, true);
        echo "\">
            <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/dataTable.min.css"), "html", null, true);
        echo "\">
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">";
        
        $__internal_962a41439883046497ae82c594686e59525f04990d5d019130015bb8139126df->leave($__internal_962a41439883046497ae82c594686e59525f04990d5d019130015bb8139126df_prof);

        
        $__internal_439f2d2a9bbed3ba94111c031aaa38dd6d6b4fa898a9fb07bae4b5468c1e0383->leave($__internal_439f2d2a9bbed3ba94111c031aaa38dd6d6b4fa898a9fb07bae4b5468c1e0383_prof);

    }

    // line 15
    public function block_header($context, array $blocks = array())
    {
        $__internal_dcc18e470d92f911765f10f2e1ae78291e21add511235c185748421ceef017e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcc18e470d92f911765f10f2e1ae78291e21add511235c185748421ceef017e7->enter($__internal_dcc18e470d92f911765f10f2e1ae78291e21add511235c185748421ceef017e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_428dce72bcaa86aafd9757f63c3fda7b9149ac7af31ca55092a6959f1b78588d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_428dce72bcaa86aafd9757f63c3fda7b9149ac7af31ca55092a6959f1b78588d->enter($__internal_428dce72bcaa86aafd9757f63c3fda7b9149ac7af31ca55092a6959f1b78588d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 16
        echo "            <nav>
                <div class=\"nav-wrapper teal  orange darken-2\">
                    <a href=\"#!\" class=\"brand-logo\">
                        <i class=\"fa-solid fa-piggy-bank fa-bounce\"></i>
                        Banquito</a>

                </div>
            </nav>";
        
        $__internal_428dce72bcaa86aafd9757f63c3fda7b9149ac7af31ca55092a6959f1b78588d->leave($__internal_428dce72bcaa86aafd9757f63c3fda7b9149ac7af31ca55092a6959f1b78588d_prof);

        
        $__internal_dcc18e470d92f911765f10f2e1ae78291e21add511235c185748421ceef017e7->leave($__internal_dcc18e470d92f911765f10f2e1ae78291e21add511235c185748421ceef017e7_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f7d9bfbd4cf926f573c1e91b80058b4f54eff66fd02f4764a34715578f83bfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f7d9bfbd4cf926f573c1e91b80058b4f54eff66fd02f4764a34715578f83bfa->enter($__internal_1f7d9bfbd4cf926f573c1e91b80058b4f54eff66fd02f4764a34715578f83bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf8d298d82e338e6ba3eec79f40c4230858fe522b7b1d7bdf492fd7757ace729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8d298d82e338e6ba3eec79f40c4230858fe522b7b1d7bdf492fd7757ace729->enter($__internal_bf8d298d82e338e6ba3eec79f40c4230858fe522b7b1d7bdf492fd7757ace729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        $this->displayBlock('formulario', $context, $blocks);
        
        $__internal_bf8d298d82e338e6ba3eec79f40c4230858fe522b7b1d7bdf492fd7757ace729->leave($__internal_bf8d298d82e338e6ba3eec79f40c4230858fe522b7b1d7bdf492fd7757ace729_prof);

        
        $__internal_1f7d9bfbd4cf926f573c1e91b80058b4f54eff66fd02f4764a34715578f83bfa->leave($__internal_1f7d9bfbd4cf926f573c1e91b80058b4f54eff66fd02f4764a34715578f83bfa_prof);

    }

    public function block_formulario($context, array $blocks = array())
    {
        $__internal_5febf9d960f2feaacb506f6a45f0f3031e84e000cfe22cadc325064aac71bed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5febf9d960f2feaacb506f6a45f0f3031e84e000cfe22cadc325064aac71bed1->enter($__internal_5febf9d960f2feaacb506f6a45f0f3031e84e000cfe22cadc325064aac71bed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        $__internal_3e343d80ee62ee92282d783ee2d345c4abb7ae203cc1f4c7a4f52fcd0bfc5ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e343d80ee62ee92282d783ee2d345c4abb7ae203cc1f4c7a4f52fcd0bfc5ebe->enter($__internal_3e343d80ee62ee92282d783ee2d345c4abb7ae203cc1f4c7a4f52fcd0bfc5ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        
        $__internal_3e343d80ee62ee92282d783ee2d345c4abb7ae203cc1f4c7a4f52fcd0bfc5ebe->leave($__internal_3e343d80ee62ee92282d783ee2d345c4abb7ae203cc1f4c7a4f52fcd0bfc5ebe_prof);

        
        $__internal_5febf9d960f2feaacb506f6a45f0f3031e84e000cfe22cadc325064aac71bed1->leave($__internal_5febf9d960f2feaacb506f6a45f0f3031e84e000cfe22cadc325064aac71bed1_prof);

    }

    // line 33
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5720e7599294bbc9e5541a17dd5031488a7bf17dfde175d35fce4355ad13e26d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5720e7599294bbc9e5541a17dd5031488a7bf17dfde175d35fce4355ad13e26d->enter($__internal_5720e7599294bbc9e5541a17dd5031488a7bf17dfde175d35fce4355ad13e26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_748f617f191207f7035730fc8ca54d1f750eb4ccafed3b4bb2b3b6959fde2e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748f617f191207f7035730fc8ca54d1f750eb4ccafed3b4bb2b3b6959fde2e44->enter($__internal_748f617f191207f7035730fc8ca54d1f750eb4ccafed3b4bb2b3b6959fde2e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_748f617f191207f7035730fc8ca54d1f750eb4ccafed3b4bb2b3b6959fde2e44->leave($__internal_748f617f191207f7035730fc8ca54d1f750eb4ccafed3b4bb2b3b6959fde2e44_prof);

        
        $__internal_5720e7599294bbc9e5541a17dd5031488a7bf17dfde175d35fce4355ad13e26d->leave($__internal_5720e7599294bbc9e5541a17dd5031488a7bf17dfde175d35fce4355ad13e26d_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3aa9dffd0201f0dcd738c8fc1dd231c08eae6b513623df2203fb890ded493413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aa9dffd0201f0dcd738c8fc1dd231c08eae6b513623df2203fb890ded493413->enter($__internal_3aa9dffd0201f0dcd738c8fc1dd231c08eae6b513623df2203fb890ded493413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7de3abe62d3f77badf92ac2768e467fcdfbef52badf6229c25e43513353d8be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de3abe62d3f77badf92ac2768e467fcdfbef52badf6229c25e43513353d8be4->enter($__internal_7de3abe62d3f77badf92ac2768e467fcdfbef52badf6229c25e43513353d8be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo "            <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.7.0.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/dataTable.min.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/materialize.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/all.min.js"), "html", null, true);
        echo "></script>";
        
        $__internal_7de3abe62d3f77badf92ac2768e467fcdfbef52badf6229c25e43513353d8be4->leave($__internal_7de3abe62d3f77badf92ac2768e467fcdfbef52badf6229c25e43513353d8be4_prof);

        
        $__internal_3aa9dffd0201f0dcd738c8fc1dd231c08eae6b513623df2203fb890ded493413->leave($__internal_3aa9dffd0201f0dcd738c8fc1dd231c08eae6b513623df2203fb890ded493413_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  215 => 40,  211 => 39,  207 => 38,  202 => 37,  193 => 36,  176 => 33,  150 => 27,  141 => 25,  124 => 16,  115 => 15,  103 => 9,  99 => 8,  94 => 7,  85 => 6,  67 => 5,  54 => 42,  52 => 36,  50 => 33,  48 => 25,  46 => 15,  43 => 12,  41 => 6,  38 => 5,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Banquito{% endblock %}</title>
        {% block stylesheets %}
            <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('css/materialize.min.css') }}\">
            <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('css/all.min.css') }}\">
            <link type=\"text/css\" rel=\"stylesheet\" href=\"{{ asset('css/dataTable.min.css') }}\">
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        {% endblock %}
    </head>
    <body>

        {% block header %}
            <nav>
                <div class=\"nav-wrapper teal  orange darken-2\">
                    <a href=\"#!\" class=\"brand-logo\">
                        <i class=\"fa-solid fa-piggy-bank fa-bounce\"></i>
                        Banquito</a>

                </div>
            </nav>
        {% endblock %}
        {% block body %}

                    {% block formulario %}
                    {% endblock %}


        {% endblock %}

        {% block footer %}

        {% endblock %}
        {% block javascripts %}
            <script src={{ asset('js/jquery-3.7.0.js') }}></script>
            <script src={{ asset('js/dataTable.min.js') }}></script>
            <script src={{ asset('js/materialize.js') }}></script>
            <script src={{ asset('js/all.min.js') }}></script>
        {% endblock %}
    </body>
</html>

", "base.html.twig", "C:\\xampp\\htdocs\\symfony\\mi-primer-proyecto\\app\\Resources\\views\\base.html.twig");
    }
}
