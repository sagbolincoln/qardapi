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

/* qard/dashboard.html.twig */
class __TwigTemplate_0cc155322b30f7bacf624e5edab81b1f extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "qard/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "qard/dashboard.html.twig"));

        // line 1
        yield "<h1>📊 Dashboard</h1>

<p><strong>Nombre total d'entreprises :</strong> ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalCompanies"]) || array_key_exists("totalCompanies", $context) ? $context["totalCompanies"] : (function () { throw new RuntimeError('Variable "totalCompanies" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "</p>

<h2>Répartition par statut juridique</h2>
<ul>
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusCounts"]) || array_key_exists("statusCounts", $context) ? $context["statusCounts"] : (function () { throw new RuntimeError('Variable "statusCounts" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["status"] => $context["count"]) {
            // line 8
            yield "    <li>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
            yield " : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield "</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['status'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "</ul>

<h2>Répartition du chiffre d'affaires</h2>
<canvas id=\"caChart\"></canvas>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
  const ctx = document.getElementById('caChart').getContext('2d');
  const caChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ";
        // line 21
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["turnovers"]) || array_key_exists("turnovers", $context) ? $context["turnovers"] : (function () { throw new RuntimeError('Variable "turnovers" does not exist.', 21, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21); }));
        yield ",
      datasets: [{
        label: \"Chiffre d'affaires\",
        data: ";
        // line 24
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["turnovers"]) || array_key_exists("turnovers", $context) ? $context["turnovers"] : (function () { throw new RuntimeError('Variable "turnovers" does not exist.', 24, $this->source); })()), function ($__t__) use ($context, $macros) { $context["t"] = $__t__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["t"]) || array_key_exists("t", $context) ? $context["t"] : (function () { throw new RuntimeError('Variable "t" does not exist.', 24, $this->source); })()), "turnover", [], "any", false, false, false, 24); }));
        yield ",
        backgroundColor: 'rgba(54, 162, 235, 0.7)'
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "qard/dashboard.html.twig";
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
        return array (  93 => 24,  87 => 21,  74 => 10,  63 => 8,  59 => 7,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h1>📊 Dashboard</h1>

<p><strong>Nombre total d'entreprises :</strong> {{ totalCompanies }}</p>

<h2>Répartition par statut juridique</h2>
<ul>
  {% for status, count in statusCounts %}
    <li>{{ status }} : {{ count }}</li>
  {% endfor %}
</ul>

<h2>Répartition du chiffre d'affaires</h2>
<canvas id=\"caChart\"></canvas>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
  const ctx = document.getElementById('caChart').getContext('2d');
  const caChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: {{ turnovers|map(t => t.name)|json_encode|raw }},
      datasets: [{
        label: \"Chiffre d'affaires\",
        data: {{ turnovers|map(t => t.turnover)|json_encode|raw }},
        backgroundColor: 'rgba(54, 162, 235, 0.7)'
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
", "qard/dashboard.html.twig", "/var/www/templates/qard/dashboard.html.twig");
    }
}
