<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2a5fd5b3999a6a6e53295c30a0c6dc369156bcbecd87308d6be069aa3069a3b2 extends Twig_Template
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
        $__internal_554978d5d39b9438f1611fdffc687a1e1b2959f6950e3f446a9b97079fcc5fdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_554978d5d39b9438f1611fdffc687a1e1b2959f6950e3f446a9b97079fcc5fdb->enter($__internal_554978d5d39b9438f1611fdffc687a1e1b2959f6950e3f446a9b97079fcc5fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a0419c72cc2f0c79a16c5c15d8cf6c7919a9d96272f569d0bacaf8b6f598fd6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0419c72cc2f0c79a16c5c15d8cf6c7919a9d96272f569d0bacaf8b6f598fd6d->enter($__internal_a0419c72cc2f0c79a16c5c15d8cf6c7919a9d96272f569d0bacaf8b6f598fd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_554978d5d39b9438f1611fdffc687a1e1b2959f6950e3f446a9b97079fcc5fdb->leave($__internal_554978d5d39b9438f1611fdffc687a1e1b2959f6950e3f446a9b97079fcc5fdb_prof);

        
        $__internal_a0419c72cc2f0c79a16c5c15d8cf6c7919a9d96272f569d0bacaf8b6f598fd6d->leave($__internal_a0419c72cc2f0c79a16c5c15d8cf6c7919a9d96272f569d0bacaf8b6f598fd6d_prof);

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
