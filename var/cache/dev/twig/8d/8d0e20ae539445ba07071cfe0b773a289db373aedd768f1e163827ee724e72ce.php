<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_c37bc0ce2640154a5a1e59c95058a029698e5e57c6e105d1879cf715d24d6e45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6f00e14bf4c493c093c5e64f65ae2814c7d787a57884842191cfcf46f42bbcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f00e14bf4c493c093c5e64f65ae2814c7d787a57884842191cfcf46f42bbcb->enter($__internal_e6f00e14bf4c493c093c5e64f65ae2814c7d787a57884842191cfcf46f42bbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8dc7377fed696ca3830ccb928341d25bbf0567e8568a277487be85bfdbc0faaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc7377fed696ca3830ccb928341d25bbf0567e8568a277487be85bfdbc0faaf->enter($__internal_8dc7377fed696ca3830ccb928341d25bbf0567e8568a277487be85bfdbc0faaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6f00e14bf4c493c093c5e64f65ae2814c7d787a57884842191cfcf46f42bbcb->leave($__internal_e6f00e14bf4c493c093c5e64f65ae2814c7d787a57884842191cfcf46f42bbcb_prof);

        
        $__internal_8dc7377fed696ca3830ccb928341d25bbf0567e8568a277487be85bfdbc0faaf->leave($__internal_8dc7377fed696ca3830ccb928341d25bbf0567e8568a277487be85bfdbc0faaf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_596e1845f727e8800a9aa4466c502ee40e6bde1ed8c94c7347c6bba556e61a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_596e1845f727e8800a9aa4466c502ee40e6bde1ed8c94c7347c6bba556e61a16->enter($__internal_596e1845f727e8800a9aa4466c502ee40e6bde1ed8c94c7347c6bba556e61a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_64892b55bab833cbe60bd8adb7b12d4f22b7d8f6d200a3a84def720c68a94c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64892b55bab833cbe60bd8adb7b12d4f22b7d8f6d200a3a84def720c68a94c39->enter($__internal_64892b55bab833cbe60bd8adb7b12d4f22b7d8f6d200a3a84def720c68a94c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_64892b55bab833cbe60bd8adb7b12d4f22b7d8f6d200a3a84def720c68a94c39->leave($__internal_64892b55bab833cbe60bd8adb7b12d4f22b7d8f6d200a3a84def720c68a94c39_prof);

        
        $__internal_596e1845f727e8800a9aa4466c502ee40e6bde1ed8c94c7347c6bba556e61a16->leave($__internal_596e1845f727e8800a9aa4466c502ee40e6bde1ed8c94c7347c6bba556e61a16_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/perso/Projects/wiki/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
