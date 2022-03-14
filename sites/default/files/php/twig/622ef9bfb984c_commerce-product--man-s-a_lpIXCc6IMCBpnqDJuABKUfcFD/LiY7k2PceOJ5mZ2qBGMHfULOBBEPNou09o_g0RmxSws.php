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

/* themes/custom/templates/commerce-product--man-s-and-women-shoes--full.html.twig */
class __TwigTemplate_bd42ac4d09ade039a439204737d49ac110de1591c38ed2a955fd2c327475a019 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 5];
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
        echo "<section class=\"man-shoes-product-block\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6 man-shoes-product-img\">
        ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_shoesimage", [])), "html", null, true);
        echo "
        ";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_price", [])), "html", null, true);
        echo "
      </div>
      <div class=\"col-md-6 man-shoes-product-details\">
        ";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_brand", [])), "html", null, true);
        echo "
        ";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_color", [])), "html", null, true);
        echo "
        ";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_gender", [])), "html", null, true);
        echo "
        ";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_size", [])), "html", null, true);
        echo "
        ";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "body", [])), "html", null, true);
        echo "
        ";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variations", [])), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/templates/commerce-product--man-s-and-women-shoes--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 14,  87 => 13,  83 => 12,  79 => 11,  75 => 10,  71 => 9,  65 => 6,  61 => 5,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"man-shoes-product-block\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6 man-shoes-product-img\">
        {{ product.field_shoesimage }}
        {{ product.variation_price }}
      </div>
      <div class=\"col-md-6 man-shoes-product-details\">
        {{ product.field_brand }}
        {{ product.field_color }}
        {{ product.field_gender }}
        {{ product.field_size }}
        {{ product.body }}
        {{ product.variations }}
      </div>
    </div>
  </div>
</section>

", "themes/custom/templates/commerce-product--man-s-and-women-shoes--full.html.twig", "/opt/lampp/htdocs/localsite/themes/custom/templates/commerce-product--man-s-and-women-shoes--full.html.twig");
    }
}
