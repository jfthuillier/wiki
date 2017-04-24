<?php

/* base.html.twig */
class __TwigTemplate_3021766ed2225e3a68d444af94728eab5a7906b86a804f921320b2491d192a0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af8232adfc68a6c3d900dd391097a160025a3efc64b03636c3e396a7e2412ace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af8232adfc68a6c3d900dd391097a160025a3efc64b03636c3e396a7e2412ace->enter($__internal_af8232adfc68a6c3d900dd391097a160025a3efc64b03636c3e396a7e2412ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_da43315a7960e627c4a7d711f9163f4702db3e7ed455a0cd1edab205891df24e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da43315a7960e627c4a7d711f9163f4702db3e7ed455a0cd1edab205891df24e->enter($__internal_da43315a7960e627c4a7d711f9163f4702db3e7ed455a0cd1edab205891df24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_af8232adfc68a6c3d900dd391097a160025a3efc64b03636c3e396a7e2412ace->leave($__internal_af8232adfc68a6c3d900dd391097a160025a3efc64b03636c3e396a7e2412ace_prof);

        
        $__internal_da43315a7960e627c4a7d711f9163f4702db3e7ed455a0cd1edab205891df24e->leave($__internal_da43315a7960e627c4a7d711f9163f4702db3e7ed455a0cd1edab205891df24e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9ee24ad1f439d29fe11d7249e6e07e021a2995ed7ed4a6df3a7388006ec3d9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9ee24ad1f439d29fe11d7249e6e07e021a2995ed7ed4a6df3a7388006ec3d9c->enter($__internal_f9ee24ad1f439d29fe11d7249e6e07e021a2995ed7ed4a6df3a7388006ec3d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_241a6a9aac56eacc686fc03a5feb40c6bc925c14498bb5d334049ef7e074001d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_241a6a9aac56eacc686fc03a5feb40c6bc925c14498bb5d334049ef7e074001d->enter($__internal_241a6a9aac56eacc686fc03a5feb40c6bc925c14498bb5d334049ef7e074001d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_241a6a9aac56eacc686fc03a5feb40c6bc925c14498bb5d334049ef7e074001d->leave($__internal_241a6a9aac56eacc686fc03a5feb40c6bc925c14498bb5d334049ef7e074001d_prof);

        
        $__internal_f9ee24ad1f439d29fe11d7249e6e07e021a2995ed7ed4a6df3a7388006ec3d9c->leave($__internal_f9ee24ad1f439d29fe11d7249e6e07e021a2995ed7ed4a6df3a7388006ec3d9c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_10e5622a1fd8b3328fd829cef434b1bf3f1ad1dafa4302ba55a1e234b4fa9de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10e5622a1fd8b3328fd829cef434b1bf3f1ad1dafa4302ba55a1e234b4fa9de7->enter($__internal_10e5622a1fd8b3328fd829cef434b1bf3f1ad1dafa4302ba55a1e234b4fa9de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_391410d916b86ce71f5a894028e5382e5eca3f503f3550a71a5dd779203cc000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391410d916b86ce71f5a894028e5382e5eca3f503f3550a71a5dd779203cc000->enter($__internal_391410d916b86ce71f5a894028e5382e5eca3f503f3550a71a5dd779203cc000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_391410d916b86ce71f5a894028e5382e5eca3f503f3550a71a5dd779203cc000->leave($__internal_391410d916b86ce71f5a894028e5382e5eca3f503f3550a71a5dd779203cc000_prof);

        
        $__internal_10e5622a1fd8b3328fd829cef434b1bf3f1ad1dafa4302ba55a1e234b4fa9de7->leave($__internal_10e5622a1fd8b3328fd829cef434b1bf3f1ad1dafa4302ba55a1e234b4fa9de7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4538418177fdb6d8ef45a9c9bcce40591d77e79d4620f4146fe2ff38898061bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4538418177fdb6d8ef45a9c9bcce40591d77e79d4620f4146fe2ff38898061bd->enter($__internal_4538418177fdb6d8ef45a9c9bcce40591d77e79d4620f4146fe2ff38898061bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d77aa31e3af7095b1d6bc9ce50e4f01bc319881cdb9c1128f49a72995b53c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d77aa31e3af7095b1d6bc9ce50e4f01bc319881cdb9c1128f49a72995b53c74->enter($__internal_0d77aa31e3af7095b1d6bc9ce50e4f01bc319881cdb9c1128f49a72995b53c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0d77aa31e3af7095b1d6bc9ce50e4f01bc319881cdb9c1128f49a72995b53c74->leave($__internal_0d77aa31e3af7095b1d6bc9ce50e4f01bc319881cdb9c1128f49a72995b53c74_prof);

        
        $__internal_4538418177fdb6d8ef45a9c9bcce40591d77e79d4620f4146fe2ff38898061bd->leave($__internal_4538418177fdb6d8ef45a9c9bcce40591d77e79d4620f4146fe2ff38898061bd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0770a879335a9aa4a7f13825513577055b69ed18501a81c8faf2b36c21317450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0770a879335a9aa4a7f13825513577055b69ed18501a81c8faf2b36c21317450->enter($__internal_0770a879335a9aa4a7f13825513577055b69ed18501a81c8faf2b36c21317450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f9ddf28bbf63cd4095f6908157561bc9a21d71e5da90fa934d69e8875c767ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ddf28bbf63cd4095f6908157561bc9a21d71e5da90fa934d69e8875c767ba5->enter($__internal_f9ddf28bbf63cd4095f6908157561bc9a21d71e5da90fa934d69e8875c767ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f9ddf28bbf63cd4095f6908157561bc9a21d71e5da90fa934d69e8875c767ba5->leave($__internal_f9ddf28bbf63cd4095f6908157561bc9a21d71e5da90fa934d69e8875c767ba5_prof);

        
        $__internal_0770a879335a9aa4a7f13825513577055b69ed18501a81c8faf2b36c21317450->leave($__internal_0770a879335a9aa4a7f13825513577055b69ed18501a81c8faf2b36c21317450_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/perso/Projects/wiki/app/Resources/views/base.html.twig");
    }
}
