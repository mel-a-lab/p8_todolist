<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f8e7a592300f4e1285d21465f298c174acddb0c450174991232424d8399bfb01 extends Twig_Template
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
        $__internal_72b9d00f9b1f5d93694f49b16e3ca949461933ca12c6f4d226ec60407e96793b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b9d00f9b1f5d93694f49b16e3ca949461933ca12c6f4d226ec60407e96793b->enter($__internal_72b9d00f9b1f5d93694f49b16e3ca949461933ca12c6f4d226ec60407e96793b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72b9d00f9b1f5d93694f49b16e3ca949461933ca12c6f4d226ec60407e96793b->leave($__internal_72b9d00f9b1f5d93694f49b16e3ca949461933ca12c6f4d226ec60407e96793b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6125e5ce6c793529290b07a6d135aa5bfa7385d641bc3cb26dfd3f6598624059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6125e5ce6c793529290b07a6d135aa5bfa7385d641bc3cb26dfd3f6598624059->enter($__internal_6125e5ce6c793529290b07a6d135aa5bfa7385d641bc3cb26dfd3f6598624059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6125e5ce6c793529290b07a6d135aa5bfa7385d641bc3cb26dfd3f6598624059->leave($__internal_6125e5ce6c793529290b07a6d135aa5bfa7385d641bc3cb26dfd3f6598624059_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9325f4e294e455f8666cbe42120794c74eaebb6a8075bd27d05d84a85cddf2a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9325f4e294e455f8666cbe42120794c74eaebb6a8075bd27d05d84a85cddf2a7->enter($__internal_9325f4e294e455f8666cbe42120794c74eaebb6a8075bd27d05d84a85cddf2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9325f4e294e455f8666cbe42120794c74eaebb6a8075bd27d05d84a85cddf2a7->leave($__internal_9325f4e294e455f8666cbe42120794c74eaebb6a8075bd27d05d84a85cddf2a7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_db2b4c291613b19b13c7c101932739763193b29bdd743352b68fbe941e20d844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2b4c291613b19b13c7c101932739763193b29bdd743352b68fbe941e20d844->enter($__internal_db2b4c291613b19b13c7c101932739763193b29bdd743352b68fbe941e20d844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_db2b4c291613b19b13c7c101932739763193b29bdd743352b68fbe941e20d844->leave($__internal_db2b4c291613b19b13c7c101932739763193b29bdd743352b68fbe941e20d844_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/melaniedussenne/Documents/OpenClassRooms/todolist/projet8-TodoList/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
