<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_962cdfbe831d16dce84325d9b7f80856e5f9bbdf0a990f1f7a5375fb2852ec1e extends Twig_Template
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
        $__internal_280f608c2c0ee3ec43363c1d161852da3f2a33dce39ddd58f194187858ee5ada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_280f608c2c0ee3ec43363c1d161852da3f2a33dce39ddd58f194187858ee5ada->enter($__internal_280f608c2c0ee3ec43363c1d161852da3f2a33dce39ddd58f194187858ee5ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_4fca11fd346815920630408a9c303e1ddee7f5976a21075eef0d4724cf7ae4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fca11fd346815920630408a9c303e1ddee7f5976a21075eef0d4724cf7ae4ca->enter($__internal_4fca11fd346815920630408a9c303e1ddee7f5976a21075eef0d4724cf7ae4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_280f608c2c0ee3ec43363c1d161852da3f2a33dce39ddd58f194187858ee5ada->leave($__internal_280f608c2c0ee3ec43363c1d161852da3f2a33dce39ddd58f194187858ee5ada_prof);

        
        $__internal_4fca11fd346815920630408a9c303e1ddee7f5976a21075eef0d4724cf7ae4ca->leave($__internal_4fca11fd346815920630408a9c303e1ddee7f5976a21075eef0d4724cf7ae4ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
