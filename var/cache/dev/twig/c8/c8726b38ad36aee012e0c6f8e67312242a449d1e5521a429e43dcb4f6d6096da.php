<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_80ef58ed6a679c748733376ba4aa7115b9438be19eac5712f7854767f689cf68 extends Twig_Template
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
        $__internal_02b57436ccce4df398d6691ed9d2736f9ae38cbdb86f908f5f9857c5048766ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02b57436ccce4df398d6691ed9d2736f9ae38cbdb86f908f5f9857c5048766ba->enter($__internal_02b57436ccce4df398d6691ed9d2736f9ae38cbdb86f908f5f9857c5048766ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c81b73c438a3b596e546698ffe923828d20eae7ddcfba30f80c00274c06ceb2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81b73c438a3b596e546698ffe923828d20eae7ddcfba30f80c00274c06ceb2f->enter($__internal_c81b73c438a3b596e546698ffe923828d20eae7ddcfba30f80c00274c06ceb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_02b57436ccce4df398d6691ed9d2736f9ae38cbdb86f908f5f9857c5048766ba->leave($__internal_02b57436ccce4df398d6691ed9d2736f9ae38cbdb86f908f5f9857c5048766ba_prof);

        
        $__internal_c81b73c438a3b596e546698ffe923828d20eae7ddcfba30f80c00274c06ceb2f->leave($__internal_c81b73c438a3b596e546698ffe923828d20eae7ddcfba30f80c00274c06ceb2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
