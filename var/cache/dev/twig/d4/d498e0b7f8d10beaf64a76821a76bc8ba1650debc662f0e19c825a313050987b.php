<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a66f7feeccc64ec58a7671d7832396430d88f2e27434edb21459be8430e2f116 extends Twig_Template
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
        $__internal_a5561c9fd6bce5ccce29d9290d4846dbfd59ebf63bde1034b3ec38db7f2db6db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5561c9fd6bce5ccce29d9290d4846dbfd59ebf63bde1034b3ec38db7f2db6db->enter($__internal_a5561c9fd6bce5ccce29d9290d4846dbfd59ebf63bde1034b3ec38db7f2db6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ba5cdc2b6b54e6502b89bb35aec21754596d4aec0e6efc2db0e4f74bcc17f0c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5cdc2b6b54e6502b89bb35aec21754596d4aec0e6efc2db0e4f74bcc17f0c0->enter($__internal_ba5cdc2b6b54e6502b89bb35aec21754596d4aec0e6efc2db0e4f74bcc17f0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5561c9fd6bce5ccce29d9290d4846dbfd59ebf63bde1034b3ec38db7f2db6db->leave($__internal_a5561c9fd6bce5ccce29d9290d4846dbfd59ebf63bde1034b3ec38db7f2db6db_prof);

        
        $__internal_ba5cdc2b6b54e6502b89bb35aec21754596d4aec0e6efc2db0e4f74bcc17f0c0->leave($__internal_ba5cdc2b6b54e6502b89bb35aec21754596d4aec0e6efc2db0e4f74bcc17f0c0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_34945ac1f89ea4839b66c4433a65addb5a9b780313fc063bcdd90f8f53b72e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34945ac1f89ea4839b66c4433a65addb5a9b780313fc063bcdd90f8f53b72e4e->enter($__internal_34945ac1f89ea4839b66c4433a65addb5a9b780313fc063bcdd90f8f53b72e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a091992874f1564226b27e3fd518046371d8b8e0a7e9ed8dcb25cb27e9810830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a091992874f1564226b27e3fd518046371d8b8e0a7e9ed8dcb25cb27e9810830->enter($__internal_a091992874f1564226b27e3fd518046371d8b8e0a7e9ed8dcb25cb27e9810830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a091992874f1564226b27e3fd518046371d8b8e0a7e9ed8dcb25cb27e9810830->leave($__internal_a091992874f1564226b27e3fd518046371d8b8e0a7e9ed8dcb25cb27e9810830_prof);

        
        $__internal_34945ac1f89ea4839b66c4433a65addb5a9b780313fc063bcdd90f8f53b72e4e->leave($__internal_34945ac1f89ea4839b66c4433a65addb5a9b780313fc063bcdd90f8f53b72e4e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4761046a476855ef7812cf57d1367b107fc1bb8507e70251ce651d7d14dc04d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4761046a476855ef7812cf57d1367b107fc1bb8507e70251ce651d7d14dc04d->enter($__internal_c4761046a476855ef7812cf57d1367b107fc1bb8507e70251ce651d7d14dc04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ab800c030c58e55e162c95427a91cf4a8b1b2cc9520a6c49e867348df31e3303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab800c030c58e55e162c95427a91cf4a8b1b2cc9520a6c49e867348df31e3303->enter($__internal_ab800c030c58e55e162c95427a91cf4a8b1b2cc9520a6c49e867348df31e3303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ab800c030c58e55e162c95427a91cf4a8b1b2cc9520a6c49e867348df31e3303->leave($__internal_ab800c030c58e55e162c95427a91cf4a8b1b2cc9520a6c49e867348df31e3303_prof);

        
        $__internal_c4761046a476855ef7812cf57d1367b107fc1bb8507e70251ce651d7d14dc04d->leave($__internal_c4761046a476855ef7812cf57d1367b107fc1bb8507e70251ce651d7d14dc04d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_44f935aa24a9200659da4606627da659fe901b4d128774835a5a50c8a350f99d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44f935aa24a9200659da4606627da659fe901b4d128774835a5a50c8a350f99d->enter($__internal_44f935aa24a9200659da4606627da659fe901b4d128774835a5a50c8a350f99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_74f07d226230382a1e1be32c3ee642c015e1d33f65f9ab85d3b2a427f6047e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f07d226230382a1e1be32c3ee642c015e1d33f65f9ab85d3b2a427f6047e99->enter($__internal_74f07d226230382a1e1be32c3ee642c015e1d33f65f9ab85d3b2a427f6047e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_74f07d226230382a1e1be32c3ee642c015e1d33f65f9ab85d3b2a427f6047e99->leave($__internal_74f07d226230382a1e1be32c3ee642c015e1d33f65f9ab85d3b2a427f6047e99_prof);

        
        $__internal_44f935aa24a9200659da4606627da659fe901b4d128774835a5a50c8a350f99d->leave($__internal_44f935aa24a9200659da4606627da659fe901b4d128774835a5a50c8a350f99d_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
