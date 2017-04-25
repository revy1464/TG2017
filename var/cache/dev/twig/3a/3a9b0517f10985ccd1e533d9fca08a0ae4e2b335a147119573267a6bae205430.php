<?php

/* base.html.twig */
class __TwigTemplate_cacf579b6000f723f17482e8fbcf34b983262632f4c235fe52e12381e458265c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee75d906ffa95d1072d4ed70cbde8b10342b43319b60e876cb84a03277b260d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee75d906ffa95d1072d4ed70cbde8b10342b43319b60e876cb84a03277b260d5->enter($__internal_ee75d906ffa95d1072d4ed70cbde8b10342b43319b60e876cb84a03277b260d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_73afeab593ddc525fd4216e77e3b5407b0cb31a2625b0d98d7c3ecfa3bc9e842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73afeab593ddc525fd4216e77e3b5407b0cb31a2625b0d98d7c3ecfa3bc9e842->enter($__internal_73afeab593ddc525fd4216e77e3b5407b0cb31a2625b0d98d7c3ecfa3bc9e842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ee75d906ffa95d1072d4ed70cbde8b10342b43319b60e876cb84a03277b260d5->leave($__internal_ee75d906ffa95d1072d4ed70cbde8b10342b43319b60e876cb84a03277b260d5_prof);

        
        $__internal_73afeab593ddc525fd4216e77e3b5407b0cb31a2625b0d98d7c3ecfa3bc9e842->leave($__internal_73afeab593ddc525fd4216e77e3b5407b0cb31a2625b0d98d7c3ecfa3bc9e842_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_35ae18dc5a65d8c54991473d8ccea5ed786595ad20966a6f6a61a091d6943e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35ae18dc5a65d8c54991473d8ccea5ed786595ad20966a6f6a61a091d6943e23->enter($__internal_35ae18dc5a65d8c54991473d8ccea5ed786595ad20966a6f6a61a091d6943e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_49e246bc0c0555144421717c3c28cd8325059a49b8937832beebac84eeda9054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e246bc0c0555144421717c3c28cd8325059a49b8937832beebac84eeda9054->enter($__internal_49e246bc0c0555144421717c3c28cd8325059a49b8937832beebac84eeda9054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_49e246bc0c0555144421717c3c28cd8325059a49b8937832beebac84eeda9054->leave($__internal_49e246bc0c0555144421717c3c28cd8325059a49b8937832beebac84eeda9054_prof);

        
        $__internal_35ae18dc5a65d8c54991473d8ccea5ed786595ad20966a6f6a61a091d6943e23->leave($__internal_35ae18dc5a65d8c54991473d8ccea5ed786595ad20966a6f6a61a091d6943e23_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_421ece159e93dc0d53d72d0a7abdfcc44f10e44bb4cee0bdea68586892c73d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_421ece159e93dc0d53d72d0a7abdfcc44f10e44bb4cee0bdea68586892c73d48->enter($__internal_421ece159e93dc0d53d72d0a7abdfcc44f10e44bb4cee0bdea68586892c73d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d68612e2a24d944aa0385bf3fb642f3da890d9119d784d278fd0111947a819e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68612e2a24d944aa0385bf3fb642f3da890d9119d784d278fd0111947a819e4->enter($__internal_d68612e2a24d944aa0385bf3fb642f3da890d9119d784d278fd0111947a819e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d68612e2a24d944aa0385bf3fb642f3da890d9119d784d278fd0111947a819e4->leave($__internal_d68612e2a24d944aa0385bf3fb642f3da890d9119d784d278fd0111947a819e4_prof);

        
        $__internal_421ece159e93dc0d53d72d0a7abdfcc44f10e44bb4cee0bdea68586892c73d48->leave($__internal_421ece159e93dc0d53d72d0a7abdfcc44f10e44bb4cee0bdea68586892c73d48_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6622d84c8bb0e866c186e317430ef1c90612f26ac0aa0489c9c5a24fd60785c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6622d84c8bb0e866c186e317430ef1c90612f26ac0aa0489c9c5a24fd60785c0->enter($__internal_6622d84c8bb0e866c186e317430ef1c90612f26ac0aa0489c9c5a24fd60785c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec135d86770f2c50ec8401606b948722f0b4606ccdb1185ac7047b48f8a1c966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec135d86770f2c50ec8401606b948722f0b4606ccdb1185ac7047b48f8a1c966->enter($__internal_ec135d86770f2c50ec8401606b948722f0b4606ccdb1185ac7047b48f8a1c966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ec135d86770f2c50ec8401606b948722f0b4606ccdb1185ac7047b48f8a1c966->leave($__internal_ec135d86770f2c50ec8401606b948722f0b4606ccdb1185ac7047b48f8a1c966_prof);

        
        $__internal_6622d84c8bb0e866c186e317430ef1c90612f26ac0aa0489c9c5a24fd60785c0->leave($__internal_6622d84c8bb0e866c186e317430ef1c90612f26ac0aa0489c9c5a24fd60785c0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9c83c8e6713fb848f2183e57f2b18d4a0b7cabc71564a486142dba6c9c90b476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c83c8e6713fb848f2183e57f2b18d4a0b7cabc71564a486142dba6c9c90b476->enter($__internal_9c83c8e6713fb848f2183e57f2b18d4a0b7cabc71564a486142dba6c9c90b476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5f71607a6baca248f18c72c966c7406e7b30cdf48d2c4b1ec3204fbc67f32764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f71607a6baca248f18c72c966c7406e7b30cdf48d2c4b1ec3204fbc67f32764->enter($__internal_5f71607a6baca248f18c72c966c7406e7b30cdf48d2c4b1ec3204fbc67f32764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5f71607a6baca248f18c72c966c7406e7b30cdf48d2c4b1ec3204fbc67f32764->leave($__internal_5f71607a6baca248f18c72c966c7406e7b30cdf48d2c4b1ec3204fbc67f32764_prof);

        
        $__internal_9c83c8e6713fb848f2183e57f2b18d4a0b7cabc71564a486142dba6c9c90b476->leave($__internal_9c83c8e6713fb848f2183e57f2b18d4a0b7cabc71564a486142dba6c9c90b476_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\AppServ\\www\\symfony3\\app\\Resources\\views\\base.html.twig");
    }
}
