<?php

/* PruebaPrimerBundle:Default:index.html.twig */
class __TwigTemplate_fcd932eb310839ea05d3587d2392f12f608d0454f346a02ce2dad7e5891a69c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "PruebaPrimerBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'formulario' => array($this, 'block_formulario'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a31306607d0e2a69679ca0975b81bfb0f6979eae7d6d11a6d90d54910f281e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a31306607d0e2a69679ca0975b81bfb0f6979eae7d6d11a6d90d54910f281e98->enter($__internal_a31306607d0e2a69679ca0975b81bfb0f6979eae7d6d11a6d90d54910f281e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PruebaPrimerBundle:Default:index.html.twig"));

        $__internal_fab7d41333e69f35ef0bdbb5048c18762d4e952ed65622133763f56e95e55ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab7d41333e69f35ef0bdbb5048c18762d4e952ed65622133763f56e95e55ff4->enter($__internal_fab7d41333e69f35ef0bdbb5048c18762d4e952ed65622133763f56e95e55ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PruebaPrimerBundle:Default:index.html.twig"));

        // line 3
        $context["asset_path"] = "resources/prueba/";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a31306607d0e2a69679ca0975b81bfb0f6979eae7d6d11a6d90d54910f281e98->leave($__internal_a31306607d0e2a69679ca0975b81bfb0f6979eae7d6d11a6d90d54910f281e98_prof);

        
        $__internal_fab7d41333e69f35ef0bdbb5048c18762d4e952ed65622133763f56e95e55ff4->leave($__internal_fab7d41333e69f35ef0bdbb5048c18762d4e952ed65622133763f56e95e55ff4_prof);

    }

    // line 5
    public function block_formulario($context, array $blocks = array())
    {
        $__internal_3ea49d05808a0284a1657d40c185a013c5ed930085a18a04579565907b410b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea49d05808a0284a1657d40c185a013c5ed930085a18a04579565907b410b44->enter($__internal_3ea49d05808a0284a1657d40c185a013c5ed930085a18a04579565907b410b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        $__internal_67b455e584c8cef18be862a42163a930aba46ac8ce26e4f3ee4f7e9bd807ff23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b455e584c8cef18be862a42163a930aba46ac8ce26e4f3ee4f7e9bd807ff23->enter($__internal_67b455e584c8cef18be862a42163a930aba46ac8ce26e4f3ee4f7e9bd807ff23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formulario"));

        // line 6
        echo "\t<div class=\"container\">
\t\t<br><br>
\t\t<div class=\"row\">
\t\t\t<div class=\"col  s12 m12\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s12 m12\">
\t\t\t\t\t\t<div class=\"card \" >
\t\t\t\t\t\t\t<!--<div class=\"card-image\">
\t\t\t\t\t\t\t\t<img src=\"images/sample-1.jpg\">
\t\t\t\t\t\t\t\t<span class=\"card-title\"></span>
\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t\t<div class=\"card-content orange\">
\t\t\t\t\t\t\t\t<h5 class=\"center white-text\">INGRESA TU CUENTA</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col m9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field col m10\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix orange-text\">credit_card</i>
\t\t\t\t\t\t\t\t\t\t\t<input id=\"cuenta\" name=\"cuenta\" type=\"number\" class=\"validate\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"mensaje\" class=\"red-text\"></div>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"cuenta\">No. Cuenta: </label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col m3\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn waves-effect waves-light orange\" id=\"btnAcceder\">
\t\t\t\t\t\t\t\t\t\t\tAcceder
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons right\">send</i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"card\" id=\"acciones\" hidden>

\t\t\t\t\t<div class=\"card-content center\">
\t\t\t\t\t\t<h3 class=\"orange-text text-darken-4\">Bienvenido! </h3>
\t\t\t\t\t\t<h4 id=\"hcliente\"></h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-tabs \">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<h5 class=\"orange-text text-darken-3 center\">ACCIONES</h5>
\t\t\t\t\t\t<br> <br> <br>
\t\t\t\t\t\t<ul class=\"tabs tabs-fixed-width\">
\t\t\t\t\t\t\t<li class=\"tab\">
\t\t\t\t\t\t\t\t<a href=\"#movimientos\" class=\"orange-text darken-4\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">assignment</i>
\t\t\t\t\t\t\t\t\t Historial
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"tab\">
\t\t\t\t\t\t\t\t<a href=\"#abonar\" class=\"orange-text darken-4\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">arrow_downward</i>
\t\t\t\t\t\t\t\t\tAbonar
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"tab\">
\t\t\t\t\t\t\t\t<a href=\"#retirar\" class=\"orange-text darken-4\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">arrow_upward</i>
\t\t\t\t\t\t\t\t\tRetirar
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content grey lighten-4\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col s6\">
                                <h5 id=\"hsaldo\"></h5>
\t\t\t\t\t\t\t\t<div id=\"noCuenta\" ></div>
\t\t\t\t\t\t\t\t<br> <br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\" id=\"retirar\">
\t\t\t\t\t\t\t<form class=\"col s12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"input-field col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix orange-text\">monetization_on</i>
\t\t\t\t\t\t\t\t\t\t<input id=\"canti\" name=\"canti\" type=\"number\" class=\"validate\">
\t\t\t\t\t\t\t\t\t\t<label for=\"canti\">Monto: </label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"input-field col s6 center\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn waves-effect waves-light orange\" id=\"btnRetirar\">
\t\t\t\t\t\t\t\t\t\t\tRetirar
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons right\">arrow_upward</i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row\" id=\"abonar\">
\t\t\t\t\t\t\t<form class=\"col s12\">
\t\t\t\t\t\t\t\t\t<div class=\"input-field col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix orange-text\">monetization_on</i>
\t\t\t\t\t\t\t\t\t\t<input id=\"cantidad\" name=\"cantidad\" type=\"text\" class=\"validate\">
\t\t\t\t\t\t\t\t\t\t<label for=\"cantidad\">Monto</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"input-field col s6 center\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn waves-effect waves-light orange\" id=\"btnAbonar\">
\t\t\t\t\t\t\t\t\t\t\tAbonar
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons right\">arrow_downward</i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row\" id=\"movimientos\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<table id=\"tablaMov\" class=\"table table-striped table-hover table-bordered\">
\t\t\t\t\t\t\t\t\t<thead class=\"table-primary\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>No. Movimiento</th>
\t\t\t\t\t\t\t\t\t\t<th>Tipo</th>
\t\t\t\t\t\t\t\t\t\t<th>Fecha</th>
\t\t\t\t\t\t\t\t\t\t<th>Importe</th>
\t\t\t\t\t\t\t\t\t\t<th>Sucursal</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>";
        
        $__internal_67b455e584c8cef18be862a42163a930aba46ac8ce26e4f3ee4f7e9bd807ff23->leave($__internal_67b455e584c8cef18be862a42163a930aba46ac8ce26e4f3ee4f7e9bd807ff23_prof);

        
        $__internal_3ea49d05808a0284a1657d40c185a013c5ed930085a18a04579565907b410b44->leave($__internal_3ea49d05808a0284a1657d40c185a013c5ed930085a18a04579565907b410b44_prof);

    }

    // line 141
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_382507fe3d017f578bd25791c253ff63ef5334a59be101c7dbb90719bea7265d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382507fe3d017f578bd25791c253ff63ef5334a59be101c7dbb90719bea7265d->enter($__internal_382507fe3d017f578bd25791c253ff63ef5334a59be101c7dbb90719bea7265d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_69a2333cd16f5af0a76a99317b7f1324a622578a5a803ce16e651d025215d1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a2333cd16f5af0a76a99317b7f1324a622578a5a803ce16e651d025215d1ab->enter($__internal_69a2333cd16f5af0a76a99317b7f1324a622578a5a803ce16e651d025215d1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 142
        echo "\t<!--Bloque donde se crea la variable url que manda  llamar a insertar_movimientos-->";
        // line 143
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script>
\t\tvar url_setMovimientos= \"";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("insertar_movimientos");
        echo "\";
\t\tvar url_getMovimientos= \"";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("select_movimientos");
        echo "\"
\t</script>
\t<!--Se importa el archivo js-->
\t<script type=\"text/javascript\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($context["asset_path"] ?? $this->getContext($context, "asset_path")) . "primerBundle.js")), "html", null, true);
        echo "\"></script>";
        
        $__internal_69a2333cd16f5af0a76a99317b7f1324a622578a5a803ce16e651d025215d1ab->leave($__internal_69a2333cd16f5af0a76a99317b7f1324a622578a5a803ce16e651d025215d1ab_prof);

        
        $__internal_382507fe3d017f578bd25791c253ff63ef5334a59be101c7dbb90719bea7265d->leave($__internal_382507fe3d017f578bd25791c253ff63ef5334a59be101c7dbb90719bea7265d_prof);

    }

    public function getTemplateName()
    {
        return "PruebaPrimerBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 149,  215 => 146,  211 => 145,  206 => 143,  204 => 142,  195 => 141,  53 => 6,  44 => 5,  34 => 1,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% set asset_path = 'resources/prueba/' %}

{% block formulario %}
\t<div class=\"container\">
\t\t<br><br>
\t\t<div class=\"row\">
\t\t\t<div class=\"col  s12 m12\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col s12 m12\">
\t\t\t\t\t\t<div class=\"card \" >
\t\t\t\t\t\t\t<!--<div class=\"card-image\">
\t\t\t\t\t\t\t\t<img src=\"images/sample-1.jpg\">
\t\t\t\t\t\t\t\t<span class=\"card-title\"></span>
\t\t\t\t\t\t\t</div>-->
\t\t\t\t\t\t\t<div class=\"card-content orange\">
\t\t\t\t\t\t\t\t<h5 class=\"center white-text\">INGRESA TU CUENTA</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col m9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-field col m10\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix orange-text\">credit_card</i>
\t\t\t\t\t\t\t\t\t\t\t<input id=\"cuenta\" name=\"cuenta\" type=\"number\" class=\"validate\">
\t\t\t\t\t\t\t\t\t\t\t<div id=\"mensaje\" class=\"red-text\"></div>
\t\t\t\t\t\t\t\t\t\t\t<label for=\"cuenta\">No. Cuenta: </label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col m3\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn waves-effect waves-light orange\" id=\"btnAcceder\">
\t\t\t\t\t\t\t\t\t\t\tAcceder
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons right\">send</i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"card\" id=\"acciones\" hidden>

\t\t\t\t\t<div class=\"card-content center\">
\t\t\t\t\t\t<h3 class=\"orange-text text-darken-4\">Bienvenido! </h3>
\t\t\t\t\t\t<h4 id=\"hcliente\"></h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-tabs \">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<h5 class=\"orange-text text-darken-3 center\">ACCIONES</h5>
\t\t\t\t\t\t<br> <br> <br>
\t\t\t\t\t\t<ul class=\"tabs tabs-fixed-width\">
\t\t\t\t\t\t\t<li class=\"tab\">
\t\t\t\t\t\t\t\t<a href=\"#movimientos\" class=\"orange-text darken-4\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">assignment</i>
\t\t\t\t\t\t\t\t\t Historial
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"tab\">
\t\t\t\t\t\t\t\t<a href=\"#abonar\" class=\"orange-text darken-4\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">arrow_downward</i>
\t\t\t\t\t\t\t\t\tAbonar
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"tab\">
\t\t\t\t\t\t\t\t<a href=\"#retirar\" class=\"orange-text darken-4\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">arrow_upward</i>
\t\t\t\t\t\t\t\t\tRetirar
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content grey lighten-4\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col s6\">
                                <h5 id=\"hsaldo\"></h5>
\t\t\t\t\t\t\t\t<div id=\"noCuenta\" ></div>
\t\t\t\t\t\t\t\t<br> <br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\" id=\"retirar\">
\t\t\t\t\t\t\t<form class=\"col s12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"input-field col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix orange-text\">monetization_on</i>
\t\t\t\t\t\t\t\t\t\t<input id=\"canti\" name=\"canti\" type=\"number\" class=\"validate\">
\t\t\t\t\t\t\t\t\t\t<label for=\"canti\">Monto: </label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"input-field col s6 center\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn waves-effect waves-light orange\" id=\"btnRetirar\">
\t\t\t\t\t\t\t\t\t\t\tRetirar
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons right\">arrow_upward</i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row\" id=\"abonar\">
\t\t\t\t\t\t\t<form class=\"col s12\">
\t\t\t\t\t\t\t\t\t<div class=\"input-field col s6\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons prefix orange-text\">monetization_on</i>
\t\t\t\t\t\t\t\t\t\t<input id=\"cantidad\" name=\"cantidad\" type=\"text\" class=\"validate\">
\t\t\t\t\t\t\t\t\t\t<label for=\"cantidad\">Monto</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"input-field col s6 center\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn waves-effect waves-light orange\" id=\"btnAbonar\">
\t\t\t\t\t\t\t\t\t\t\tAbonar
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons right\">arrow_downward</i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row\" id=\"movimientos\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<table id=\"tablaMov\" class=\"table table-striped table-hover table-bordered\">
\t\t\t\t\t\t\t\t\t<thead class=\"table-primary\">
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>No. Movimiento</th>
\t\t\t\t\t\t\t\t\t\t<th>Tipo</th>
\t\t\t\t\t\t\t\t\t\t<th>Fecha</th>
\t\t\t\t\t\t\t\t\t\t<th>Importe</th>
\t\t\t\t\t\t\t\t\t\t<th>Sucursal</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>
{% endblock %}

{% block javascripts %}
\t<!--Bloque donde se crea la variable url que manda  llamar a insertar_movimientos-->
\t{{ parent() }}
\t<script>
\t\tvar url_setMovimientos= \"{{ path('insertar_movimientos') }}\";
\t\tvar url_getMovimientos= \"{{ path('select_movimientos') }}\"
\t</script>
\t<!--Se importa el archivo js-->
\t<script type=\"text/javascript\" src=\"{{ asset(asset_path ~ 'primerBundle.js') }}\"></script>
{% endblock %}", "PruebaPrimerBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\symfony\\mi-primer-proyecto\\src\\Prueba\\PrimerBundle/Resources/views/Default/index.html.twig");
    }
}
