<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_46825976ab9b566af19200ed2a87d5ed1975be5b85b00af70ccfed000365fa01 extends Twig_Template
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
        $__internal_d822d222ff00ac0e74128880f5abaeb13a809206966f77b6fd561ab27254e7f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d822d222ff00ac0e74128880f5abaeb13a809206966f77b6fd561ab27254e7f1->enter($__internal_d822d222ff00ac0e74128880f5abaeb13a809206966f77b6fd561ab27254e7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_15c1876f60e6c82d9183416654d03431b7e9afa91b464b70ec0c74eb5aab4722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c1876f60e6c82d9183416654d03431b7e9afa91b464b70ec0c74eb5aab4722->enter($__internal_15c1876f60e6c82d9183416654d03431b7e9afa91b464b70ec0c74eb5aab4722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d822d222ff00ac0e74128880f5abaeb13a809206966f77b6fd561ab27254e7f1->leave($__internal_d822d222ff00ac0e74128880f5abaeb13a809206966f77b6fd561ab27254e7f1_prof);

        
        $__internal_15c1876f60e6c82d9183416654d03431b7e9afa91b464b70ec0c74eb5aab4722->leave($__internal_15c1876f60e6c82d9183416654d03431b7e9afa91b464b70ec0c74eb5aab4722_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c61044d81d5ad64e3935dc3b3b35e26934cbf44cacd5803875945af3fc46e2eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c61044d81d5ad64e3935dc3b3b35e26934cbf44cacd5803875945af3fc46e2eb->enter($__internal_c61044d81d5ad64e3935dc3b3b35e26934cbf44cacd5803875945af3fc46e2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_48b16a9cc9db6b1ffdfef53ba571c051e1322233b586cef8ae1406d4aa600a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b16a9cc9db6b1ffdfef53ba571c051e1322233b586cef8ae1406d4aa600a64->enter($__internal_48b16a9cc9db6b1ffdfef53ba571c051e1322233b586cef8ae1406d4aa600a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_48b16a9cc9db6b1ffdfef53ba571c051e1322233b586cef8ae1406d4aa600a64->leave($__internal_48b16a9cc9db6b1ffdfef53ba571c051e1322233b586cef8ae1406d4aa600a64_prof);

        
        $__internal_c61044d81d5ad64e3935dc3b3b35e26934cbf44cacd5803875945af3fc46e2eb->leave($__internal_c61044d81d5ad64e3935dc3b3b35e26934cbf44cacd5803875945af3fc46e2eb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_89fcc9cbbc90004c788337950e4f623d2bb1b69f012111eda198f3e377b8f104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89fcc9cbbc90004c788337950e4f623d2bb1b69f012111eda198f3e377b8f104->enter($__internal_89fcc9cbbc90004c788337950e4f623d2bb1b69f012111eda198f3e377b8f104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e89abeee0a4d232b58a218ce037fd762f09f4addafcb36176443697a3d63d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e89abeee0a4d232b58a218ce037fd762f09f4addafcb36176443697a3d63d0a->enter($__internal_2e89abeee0a4d232b58a218ce037fd762f09f4addafcb36176443697a3d63d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2e89abeee0a4d232b58a218ce037fd762f09f4addafcb36176443697a3d63d0a->leave($__internal_2e89abeee0a4d232b58a218ce037fd762f09f4addafcb36176443697a3d63d0a_prof);

        
        $__internal_89fcc9cbbc90004c788337950e4f623d2bb1b69f012111eda198f3e377b8f104->leave($__internal_89fcc9cbbc90004c788337950e4f623d2bb1b69f012111eda198f3e377b8f104_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_82fa70839d1ff3b5c3c2709e7f7d9d1eec9999b9b377afddec1a879c479f57a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82fa70839d1ff3b5c3c2709e7f7d9d1eec9999b9b377afddec1a879c479f57a9->enter($__internal_82fa70839d1ff3b5c3c2709e7f7d9d1eec9999b9b377afddec1a879c479f57a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_87b10da7ad0bd1e07481dc128e54d1d871a8b3ae51d3697bb9cd98653b0bc4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b10da7ad0bd1e07481dc128e54d1d871a8b3ae51d3697bb9cd98653b0bc4ee->enter($__internal_87b10da7ad0bd1e07481dc128e54d1d871a8b3ae51d3697bb9cd98653b0bc4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_87b10da7ad0bd1e07481dc128e54d1d871a8b3ae51d3697bb9cd98653b0bc4ee->leave($__internal_87b10da7ad0bd1e07481dc128e54d1d871a8b3ae51d3697bb9cd98653b0bc4ee_prof);

        
        $__internal_82fa70839d1ff3b5c3c2709e7f7d9d1eec9999b9b377afddec1a879c479f57a9->leave($__internal_82fa70839d1ff3b5c3c2709e7f7d9d1eec9999b9b377afddec1a879c479f57a9_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/perso/Projects/wiki/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
