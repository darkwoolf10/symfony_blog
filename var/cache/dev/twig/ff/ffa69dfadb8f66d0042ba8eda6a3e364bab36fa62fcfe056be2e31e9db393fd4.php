<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0e0c5111f6a35cdb75fd63acd5541955cbfa9d652b5d9a73da86a93d7b64f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0e0c5111f6a35cdb75fd63acd5541955cbfa9d652b5d9a73da86a93d7b64f84->enter($__internal_e0e0c5111f6a35cdb75fd63acd5541955cbfa9d652b5d9a73da86a93d7b64f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_080c152ba25df0f0f987ec2d16b2a4174b24f2b1fda90df4b7db4878c74be585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_080c152ba25df0f0f987ec2d16b2a4174b24f2b1fda90df4b7db4878c74be585->enter($__internal_080c152ba25df0f0f987ec2d16b2a4174b24f2b1fda90df4b7db4878c74be585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_e0e0c5111f6a35cdb75fd63acd5541955cbfa9d652b5d9a73da86a93d7b64f84->leave($__internal_e0e0c5111f6a35cdb75fd63acd5541955cbfa9d652b5d9a73da86a93d7b64f84_prof);

        
        $__internal_080c152ba25df0f0f987ec2d16b2a4174b24f2b1fda90df4b7db4878c74be585->leave($__internal_080c152ba25df0f0f987ec2d16b2a4174b24f2b1fda90df4b7db4878c74be585_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ff76ce92adee767d142da04576d25c216833356d4bebed901682dd342041edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff76ce92adee767d142da04576d25c216833356d4bebed901682dd342041edf->enter($__internal_7ff76ce92adee767d142da04576d25c216833356d4bebed901682dd342041edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_75ea17f652c8a707e1b47f103c9634233e7cd90cb24ba9dc9f5b1756a0f686b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ea17f652c8a707e1b47f103c9634233e7cd90cb24ba9dc9f5b1756a0f686b6->enter($__internal_75ea17f652c8a707e1b47f103c9634233e7cd90cb24ba9dc9f5b1756a0f686b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_75ea17f652c8a707e1b47f103c9634233e7cd90cb24ba9dc9f5b1756a0f686b6->leave($__internal_75ea17f652c8a707e1b47f103c9634233e7cd90cb24ba9dc9f5b1756a0f686b6_prof);

        
        $__internal_7ff76ce92adee767d142da04576d25c216833356d4bebed901682dd342041edf->leave($__internal_7ff76ce92adee767d142da04576d25c216833356d4bebed901682dd342041edf_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e73ab090d835e1c065784147c3a668fd9f7f2d70c5e7e75b32b98894cfac1cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e73ab090d835e1c065784147c3a668fd9f7f2d70c5e7e75b32b98894cfac1cc9->enter($__internal_e73ab090d835e1c065784147c3a668fd9f7f2d70c5e7e75b32b98894cfac1cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a8d895e625a376cfd0808bbef8f6c2fff18096a3033b1a87cfb7517c30501d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d895e625a376cfd0808bbef8f6c2fff18096a3033b1a87cfb7517c30501d73->enter($__internal_a8d895e625a376cfd0808bbef8f6c2fff18096a3033b1a87cfb7517c30501d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a8d895e625a376cfd0808bbef8f6c2fff18096a3033b1a87cfb7517c30501d73->leave($__internal_a8d895e625a376cfd0808bbef8f6c2fff18096a3033b1a87cfb7517c30501d73_prof);

        
        $__internal_e73ab090d835e1c065784147c3a668fd9f7f2d70c5e7e75b32b98894cfac1cc9->leave($__internal_e73ab090d835e1c065784147c3a668fd9f7f2d70c5e7e75b32b98894cfac1cc9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6cf59dbd86e8ed10ded57373d5c92d84e4be4e323bf5bea3f723a813bad8752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6cf59dbd86e8ed10ded57373d5c92d84e4be4e323bf5bea3f723a813bad8752->enter($__internal_e6cf59dbd86e8ed10ded57373d5c92d84e4be4e323bf5bea3f723a813bad8752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50acc8cd50489642eeb4ab1a3cfba4d2e03157862d10a3beec5d7148a48224a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50acc8cd50489642eeb4ab1a3cfba4d2e03157862d10a3beec5d7148a48224a3->enter($__internal_50acc8cd50489642eeb4ab1a3cfba4d2e03157862d10a3beec5d7148a48224a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_50acc8cd50489642eeb4ab1a3cfba4d2e03157862d10a3beec5d7148a48224a3->leave($__internal_50acc8cd50489642eeb4ab1a3cfba4d2e03157862d10a3beec5d7148a48224a3_prof);

        
        $__internal_e6cf59dbd86e8ed10ded57373d5c92d84e4be4e323bf5bea3f723a813bad8752->leave($__internal_e6cf59dbd86e8ed10ded57373d5c92d84e4be4e323bf5bea3f723a813bad8752_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
