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

/* qard/detail.html.twig */
class __TwigTemplate_c5faaafa03e147674d699d5b411b60c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "qard/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "qard/detail.html.twig"));

        // line 1
        yield "<h1>Détail de l'entreprise</h1>

<h2>Profil complet</h2>
<ul>
  <li><strong>Nom :</strong> ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        yield "</li>
  <li><strong>Numéro d'enregistrement :</strong> ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 6, $this->source); })()), "registration_number", [], "any", false, false, false, 6), "html", null, true);
        yield "</li>
  <li><strong>Date INSEE :</strong> ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 7, $this->source); })()), "insee_registration_date", [], "any", false, false, false, 7), "html", null, true);
        yield "</li>
  <li><strong>Forme juridique :</strong> ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 8, $this->source); })()), "legal", [], "any", false, false, false, 8), "form", [], "any", false, false, false, 8), "html", null, true);
        yield "</li>

  <li><strong>Noms commerciaux :</strong>
    ";
        // line 11
        if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 11, $this->source); })()), "commercial_names", [], "any", false, false, false, 11))) {
            // line 12
            yield "      ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 12, $this->source); })()), "commercial_names", [], "any", false, false, false, 12), ", "), "html", null, true);
            yield "
    ";
        } else {
            // line 14
            yield "      ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 14, $this->source); })()), "commercial_names", [], "any", false, false, false, 14), "html", null, true);
            yield "
    ";
        }
        // line 16
        yield "  </li>

  <li><strong>Noms business :</strong>
    ";
        // line 19
        if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 19, $this->source); })()), "business_names", [], "any", false, false, false, 19))) {
            // line 20
            yield "      ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 20, $this->source); })()), "business_names", [], "any", false, false, false, 20), ", "), "html", null, true);
            yield "
    ";
        } else {
            // line 22
            yield "      ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 22, $this->source); })()), "business_names", [], "any", false, false, false, 22), "html", null, true);
            yield "
    ";
        }
        // line 24
        yield "  </li>

  <li><strong>Catégorie :</strong> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 26, $this->source); })()), "business_category", [], "any", false, false, false, 26), "html", null, true);
        yield "</li>
  <li><strong>Effectif :</strong> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 27, $this->source); })()), "staff", [], "any", false, false, false, 27), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 27, $this->source); })()), "staff_year", [], "any", false, false, false, 27), "html", null, true);
        yield ")</li>
  <li><strong>Capital :</strong> ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 28, $this->source); })()), "capital", [], "any", false, false, false, 28), "amount", [], "any", false, false, false, 28), "value", [], "any", false, false, false, 28), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 28, $this->source); })()), "capital", [], "any", false, false, false, 28), "amount", [], "any", false, false, false, 28), "currency", [], "any", false, false, false, 28), "html", null, true);
        yield "</li>

  <li><strong>Activité :</strong>
    Code : ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 31, $this->source); })()), "activity", [], "any", false, false, false, 31), "ape_code", [], "any", false, false, false, 31), "html", null, true);
        yield "<br>
    Libellé : ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 32, $this->source); })()), "activity", [], "any", false, false, false, 32), "ape_name", [], "any", false, false, false, 32), "html", null, true);
        yield "<br>
    Description : ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 33, $this->source); })()), "activity", [], "any", false, false, false, 33), "description", [], "any", false, false, false, 33), "html", null, true);
        yield "
  </li>

  <li><strong>Adresse :</strong>
    ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 37, $this->source); })()), "headquarter", [], "any", false, false, false, 37), "address", [], "any", false, false, false, 37), "address_line1", [], "any", false, false, false, 37), "html", null, true);
        yield ",
    ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 38, $this->source); })()), "headquarter", [], "any", false, false, false, 38), "address", [], "any", false, false, false, 38), "city", [], "any", false, false, false, 38), "html", null, true);
        yield ",
    ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 39, $this->source); })()), "headquarter", [], "any", false, false, false, 39), "address", [], "any", false, false, false, 39), "postal_code", [], "any", false, false, false, 39), "html", null, true);
        yield ",
    ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 40, $this->source); })()), "headquarter", [], "any", false, false, false, 40), "address", [], "any", false, false, false, 40), "country", [], "any", false, false, false, 40), "html", null, true);
        yield "
  </li>
</ul>

<h2>Dirigeants</h2>

";
        // line 46
        if ((is_iterable((isset($context["officers"]) || array_key_exists("officers", $context) ? $context["officers"] : (function () { throw new RuntimeError('Variable "officers" does not exist.', 46, $this->source); })())) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["officers"]) || array_key_exists("officers", $context) ? $context["officers"] : (function () { throw new RuntimeError('Variable "officers" does not exist.', 46, $this->source); })())) > 0))) {
            // line 47
            yield "  <ul>
    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["officers"]) || array_key_exists("officers", $context) ? $context["officers"] : (function () { throw new RuntimeError('Variable "officers" does not exist.', 48, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["officer"]) {
                // line 49
                yield "      <li>
        ";
                // line 51
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["officer"], "first_name", [], "any", false, false, false, 51), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["officer"], "last_name", [], "any", false, false, false, 51), "html", null, true);
                yield "

        ";
                // line 54
                yield "        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["officer"], "roles", [], "any", true, true, false, 54) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["officer"], "roles", [], "any", false, false, false, 54))) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["officer"], "roles", [], "any", false, false, false, 54)) > 0))) {
                    // line 55
                    yield "          —
          ";
                    // line 56
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["officer"], "roles", [], "any", false, false, false, 56));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                        // line 57
                        yield "            ";
                        // line 58
                        yield "            ";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["role"], "name", [], "any", true, true, false, 58)) {
                            // line 59
                            yield "              ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["role"], "name", [], "any", false, false, false, 59), "html", null, true);
                            yield "
            ";
                        } else {
                            // line 61
                            yield "              ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                            yield "
            ";
                        }
                        // line 63
                        yield "            ";
                        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield ", ";
                        }
                        // line 64
                        yield "          ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    yield "        ";
                }
                // line 66
                yield "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['officer'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            yield "  </ul>
";
        } else {
            // line 70
            yield "  <p>Aucun dirigeant trouvé.</p>
";
        }
        // line 72
        yield "

<h2>Derniers bilans financiers</h2>

";
        // line 76
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["financials"]) || array_key_exists("financials", $context) ? $context["financials"] : (function () { throw new RuntimeError('Variable "financials" does not exist.', 76, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 77
            yield "  <ul>
    ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["financials"]) || array_key_exists("financials", $context) ? $context["financials"] : (function () { throw new RuntimeError('Variable "financials" does not exist.', 78, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["bilan"]) {
                // line 79
                yield "      <li>
        Année de clôture : ";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "closing_year", [], "any", false, false, false, 80), "html", null, true);
                yield " — 
        Date de clôture : ";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "closing_date", [], "any", false, false, false, 81), "html", null, true);
                yield " — 
        Soumis le : ";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "submitted_date", [], "any", false, false, false, 82), "html", null, true);
                yield " — 
        Durée : ";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["bilan"], "duration", [], "any", false, false, false, 83), "html", null, true);
                yield "
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['bilan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            yield "  </ul>
";
        } else {
            // line 88
            yield "  <p>Aucun bilan disponible.</p>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "qard/detail.html.twig";
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
        return array (  303 => 88,  299 => 86,  290 => 83,  286 => 82,  282 => 81,  278 => 80,  275 => 79,  271 => 78,  268 => 77,  266 => 76,  260 => 72,  256 => 70,  252 => 68,  245 => 66,  242 => 65,  228 => 64,  223 => 63,  217 => 61,  211 => 59,  208 => 58,  206 => 57,  189 => 56,  186 => 55,  183 => 54,  175 => 51,  172 => 49,  168 => 48,  165 => 47,  163 => 46,  154 => 40,  150 => 39,  146 => 38,  142 => 37,  135 => 33,  131 => 32,  127 => 31,  119 => 28,  113 => 27,  109 => 26,  105 => 24,  99 => 22,  93 => 20,  91 => 19,  86 => 16,  80 => 14,  74 => 12,  72 => 11,  66 => 8,  62 => 7,  58 => 6,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h1>Détail de l'entreprise</h1>

<h2>Profil complet</h2>
<ul>
  <li><strong>Nom :</strong> {{ profile.name }}</li>
  <li><strong>Numéro d'enregistrement :</strong> {{ profile.registration_number }}</li>
  <li><strong>Date INSEE :</strong> {{ profile.insee_registration_date }}</li>
  <li><strong>Forme juridique :</strong> {{ profile.legal.form }}</li>

  <li><strong>Noms commerciaux :</strong>
    {% if profile.commercial_names is iterable %}
      {{ profile.commercial_names | join(', ') }}
    {% else %}
      {{ profile.commercial_names }}
    {% endif %}
  </li>

  <li><strong>Noms business :</strong>
    {% if profile.business_names is iterable %}
      {{ profile.business_names | join(', ') }}
    {% else %}
      {{ profile.business_names }}
    {% endif %}
  </li>

  <li><strong>Catégorie :</strong> {{ profile.business_category }}</li>
  <li><strong>Effectif :</strong> {{ profile.staff }} ({{ profile.staff_year }})</li>
  <li><strong>Capital :</strong> {{ profile.capital.amount.value }} {{ profile.capital.amount.currency }}</li>

  <li><strong>Activité :</strong>
    Code : {{ profile.activity.ape_code }}<br>
    Libellé : {{ profile.activity.ape_name }}<br>
    Description : {{ profile.activity.description }}
  </li>

  <li><strong>Adresse :</strong>
    {{ profile.headquarter.address.address_line1 }},
    {{ profile.headquarter.address.city }},
    {{ profile.headquarter.address.postal_code }},
    {{ profile.headquarter.address.country }}
  </li>
</ul>

<h2>Dirigeants</h2>

{% if officers is iterable and officers|length > 0 %}
  <ul>
    {% for officer in officers %}
      <li>
        {# 👉 Nom complet #}
        {{ officer.first_name }} {{ officer.last_name }}

        {# 👉 Rôles, s'il y en a #}
        {% if officer.roles is defined and officer.roles is iterable and officer.roles|length > 0 %}
          —
          {% for role in officer.roles %}
            {# Certains objets role peuvent être vides, donc on vérifie #}
            {% if role.name is defined %}
              {{ role.name }}
            {% else %}
              {{ role }}
            {% endif %}
            {% if not loop.last %}, {% endif %}
          {% endfor %}
        {% endif %}
      </li>
    {% endfor %}
  </ul>
{% else %}
  <p>Aucun dirigeant trouvé.</p>
{% endif %}


<h2>Derniers bilans financiers</h2>

{% if financials is not empty %}
  <ul>
    {% for bilan in financials %}
      <li>
        Année de clôture : {{ bilan.closing_year }} — 
        Date de clôture : {{ bilan.closing_date }} — 
        Soumis le : {{ bilan.submitted_date }} — 
        Durée : {{ bilan.duration }}
      </li>
    {% endfor %}
  </ul>
{% else %}
  <p>Aucun bilan disponible.</p>
{% endif %}
", "qard/detail.html.twig", "C:\\laragon\\www\\Apiqard\\templates\\qard\\detail.html.twig");
    }
}
