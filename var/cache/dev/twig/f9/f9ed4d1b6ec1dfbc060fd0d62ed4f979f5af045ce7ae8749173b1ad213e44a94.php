<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_16fea8c7a10e961a6bdf5042d9a6dfb9a9f6f4296d80ad37c451ab7809277217 extends Twig_Template
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
        $__internal_e4a16e0c71cf826239664bf5cbf4780513b4e9fe1d26ea8a7104cca67c3dd3bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a16e0c71cf826239664bf5cbf4780513b4e9fe1d26ea8a7104cca67c3dd3bc->enter($__internal_e4a16e0c71cf826239664bf5cbf4780513b4e9fe1d26ea8a7104cca67c3dd3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_ab330fdbd5e7496bb9a8a5fc67d5fd82d4a32ca29b536882be58851afbbce764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab330fdbd5e7496bb9a8a5fc67d5fd82d4a32ca29b536882be58851afbbce764->enter($__internal_ab330fdbd5e7496bb9a8a5fc67d5fd82d4a32ca29b536882be58851afbbce764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_e4a16e0c71cf826239664bf5cbf4780513b4e9fe1d26ea8a7104cca67c3dd3bc->leave($__internal_e4a16e0c71cf826239664bf5cbf4780513b4e9fe1d26ea8a7104cca67c3dd3bc_prof);

        
        $__internal_ab330fdbd5e7496bb9a8a5fc67d5fd82d4a32ca29b536882be58851afbbce764->leave($__internal_ab330fdbd5e7496bb9a8a5fc67d5fd82d4a32ca29b536882be58851afbbce764_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
