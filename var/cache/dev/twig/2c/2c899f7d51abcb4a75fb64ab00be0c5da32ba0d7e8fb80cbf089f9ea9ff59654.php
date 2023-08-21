<?php

/* default/index.html.twig */
class __TwigTemplate_aa03484785faa3e24ff274e49f4080e850345aec73be64c1777921664046a2b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'header_title' => array($this, 'block_header_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54174b9475989b92a782db0910fb03467664e993963f16e4abc9da0608eda4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54174b9475989b92a782db0910fb03467664e993963f16e4abc9da0608eda4f1->enter($__internal_54174b9475989b92a782db0910fb03467664e993963f16e4abc9da0608eda4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54174b9475989b92a782db0910fb03467664e993963f16e4abc9da0608eda4f1->leave($__internal_54174b9475989b92a782db0910fb03467664e993963f16e4abc9da0608eda4f1_prof);

    }

    // line 3
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_966bacec5ba0117a1b9d072b0d57a0b3ce110e5bc50d3b169f5b8d44bcc6d8fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_966bacec5ba0117a1b9d072b0d57a0b3ce110e5bc50d3b169f5b8d44bcc6d8fb->enter($__internal_966bacec5ba0117a1b9d072b0d57a0b3ce110e5bc50d3b169f5b8d44bcc6d8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/index.html.twig"));

        // line 4
        echo "    <h1>Bienvenue sur Todo List, l'application vous permettant de gérer l'ensemble de vos tâches sans effort !</h1>
";
        
        $__internal_966bacec5ba0117a1b9d072b0d57a0b3ce110e5bc50d3b169f5b8d44bcc6d8fb->leave($__internal_966bacec5ba0117a1b9d072b0d57a0b3ce110e5bc50d3b169f5b8d44bcc6d8fb_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c22132a49712ef232dfa9f63f5e2b86cccf188571cd2b2bee73d17898a5e9cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22132a49712ef232dfa9f63f5e2b86cccf188571cd2b2bee73d17898a5e9cb8->enter($__internal_c22132a49712ef232dfa9f63f5e2b86cccf188571cd2b2bee73d17898a5e9cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "default/index.html.twig"));

        // line 8
        echo "
    <div class=\"row\">
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_create");
        echo "\" class=\"btn btn-success\">Créer une nouvelle tâche</a>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_list");
        echo "\" class=\"btn btn-info\">Consulter la liste des tâches à faire</a>
        <a href=\"\" class=\"btn btn-secondary\">Consulter la liste des tâches terminées</a>
    </div>
";
        
        $__internal_c22132a49712ef232dfa9f63f5e2b86cccf188571cd2b2bee73d17898a5e9cb8->leave($__internal_c22132a49712ef232dfa9f63f5e2b86cccf188571cd2b2bee73d17898a5e9cb8_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  59 => 10,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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

{% block header_title %}
    <h1>Bienvenue sur Todo List, l'application vous permettant de gérer l'ensemble de vos tâches sans effort !</h1>
{% endblock %}

{% block body %}

    <div class=\"row\">
        <a href=\"{{ path('task_create') }}\" class=\"btn btn-success\">Créer une nouvelle tâche</a>
        <a href=\"{{ path('task_list') }}\" class=\"btn btn-info\">Consulter la liste des tâches à faire</a>
        <a href=\"\" class=\"btn btn-secondary\">Consulter la liste des tâches terminées</a>
    </div>
{% endblock %}
", "default/index.html.twig", "/Users/melaniedussenne/Documents/OpenClassRooms/todolist/projet8-TodoList/app/Resources/views/default/index.html.twig");
    }
}
