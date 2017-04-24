<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_29ddc1eca04b767cf92df40577bece6f77c2001c1a299cf5d954f332635d2621 extends Twig_Template
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
        $__internal_44080bd22790d2c270974a5651b9f6ee7c43ed8d809407d76db339250249d310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44080bd22790d2c270974a5651b9f6ee7c43ed8d809407d76db339250249d310->enter($__internal_44080bd22790d2c270974a5651b9f6ee7c43ed8d809407d76db339250249d310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_85fcaa492070f46070330665b9fc4f570e05570080658509a1639940821703f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85fcaa492070f46070330665b9fc4f570e05570080658509a1639940821703f8->enter($__internal_85fcaa492070f46070330665b9fc4f570e05570080658509a1639940821703f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44080bd22790d2c270974a5651b9f6ee7c43ed8d809407d76db339250249d310->leave($__internal_44080bd22790d2c270974a5651b9f6ee7c43ed8d809407d76db339250249d310_prof);

        
        $__internal_85fcaa492070f46070330665b9fc4f570e05570080658509a1639940821703f8->leave($__internal_85fcaa492070f46070330665b9fc4f570e05570080658509a1639940821703f8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ba7fceb0c083aed17b6344fec80bf402805cb3f2646aad9ead3e41305a0b39d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7fceb0c083aed17b6344fec80bf402805cb3f2646aad9ead3e41305a0b39d8->enter($__internal_ba7fceb0c083aed17b6344fec80bf402805cb3f2646aad9ead3e41305a0b39d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b294a53215ea22938d3822134ba0d9ad710ede2e8b43f0c0eb1b2f253da702c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b294a53215ea22938d3822134ba0d9ad710ede2e8b43f0c0eb1b2f253da702c5->enter($__internal_b294a53215ea22938d3822134ba0d9ad710ede2e8b43f0c0eb1b2f253da702c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b294a53215ea22938d3822134ba0d9ad710ede2e8b43f0c0eb1b2f253da702c5->leave($__internal_b294a53215ea22938d3822134ba0d9ad710ede2e8b43f0c0eb1b2f253da702c5_prof);

        
        $__internal_ba7fceb0c083aed17b6344fec80bf402805cb3f2646aad9ead3e41305a0b39d8->leave($__internal_ba7fceb0c083aed17b6344fec80bf402805cb3f2646aad9ead3e41305a0b39d8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b68504664d7e85667af599f20915be79d82de951d71ba90dd9d3912206899df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b68504664d7e85667af599f20915be79d82de951d71ba90dd9d3912206899df0->enter($__internal_b68504664d7e85667af599f20915be79d82de951d71ba90dd9d3912206899df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_28de4e708bd149a947ba90892d73fa55b5c262f0f513b66aad734abd54bfeeba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28de4e708bd149a947ba90892d73fa55b5c262f0f513b66aad734abd54bfeeba->enter($__internal_28de4e708bd149a947ba90892d73fa55b5c262f0f513b66aad734abd54bfeeba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_28de4e708bd149a947ba90892d73fa55b5c262f0f513b66aad734abd54bfeeba->leave($__internal_28de4e708bd149a947ba90892d73fa55b5c262f0f513b66aad734abd54bfeeba_prof);

        
        $__internal_b68504664d7e85667af599f20915be79d82de951d71ba90dd9d3912206899df0->leave($__internal_b68504664d7e85667af599f20915be79d82de951d71ba90dd9d3912206899df0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9489225c20e2cce069f4b8d9c90d65a6d5b720e6ba2ccb5d11c0ce24d90e1d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9489225c20e2cce069f4b8d9c90d65a6d5b720e6ba2ccb5d11c0ce24d90e1d8c->enter($__internal_9489225c20e2cce069f4b8d9c90d65a6d5b720e6ba2ccb5d11c0ce24d90e1d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b0eebdf67e65e11dbae3e8759317c3af11f0bbbef27b9d62a9249400eda29300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0eebdf67e65e11dbae3e8759317c3af11f0bbbef27b9d62a9249400eda29300->enter($__internal_b0eebdf67e65e11dbae3e8759317c3af11f0bbbef27b9d62a9249400eda29300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b0eebdf67e65e11dbae3e8759317c3af11f0bbbef27b9d62a9249400eda29300->leave($__internal_b0eebdf67e65e11dbae3e8759317c3af11f0bbbef27b9d62a9249400eda29300_prof);

        
        $__internal_9489225c20e2cce069f4b8d9c90d65a6d5b720e6ba2ccb5d11c0ce24d90e1d8c->leave($__internal_9489225c20e2cce069f4b8d9c90d65a6d5b720e6ba2ccb5d11c0ce24d90e1d8c_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/Users/perso/Projects/wiki/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
