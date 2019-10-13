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

/* themes/yg_business_plus/templates/views-view--slider--block.html.twig */
class __TwigTemplate_915da648ecce6218751d4c2aae2182a9541f99699de91acb2e7ae52ba95d8614 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 3, "if" => 4];
        $filters = ["escape" => 12, "striptags" => 36];
        $functions = ["file_url" => 13];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
        echo "<!-- BANNER SLIDER SECTION -->
<style type=\"text/css\">
";
        // line 3
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
            // line 4
            echo "  ";
            if ($this->getAttribute($context["loop"], "index", [])) {
                // line 5
                echo "    #banner-slider .carousel-item {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 750px;
    }
    .item-";
                // line 12
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->getAttribute($context["loop"], "index", []) - 1), "html", null, true);
                echo " {
      background-image: url('";
                // line 13
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["view"] ?? null), "field", []), "uri", []), "value", [0 => $this->getAttribute($this->getAttribute(($context["view"] ?? null), "result", []), ($this->getAttribute($context["loop"], "index", []) - 1), [], "array")], "method"))]), "html", null, true);
                echo "');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 750px;
    }
  ";
            }
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
        // line 22
        echo "</style>
<section id=\"banner-slider\">
  <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">      <!-- Indicators -->
      <ol class=\"carousel-indicators\">
        ";
        // line 26
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
            // line 27
            echo "          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->getAttribute($context["loop"], "index", []) - 1), "html", null, true);
            echo "\" class=\"";
            if (($this->getAttribute($context["loop"], "index", []) == 1)) {
                echo "active";
            }
            echo "\"></li>
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
        // line 29
        echo "      </ol>
      <!-- Wrapper for slides -->
      <div class=\"carousel-inner\">
        ";
        // line 32
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
            // line 33
            echo "          <div class=\"carousel-item item-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->getAttribute($context["loop"], "index", []) - 1), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["loop"], "index", []) == 1)) {
                echo "active";
            }
            echo "\">
            <div class=\"carousel-caption d-none d-md-block mx-auto wow fadeInDown\">
              <h1><span>";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["view"] ?? null), "field", []), "title", []), "value", [0 => $this->getAttribute($this->getAttribute(($context["view"] ?? null), "result", []), ($this->getAttribute($context["loop"], "index", []) - 1), [], "array")], "method")), "html", null, true);
            echo "</span></h1>
              <p>";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["view"] ?? null), "field", []), "body", []), "value", [0 => $this->getAttribute($this->getAttribute(($context["view"] ?? null), "result", []), ($this->getAttribute($context["loop"], "index", []) - 1), [], "array")], "method"))), "html", null, true);
            echo "</br></p> 
              <a href=\"";
            // line 37
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["view"] ?? null), "field", []), "field_button_link", []), "value", [0 => $this->getAttribute($this->getAttribute(($context["view"] ?? null), "result", []), ($this->getAttribute($context["loop"], "index", []) - 1), [], "array")], "method"))), "html", null, true);
            echo "\" class=\"btn btn-infos\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, strip_tags($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["view"] ?? null), "field", []), "field_button_text", []), "value", [0 => $this->getAttribute($this->getAttribute(($context["view"] ?? null), "result", []), ($this->getAttribute($context["loop"], "index", []) - 1), [], "array")], "method"))), "html", null, true);
            echo "</a>
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
        // line 41
        echo "          <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\"></span>
          </a>
          <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\"></span>
          </a>
      </div>
  </div>
</div>
</section>

";
    }

    public function getTemplateName()
    {
        return "themes/yg_business_plus/templates/views-view--slider--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 41,  199 => 37,  195 => 36,  191 => 35,  181 => 33,  164 => 32,  159 => 29,  138 => 27,  121 => 26,  115 => 22,  92 => 13,  88 => 12,  79 => 5,  76 => 4,  59 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/yg_business_plus/templates/views-view--slider--block.html.twig", "/Library/WebServer/Documents/yg_business_plus/yg_business_plus/themes/yg_business_plus/templates/views-view--slider--block.html.twig");
    }
}
