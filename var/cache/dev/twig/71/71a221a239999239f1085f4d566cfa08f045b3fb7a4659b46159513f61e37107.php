<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2bbc37753fda3822b059fb9bfd6d99e0967cba032afc6e6bcfd27dabde58dd37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e0d3fc74f99776e82f6ce5aaf439f46a45423935e3443f20f9d256bd76638025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0d3fc74f99776e82f6ce5aaf439f46a45423935e3443f20f9d256bd76638025->enter($__internal_e0d3fc74f99776e82f6ce5aaf439f46a45423935e3443f20f9d256bd76638025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_06d244cabdadcb557f6582d0590ad84550a0c4cf8350476808c26c1f26946660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d244cabdadcb557f6582d0590ad84550a0c4cf8350476808c26c1f26946660->enter($__internal_06d244cabdadcb557f6582d0590ad84550a0c4cf8350476808c26c1f26946660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0d3fc74f99776e82f6ce5aaf439f46a45423935e3443f20f9d256bd76638025->leave($__internal_e0d3fc74f99776e82f6ce5aaf439f46a45423935e3443f20f9d256bd76638025_prof);

        
        $__internal_06d244cabdadcb557f6582d0590ad84550a0c4cf8350476808c26c1f26946660->leave($__internal_06d244cabdadcb557f6582d0590ad84550a0c4cf8350476808c26c1f26946660_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7f71acca1cc9e80796d998a9e985560e33960bfe3d2df7aa720c578e3d5d02c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f71acca1cc9e80796d998a9e985560e33960bfe3d2df7aa720c578e3d5d02c5->enter($__internal_7f71acca1cc9e80796d998a9e985560e33960bfe3d2df7aa720c578e3d5d02c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_42f3c73853bb3790f085c040f3ff0c5055496a6e52f1281355a6cecfce9f0788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f3c73853bb3790f085c040f3ff0c5055496a6e52f1281355a6cecfce9f0788->enter($__internal_42f3c73853bb3790f085c040f3ff0c5055496a6e52f1281355a6cecfce9f0788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_42f3c73853bb3790f085c040f3ff0c5055496a6e52f1281355a6cecfce9f0788->leave($__internal_42f3c73853bb3790f085c040f3ff0c5055496a6e52f1281355a6cecfce9f0788_prof);

        
        $__internal_7f71acca1cc9e80796d998a9e985560e33960bfe3d2df7aa720c578e3d5d02c5->leave($__internal_7f71acca1cc9e80796d998a9e985560e33960bfe3d2df7aa720c578e3d5d02c5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e661e350489fb4beda3dca6ce83a2de31703d0c97885edb70fe1efc9da0bf917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e661e350489fb4beda3dca6ce83a2de31703d0c97885edb70fe1efc9da0bf917->enter($__internal_e661e350489fb4beda3dca6ce83a2de31703d0c97885edb70fe1efc9da0bf917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fb8210abf35497593ee34d9e47be4a6f71d28b10cd5c7097216dfaf60a7e1aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8210abf35497593ee34d9e47be4a6f71d28b10cd5c7097216dfaf60a7e1aeb->enter($__internal_fb8210abf35497593ee34d9e47be4a6f71d28b10cd5c7097216dfaf60a7e1aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fb8210abf35497593ee34d9e47be4a6f71d28b10cd5c7097216dfaf60a7e1aeb->leave($__internal_fb8210abf35497593ee34d9e47be4a6f71d28b10cd5c7097216dfaf60a7e1aeb_prof);

        
        $__internal_e661e350489fb4beda3dca6ce83a2de31703d0c97885edb70fe1efc9da0bf917->leave($__internal_e661e350489fb4beda3dca6ce83a2de31703d0c97885edb70fe1efc9da0bf917_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4371576754e53dd5ee1ab3da5d277f64460987325492f1217881f07896073d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4371576754e53dd5ee1ab3da5d277f64460987325492f1217881f07896073d3->enter($__internal_d4371576754e53dd5ee1ab3da5d277f64460987325492f1217881f07896073d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3bce62ee9e8dab9d7f704a34493379b0ee276ec094086e618290966cf711651a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bce62ee9e8dab9d7f704a34493379b0ee276ec094086e618290966cf711651a->enter($__internal_3bce62ee9e8dab9d7f704a34493379b0ee276ec094086e618290966cf711651a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3bce62ee9e8dab9d7f704a34493379b0ee276ec094086e618290966cf711651a->leave($__internal_3bce62ee9e8dab9d7f704a34493379b0ee276ec094086e618290966cf711651a_prof);

        
        $__internal_d4371576754e53dd5ee1ab3da5d277f64460987325492f1217881f07896073d3->leave($__internal_d4371576754e53dd5ee1ab3da5d277f64460987325492f1217881f07896073d3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/perso/Projects/wiki/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
