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

/* themes/yg_business_plus/templates/page.html.twig */
class __TwigTemplate_1ff91825681772bb47255b7745cee5fe21835904dee47d4147c4744278f4cf01 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 60, "if" => 61, "block" => 88];
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
        $this->displayBlock('main', $context, $blocks);
        // line 141
        echo " 
  ";
        // line 142
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 88
    public function block_main($context, array $blocks = [])
    {
        // line 89
        echo "<div role=\"main\" class=\"js-quickedit-main-content\">
  <div class=\"\">
    
    ";
        // line 93
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 94
            echo "      ";
            $this->displayBlock('header', $context, $blocks);
            // line 97
            echo "    ";
        }
        // line 98
        echo "    ";
        // line 99
        echo "    ";
        // line 100
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 101
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("") : ("")), 1 => ((($this->getAttribute(        // line 102
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("") : ("")), 2 => ((($this->getAttribute(        // line 103
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 104
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("") : (""))];
        // line 107
        echo "    <section ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">   
      ";
        // line 109
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 110
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 113
            echo "      ";
        }
        // line 114
        echo "      ";
        // line 115
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 116
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 119
            echo "        ";
        }
        // line 120
        echo "      ";
        // line 121
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 122
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 125
            echo "        ";
        }
        // line 126
        echo "      ";
        // line 127
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 128
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 131
            echo "        ";
        }
        // line 132
        echo "      ";
        // line 133
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 137
        echo "      </section>
   </div>
   </div>
";
    }

    // line 94
    public function block_header($context, array $blocks = [])
    {
        // line 95
        echo "        <div class=\"col-sm-12\" role=\"heading\"></div>
      ";
    }

    // line 110
    public function block_highlighted($context, array $blocks = [])
    {
        // line 111
        echo "          <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
        ";
    }

    // line 116
    public function block_breadcrumb($context, array $blocks = [])
    {
        // line 117
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null)), "html", null, true);
        echo "
          ";
    }

    // line 122
    public function block_action_links($context, array $blocks = [])
    {
        // line 123
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
        echo "</ul>
          ";
    }

    // line 128
    public function block_help($context, array $blocks = [])
    {
        // line 129
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 133
    public function block_content($context, array $blocks = [])
    {
        // line 134
        echo "          <a id=\"main-content\"></a>
          ";
        // line 135
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 142
    public function block_footer($context, array $blocks = [])
    {
        // line 143
        echo "<!-- FOOTER SECTION-->
    <section id=\"footer\">
      <div class=\"container wow fadeInUp\">
        <div class=\"row\">
          <div class=\"col-md-4 col-sm-12 footer-columns\">
            ";
        // line 148
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
            <p>";
        // line 149
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null)), "html", null, true);
        echo "</p>
          </div>
          <div class=\"col-md-2 col-sm-12\">
            ";
        // line 152
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "  
          </div>
          <div class=\"col-md-2 col-sm-12\">
            ";
        // line 155
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_service", [])), "html", null, true);
        echo "
          </div>
          <div class=\"col-md-2 col-sm-12\">
            ";
        // line 158
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_blog", [])), "html", null, true);
        echo "  
          </div>
          <div class=\"col-md-2 col-sm-12 footer-columns\">
            <h6>Connect With Us</h6>
            <div class=\"social\">
                <a href=\"";
        // line 163
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null)), "html", null, true);
        echo "\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a>
                <a href=\"";
        // line 164
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null)), "html", null, true);
        echo "\" class=\"twitter\"><i class=\"fa fa-twitter\"></i></a>                
                <a href=\"";
        // line 165
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
        // line 173
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["company_url"] ?? null)), "html", null, true);
        echo "\" target=\"_blank\"> ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["company_name"] ?? null)), "html", null, true);
        echo "</a>, A Division of <a href=\"https://www.youngglobes.com/\" target=\"_blank\">Young Globes</a></p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "themes/yg_business_plus/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 173,  318 => 165,  314 => 164,  310 => 163,  302 => 158,  296 => 155,  290 => 152,  284 => 149,  280 => 148,  273 => 143,  270 => 142,  264 => 135,  261 => 134,  258 => 133,  251 => 129,  248 => 128,  241 => 123,  238 => 122,  231 => 117,  228 => 116,  221 => 111,  218 => 110,  213 => 95,  210 => 94,  203 => 137,  200 => 133,  198 => 132,  195 => 131,  192 => 128,  189 => 127,  187 => 126,  184 => 125,  181 => 122,  178 => 121,  176 => 120,  173 => 119,  170 => 116,  167 => 115,  165 => 114,  162 => 113,  159 => 110,  156 => 109,  151 => 107,  149 => 104,  148 => 103,  147 => 102,  146 => 101,  145 => 100,  143 => 99,  141 => 98,  138 => 97,  135 => 94,  132 => 93,  127 => 89,  124 => 88,  120 => 142,  117 => 141,  115 => 88,  108 => 83,  101 => 78,  97 => 77,  88 => 72,  79 => 66,  74 => 63,  71 => 62,  68 => 61,  66 => 60,  63 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_business_plus/templates/page.html.twig", "/Library/WebServer/Documents/yg_business_plus/yg_business_plus/themes/yg_business_plus/templates/page.html.twig");
    }
}
