<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_fa859260f8f33e61847520b60dbe5a544f725e3ceaccc48ae3d7b73b367b318a extends Twig_Template
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
        $__internal_9f410a9afcab356372e82933445be3852b50cce02384efbd810928efe31a590f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f410a9afcab356372e82933445be3852b50cce02384efbd810928efe31a590f->enter($__internal_9f410a9afcab356372e82933445be3852b50cce02384efbd810928efe31a590f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_7f6f22cbccef6575abb2f78676ae9ba74fd8be17d1c4cd7fb20a5901d910abcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6f22cbccef6575abb2f78676ae9ba74fd8be17d1c4cd7fb20a5901d910abcc->enter($__internal_7f6f22cbccef6575abb2f78676ae9ba74fd8be17d1c4cd7fb20a5901d910abcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_9f410a9afcab356372e82933445be3852b50cce02384efbd810928efe31a590f->leave($__internal_9f410a9afcab356372e82933445be3852b50cce02384efbd810928efe31a590f_prof);

        
        $__internal_7f6f22cbccef6575abb2f78676ae9ba74fd8be17d1c4cd7fb20a5901d910abcc->leave($__internal_7f6f22cbccef6575abb2f78676ae9ba74fd8be17d1c4cd7fb20a5901d910abcc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
