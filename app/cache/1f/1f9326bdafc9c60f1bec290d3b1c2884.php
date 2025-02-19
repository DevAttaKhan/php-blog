<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* layouts/main-layout.twig */
class __TwigTemplate_93438219dcc279b7247b7b48b9f6b4b6 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html>
  <head>
    ";
        // line 4
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 19
        yield "  </head>
  <body>
    <main id=\"main\">";
        // line 21
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        yield "</main>
    <div id=\"footer\">
      ";
        // line 23
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 25
        yield "    </div>
  </body>
</html>
";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "    <link rel=\"stylesheet\" href=\"style.css\" />
    <link
      href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\"
      rel=\"stylesheet\"
      integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\"
      crossorigin=\"anonymous\"
    />
    <script
      src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\"
      integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\"
      crossorigin=\"anonymous\"
    ></script>
    <title>";
        // line 17
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield " - My Webpage</title>
    ";
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " &copy; Copyright 2011 by
      <a href=\"https://example.com/\">you</a>. ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layouts/main-layout.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  119 => 23,  109 => 21,  93 => 17,  79 => 5,  72 => 4,  64 => 25,  62 => 23,  57 => 21,  53 => 19,  51 => 4,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    {% block head %}
    <link rel=\"stylesheet\" href=\"style.css\" />
    <link
      href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\"
      rel=\"stylesheet\"
      integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\"
      crossorigin=\"anonymous\"
    />
    <script
      src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\"
      integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\"
      crossorigin=\"anonymous\"
    ></script>
    <title>{% block title %}{% endblock %} - My Webpage</title>
    {% endblock %}
  </head>
  <body>
    <main id=\"main\">{% block content %}{% endblock %}</main>
    <div id=\"footer\">
      {% block footer %} &copy; Copyright 2011 by
      <a href=\"https://example.com/\">you</a>. {% endblock %}
    </div>
  </body>
</html>
", "layouts/main-layout.twig", "/Users/dev1/Documents/php-app/app/views/layouts/main-layout.twig");
    }
}
