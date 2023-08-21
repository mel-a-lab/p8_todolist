<?php

/* user/list.html.twig */
class __TwigTemplate_62050eb4abb08cb659ed1925a368e1f1eb040fb3f86e5ad54d1607db83846932 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/list.html.twig", 1);
        $this->blocks = array(
            'header_img' => array($this, 'block_header_img'),
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
        $__internal_b884fce4c192dae16d5a62674af1f2dbcc57c85a335b2651cb6687de62ac74eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b884fce4c192dae16d5a62674af1f2dbcc57c85a335b2651cb6687de62ac74eb->enter($__internal_b884fce4c192dae16d5a62674af1f2dbcc57c85a335b2651cb6687de62ac74eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b884fce4c192dae16d5a62674af1f2dbcc57c85a335b2651cb6687de62ac74eb->leave($__internal_b884fce4c192dae16d5a62674af1f2dbcc57c85a335b2651cb6687de62ac74eb_prof);

    }

    // line 3
    public function block_header_img($context, array $blocks = array())
    {
        $__internal_65f153fec784b176267cda78a61f2c0361be76221f8acb48a34265d835473523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f153fec784b176267cda78a61f2c0361be76221f8acb48a34265d835473523->enter($__internal_65f153fec784b176267cda78a61f2c0361be76221f8acb48a34265d835473523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user/list.html.twig"));

        
        $__internal_65f153fec784b176267cda78a61f2c0361be76221f8acb48a34265d835473523->leave($__internal_65f153fec784b176267cda78a61f2c0361be76221f8acb48a34265d835473523_prof);

    }

    // line 5
    public function block_header_title($context, array $blocks = array())
    {
        $__internal_08adade4ea0a3a533f9fbcfe1c05890a9db629e3a53f62ed0c5bcb9087a841e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08adade4ea0a3a533f9fbcfe1c05890a9db629e3a53f62ed0c5bcb9087a841e7->enter($__internal_08adade4ea0a3a533f9fbcfe1c05890a9db629e3a53f62ed0c5bcb9087a841e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user/list.html.twig"));

        echo "<h1>Liste des utilisateurs</h1>";
        
        $__internal_08adade4ea0a3a533f9fbcfe1c05890a9db629e3a53f62ed0c5bcb9087a841e7->leave($__internal_08adade4ea0a3a533f9fbcfe1c05890a9db629e3a53f62ed0c5bcb9087a841e7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_60ef8b69e6957e07a7cc16100cd256ec95bafb9e0f9afa181d5209d06ef4ea0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ef8b69e6957e07a7cc16100cd256ec95bafb9e0f9afa181d5209d06ef4ea0e->enter($__internal_60ef8b69e6957e07a7cc16100cd256ec95bafb9e0f9afa181d5209d06ef4ea0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user/list.html.twig"));

        // line 8
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))) == 0)) {
            // line 9
            echo "        <div class=\"alert alert-warning\" role=\"alert\">
            Il n'y a pas encore d'utilisateur enregistré. <a href=\"";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_create");
            echo "\" class=\"btn btn-warning pull-right\">Créer un utilisateur</a>
        </div>
    ";
        } else {
            // line 13
            echo "        <div class=\"row\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nom d'utilisateur</th>
                    <th>Adresse d'utilisateur</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 25
                echo "                    <tr>
                        <th scope=\"row\">";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
                        <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "</td>
                        <td>
                            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success btn-sm\">Edit</a>
                        </td>
                    </tr>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                </tbody>
            </table>
        </div>
    ";
        }
        
        $__internal_60ef8b69e6957e07a7cc16100cd256ec95bafb9e0f9afa181d5209d06ef4ea0e->leave($__internal_60ef8b69e6957e07a7cc16100cd256ec95bafb9e0f9afa181d5209d06ef4ea0e_prof);

    }

    public function getTemplateName()
    {
        return "user/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 34,  123 => 30,  118 => 28,  114 => 27,  110 => 26,  107 => 25,  90 => 24,  77 => 13,  71 => 10,  68 => 9,  65 => 8,  59 => 7,  47 => 5,  36 => 3,  11 => 1,);
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

{% block header_img %}{% endblock %}

{% block header_title %}<h1>Liste des utilisateurs</h1>{% endblock %}

{% block body %}
    {% if users|length == 0 %}
        <div class=\"alert alert-warning\" role=\"alert\">
            Il n'y a pas encore d'utilisateur enregistré. <a href=\"{{ path('user_create') }}\" class=\"btn btn-warning pull-right\">Créer un utilisateur</a>
        </div>
    {% else %}
        <div class=\"row\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nom d'utilisateur</th>
                    <th>Adresse d'utilisateur</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                {% for user in users %}
                    <tr>
                        <th scope=\"row\">{{ loop.index }}</th>
                        <td>{{ user.username }}</td>
                        <td>{{ user.email }}</td>
                        <td>
                            <a href=\"{{ path('user_edit', {'id' : user.id}) }}\" class=\"btn btn-success btn-sm\">Edit</a>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    {% endif %}
{% endblock %}
", "user/list.html.twig", "/Users/melaniedussenne/Documents/OpenClassRooms/todolist/projet8-TodoList/app/Resources/views/user/list.html.twig");
    }
}
