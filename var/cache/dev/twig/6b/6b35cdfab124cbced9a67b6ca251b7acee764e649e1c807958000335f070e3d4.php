<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index/index.html.twig */
class __TwigTemplate_1e885223d0c6a7b6c9db21facaa6e835527d48ba8ce6a2e060f7614f79dc1961 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div id=\"home\">
        <div class=\"header-blue\">
            <nav class=\"navbar navbar-dark navbar-expand-md sticker\" style=\"padding-top:30px;\">
                <div class=\"container\"><a class=\"navbar-brand\" style=\"font-size:24px;\" href=\"#\">RENTACAM</a><button data-toggle=\"collapse\" class=\"navbar-toggler\" data-target=\"#navcol-1\"><span class=\"sr-only\">Toggle navigation</span><span class=\"navbar-toggler-icon\"></span></button>
                    <div
                            class=\"collapse navbar-collapse\" id=\"navcol-1\">
                        <ul class=\"nav navbar-nav ml-auto\">
                            <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" target=\"_top\">Bienvenue</a></li>
                            <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cameraalouer");
        echo "\">Caméras à louer</a></li>
                            <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lesloueurs");
        echo "\">Les loueurs</a></li>
                            <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mettreunecameralocation");
        echo "\">Mettre une caméra en location </a></li>
                            <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifieruneannonce");
        echo "\">Modifier une annonce</a></li>
                            <li class=\"nav-item\" role=\"presentation\"></li>
                            <li class=\"nav-item\" role=\"presentation\"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class=\"container hero\">
                <div class=\"row\">
                    <div class=\"col-12 col-lg-6 col-xl-6 offset-xl-1\" style=\"margin-left:44px;\">
                        <h1 style=\"margin-top:204px;\">La révolution de vos tournages</h1>
                        <p>Vous allez pouvoir louer la caméra de votre choix à un particulier avec entre vous un contrat d'assurance.</p><button class=\"btn btn-light btn-lg action-button\" style=\"padding-right:20px;padding-left:20px;padding-bottom:6px;padding-top:6px;font-size:16px;\"
                                                                                                                                                 hover=\"background: #fff; color: #333;\" type=\"button\">En savoir plus</button></div>
                    <div class=\"col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder\"><img src=\"/img/VIPER_THOMSON.png\">
                        <div class=\"iphone-mockup\">
                            <div class=\"screen\"><img style=\"width:261px;\" src=\"assets/img/VIPER_THOMSON.png\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer-dark\">
        <footer>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-3 item\">
                        <h3>Services</h3>
                        <ul>
                            <li><a href=\"#\">Collaborer avec nous</a></li>
                            <li><a href=\"#\">Cookies</a></li>
                            <li><a href=\"#\">Mentions légales</a></li>
                            <li><a href=\"#\">Se connecter</a></li>
                        </ul>
                    </div>
                    <div class=\"col-sm-6 col-md-3 item\">
                        <h3>A propos</h3>
                        <ul>
                            <li><a href=\"#\">La société</a></li>
                            <li><a href=\"#\">La team</a></li>
                            <li><a href=\"#\">Nous rejoindre</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-6 item text\">
                        <h3>RENTACAM</h3>
                        <p>Service de mise en relation de particuliers pour des fins de location de matériel cinématographique avec assurance.</p>
                    </div>
                    <div class=\"col item social\"><a href=\"#\"><i class=\"icon ion-social-facebook\"></i></a><a href=\"#\"><i class=\"icon ion-social-twitter\"></i></a><a href=\"#\"><i class=\"icon ion-social-instagram\"></i></a></div>
                </div>
                <p class=\"copyright\">RENTACAM © 2019</p>
            </div>
        </footer>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 17,  105 => 16,  101 => 15,  97 => 14,  93 => 13,  84 => 6,  75 => 5,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bienvenue!{% endblock %}

{% block body %}
    <div id=\"home\">
        <div class=\"header-blue\">
            <nav class=\"navbar navbar-dark navbar-expand-md sticker\" style=\"padding-top:30px;\">
                <div class=\"container\"><a class=\"navbar-brand\" style=\"font-size:24px;\" href=\"#\">RENTACAM</a><button data-toggle=\"collapse\" class=\"navbar-toggler\" data-target=\"#navcol-1\"><span class=\"sr-only\">Toggle navigation</span><span class=\"navbar-toggler-icon\"></span></button>
                    <div
                            class=\"collapse navbar-collapse\" id=\"navcol-1\">
                        <ul class=\"nav navbar-nav ml-auto\">
                            <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=\"{{ path('index') }}\" target=\"_top\">Bienvenue</a></li>
                            <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=\"{{ path('cameraalouer') }}\">Caméras à louer</a></li>
                            <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=\"{{ path('lesloueurs') }}\">Les loueurs</a></li>
                            <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=\"{{ path('mettreunecameralocation') }}\">Mettre une caméra en location </a></li>
                            <li class=\"nav-item\" role=\"presentation\"><a class=\"nav-link active\" href=\"{{ path('modifieruneannonce') }}\">Modifier une annonce</a></li>
                            <li class=\"nav-item\" role=\"presentation\"></li>
                            <li class=\"nav-item\" role=\"presentation\"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class=\"container hero\">
                <div class=\"row\">
                    <div class=\"col-12 col-lg-6 col-xl-6 offset-xl-1\" style=\"margin-left:44px;\">
                        <h1 style=\"margin-top:204px;\">La révolution de vos tournages</h1>
                        <p>Vous allez pouvoir louer la caméra de votre choix à un particulier avec entre vous un contrat d'assurance.</p><button class=\"btn btn-light btn-lg action-button\" style=\"padding-right:20px;padding-left:20px;padding-bottom:6px;padding-top:6px;font-size:16px;\"
                                                                                                                                                 hover=\"background: #fff; color: #333;\" type=\"button\">En savoir plus</button></div>
                    <div class=\"col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder\"><img src=\"/img/VIPER_THOMSON.png\">
                        <div class=\"iphone-mockup\">
                            <div class=\"screen\"><img style=\"width:261px;\" src=\"assets/img/VIPER_THOMSON.png\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"footer-dark\">
        <footer>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-3 item\">
                        <h3>Services</h3>
                        <ul>
                            <li><a href=\"#\">Collaborer avec nous</a></li>
                            <li><a href=\"#\">Cookies</a></li>
                            <li><a href=\"#\">Mentions légales</a></li>
                            <li><a href=\"#\">Se connecter</a></li>
                        </ul>
                    </div>
                    <div class=\"col-sm-6 col-md-3 item\">
                        <h3>A propos</h3>
                        <ul>
                            <li><a href=\"#\">La société</a></li>
                            <li><a href=\"#\">La team</a></li>
                            <li><a href=\"#\">Nous rejoindre</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-6 item text\">
                        <h3>RENTACAM</h3>
                        <p>Service de mise en relation de particuliers pour des fins de location de matériel cinématographique avec assurance.</p>
                    </div>
                    <div class=\"col item social\"><a href=\"#\"><i class=\"icon ion-social-facebook\"></i></a><a href=\"#\"><i class=\"icon ion-social-twitter\"></i></a><a href=\"#\"><i class=\"icon ion-social-instagram\"></i></a></div>
                </div>
                <p class=\"copyright\">RENTACAM © 2019</p>
            </div>
        </footer>
    </div>
{% endblock %}
", "index/index.html.twig", "/Users/srinathchristophersamarasinghe/Documents/WEB DEVELOPMENT/RENTACAM/RENTACAM/templates/index/index.html.twig");
    }
}
