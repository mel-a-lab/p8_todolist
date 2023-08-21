<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_14b42322baa11de3414254059685c2c8d577bee4045a1c2746d4979a23ec3547 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_bbc9991acdc9da28d863b22c79f752fb882cb43f9e680722a89fd1bb12ef9c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc9991acdc9da28d863b22c79f752fb882cb43f9e680722a89fd1bb12ef9c1c->enter($__internal_bbc9991acdc9da28d863b22c79f752fb882cb43f9e680722a89fd1bb12ef9c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbc9991acdc9da28d863b22c79f752fb882cb43f9e680722a89fd1bb12ef9c1c->leave($__internal_bbc9991acdc9da28d863b22c79f752fb882cb43f9e680722a89fd1bb12ef9c1c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b8929a339f3fae5ce1b26490076e3e6b17c989a018ff9ad006376bd03d164cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8929a339f3fae5ce1b26490076e3e6b17c989a018ff9ad006376bd03d164cba->enter($__internal_b8929a339f3fae5ce1b26490076e3e6b17c989a018ff9ad006376bd03d164cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_b8929a339f3fae5ce1b26490076e3e6b17c989a018ff9ad006376bd03d164cba->leave($__internal_b8929a339f3fae5ce1b26490076e3e6b17c989a018ff9ad006376bd03d164cba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9527906c223510d8bf450f1a9e76c76d4b28cff4c5d9d8b445cc8cc80589ecc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9527906c223510d8bf450f1a9e76c76d4b28cff4c5d9d8b445cc8cc80589ecc5->enter($__internal_9527906c223510d8bf450f1a9e76c76d4b28cff4c5d9d8b445cc8cc80589ecc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9527906c223510d8bf450f1a9e76c76d4b28cff4c5d9d8b445cc8cc80589ecc5->leave($__internal_9527906c223510d8bf450f1a9e76c76d4b28cff4c5d9d8b445cc8cc80589ecc5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f02d4ff134df68ac62eebfd441e2bd65638186d1b09acf5e887f927e2b93d9f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02d4ff134df68ac62eebfd441e2bd65638186d1b09acf5e887f927e2b93d9f6->enter($__internal_f02d4ff134df68ac62eebfd441e2bd65638186d1b09acf5e887f927e2b93d9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f02d4ff134df68ac62eebfd441e2bd65638186d1b09acf5e887f927e2b93d9f6->leave($__internal_f02d4ff134df68ac62eebfd441e2bd65638186d1b09acf5e887f927e2b93d9f6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/melaniedussenne/Documents/OpenClassRooms/todolist/projet8-TodoList/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
