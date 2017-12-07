<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
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
        $__internal_8a9830bbe9377f8e3c93b0a8b70e95029643573f9235e463e6dbc2835088f7a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a9830bbe9377f8e3c93b0a8b70e95029643573f9235e463e6dbc2835088f7a6->enter($__internal_8a9830bbe9377f8e3c93b0a8b70e95029643573f9235e463e6dbc2835088f7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2c118c48eef7be81af9fb443998fdbd1f7514db6a2b34cfce6694a181195cdea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c118c48eef7be81af9fb443998fdbd1f7514db6a2b34cfce6694a181195cdea->enter($__internal_2c118c48eef7be81af9fb443998fdbd1f7514db6a2b34cfce6694a181195cdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a9830bbe9377f8e3c93b0a8b70e95029643573f9235e463e6dbc2835088f7a6->leave($__internal_8a9830bbe9377f8e3c93b0a8b70e95029643573f9235e463e6dbc2835088f7a6_prof);

        
        $__internal_2c118c48eef7be81af9fb443998fdbd1f7514db6a2b34cfce6694a181195cdea->leave($__internal_2c118c48eef7be81af9fb443998fdbd1f7514db6a2b34cfce6694a181195cdea_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_977892388c641fed97d1cc932d7faa81467ada876b26aff7cd3f2e242c524bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_977892388c641fed97d1cc932d7faa81467ada876b26aff7cd3f2e242c524bac->enter($__internal_977892388c641fed97d1cc932d7faa81467ada876b26aff7cd3f2e242c524bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f26d3d67959a08c41acbeaa852cc80a616b44a8632664253facf8d8cf2c2c49b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26d3d67959a08c41acbeaa852cc80a616b44a8632664253facf8d8cf2c2c49b->enter($__internal_f26d3d67959a08c41acbeaa852cc80a616b44a8632664253facf8d8cf2c2c49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f26d3d67959a08c41acbeaa852cc80a616b44a8632664253facf8d8cf2c2c49b->leave($__internal_f26d3d67959a08c41acbeaa852cc80a616b44a8632664253facf8d8cf2c2c49b_prof);

        
        $__internal_977892388c641fed97d1cc932d7faa81467ada876b26aff7cd3f2e242c524bac->leave($__internal_977892388c641fed97d1cc932d7faa81467ada876b26aff7cd3f2e242c524bac_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5dbf1840333b167383b3762741df3fc650d5886c886564d4cb4023a39f81f4e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dbf1840333b167383b3762741df3fc650d5886c886564d4cb4023a39f81f4e4->enter($__internal_5dbf1840333b167383b3762741df3fc650d5886c886564d4cb4023a39f81f4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a2b18933510b8a6862a407182cce2e7d09c20f02cc8ed06a71e3d6f2341b841d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b18933510b8a6862a407182cce2e7d09c20f02cc8ed06a71e3d6f2341b841d->enter($__internal_a2b18933510b8a6862a407182cce2e7d09c20f02cc8ed06a71e3d6f2341b841d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a2b18933510b8a6862a407182cce2e7d09c20f02cc8ed06a71e3d6f2341b841d->leave($__internal_a2b18933510b8a6862a407182cce2e7d09c20f02cc8ed06a71e3d6f2341b841d_prof);

        
        $__internal_5dbf1840333b167383b3762741df3fc650d5886c886564d4cb4023a39f81f4e4->leave($__internal_5dbf1840333b167383b3762741df3fc650d5886c886564d4cb4023a39f81f4e4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d43f6d5eeb866109a3e0ab8e7af6128f1dba14b25e74062c07cbb732ead84ce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d43f6d5eeb866109a3e0ab8e7af6128f1dba14b25e74062c07cbb732ead84ce0->enter($__internal_d43f6d5eeb866109a3e0ab8e7af6128f1dba14b25e74062c07cbb732ead84ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a421137910a0d157430bbaeabcd238f1794bd61440086b30e1269d9742c1654f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a421137910a0d157430bbaeabcd238f1794bd61440086b30e1269d9742c1654f->enter($__internal_a421137910a0d157430bbaeabcd238f1794bd61440086b30e1269d9742c1654f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a421137910a0d157430bbaeabcd238f1794bd61440086b30e1269d9742c1654f->leave($__internal_a421137910a0d157430bbaeabcd238f1794bd61440086b30e1269d9742c1654f_prof);

        
        $__internal_d43f6d5eeb866109a3e0ab8e7af6128f1dba14b25e74062c07cbb732ead84ce0->leave($__internal_d43f6d5eeb866109a3e0ab8e7af6128f1dba14b25e74062c07cbb732ead84ce0_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
