<?php

/* AppBundle:Usuarios:index.html.twig */
class __TwigTemplate_7750cb79d98aeed06386bbd7d81c6efe0b06458a2c6bccac0c778717177cdec9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_906da8f48c690b13c065af7e7c04cb11fec9c3db3981ab458ebdfd5b8ad80ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906da8f48c690b13c065af7e7c04cb11fec9c3db3981ab458ebdfd5b8ad80ad0->enter($__internal_906da8f48c690b13c065af7e7c04cb11fec9c3db3981ab458ebdfd5b8ad80ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Usuarios:index.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["texto"]) ? $context["texto"] : $this->getContext($context, "texto")), "Conde", array()), "html", null, true);
        
        $__internal_906da8f48c690b13c065af7e7c04cb11fec9c3db3981ab458ebdfd5b8ad80ad0->leave($__internal_906da8f48c690b13c065af7e7c04cb11fec9c3db3981ab458ebdfd5b8ad80ad0_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Usuarios:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{{texto.Conde}}", "AppBundle:Usuarios:index.html.twig", "C:\\AppServ\\www\\symfony3\\src\\AppBundle/Resources/views/Usuarios/index.html.twig");
    }
}
