<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_981f165144c6d95f04a85bcffc48d074d392be93360b033429b843de7d6de2b8 extends Twig_Template
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
        $__internal_323d781cb3470e636174c9d6767a463aa528b24ac463d18bbde2d9f4aa32f2a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323d781cb3470e636174c9d6767a463aa528b24ac463d18bbde2d9f4aa32f2a4->enter($__internal_323d781cb3470e636174c9d6767a463aa528b24ac463d18bbde2d9f4aa32f2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_68bd99a163927189ca8eda96760b6d628946ef214bf73ee0825dd2fe7b6a6f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68bd99a163927189ca8eda96760b6d628946ef214bf73ee0825dd2fe7b6a6f70->enter($__internal_68bd99a163927189ca8eda96760b6d628946ef214bf73ee0825dd2fe7b6a6f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_323d781cb3470e636174c9d6767a463aa528b24ac463d18bbde2d9f4aa32f2a4->leave($__internal_323d781cb3470e636174c9d6767a463aa528b24ac463d18bbde2d9f4aa32f2a4_prof);

        
        $__internal_68bd99a163927189ca8eda96760b6d628946ef214bf73ee0825dd2fe7b6a6f70->leave($__internal_68bd99a163927189ca8eda96760b6d628946ef214bf73ee0825dd2fe7b6a6f70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
