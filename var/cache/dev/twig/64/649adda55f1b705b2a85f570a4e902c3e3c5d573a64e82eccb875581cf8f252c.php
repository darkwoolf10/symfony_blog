<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
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
        $__internal_e38b73143eeb1a2987b42e105dfc0e72f1a126dd14217e46f5f413a8df9d5a9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e38b73143eeb1a2987b42e105dfc0e72f1a126dd14217e46f5f413a8df9d5a9e->enter($__internal_e38b73143eeb1a2987b42e105dfc0e72f1a126dd14217e46f5f413a8df9d5a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_305d2ced4bc1960fff8f28eb74ceafc59de9d036f73c639004047418f2e43e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_305d2ced4bc1960fff8f28eb74ceafc59de9d036f73c639004047418f2e43e0a->enter($__internal_305d2ced4bc1960fff8f28eb74ceafc59de9d036f73c639004047418f2e43e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e38b73143eeb1a2987b42e105dfc0e72f1a126dd14217e46f5f413a8df9d5a9e->leave($__internal_e38b73143eeb1a2987b42e105dfc0e72f1a126dd14217e46f5f413a8df9d5a9e_prof);

        
        $__internal_305d2ced4bc1960fff8f28eb74ceafc59de9d036f73c639004047418f2e43e0a->leave($__internal_305d2ced4bc1960fff8f28eb74ceafc59de9d036f73c639004047418f2e43e0a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9518010dfeb7e0eec538d7a786125ecf0dc0487301dda77b4b7e44ed21177fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9518010dfeb7e0eec538d7a786125ecf0dc0487301dda77b4b7e44ed21177fed->enter($__internal_9518010dfeb7e0eec538d7a786125ecf0dc0487301dda77b4b7e44ed21177fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b4309a81b0842aa691bdf317c8279fddd6c3da6313b702f0260cfe3831396f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4309a81b0842aa691bdf317c8279fddd6c3da6313b702f0260cfe3831396f94->enter($__internal_b4309a81b0842aa691bdf317c8279fddd6c3da6313b702f0260cfe3831396f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b4309a81b0842aa691bdf317c8279fddd6c3da6313b702f0260cfe3831396f94->leave($__internal_b4309a81b0842aa691bdf317c8279fddd6c3da6313b702f0260cfe3831396f94_prof);

        
        $__internal_9518010dfeb7e0eec538d7a786125ecf0dc0487301dda77b4b7e44ed21177fed->leave($__internal_9518010dfeb7e0eec538d7a786125ecf0dc0487301dda77b4b7e44ed21177fed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ead8a1d6262df7ff7ef527856bf2a01aa2aadd7420a47876cbb1e56f57fccfc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead8a1d6262df7ff7ef527856bf2a01aa2aadd7420a47876cbb1e56f57fccfc1->enter($__internal_ead8a1d6262df7ff7ef527856bf2a01aa2aadd7420a47876cbb1e56f57fccfc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b25548e8f66eee335ac82c11319e3128859ea87c035f46e9c35152a09b879159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25548e8f66eee335ac82c11319e3128859ea87c035f46e9c35152a09b879159->enter($__internal_b25548e8f66eee335ac82c11319e3128859ea87c035f46e9c35152a09b879159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b25548e8f66eee335ac82c11319e3128859ea87c035f46e9c35152a09b879159->leave($__internal_b25548e8f66eee335ac82c11319e3128859ea87c035f46e9c35152a09b879159_prof);

        
        $__internal_ead8a1d6262df7ff7ef527856bf2a01aa2aadd7420a47876cbb1e56f57fccfc1->leave($__internal_ead8a1d6262df7ff7ef527856bf2a01aa2aadd7420a47876cbb1e56f57fccfc1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_547c2b53aa4d108ebc02739456d03a6b92495d5d38d5eef610258fec3062652c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_547c2b53aa4d108ebc02739456d03a6b92495d5d38d5eef610258fec3062652c->enter($__internal_547c2b53aa4d108ebc02739456d03a6b92495d5d38d5eef610258fec3062652c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fd7add6aa9f141b6ac167e18e7a85af8c3c3066cee0adfcb55cca356c32b1d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7add6aa9f141b6ac167e18e7a85af8c3c3066cee0adfcb55cca356c32b1d2f->enter($__internal_fd7add6aa9f141b6ac167e18e7a85af8c3c3066cee0adfcb55cca356c32b1d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fd7add6aa9f141b6ac167e18e7a85af8c3c3066cee0adfcb55cca356c32b1d2f->leave($__internal_fd7add6aa9f141b6ac167e18e7a85af8c3c3066cee0adfcb55cca356c32b1d2f_prof);

        
        $__internal_547c2b53aa4d108ebc02739456d03a6b92495d5d38d5eef610258fec3062652c->leave($__internal_547c2b53aa4d108ebc02739456d03a6b92495d5d38d5eef610258fec3062652c_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
