<?php

/* Administration/AdminDashboard.html.twig */
class __TwigTemplate_e3f99d6a6498d2bf19a31f62aaca8216cdfc2bd9114e3c4fcd019005dd5f3202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Administration/AdminDashboard.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba6f1bfad683d2bd1a37c4169ed433b6c8287e7a437bf3a86eadb4565cf82926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba6f1bfad683d2bd1a37c4169ed433b6c8287e7a437bf3a86eadb4565cf82926->enter($__internal_ba6f1bfad683d2bd1a37c4169ed433b6c8287e7a437bf3a86eadb4565cf82926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/AdminDashboard.html.twig"));

        $__internal_55529d7b68a4db734a46ba0c851fd40a7cd0a29ed36e40cbc2129041624e278b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55529d7b68a4db734a46ba0c851fd40a7cd0a29ed36e40cbc2129041624e278b->enter($__internal_55529d7b68a4db734a46ba0c851fd40a7cd0a29ed36e40cbc2129041624e278b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/AdminDashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba6f1bfad683d2bd1a37c4169ed433b6c8287e7a437bf3a86eadb4565cf82926->leave($__internal_ba6f1bfad683d2bd1a37c4169ed433b6c8287e7a437bf3a86eadb4565cf82926_prof);

        
        $__internal_55529d7b68a4db734a46ba0c851fd40a7cd0a29ed36e40cbc2129041624e278b->leave($__internal_55529d7b68a4db734a46ba0c851fd40a7cd0a29ed36e40cbc2129041624e278b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb79fea2b5bf7ed6b8d49f829c7d99cec4c3cea5c0995af10234ceaf06bd3e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb79fea2b5bf7ed6b8d49f829c7d99cec4c3cea5c0995af10234ceaf06bd3e8d->enter($__internal_cb79fea2b5bf7ed6b8d49f829c7d99cec4c3cea5c0995af10234ceaf06bd3e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff9c9e11d9455eaa9e07a258212c4b21fc10eed07de75aadb9dd6cd9133a0fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff9c9e11d9455eaa9e07a258212c4b21fc10eed07de75aadb9dd6cd9133a0fa9->enter($__internal_ff9c9e11d9455eaa9e07a258212c4b21fc10eed07de75aadb9dd6cd9133a0fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"usercard\">
        <div class=\"card\" style=\"width: 18rem;\">
            
            <div class=\"card-body\">
               <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifyuser");
        echo "\"><img class=\"card-img-top\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("build/img/" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "image", array()))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "\" style=\"height: 170px;\"></a>
              <h5 class=\"card-title\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->getSourceContext()); })()), "firstname", array()), "html", null, true);
        echo "</h5>
              <p class=\"card-text\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 9, $this->getSourceContext()); })()), "type", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
        
    </div>
    <div>
        <table id=\"userstable\">
            <h2 class=\"h2tabdashboard\">Comptes naturalistes à valider</h2> 
            <tr>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Mail</th>
              <th>Carte Professionnelle</th>
              <th>Action à faire</th>
            </tr>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 24, $this->getSourceContext()); })()), "content", array()), "userqueued", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 25
            echo "            <form method=\"post\">
                <tr>
                   <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
                   <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "procard", array()), "html", null, true);
            echo "</td>
                   <input type=\"hidden\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
            echo "\" name=\"_userid\"></input>
                   <td>
                       <button type=\"submit\" value=\"validate\" formaction=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validateuser");
            echo "\">Valider</button>
                       <button type=\"submit\" value=\"downgrade\" formaction=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("downgradeuser");
            echo "\">Rétrograder</button>
                   </td>
                </tr>
            </form>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    
        </table>

        <table id=\"observationtable\">
            <h2 class=\"h2tabdashboard\">Observations</h2> 
            <tr>
              <th>Nom</th>
              <th>Photo</th>
              <th>Lat</th>
              <th>Long</th>
              <th>Type</th>
            </tr>
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 50, $this->getSourceContext()); })()), "content", array()), "observations", array()), "obsmade", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["obs"]) {
            echo "      
                 
            <tr>                
               <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "name", array()), "html", null, true);
            echo "</td>
               <td><img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("build/img/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "image", array()))), "html", null, true);
            echo "\" alt=\"photo observée\"></td>
               <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "lat", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "lng", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "type", array()), "html", null, true);
            echo "</td>
            <tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                ";
        // line 61
        echo "        </table>

        <table id=\"obsqueudtable\">
            <h2 class=\"h2tabdashboard\">Observations à valider</h2> 
            <tr>
              <th>Nom</th>
              <th>Photo</th>
              <th>Lat</th>
              <th>Long</th>
              <th>Type</th>
              <th>Action à faire</th>
            </tr>
                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 73, $this->getSourceContext()); })()), "content", array()), "observations", array()), "obsToValidate", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["obs"]) {
            // line 74
            echo "            
            <form method=\"post\">        
            <tr>                
               <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "name", array()), "html", null, true);
            echo "</td>
               <td><img src=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("build/img/" . twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "image", array()))), "html", null, true);
            echo "\" alt=\"photo observée\"></td>
               <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "lat", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "lng", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "type", array()), "html", null, true);
            echo "</td>
               <td> 
                   <button type=\"submit\" formaction=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validate_obs", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "id", array()))), "html", null, true);
            echo "\">Valider</button>
                   <button type=\"submit\" formaction=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deny_obs", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["obs"], "id", array()))), "html", null, true);
            echo "\">Supprimer</button>
               </td>
            </tr>
            </form>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                ";
        // line 90
        echo "        </table>

        <table id=\"articletable\">
            <h2 class=\"h2tabdashboard\">Articles du blog</h2> 
            <tr>
              <th>Titre</th>
              <th>Date</th>
              <th>Texte</th>
              <th>Action à faire</th>

            </tr>
                ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 101, $this->getSourceContext()); })()), "content", array()), "articles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 102
            echo "            <tr>
            <form method=\"post\">
                <td><a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_single", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "title", array()), "html", null, true);
            echo "</a></td>
               <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "dateArticle", array()), "d/m/Y"), "html", null, true);
            echo "</td>
               <td>";
            // line 106
            echo twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "content", array())), 0, 55);
            echo "</td>
               <input type=\"hidden\" value=\"";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()), "html", null, true);
            echo "\" name=\"_articleid\"></input>
               <td>
                   <button type=\"submit\" formaction=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modify_article", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\">Modifier</button>
                   <button type=\"submit\" formaction=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_article", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["article"], "id", array()))), "html", null, true);
            echo "\">Supprimer</button>
               </td>
            </tr>
            
            </form>   
            
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                <tr><button type=\"submit\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_article");
        echo "\">Ecrire un article</a></button></tr>    
        </table>
    </div>
";
        
        $__internal_ff9c9e11d9455eaa9e07a258212c4b21fc10eed07de75aadb9dd6cd9133a0fa9->leave($__internal_ff9c9e11d9455eaa9e07a258212c4b21fc10eed07de75aadb9dd6cd9133a0fa9_prof);

        
        $__internal_cb79fea2b5bf7ed6b8d49f829c7d99cec4c3cea5c0995af10234ceaf06bd3e8d->leave($__internal_cb79fea2b5bf7ed6b8d49f829c7d99cec4c3cea5c0995af10234ceaf06bd3e8d_prof);

    }

    public function getTemplateName()
    {
        return "Administration/AdminDashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 117,  283 => 110,  279 => 109,  274 => 107,  270 => 106,  266 => 105,  260 => 104,  256 => 102,  252 => 101,  239 => 90,  237 => 89,  226 => 84,  222 => 83,  217 => 81,  213 => 80,  209 => 79,  205 => 78,  201 => 77,  196 => 74,  192 => 73,  178 => 61,  176 => 60,  167 => 57,  163 => 56,  159 => 55,  155 => 54,  151 => 53,  143 => 50,  129 => 38,  118 => 34,  114 => 33,  109 => 31,  105 => 30,  101 => 29,  97 => 28,  93 => 27,  89 => 25,  85 => 24,  67 => 9,  63 => 8,  55 => 7,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"usercard\">
        <div class=\"card\" style=\"width: 18rem;\">
            
            <div class=\"card-body\">
               <a href=\"{{path('modifyuser')}}\"><img class=\"card-img-top\" src=\"{{asset('build/img/'~user.image)}}\" alt=\"{{user.firstname}}\" style=\"height: 170px;\"></a>
              <h5 class=\"card-title\">{{user.firstname}}</h5>
              <p class=\"card-text\">{{user.type}}</p>
            </div>
        </div>
        
    </div>
    <div>
        <table id=\"userstable\">
            <h2 class=\"h2tabdashboard\">Comptes naturalistes à valider</h2> 
            <tr>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Mail</th>
              <th>Carte Professionnelle</th>
              <th>Action à faire</th>
            </tr>
                {% for user in data.content.userqueued %}
            <form method=\"post\">
                <tr>
                   <td>{{user.lastname}}</td>
                   <td>{{user.firstname}}</td>
                   <td>{{user.email}}</td>
                   <td>{{user.procard}}</td>
                   <input type=\"hidden\" value=\"{{user.id}}\" name=\"_userid\"></input>
                   <td>
                       <button type=\"submit\" value=\"validate\" formaction=\"{{path('validateuser')}}\">Valider</button>
                       <button type=\"submit\" value=\"downgrade\" formaction=\"{{path('downgradeuser')}}\">Rétrograder</button>
                   </td>
                </tr>
            </form>
                {% endfor %}    
        </table>

        <table id=\"observationtable\">
            <h2 class=\"h2tabdashboard\">Observations</h2> 
            <tr>
              <th>Nom</th>
              <th>Photo</th>
              <th>Lat</th>
              <th>Long</th>
              <th>Type</th>
            </tr>
                {% for obs in data.content.observations.obsmade %}      
                 
            <tr>                
               <td>{{obs.name}}</td>
               <td><img src=\"{{asset('build/img/'~obs.image)}}\" alt=\"photo observée\"></td>
               <td>{{obs.lat}}</td>
               <td>{{obs.lng}}</td>
               <td>{{obs.type}}</td>
            <tr>
                {% endfor %}
                {# wire buttons to actions to validate or not the accounts #}
        </table>

        <table id=\"obsqueudtable\">
            <h2 class=\"h2tabdashboard\">Observations à valider</h2> 
            <tr>
              <th>Nom</th>
              <th>Photo</th>
              <th>Lat</th>
              <th>Long</th>
              <th>Type</th>
              <th>Action à faire</th>
            </tr>
                {% for obs in data.content.observations.obsToValidate %}
            
            <form method=\"post\">        
            <tr>                
               <td>{{obs.name}}</td>
               <td><img src=\"{{asset('build/img/'~obs.image)}}\" alt=\"photo observée\"></td>
               <td>{{obs.lat}}</td>
               <td>{{obs.lng}}</td>
               <td>{{obs.type}}</td>
               <td> 
                   <button type=\"submit\" formaction=\"{{path('validate_obs', {'id' : obs.id})}}\">Valider</button>
                   <button type=\"submit\" formaction=\"{{path('deny_obs', {'id' : obs.id})}}\">Supprimer</button>
               </td>
            </tr>
            </form>
                {% endfor %}
                {# wire buttons to actions to validate or not the accounts #}
        </table>

        <table id=\"articletable\">
            <h2 class=\"h2tabdashboard\">Articles du blog</h2> 
            <tr>
              <th>Titre</th>
              <th>Date</th>
              <th>Texte</th>
              <th>Action à faire</th>

            </tr>
                {% for article in data.content.articles %}
            <tr>
            <form method=\"post\">
                <td><a href=\"{{path('article_single', {'id': article.id})}}\">{{article.title}}</a></td>
               <td>{{article.dateArticle|date(\"d/m/Y\")}}</td>
               <td>{{article.content|striptags|slice(0, 55)|raw}}</td>
               <input type=\"hidden\" value=\"{{article.id}}\" name=\"_articleid\"></input>
               <td>
                   <button type=\"submit\" formaction=\"{{path('modify_article', {'id' : article.id})}}\">Modifier</button>
                   <button type=\"submit\" formaction=\"{{path('delete_article', {'id' : article.id})}}\">Supprimer</button>
               </td>
            </tr>
            
            </form>   
            
                {% endfor %}
                <tr><button type=\"submit\"><a href=\"{{path('new_article')}}\">Ecrire un article</a></button></tr>    
        </table>
    </div>
{% endblock %}
", "Administration/AdminDashboard.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Administration\\AdminDashboard.html.twig");
    }
}