<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_86ee718f3d1e47f32a4924b18c7d7b60eac32a2f1bfc6654367dc5581f23aac3 extends Twig_Template
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
        $__internal_5533738a2bcddd80e67c526844c18d4020eaecf156328f94d44408f61d126332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5533738a2bcddd80e67c526844c18d4020eaecf156328f94d44408f61d126332->enter($__internal_5533738a2bcddd80e67c526844c18d4020eaecf156328f94d44408f61d126332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_5ab7c7c2c8319112f7b15266b1c8a400d7c733f15d6a41bdcdfd612fc2a803a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab7c7c2c8319112f7b15266b1c8a400d7c733f15d6a41bdcdfd612fc2a803a0->enter($__internal_5ab7c7c2c8319112f7b15266b1c8a400d7c733f15d6a41bdcdfd612fc2a803a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5533738a2bcddd80e67c526844c18d4020eaecf156328f94d44408f61d126332->leave($__internal_5533738a2bcddd80e67c526844c18d4020eaecf156328f94d44408f61d126332_prof);

        
        $__internal_5ab7c7c2c8319112f7b15266b1c8a400d7c733f15d6a41bdcdfd612fc2a803a0->leave($__internal_5ab7c7c2c8319112f7b15266b1c8a400d7c733f15d6a41bdcdfd612fc2a803a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}