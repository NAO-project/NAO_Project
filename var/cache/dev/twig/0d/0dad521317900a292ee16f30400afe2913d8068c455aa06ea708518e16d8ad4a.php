<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2a0e3a6721c0be1e89d4d0185288be334bece078a60187ca2bfe6654ce0e08c2 extends Twig_Template
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
        $__internal_5beedc3e2a6955e6ec7091b1302aa1964b03868387189b2bff135780e5aa10c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5beedc3e2a6955e6ec7091b1302aa1964b03868387189b2bff135780e5aa10c2->enter($__internal_5beedc3e2a6955e6ec7091b1302aa1964b03868387189b2bff135780e5aa10c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_fb25c9380cde5157f3cf24051c4880872022cfb43f188e86ff5a7d973eba97be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb25c9380cde5157f3cf24051c4880872022cfb43f188e86ff5a7d973eba97be->enter($__internal_fb25c9380cde5157f3cf24051c4880872022cfb43f188e86ff5a7d973eba97be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_5beedc3e2a6955e6ec7091b1302aa1964b03868387189b2bff135780e5aa10c2->leave($__internal_5beedc3e2a6955e6ec7091b1302aa1964b03868387189b2bff135780e5aa10c2_prof);

        
        $__internal_fb25c9380cde5157f3cf24051c4880872022cfb43f188e86ff5a7d973eba97be->leave($__internal_fb25c9380cde5157f3cf24051c4880872022cfb43f188e86ff5a7d973eba97be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
