<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_25b587e6d4640a6f2de6bdbe9b7259d01997ed28799936d289ec1af62d25f088 extends Twig_Template
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
        $__internal_18e46e692b1211549cc3fa796d0e8722198da84bef8e1a53e0122391156d305a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e46e692b1211549cc3fa796d0e8722198da84bef8e1a53e0122391156d305a->enter($__internal_18e46e692b1211549cc3fa796d0e8722198da84bef8e1a53e0122391156d305a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_23d873457fbdea2a64f40f4196af3b8efccb78a3a0b6cd60f1690f3687334c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23d873457fbdea2a64f40f4196af3b8efccb78a3a0b6cd60f1690f3687334c86->enter($__internal_23d873457fbdea2a64f40f4196af3b8efccb78a3a0b6cd60f1690f3687334c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_18e46e692b1211549cc3fa796d0e8722198da84bef8e1a53e0122391156d305a->leave($__internal_18e46e692b1211549cc3fa796d0e8722198da84bef8e1a53e0122391156d305a_prof);

        
        $__internal_23d873457fbdea2a64f40f4196af3b8efccb78a3a0b6cd60f1690f3687334c86->leave($__internal_23d873457fbdea2a64f40f4196af3b8efccb78a3a0b6cd60f1690f3687334c86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_start.html.php");
    }
}