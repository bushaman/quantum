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

/* themes/yg_business_plus/templates/page--front.html.twig */
class __TwigTemplate_f07e36005277d609f512ceff5b311c4b59e8f1dc12bd5ac169c729a21def2935 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'slider' => [$this, 'block_slider'],
            'header' => [$this, 'block_header'],
            'highlighted' => [$this, 'block_highlighted'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'action_links' => [$this, 'block_action_links'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 60, "if" => 61, "block" => 80];
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
";
        // line 80
        $this->displayBlock('main', $context, $blocks);
        // line 137
        echo "<!-- Call to action section -->
  <section id=\"call-to-action\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-9 wow fadeInLeft\">
          <h3>";
        // line 142
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["buy_now_text"] ?? null)), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"col-md-3 wow fadeInRight\">
          <a href=\"";
        // line 145
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_link"] ?? null)), "html", null, true);
        echo "\" class=\"btn btn-infos\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_text"] ?? null)), "html", null, true);
        echo "</a>
        </div>
      </div>
    </div>
  </section>
<!-- End Call to action section -->

<!-- Footer Section -->
  ";
        // line 153
        $this->displayBlock('footer', $context, $blocks);
        // line 187
        echo "
";
    }

    // line 80
    public function block_main($context, array $blocks = [])
    {
        // line 81
        echo "<div role=\"main\" class=\"js-quickedit-main-content\">
  <div class=\"\">
    ";
        // line 83
        if ($this->getAttribute(($context["page"] ?? null), "slider", [])) {
            // line 84
            echo "      ";
            $this->displayBlock('slider', $context, $blocks);
            // line 87
            echo "    ";
        }
        // line 88
        echo "    ";
        // line 89
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 90
            echo "      ";
            $this->displayBlock('header', $context, $blocks);
            // line 93
            echo "    ";
        }
        // line 94
        echo "    ";
        // line 95
        echo "    ";
        // line 96
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 97
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("") : ("")), 1 => ((($this->getAttribute(        // line 98
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("") : ("")), 2 => ((($this->getAttribute(        // line 99
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 100
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("") : (""))];
        // line 103
        echo "    <section ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">   
      ";
        // line 105
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 106
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 109
            echo "      ";
        }
        // line 110
        echo "      ";
        // line 111
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 112
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 115
            echo "        ";
        }
        // line 116
        echo "      ";
        // line 117
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 118
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 121
            echo "        ";
        }
        // line 122
        echo "      ";
        // line 123
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 124
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 127
            echo "        ";
        }
        // line 128
        echo "      ";
        // line 129
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 133
        echo "      </section>
   </div>
   </div>
";
    }

    // line 84
    public function block_slider($context, array $blocks = [])
    {
        // line 85
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slider", [])), "html", null, true);
        echo "    
      ";
    }

    // line 90
    public function block_header($context, array $blocks = [])
    {
        // line 91
        echo "        <div class=\"col-sm-12\" role=\"heading\"></div>
      ";
    }

    // line 106
    public function block_highlighted($context, array $blocks = [])
    {
        // line 107
        echo "          <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
        ";
    }

    // line 112
    public function block_breadcrumb($context, array $blocks = [])
    {
        // line 113
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null)), "html", null, true);
        echo "
          ";
    }

    // line 118
    public function block_action_links($context, array $blocks = [])
    {
        // line 119
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
        echo "</ul>
          ";
    }

    // line 124
    public function block_help($context, array $blocks = [])
    {
        // line 125
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 129
    public function block_content($context, array $blocks = [])
    {
        // line 130
        echo "          <a id=\"main-content\"></a>
          ";
        // line 131
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 153
    public function block_footer($context, array $blocks = [])
    {
        // line 154
        echo "<!-- FOOTER SECTION-->
    <section id=\"footer\">
      <div class=\"container wow fadeInUp\">
        <div class=\"row\">
          <div class=\"col-md-4 col-sm-12 footer-columns\">
            ";
        // line 159
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
            <p>";
        // line 160
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null)), "html", null, true);
        echo "</p>
          </div>
          <div class=\"col-md-2 col-sm-12\">
            ";
        // line 163
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "  
          </div>
          <div class=\"col-md-2 col-sm-12\">
            ";
        // line 166
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_service", [])), "html", null, true);
        echo "
          </div>
          <div class=\"col-md-2 col-sm-12\">
            ";
        // line 169
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_blog", [])), "html", null, true);
        echo "  
          </div>
          <div class=\"col-md-2 col-sm-12 footer-columns\">
            <h6>Connect With Us</h6>
            <div class=\"social\">
                <a href=\"";
        // line 174
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null)), "html", null, true);
        echo "\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a>
                <a href=\"";
        // line 175
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null)), "html", null, true);
        echo "\" class=\"twitter\"><i class=\"fa fa-twitter\"></i></a>                
                <a href=\"";
        // line 176
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
        // line 184
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["company_url"] ?? null)), "html", null, true);
        echo "\" target=\"_blank\"> ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["company_name"] ?? null)), "html", null, true);
        echo "</a>, A Division of <a href=\"https://www.youngglobes.com/\" target=\"_blank\">Young Globes</a></p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "themes/yg_business_plus/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 184,  353 => 176,  349 => 175,  345 => 174,  337 => 169,  331 => 166,  325 => 163,  319 => 160,  315 => 159,  308 => 154,  305 => 153,  299 => 131,  296 => 130,  293 => 129,  286 => 125,  283 => 124,  276 => 119,  273 => 118,  266 => 113,  263 => 112,  256 => 107,  253 => 106,  248 => 91,  245 => 90,  238 => 85,  235 => 84,  228 => 133,  225 => 129,  223 => 128,  220 => 127,  217 => 124,  214 => 123,  212 => 122,  209 => 121,  206 => 118,  203 => 117,  201 => 116,  198 => 115,  195 => 112,  192 => 111,  190 => 110,  187 => 109,  184 => 106,  181 => 105,  176 => 103,  174 => 100,  173 => 99,  172 => 98,  171 => 97,  170 => 96,  168 => 95,  166 => 94,  163 => 93,  160 => 90,  157 => 89,  155 => 88,  152 => 87,  149 => 84,  147 => 83,  143 => 81,  140 => 80,  135 => 187,  133 => 153,  120 => 145,  114 => 142,  107 => 137,  105 => 80,  102 => 78,  98 => 77,  89 => 72,  80 => 66,  75 => 63,  72 => 62,  69 => 61,  67 => 60,  64 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_business_plus/templates/page--front.html.twig", "/Library/WebServer/Documents/yg_business_plus/yg_business_plus/themes/yg_business_plus/templates/page--front.html.twig");
    }
}
