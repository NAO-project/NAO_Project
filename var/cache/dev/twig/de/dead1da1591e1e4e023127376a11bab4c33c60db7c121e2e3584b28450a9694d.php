<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bc8385b46777fe572d80c2cb0180be6a22f53c4bc0627a3cf23acec4dfbc7b55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_161f318f4700a6c22fc5a520e0031fc7b20976972bdc1faf48226734bff02e97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_161f318f4700a6c22fc5a520e0031fc7b20976972bdc1faf48226734bff02e97->enter($__internal_161f318f4700a6c22fc5a520e0031fc7b20976972bdc1faf48226734bff02e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_84c4455e3203c15edb100d452223c83de42f2733e13423c1ed15c319caf5373b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84c4455e3203c15edb100d452223c83de42f2733e13423c1ed15c319caf5373b->enter($__internal_84c4455e3203c15edb100d452223c83de42f2733e13423c1ed15c319caf5373b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_161f318f4700a6c22fc5a520e0031fc7b20976972bdc1faf48226734bff02e97->leave($__internal_161f318f4700a6c22fc5a520e0031fc7b20976972bdc1faf48226734bff02e97_prof);

        
        $__internal_84c4455e3203c15edb100d452223c83de42f2733e13423c1ed15c319caf5373b->leave($__internal_84c4455e3203c15edb100d452223c83de42f2733e13423c1ed15c319caf5373b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_22cdefb7b7a0cea7996f97f39515e21e275ed9fddb0657c0b497bb6bb7049b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22cdefb7b7a0cea7996f97f39515e21e275ed9fddb0657c0b497bb6bb7049b56->enter($__internal_22cdefb7b7a0cea7996f97f39515e21e275ed9fddb0657c0b497bb6bb7049b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0a3a6f144fcda55c5ed081fe00c3e09d7359f2e31d2da1bbd5f8cf06923502fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3a6f144fcda55c5ed081fe00c3e09d7359f2e31d2da1bbd5f8cf06923502fd->enter($__internal_0a3a6f144fcda55c5ed081fe00c3e09d7359f2e31d2da1bbd5f8cf06923502fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_0a3a6f144fcda55c5ed081fe00c3e09d7359f2e31d2da1bbd5f8cf06923502fd->leave($__internal_0a3a6f144fcda55c5ed081fe00c3e09d7359f2e31d2da1bbd5f8cf06923502fd_prof);

        
        $__internal_22cdefb7b7a0cea7996f97f39515e21e275ed9fddb0657c0b497bb6bb7049b56->leave($__internal_22cdefb7b7a0cea7996f97f39515e21e275ed9fddb0657c0b497bb6bb7049b56_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf187f9c61c2bef1c6dea359275ea3e13c5f30e7a65f332b5feb67e3fb71df35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf187f9c61c2bef1c6dea359275ea3e13c5f30e7a65f332b5feb67e3fb71df35->enter($__internal_cf187f9c61c2bef1c6dea359275ea3e13c5f30e7a65f332b5feb67e3fb71df35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cc93a8b0b7f645aee5c382ff752f8f2380f82a4983afcc464f0a9413b3f1957c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc93a8b0b7f645aee5c382ff752f8f2380f82a4983afcc464f0a9413b3f1957c->enter($__internal_cc93a8b0b7f645aee5c382ff752f8f2380f82a4983afcc464f0a9413b3f1957c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_cc93a8b0b7f645aee5c382ff752f8f2380f82a4983afcc464f0a9413b3f1957c->leave($__internal_cc93a8b0b7f645aee5c382ff752f8f2380f82a4983afcc464f0a9413b3f1957c_prof);

        
        $__internal_cf187f9c61c2bef1c6dea359275ea3e13c5f30e7a65f332b5feb67e3fb71df35->leave($__internal_cf187f9c61c2bef1c6dea359275ea3e13c5f30e7a65f332b5feb67e3fb71df35_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_85d5032f3286e11a7b8f84f89ad4146174c3112ceec4b644e260ac7526610cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85d5032f3286e11a7b8f84f89ad4146174c3112ceec4b644e260ac7526610cc8->enter($__internal_85d5032f3286e11a7b8f84f89ad4146174c3112ceec4b644e260ac7526610cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d408f6025a647587d2dd8aa724ad9aaeb6bbcc8a644fb0c11157ae60a213c897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d408f6025a647587d2dd8aa724ad9aaeb6bbcc8a644fb0c11157ae60a213c897->enter($__internal_d408f6025a647587d2dd8aa724ad9aaeb6bbcc8a644fb0c11157ae60a213c897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d408f6025a647587d2dd8aa724ad9aaeb6bbcc8a644fb0c11157ae60a213c897->leave($__internal_d408f6025a647587d2dd8aa724ad9aaeb6bbcc8a644fb0c11157ae60a213c897_prof);

        
        $__internal_85d5032f3286e11a7b8f84f89ad4146174c3112ceec4b644e260ac7526610cc8->leave($__internal_85d5032f3286e11a7b8f84f89ad4146174c3112ceec4b644e260ac7526610cc8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
