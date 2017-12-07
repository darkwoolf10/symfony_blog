<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf326bc19a4cb575de928e580a15feffc4b9a86e93a3f11b51a58abc012b1bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf326bc19a4cb575de928e580a15feffc4b9a86e93a3f11b51a58abc012b1bc6->enter($__internal_cf326bc19a4cb575de928e580a15feffc4b9a86e93a3f11b51a58abc012b1bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8c7daf4214458a17e4a5c1549ce044d20f0a1fae6465db09eebe4e4b2a2a1559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7daf4214458a17e4a5c1549ce044d20f0a1fae6465db09eebe4e4b2a2a1559->enter($__internal_8c7daf4214458a17e4a5c1549ce044d20f0a1fae6465db09eebe4e4b2a2a1559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        // line 35
        echo "
        ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "
        ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "
        ";
        // line 45
        $this->displayBlock('footer', $context, $blocks);
        // line 50
        echo "    </body>
</html>
";
        
        $__internal_cf326bc19a4cb575de928e580a15feffc4b9a86e93a3f11b51a58abc012b1bc6->leave($__internal_cf326bc19a4cb575de928e580a15feffc4b9a86e93a3f11b51a58abc012b1bc6_prof);

        
        $__internal_8c7daf4214458a17e4a5c1549ce044d20f0a1fae6465db09eebe4e4b2a2a1559->leave($__internal_8c7daf4214458a17e4a5c1549ce044d20f0a1fae6465db09eebe4e4b2a2a1559_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_45e0c40bb52861c2a0f217c4cfb89ea6d887876f8e14bff3b31ce034a2bcc1df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e0c40bb52861c2a0f217c4cfb89ea6d887876f8e14bff3b31ce034a2bcc1df->enter($__internal_45e0c40bb52861c2a0f217c4cfb89ea6d887876f8e14bff3b31ce034a2bcc1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f5e3988c84601b025ad24e9b3903332a65aed5dc2220a3304e375f134d2451ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e3988c84601b025ad24e9b3903332a65aed5dc2220a3304e375f134d2451ba->enter($__internal_f5e3988c84601b025ad24e9b3903332a65aed5dc2220a3304e375f134d2451ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f5e3988c84601b025ad24e9b3903332a65aed5dc2220a3304e375f134d2451ba->leave($__internal_f5e3988c84601b025ad24e9b3903332a65aed5dc2220a3304e375f134d2451ba_prof);

        
        $__internal_45e0c40bb52861c2a0f217c4cfb89ea6d887876f8e14bff3b31ce034a2bcc1df->leave($__internal_45e0c40bb52861c2a0f217c4cfb89ea6d887876f8e14bff3b31ce034a2bcc1df_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c2546a84fc275cb175ac48c262d897c7f6ebfa8ed1a631d5cbc62f7a2a29ca5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2546a84fc275cb175ac48c262d897c7f6ebfa8ed1a631d5cbc62f7a2a29ca5f->enter($__internal_c2546a84fc275cb175ac48c262d897c7f6ebfa8ed1a631d5cbc62f7a2a29ca5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_35a8b17b443463d9ab21e8f403a113cc3228469c53abc3abd6ec80775853b688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a8b17b443463d9ab21e8f403a113cc3228469c53abc3abd6ec80775853b688->enter($__internal_35a8b17b443463d9ab21e8f403a113cc3228469c53abc3abd6ec80775853b688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"path/to/font-awesome/css/font-awesome.min.css\">
        ";
        
        $__internal_35a8b17b443463d9ab21e8f403a113cc3228469c53abc3abd6ec80775853b688->leave($__internal_35a8b17b443463d9ab21e8f403a113cc3228469c53abc3abd6ec80775853b688_prof);

        
        $__internal_c2546a84fc275cb175ac48c262d897c7f6ebfa8ed1a631d5cbc62f7a2a29ca5f->leave($__internal_c2546a84fc275cb175ac48c262d897c7f6ebfa8ed1a631d5cbc62f7a2a29ca5f_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_463e61ee520b211d0fd27995eeae0471fb77c29a9d979f966ac234b3de4926ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_463e61ee520b211d0fd27995eeae0471fb77c29a9d979f966ac234b3de4926ae->enter($__internal_463e61ee520b211d0fd27995eeae0471fb77c29a9d979f966ac234b3de4926ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_406dde23daf346c7ca62f6770af51e88c761bee9d0b28ffbe614cdbbddefd5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406dde23daf346c7ca62f6770af51e88c761bee9d0b28ffbe614cdbbddefd5de->enter($__internal_406dde23daf346c7ca62f6770af51e88c761bee9d0b28ffbe614cdbbddefd5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 15
        echo "            <header>
                <nav  class=\"navbar navbar-expand navbar-dark bg-dark\">
                    <a class=\"navbar-brand\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" style=\"float: right\">Bloger</a>

                    <div class=\"collapse navbar-collapse\" id=\"navbarsExample02\">
                        <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("create_post");
        echo "\" >Create post <span class=\"sr-only\">(current)</span></a>
                            </li>
                        </ul>
                        <span class=\"login_button\">
                            <a href=\"#\">Sign in</a>
                        </span>
                        <span class=\"login_button\">
                            <a href=\"#\">Sign up</a>
                        </span>
                    </div>
                </nav>
            </header>
        ";
        
        $__internal_406dde23daf346c7ca62f6770af51e88c761bee9d0b28ffbe614cdbbddefd5de->leave($__internal_406dde23daf346c7ca62f6770af51e88c761bee9d0b28ffbe614cdbbddefd5de_prof);

        
        $__internal_463e61ee520b211d0fd27995eeae0471fb77c29a9d979f966ac234b3de4926ae->leave($__internal_463e61ee520b211d0fd27995eeae0471fb77c29a9d979f966ac234b3de4926ae_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fe02275cb34ba16c4690f96d12e478743be3e1f56a8586b7e752d24207a792c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fe02275cb34ba16c4690f96d12e478743be3e1f56a8586b7e752d24207a792c->enter($__internal_1fe02275cb34ba16c4690f96d12e478743be3e1f56a8586b7e752d24207a792c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cbdd7ae2a9b2da7a4a8467926a3d6ee6f7734eb5e54fe3cd75a84db32a268873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbdd7ae2a9b2da7a4a8467926a3d6ee6f7734eb5e54fe3cd75a84db32a268873->enter($__internal_cbdd7ae2a9b2da7a4a8467926a3d6ee6f7734eb5e54fe3cd75a84db32a268873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cbdd7ae2a9b2da7a4a8467926a3d6ee6f7734eb5e54fe3cd75a84db32a268873->leave($__internal_cbdd7ae2a9b2da7a4a8467926a3d6ee6f7734eb5e54fe3cd75a84db32a268873_prof);

        
        $__internal_1fe02275cb34ba16c4690f96d12e478743be3e1f56a8586b7e752d24207a792c->leave($__internal_1fe02275cb34ba16c4690f96d12e478743be3e1f56a8586b7e752d24207a792c_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_80e60766d94477ed6771a29c75ec897719bdcc2dfe45107b34302789e8f7c84b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80e60766d94477ed6771a29c75ec897719bdcc2dfe45107b34302789e8f7c84b->enter($__internal_80e60766d94477ed6771a29c75ec897719bdcc2dfe45107b34302789e8f7c84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cefe1198993950ad4998801d1af65583f95b05d2075eb1ba51b7ded568f4fd34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cefe1198993950ad4998801d1af65583f95b05d2075eb1ba51b7ded568f4fd34->enter($__internal_cefe1198993950ad4998801d1af65583f95b05d2075eb1ba51b7ded568f4fd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "            <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
            <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_cefe1198993950ad4998801d1af65583f95b05d2075eb1ba51b7ded568f4fd34->leave($__internal_cefe1198993950ad4998801d1af65583f95b05d2075eb1ba51b7ded568f4fd34_prof);

        
        $__internal_80e60766d94477ed6771a29c75ec897719bdcc2dfe45107b34302789e8f7c84b->leave($__internal_80e60766d94477ed6771a29c75ec897719bdcc2dfe45107b34302789e8f7c84b_prof);

    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4f3c4b02a2bfdfa7bf5098688072372b1d52ee05c10213945a8563266a721536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f3c4b02a2bfdfa7bf5098688072372b1d52ee05c10213945a8563266a721536->enter($__internal_4f3c4b02a2bfdfa7bf5098688072372b1d52ee05c10213945a8563266a721536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_fa30c44a9c97c3c360b033b6bd7a7d0a7d2ec6db000d8c11d084c53d912cbfdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa30c44a9c97c3c360b033b6bd7a7d0a7d2ec6db000d8c11d084c53d912cbfdb->enter($__internal_fa30c44a9c97c3c360b033b6bd7a7d0a7d2ec6db000d8c11d084c53d912cbfdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 46
        echo "            <footer>

            </footer>
        ";
        
        $__internal_fa30c44a9c97c3c360b033b6bd7a7d0a7d2ec6db000d8c11d084c53d912cbfdb->leave($__internal_fa30c44a9c97c3c360b033b6bd7a7d0a7d2ec6db000d8c11d084c53d912cbfdb_prof);

        
        $__internal_4f3c4b02a2bfdfa7bf5098688072372b1d52ee05c10213945a8563266a721536->leave($__internal_4f3c4b02a2bfdfa7bf5098688072372b1d52ee05c10213945a8563266a721536_prof);

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
        return array (  223 => 46,  214 => 45,  202 => 42,  198 => 41,  194 => 39,  185 => 38,  168 => 36,  145 => 22,  137 => 17,  133 => 15,  124 => 14,  111 => 8,  106 => 7,  97 => 6,  79 => 5,  67 => 50,  65 => 45,  62 => 44,  60 => 38,  57 => 37,  55 => 36,  52 => 35,  50 => 14,  43 => 11,  41 => 6,  37 => 5,  31 => 1,);
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
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
            <link rel=\"stylesheet\" href=\"path/to/font-awesome/css/font-awesome.min.css\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block header %}
            <header>
                <nav  class=\"navbar navbar-expand navbar-dark bg-dark\">
                    <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\" style=\"float: right\">Bloger</a>

                    <div class=\"collapse navbar-collapse\" id=\"navbarsExample02\">
                        <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"{{ path('create_post') }}\" >Create post <span class=\"sr-only\">(current)</span></a>
                            </li>
                        </ul>
                        <span class=\"login_button\">
                            <a href=\"#\">Sign in</a>
                        </span>
                        <span class=\"login_button\">
                            <a href=\"#\">Sign up</a>
                        </span>
                    </div>
                </nav>
            </header>
        {% endblock %}

        {% block body %}{% endblock %}

        {% block javascripts %}
            <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
            <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.js') }}\"></script>
            <script src=\"{{ asset('js/main.js') }}\"></script>
        {% endblock %}

        {% block footer %}
            <footer>

            </footer>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/blog/app/Resources/views/base.html.twig");
    }
}
