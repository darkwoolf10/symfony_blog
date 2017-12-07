<?php

/* blog/show.html.twig */
class __TwigTemplate_db508d5482b99e38d772c5e631d6e1a7eb186db0fe3409169add1affc22ee4cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22510abf666ce04b120c5c0bdb367015546ebdd7df9398fad0e909c63ffd2fee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22510abf666ce04b120c5c0bdb367015546ebdd7df9398fad0e909c63ffd2fee->enter($__internal_22510abf666ce04b120c5c0bdb367015546ebdd7df9398fad0e909c63ffd2fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_5d180331bc5b89d7c860fff6557674947a1854370f4618840666a06e325b2ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d180331bc5b89d7c860fff6557674947a1854370f4618840666a06e325b2ce6->enter($__internal_5d180331bc5b89d7c860fff6557674947a1854370f4618840666a06e325b2ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22510abf666ce04b120c5c0bdb367015546ebdd7df9398fad0e909c63ffd2fee->leave($__internal_22510abf666ce04b120c5c0bdb367015546ebdd7df9398fad0e909c63ffd2fee_prof);

        
        $__internal_5d180331bc5b89d7c860fff6557674947a1854370f4618840666a06e325b2ce6->leave($__internal_5d180331bc5b89d7c860fff6557674947a1854370f4618840666a06e325b2ce6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_97e6814d0b782e914460d3583f24fe204229c71abacc94776ea4e516fa488c73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e6814d0b782e914460d3583f24fe204229c71abacc94776ea4e516fa488c73->enter($__internal_97e6814d0b782e914460d3583f24fe204229c71abacc94776ea4e516fa488c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4eada4c8c6f48abbb9b57a0584725043e2981807c2e04b64389e136c0cdf2bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eada4c8c6f48abbb9b57a0584725043e2981807c2e04b64389e136c0cdf2bc3->enter($__internal_4eada4c8c6f48abbb9b57a0584725043e2981807c2e04b64389e136c0cdf2bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "My blog";
        
        $__internal_4eada4c8c6f48abbb9b57a0584725043e2981807c2e04b64389e136c0cdf2bc3->leave($__internal_4eada4c8c6f48abbb9b57a0584725043e2981807c2e04b64389e136c0cdf2bc3_prof);

        
        $__internal_97e6814d0b782e914460d3583f24fe204229c71abacc94776ea4e516fa488c73->leave($__internal_97e6814d0b782e914460d3583f24fe204229c71abacc94776ea4e516fa488c73_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e3aa1615d746781cbbdfab146e57caca5911f09b7b48ac0c3abb2aea32e9c5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e3aa1615d746781cbbdfab146e57caca5911f09b7b48ac0c3abb2aea32e9c5f->enter($__internal_7e3aa1615d746781cbbdfab146e57caca5911f09b7b48ac0c3abb2aea32e9c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc271c404b609e4317a95e6060cefcff9945fe9a88c853f4870b529744e9d83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc271c404b609e4317a95e6060cefcff9945fe9a88c853f4870b529744e9d83b->enter($__internal_cc271c404b609e4317a95e6060cefcff9945fe9a88c853f4870b529744e9d83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <br>
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "                <div class=\"col-lg-4\">
                    <h2>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</h2>
                    <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "content", array()), "html", null, true);
            echo "</p>
                    <p><a class=\"btn btn-primary\" href=\"#\" role=\"button\">View details »</a></p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </div>

    </div>
";
        
        $__internal_cc271c404b609e4317a95e6060cefcff9945fe9a88c853f4870b529744e9d83b->leave($__internal_cc271c404b609e4317a95e6060cefcff9945fe9a88c853f4870b529744e9d83b_prof);

        
        $__internal_7e3aa1615d746781cbbdfab146e57caca5911f09b7b48ac0c3abb2aea32e9c5f->leave($__internal_7e3aa1615d746781cbbdfab146e57caca5911f09b7b48ac0c3abb2aea32e9c5f_prof);

    }

    public function getTemplateName()
    {
        return "blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 15,  84 => 11,  80 => 10,  77 => 9,  73 => 8,  68 => 5,  59 => 4,  41 => 2,  11 => 1,);
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
{% block title %}{{ 'My blog' }}{% endblock %}

{% block body %}
    <br>
    <div class=\"container\">
        <div class=\"row\">
            {% for post in posts %}
                <div class=\"col-lg-4\">
                    <h2>{{ post.title }}</h2>
                    <p>{{ post.content }}</p>
                    <p><a class=\"btn btn-primary\" href=\"#\" role=\"button\">View details »</a></p>
                </div>
            {% endfor %}
        </div>

    </div>
{% endblock %}", "blog/show.html.twig", "/var/www/blog/app/Resources/views/blog/show.html.twig");
    }
}
