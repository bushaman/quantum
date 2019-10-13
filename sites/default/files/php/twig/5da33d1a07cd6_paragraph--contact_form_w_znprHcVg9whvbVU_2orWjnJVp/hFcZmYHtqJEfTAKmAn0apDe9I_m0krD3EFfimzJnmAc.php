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

/* themes/yg_business_plus/templates/paragraph/paragraph--contact_form_with_map.html.twig */
class __TwigTemplate_8a3e2c007d948cda2c632eaabb8111c66f049a17dde78cddad7bb1813920238d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 7];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        // line 1
        echo " <section id=\"get-in-touch\">
  <div class=\"container\">
    <div class=\"contact-details\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"map wow fadeInUp\" data-wow-delay=\"0.9s\">
            <iframe src=\"";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_map_iframe", []), 0, [])), "html", null, true);
        echo "\" width=\"600\" height=\"580\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
          </div>
        </div>  
        <div class=\"col-md-6 col-sm-12 contact-info wow fadeInLeft\">
          <div class=\"info-list\">
            <i class=\"fa fa-map-marker\"></i>
            <p>";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_address", []), 0, [])), "html", null, true);
        echo "</p>
          </div>
          <div class=\"info-list\">
            <i class=\"fa fa-phone\"></i>
            <p>";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_phone_number", []), 0, [])), "html", null, true);
        echo "</p>
          </div>
          <div class=\"info-list\">
            <i class=\"fa fa-envelope\"></i>
            <p>";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_e_mail", []), 0, [])), "html", null, true);
        echo "</p>
          </div>
          <div class=\"info-list\">
            <i class=\"fa fa-clock-o\"></i>
            <p>";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_office_time", []), 0, [])), "html", null, true);
        echo "</p>
          </div>
        </div>
        <div class=\"col-md-6 col-sm-12 contact-form wow fadeInRight\">
          <form>
            ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_contact_form", []), 0, [])), "html", null, true);
        echo " 
          </form>    
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Map section -->";
    }

    public function getTemplateName()
    {
        return "themes/yg_business_plus/templates/paragraph/paragraph--contact_form_with_map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  93 => 25,  86 => 21,  79 => 17,  72 => 13,  63 => 7,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_business_plus/templates/paragraph/paragraph--contact_form_with_map.html.twig", "/Library/WebServer/Documents/yg_business_plus/yg_business_plus/themes/yg_business_plus/templates/paragraph/paragraph--contact_form_with_map.html.twig");
    }
}
