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

/* auth/register.twig */
class __TwigTemplate_c8bb37a72ebd0c476c71c66b1f65cc82 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layouts/auth-layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layouts/auth-layout.twig", "auth/register.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "
<div class=\"container mt-5\">
  <div class=\"row justify-content-center\">
    <div class=\"col-md-6\">
      <div class=\"card\">
        <div class=\"card-header text-center\">
          <h4>Register</h4>
        </div>
        <div class=\"card-body\">
          <form class=\"needs-validation\" action=\"/register\" method=\"POST\">
            <!-- Full Name -->

            ";
        // line 14
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "attempt", [], "any", false, false, false, 14)) {
            // line 15
            yield "            <div class=\"alert alert-danger\" role=\"alert\">
              ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "attempt", [], "any", false, false, false, 16), "html", null, true);
            yield "
            </div>
            ";
        }
        // line 19
        yield "
            <div class=\"mb-3\">
              <label for=\"name\" class=\"form-label\">Full Name</label>
              <input
                type=\"text\"
                class=\"form-control ";
        // line 24
        yield (((($_v0 = CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 24)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null)) ? ("is-invalid") : (""));
        yield "\"
                id=\"name\"
                name=\"name\"
                value=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["old"] ?? null), "name", [], "any", false, false, false, 27), "html", null, true);
        yield "\"
              />
              <div class=\"invalid-feedback\">
                ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 30)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[0] ?? null) : null), "html", null, true);
        yield "
              </div>
            </div>

            <!-- Email Address -->
            <div class=\"mb-3\">
              <label for=\"email\" class=\"form-label\">Email Address</label>
              <input
                type=\"email\"
                class=\"form-control ";
        // line 39
        yield (((($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 39)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[0] ?? null) : null)) ? ("is-invalid") : (""));
        yield "\"
                id=\"email\"
                name=\"email\"
                value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["old"] ?? null), "email", [], "any", false, false, false, 42), "html", null, true);
        yield "\"
              />

              <div class=\"invalid-feedback\">
                ";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 46)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[0] ?? null) : null), "html", null, true);
        yield "
              </div>
            </div>

            <!-- Password -->
            <div class=\"mb-3\">
              <label for=\"password\" class=\"form-label\">Password</label>
              <input
                type=\"password\"
                class=\"form-control ";
        // line 55
        yield (((($_v4 = CoreExtension::getAttribute($this->env, $this->source,         // line 56
($context["errors"] ?? null), "password", [], "any", false, false, false, 56)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[0] ?? null) : null)) ? ("is-invalid") : (""));
        // line 57
        yield "\"
                id=\"password\"
                name=\"password\"
              />

              <div class=\"invalid-feedback\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 62)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[0] ?? null) : null), "html", null, true);
        yield "</div>
            </div>

            <!-- Confirm Password -->
            <div class=\"mb-3\">
              <label for=\"confirmPassword\" class=\"form-label\"
                >Confirm Password</label
              >
              <input
                type=\"password\"
                class=\"form-control ";
        // line 72
        yield (((($_v6 = CoreExtension::getAttribute($this->env, $this->source,         // line 73
($context["errors"] ?? null), "confirmPassword", [], "any", false, false, false, 73)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[0] ?? null) : null)) ? ("is-invalid") : (""));
        // line 74
        yield "\"
                id=\"confirmPassword\"
                name=\"confirmPassword\"
              />

              <div class=\"invalid-feedback\">
                ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v7 = CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "confirmPassword", [], "any", false, false, false, 80)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[0] ?? null) : null), "html", null, true);
        yield "
              </div>
            </div>

            <!-- Submit Button -->
            <div class=\"mb-3 text-center\">
              <button type=\"submit\" class=\"btn btn-primary\">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "auth/register.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  172 => 80,  164 => 74,  162 => 73,  161 => 72,  148 => 62,  141 => 57,  139 => 56,  138 => 55,  126 => 46,  119 => 42,  113 => 39,  101 => 30,  95 => 27,  89 => 24,  82 => 19,  76 => 16,  73 => 15,  71 => 14,  57 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"layouts/auth-layout.twig\" %} {% block content %}

<div class=\"container mt-5\">
  <div class=\"row justify-content-center\">
    <div class=\"col-md-6\">
      <div class=\"card\">
        <div class=\"card-header text-center\">
          <h4>Register</h4>
        </div>
        <div class=\"card-body\">
          <form class=\"needs-validation\" action=\"/register\" method=\"POST\">
            <!-- Full Name -->

            {% if errors.attempt %}
            <div class=\"alert alert-danger\" role=\"alert\">
              {{ errors.attempt }}
            </div>
            {% endif %}

            <div class=\"mb-3\">
              <label for=\"name\" class=\"form-label\">Full Name</label>
              <input
                type=\"text\"
                class=\"form-control {{ errors.name[0] ? 'is-invalid' : '' }}\"
                id=\"name\"
                name=\"name\"
                value=\"{{ old.name }}\"
              />
              <div class=\"invalid-feedback\">
                {{ errors.name[0] }}
              </div>
            </div>

            <!-- Email Address -->
            <div class=\"mb-3\">
              <label for=\"email\" class=\"form-label\">Email Address</label>
              <input
                type=\"email\"
                class=\"form-control {{ errors.email[0] ? 'is-invalid' : '' }}\"
                id=\"email\"
                name=\"email\"
                value=\"{{ old.email }}\"
              />

              <div class=\"invalid-feedback\">
                {{ errors.email[0] }}
              </div>
            </div>

            <!-- Password -->
            <div class=\"mb-3\">
              <label for=\"password\" class=\"form-label\">Password</label>
              <input
                type=\"password\"
                class=\"form-control {{
                  errors.password[0] ? 'is-invalid' : ''
                }}\"
                id=\"password\"
                name=\"password\"
              />

              <div class=\"invalid-feedback\">{{ errors.password[0] }}</div>
            </div>

            <!-- Confirm Password -->
            <div class=\"mb-3\">
              <label for=\"confirmPassword\" class=\"form-label\"
                >Confirm Password</label
              >
              <input
                type=\"password\"
                class=\"form-control {{
                  errors.confirmPassword[0] ? 'is-invalid' : ''
                }}\"
                id=\"confirmPassword\"
                name=\"confirmPassword\"
              />

              <div class=\"invalid-feedback\">
                {{ errors.confirmPassword[0] }}
              </div>
            </div>

            <!-- Submit Button -->
            <div class=\"mb-3 text-center\">
              <button type=\"submit\" class=\"btn btn-primary\">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

{% endblock %}
", "auth/register.twig", "/Users/dev1/Documents/php-app/app/views/auth/register.twig");
    }
}
