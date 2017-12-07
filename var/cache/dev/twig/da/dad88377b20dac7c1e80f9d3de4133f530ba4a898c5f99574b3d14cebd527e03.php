<?php

/* blog/create.html.twig */
class __TwigTemplate_41f9276ca90039e5230e13570eafce5dbd5665ddd250a86015e0ad8cdaffe337 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/create.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8959fc47b769638c49c12509f297ddb71b48d33b35a1f1c542e1c867175be2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8959fc47b769638c49c12509f297ddb71b48d33b35a1f1c542e1c867175be2e->enter($__internal_a8959fc47b769638c49c12509f297ddb71b48d33b35a1f1c542e1c867175be2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/create.html.twig"));

        $__internal_1b6d56da3b622ee1f9b65aaf9adde51b67e2a928efca89c60394e8d32f694872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6d56da3b622ee1f9b65aaf9adde51b67e2a928efca89c60394e8d32f694872->enter($__internal_1b6d56da3b622ee1f9b65aaf9adde51b67e2a928efca89c60394e8d32f694872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8959fc47b769638c49c12509f297ddb71b48d33b35a1f1c542e1c867175be2e->leave($__internal_a8959fc47b769638c49c12509f297ddb71b48d33b35a1f1c542e1c867175be2e_prof);

        
        $__internal_1b6d56da3b622ee1f9b65aaf9adde51b67e2a928efca89c60394e8d32f694872->leave($__internal_1b6d56da3b622ee1f9b65aaf9adde51b67e2a928efca89c60394e8d32f694872_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_52154655fd4cd0f89b2021e0febaac6331a7796f6203c6415d073e04b3cf2021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52154655fd4cd0f89b2021e0febaac6331a7796f6203c6415d073e04b3cf2021->enter($__internal_52154655fd4cd0f89b2021e0febaac6331a7796f6203c6415d073e04b3cf2021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca07e197069c536e721637b72072fc55fc0fe6dd44baacea9073c3173015d6af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca07e197069c536e721637b72072fc55fc0fe6dd44baacea9073c3173015d6af->enter($__internal_ca07e197069c536e721637b72072fc55fc0fe6dd44baacea9073c3173015d6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"container\">
            <div class=\"form-group\">
                ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "author", array()), 'row', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'row', array("attr" => array("class" => "btn btn-success", "style" => "float:right")));
        echo "
        </div>
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_ca07e197069c536e721637b72072fc55fc0fe6dd44baacea9073c3173015d6af->leave($__internal_ca07e197069c536e721637b72072fc55fc0fe6dd44baacea9073c3173015d6af_prof);

        
        $__internal_52154655fd4cd0f89b2021e0febaac6331a7796f6203c6415d073e04b3cf2021->leave($__internal_52154655fd4cd0f89b2021e0febaac6331a7796f6203c6415d073e04b3cf2021_prof);

    }

    public function getTemplateName()
    {
        return "blog/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 17,  75 => 15,  70 => 13,  64 => 10,  58 => 7,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\"  %}
{% block body %}

    {{ form_start(form) }}
        <div class=\"container\">
            <div class=\"form-group\">
                {{ form_row(form.title, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_row(form.content, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div class=\"form-group\">
                {{ form_row(form.author, {'attr': {'class': 'form-control'}}) }}
            </div>
            {{ form_row(form.save, {'attr': {'class': 'btn btn-success', 'style': 'float:right'}}) }}
        </div>
    {{ form_end(form) }}

{% endblock %}", "blog/create.html.twig", "/var/www/blog/app/Resources/views/blog/create.html.twig");
    }
}
