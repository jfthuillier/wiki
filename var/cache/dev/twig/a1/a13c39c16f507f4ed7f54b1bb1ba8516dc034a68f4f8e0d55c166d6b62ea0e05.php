<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_6db8972036267c1a6e4569706037daada4ba38db87f3d5cb9cb7e0bef005a380 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ea1493efda4cc50f784cfa3d2c2d2816bf67620239cd9a22949f3c581c99e95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ea1493efda4cc50f784cfa3d2c2d2816bf67620239cd9a22949f3c581c99e95->enter($__internal_5ea1493efda4cc50f784cfa3d2c2d2816bf67620239cd9a22949f3c581c99e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_67e6187a59491a0e38a19fd6c613b3704e7426355768ed1d4e3ecc39a252523b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e6187a59491a0e38a19fd6c613b3704e7426355768ed1d4e3ecc39a252523b->enter($__internal_67e6187a59491a0e38a19fd6c613b3704e7426355768ed1d4e3ecc39a252523b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage($this->getAttribute($context["log"], "message", array()), $this->getAttribute($context["log"], "context", array()));
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
        $__internal_5ea1493efda4cc50f784cfa3d2c2d2816bf67620239cd9a22949f3c581c99e95->leave($__internal_5ea1493efda4cc50f784cfa3d2c2d2816bf67620239cd9a22949f3c581c99e95_prof);

        
        $__internal_67e6187a59491a0e38a19fd6c613b3704e7426355768ed1d4e3ecc39a252523b->leave($__internal_67e6187a59491a0e38a19fd6c613b3704e7426355768ed1d4e3ecc39a252523b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  41 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ol class=\"traces logs\">
    {% for log in logs %}
        <li{% if log.priority >= 400 %} class=\"error\"{% elseif log.priority >= 300 %} class=\"warning\"{% endif %}>
            {{ log.priorityName }} - {{ log.message|format_log_message(log.context) }}
        </li>
    {% endfor %}
</ol>
", "@Twig/Exception/logs.html.twig", "/Users/perso/Projects/wiki/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/logs.html.twig");
    }
}
