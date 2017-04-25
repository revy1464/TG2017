<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b587731a82fa1e2a9442bec2a9e1c3f0902ff01ccf9312478ac026d0fe404f7b extends Twig_Template
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
        $__internal_a5b576b3ef5f787d7c737e3b3a81cf498e8673fa609dc18b46e96ea528963f54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5b576b3ef5f787d7c737e3b3a81cf498e8673fa609dc18b46e96ea528963f54->enter($__internal_a5b576b3ef5f787d7c737e3b3a81cf498e8673fa609dc18b46e96ea528963f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b5d6c3b4ca6f26bdbe3a06967c26c596ae7fa693ffd16abb2c62214394dda6dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d6c3b4ca6f26bdbe3a06967c26c596ae7fa693ffd16abb2c62214394dda6dc->enter($__internal_b5d6c3b4ca6f26bdbe3a06967c26c596ae7fa693ffd16abb2c62214394dda6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5b576b3ef5f787d7c737e3b3a81cf498e8673fa609dc18b46e96ea528963f54->leave($__internal_a5b576b3ef5f787d7c737e3b3a81cf498e8673fa609dc18b46e96ea528963f54_prof);

        
        $__internal_b5d6c3b4ca6f26bdbe3a06967c26c596ae7fa693ffd16abb2c62214394dda6dc->leave($__internal_b5d6c3b4ca6f26bdbe3a06967c26c596ae7fa693ffd16abb2c62214394dda6dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f9ddb58b3d6420fce3c9cc666671ba6a2a0b81ad24e6c1c0783153b0cd4f4bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f9ddb58b3d6420fce3c9cc666671ba6a2a0b81ad24e6c1c0783153b0cd4f4bb->enter($__internal_2f9ddb58b3d6420fce3c9cc666671ba6a2a0b81ad24e6c1c0783153b0cd4f4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b5ad416d866ed46a7e6df888c649851375e46a6474524a092c29db0b9806ca71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ad416d866ed46a7e6df888c649851375e46a6474524a092c29db0b9806ca71->enter($__internal_b5ad416d866ed46a7e6df888c649851375e46a6474524a092c29db0b9806ca71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b5ad416d866ed46a7e6df888c649851375e46a6474524a092c29db0b9806ca71->leave($__internal_b5ad416d866ed46a7e6df888c649851375e46a6474524a092c29db0b9806ca71_prof);

        
        $__internal_2f9ddb58b3d6420fce3c9cc666671ba6a2a0b81ad24e6c1c0783153b0cd4f4bb->leave($__internal_2f9ddb58b3d6420fce3c9cc666671ba6a2a0b81ad24e6c1c0783153b0cd4f4bb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d44a25a5e7b40ef9ff5f2d161a6ceb762ebd9a1b7c34573dacf2f88f1d68b4fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d44a25a5e7b40ef9ff5f2d161a6ceb762ebd9a1b7c34573dacf2f88f1d68b4fc->enter($__internal_d44a25a5e7b40ef9ff5f2d161a6ceb762ebd9a1b7c34573dacf2f88f1d68b4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_df6e49f88c69161add6c6c7adf3e467e89c2a37d15b4e4aba45bd0b01890f397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6e49f88c69161add6c6c7adf3e467e89c2a37d15b4e4aba45bd0b01890f397->enter($__internal_df6e49f88c69161add6c6c7adf3e467e89c2a37d15b4e4aba45bd0b01890f397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_df6e49f88c69161add6c6c7adf3e467e89c2a37d15b4e4aba45bd0b01890f397->leave($__internal_df6e49f88c69161add6c6c7adf3e467e89c2a37d15b4e4aba45bd0b01890f397_prof);

        
        $__internal_d44a25a5e7b40ef9ff5f2d161a6ceb762ebd9a1b7c34573dacf2f88f1d68b4fc->leave($__internal_d44a25a5e7b40ef9ff5f2d161a6ceb762ebd9a1b7c34573dacf2f88f1d68b4fc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4af499bf67a47295910f7991fa72070ee646a4dec014935054b67b08662a8f8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4af499bf67a47295910f7991fa72070ee646a4dec014935054b67b08662a8f8f->enter($__internal_4af499bf67a47295910f7991fa72070ee646a4dec014935054b67b08662a8f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9c5deffd550a7b794eb6fb1bf9bb293134839f23a86003d8cab90484ee12e8fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5deffd550a7b794eb6fb1bf9bb293134839f23a86003d8cab90484ee12e8fa->enter($__internal_9c5deffd550a7b794eb6fb1bf9bb293134839f23a86003d8cab90484ee12e8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9c5deffd550a7b794eb6fb1bf9bb293134839f23a86003d8cab90484ee12e8fa->leave($__internal_9c5deffd550a7b794eb6fb1bf9bb293134839f23a86003d8cab90484ee12e8fa_prof);

        
        $__internal_4af499bf67a47295910f7991fa72070ee646a4dec014935054b67b08662a8f8f->leave($__internal_4af499bf67a47295910f7991fa72070ee646a4dec014935054b67b08662a8f8f_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\AppServ\\www\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
