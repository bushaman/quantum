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

/* themes/yg_business_plus/templates/views-view--testimonials--block.html.twig */
class __TwigTemplate_84d896c9b989863eace6094e57a9392dbd289f02c94c745667259cfa81b7bc83 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 7];
        $filters = ["escape" => 12, "striptags" => 17];
        $functions = ["file_url" => 12];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'striptags'],
                ['file_url']
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
        echo "<!-- Testimonial section -->
<section id=\"testimonial\">
  <div class=\"container\">
      <h2 class=\"text-center wow fadeInDown\">Testimonials</h2>
    <div class=\"row\"> 
      <div class=\"loop owl-carousel owl-theme\">
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["view"] ?? null), "result", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 8
            echo "        <div class=\"item\">
          <div class=\"row\">
            <div class=\"col-md-3\">
              <div class=\"testi-img wow fadeInLeft\">
                <img src=\"";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["view"] ?? null), "field", []), "uri", []), "value", [0 => $this->getAttribute($this->getAttribute(($context["view"] ?? null), "result", []), ($this->getAttribute($context["loop"], "index", []) - 1), [], "array")], "method"))]), "html", null, true);
            echo "\" alt=\"testimonial img\" class=\"img-responsive\">
              </div>
            </div>
            <div class=\"col-md-9 testimonial-description wow fadeInRight\">
            <blockquote>
              <p>";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["view"] ?? null), "field", []), "body", []), "value", [0 => $this->getAttribute($this->getAttribute(($context["view"] ?? null), "result", []), ($this->getAttribute($context["loop"], "index", []) - 1), [], "array")], "method"))), "html", null, true);
            echo "</p>
                <div class=\"testimonial-name\">
                  <h6>";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["view"] ?? null), "field", []), "title", []), "value", [0 => $this->getAttribute($this->getAttribute(($context["view"] ?? null), "result", []), ($this->getAttribute($context["loop"], "index", []) - 1), [], "array")], "method")), "html", null, true);
            echo "</h6>
                  <p>";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["view"] ?? null), "field", []), "field_designation", []), "value", [0 => $this->getAttribute($this->getAttribute(($context["view"] ?? null), "result", []), ($this->getAttribute($context["loop"], "index", []) - 1), [], "array")], "method"))), "html", null, true);
            echo ", ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["view"] ?? null), "field", []), "field_company_name", []), "value", [0 => $this->getAttribute($this->getAttribute(($context["view"] ?? null), "result", []), ($this->getAttribute($context["loop"], "index", []) - 1), [], "array")], "method"))), "html", null, true);
            echo "</p>
                </div> 
             </blockquote> 
            </div>
          </div>  
        </div>  
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "          
      </div>
    </div>
  </div>
</section>
<!-- End Testimonial section -->
";
    }

    public function getTemplateName()
    {
        return "themes/yg_business_plus/templates/views-view--testimonials--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 26,  103 => 20,  99 => 19,  94 => 17,  86 => 12,  80 => 8,  63 => 7,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_business_plus/templates/views-view--testimonials--block.html.twig", "/Library/WebServer/Documents/yg_business_plus/yg_business_plus/themes/yg_business_plus/templates/views-view--testimonials--block.html.twig");
    }
}
