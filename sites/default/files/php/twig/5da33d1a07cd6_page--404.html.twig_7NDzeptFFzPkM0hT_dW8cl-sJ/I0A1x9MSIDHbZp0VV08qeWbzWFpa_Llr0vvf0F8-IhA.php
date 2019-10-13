<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/yg_business_plus/templates/page--404.html.twig */
class __TwigTemplate_e760fa148c86ff944b83a20bbbbe59eb1c143bcdc7e4e284e40ecc7f8b4f9982 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 60, "if" => 61, "block" => 104];
        $filters = ["escape" => 66];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 59
        echo "<!-- Header --> 
";
        // line 60
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : (""));
        // line 61
        echo "  ";
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "primary_menu", []))) {
            // line 62
            echo "    ";
            if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
                // line 63
                echo "    <header id=\"header\">
     <nav class=\"navbar navbar-expand-lg navbar-light navbar-fixed-top\" id=\"mainNav\">
      <div class=\"container\">
        ";
                // line 66
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
                echo "
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\"  aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <i class=\"fa fa-bars\"></i>
        </button>
        
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
           ";
                // line 72
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
                echo "
        </div>
      </div>  
      </nav>
    </header>
    ";
            }
            // line 77
            echo "  
  ";
        }
        // line 78
        echo "  

<!-- ABOUT BANNER SECTION -->
    <section class=\"top-banner text-center\">
        <div class=\" col-md-7 mx-auto top-banner-caption\">
          <h2>";
        // line 83
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "title", [])), "html", null, true);
        echo "</h2>
        </div>  
    </section>
<!-- END ABOUT BANNER SECTION -->
";
        // line 88
        echo "<section id=\"not-found-section\" class=\"text-center\">
  <div class=\"container\">               
    <div class=\"row\"> 
      <div class=\"not-found-body\" >
        <div class=\"not-title\" >
          <h1>404</h1>
          <h2>Page Not Found</h2> 
        </div>  
          <h2>Sorry. We can't find a page.</h2>
          <p>The Page you are looking for might have a removed, had its name changed, or its temporarily unavailable.</p>      
          <a href=\"";
        // line 98
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
        echo "\" class=\"btn btn-custom\"> Go Home </a>      
      </div>
    </div>          
  </div>    
</section>
 
  ";
        // line 104
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = [])
    {
        // line 105
        echo "<!-- FOOTER SECTION-->
    <section id=\"footer\">
      <div class=\"container wow fadeInUp\">
        <div class=\"row\">
          <div class=\"col-md-4 col-sm-12 footer-columns\">
            ";
        // line 110
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
            <p>";
        // line 111
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null)), "html", null, true);
        echo "</p>
          </div>
          <div class=\"col-md-2 col-sm-12\">
            ";
        // line 114
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "  
          </div>
          <div class=\"col-md-2 col-sm-12\">
            ";
        // line 117
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_service", [])), "html", null, true);
        echo "
          </div>
          <div class=\"col-md-2 col-sm-12\">
            ";
        // line 120
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_blog", [])), "html", null, true);
        echo "  
          </div>
          <div class=\"col-md-2 col-sm-12 footer-columns\">
            <h6>Connect With Us</h6>
            <div class=\"social\">
                <a href=\"";
        // line 125
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null)), "html", null, true);
        echo "\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a>
                <a href=\"";
        // line 126
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null)), "html", null, true);
        echo "\" class=\"twitter\"><i class=\"fa fa-twitter\"></i></a>                
                <a href=\"";
        // line 127
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["google"] ?? null) - ($context["plus"] ?? null)), "html", null, true);
        echo "\" class=\"google-plus\"><i class=\"fa fa-google-plus\"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class=\"copyright text-center\">
          <p>&copy;2018. <a href=\"#\">YG Business Plus</a>. All Rights Reserved.<br></p>
          <p>Theme By <a href=\"";
        // line 135
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["company_url"] ?? null)), "html", null, true);
        echo "\" target=\"_blank\"> ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["company_name"] ?? null)), "html", null, true);
        echo "</a>, A Division of <a href=\"https://www.youngglobes.com/\" target=\"_blank\">Young Globes</a></p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "themes/yg_business_plus/templates/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 135,  180 => 127,  176 => 126,  172 => 125,  164 => 120,  158 => 117,  152 => 114,  146 => 111,  142 => 110,  135 => 105,  129 => 104,  120 => 98,  108 => 88,  101 => 83,  94 => 78,  90 => 77,  81 => 72,  72 => 66,  67 => 63,  64 => 62,  61 => 61,  59 => 60,  56 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_business_plus/templates/page--404.html.twig", "/Library/WebServer/Documents/yg_business_plus/yg_business_plus/themes/yg_business_plus/templates/page--404.html.twig");
    }
}
