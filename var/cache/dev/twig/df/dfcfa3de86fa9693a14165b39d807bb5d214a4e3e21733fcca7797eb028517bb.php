<?php

/* user/create.html.twig */
class __TwigTemplate_2e690494e21fbfa62975cf5361a36a6a7381e64f4d2a22aea08520fa64f14749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/create.html.twig", 1);
        $this->blocks = array(
            'header_title' => array($this, 'block_header_title'),
            'header_img' => array($this, 'block_header_img'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1969caa2b197899cc58ca5800511aa0f391343aca672cdc777c93ab0e39bfcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1969caa2b197899cc58ca5800511aa0f391343aca672cdc777c93ab0e39bfcb->enter($__internal_d1969caa2b197899cc58ca5800511aa0f391343aca672cdc777c93ab0e39bfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1969caa2b197899cc58ca5800511aa0f391343aca672cdc777c93ab0e39bfcb->leave($__internal_d1969caa2b197899cc58ca5800511aa0f391343aca672cdc777c93ab0e39bfcb_prof);

    }

    // line 3
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_2caedc7af54d31e118b4bb5d28d3c7901a8857cf1c2fc423d68c66f92f9f05e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2caedc7af54d31e118b4bb5d28d3c7901a8857cf1c2fc423d68c66f92f9f05e8->enter($__internal_2caedc7af54d31e118b4bb5d28d3c7901a8857cf1c2fc423d68c66f92f9f05e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user/create.html.twig"));

        echo "<h1>Créer un utilisateur</h1>";
        
        $__internal_2caedc7af54d31e118b4bb5d28d3c7901a8857cf1c2fc423d68c66f92f9f05e8->leave($__internal_2caedc7af54d31e118b4bb5d28d3c7901a8857cf1c2fc423d68c66f92f9f05e8_prof);

    }

    // line 4
    public function block_header_img($context, array $blocks = array())
    {
        $__internal_ccfc6f59b55bf61e938f811c44a224315b7eb18ff79b8af0bb7de3d550865373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccfc6f59b55bf61e938f811c44a224315b7eb18ff79b8af0bb7de3d550865373->enter($__internal_ccfc6f59b55bf61e938f811c44a224315b7eb18ff79b8af0bb7de3d550865373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user/create.html.twig"));

        
        $__internal_ccfc6f59b55bf61e938f811c44a224315b7eb18ff79b8af0bb7de3d550865373->leave($__internal_ccfc6f59b55bf61e938f811c44a224315b7eb18ff79b8af0bb7de3d550865373_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad588d3a16a0191cdc9c98951accbe9874deefdc30cd6cd2faaaed694a34dd0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad588d3a16a0191cdc9c98951accbe9874deefdc30cd6cd2faaaed694a34dd0e->enter($__internal_ad588d3a16a0191cdc9c98951accbe9874deefdc30cd6cd2faaaed694a34dd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user/create.html.twig"));

        // line 7
        echo "    <div class=\"row\">
        ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_create")));
        echo "
            ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            <button type=\"submit\" class=\"btn btn-success pull-right\">Ajouter</button>
        ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_ad588d3a16a0191cdc9c98951accbe9874deefdc30cd6cd2faaaed694a34dd0e->leave($__internal_ad588d3a16a0191cdc9c98951accbe9874deefdc30cd6cd2faaaed694a34dd0e_prof);

    }

    public function getTemplateName()
    {
        return "user/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 9,  68 => 8,  65 => 7,  59 => 6,  48 => 4,  36 => 3,  11 => 1,);
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

{% block header_title %}<h1>Créer un utilisateur</h1>{% endblock %}
{% block header_img %}{% endblock %}

{% block body %}
    <div class=\"row\">
        {{ form_start(form, {'action' : path('user_create')}) }}
            {{ form_widget(form) }}

            <button type=\"submit\" class=\"btn btn-success pull-right\">Ajouter</button>
        {{ form_end(form) }}
    </div>
{% endblock %}
", "user/create.html.twig", "/Users/melaniedussenne/Documents/OpenClassRooms/todolist/projet8-TodoList/app/Resources/views/user/create.html.twig");
    }
}
