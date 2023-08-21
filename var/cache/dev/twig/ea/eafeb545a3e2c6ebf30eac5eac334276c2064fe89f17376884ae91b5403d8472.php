<?php

/* task/create.html.twig */
class __TwigTemplate_a0cdff5f2490d11dcf0fb357f895aaa5e78629bca6d68b70cf520cee3901c5e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/create.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed86dbecbabff537b6f9930d4bfb948568bcb9a47572e999378b5bee9b19a7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed86dbecbabff537b6f9930d4bfb948568bcb9a47572e999378b5bee9b19a7be->enter($__internal_ed86dbecbabff537b6f9930d4bfb948568bcb9a47572e999378b5bee9b19a7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed86dbecbabff537b6f9930d4bfb948568bcb9a47572e999378b5bee9b19a7be->leave($__internal_ed86dbecbabff537b6f9930d4bfb948568bcb9a47572e999378b5bee9b19a7be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ca0961e40102b296b32574147a57d7e412b5747ea07c7ec658278302fdbf3aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca0961e40102b296b32574147a57d7e412b5747ea07c7ec658278302fdbf3aa->enter($__internal_1ca0961e40102b296b32574147a57d7e412b5747ea07c7ec658278302fdbf3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "task/create.html.twig"));

        // line 4
        echo "    <div class=\"row\">
        ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_create")));
        echo "
            ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            <button type=\"submit\" class=\"btn btn-success pull-right\">Ajouter</button>
        ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_list");
        echo "\" class=\"btn btn-primary\">Retour à la liste des tâches</a>
    </div>
";
        
        $__internal_1ca0961e40102b296b32574147a57d7e412b5747ea07c7ec658278302fdbf3aa->leave($__internal_1ca0961e40102b296b32574147a57d7e412b5747ea07c7ec658278302fdbf3aa_prof);

    }

    public function getTemplateName()
    {
        return "task/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  53 => 9,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

{% block body %}
    <div class=\"row\">
        {{ form_start(form, {'action' : path('task_create')}) }}
            {{ form_widget(form) }}

            <button type=\"submit\" class=\"btn btn-success pull-right\">Ajouter</button>
        {{ form_end(form) }}

        <a href=\"{{ path('task_list') }}\" class=\"btn btn-primary\">Retour à la liste des tâches</a>
    </div>
{% endblock %}
", "task/create.html.twig", "/Users/melaniedussenne/Documents/OpenClassRooms/todolist/projet8-TodoList/app/Resources/views/task/create.html.twig");
    }
}
