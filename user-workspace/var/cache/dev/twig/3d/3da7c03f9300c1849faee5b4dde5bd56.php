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

/* parcel/list.html.twig */
class __TwigTemplate_a81665fe181c6c9b056336a82e47ebd8 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parcel/list.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Parcel List";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8\">
        <div class=\"mb-8\">
            <h1 class=\"text-3xl font-bold text-gray-900 mb-4\">Parcel List</h1>
            
            <!-- Search Form -->
            <form method=\"GET\" action=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcel_list");
        yield "\" class=\"mb-6\">
                <div class=\"flex gap-4\">
                    <div class=\"flex-1\">
                        <input type=\"text\" name=\"search\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\" 
                               placeholder=\"Search by tracking number, client name, or recipient name\"
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500\">
                    </div>
                    <button type=\"submit\" 
                            class=\"px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500\">
                        Search
                    </button>
                </div>
            </form>

            <!-- Parcels Table -->
            <div class=\"bg-white shadow overflow-hidden rounded-lg\">
                <table class=\"min-w-full divide-y divide-gray-200\">
                    <thead class=\"bg-gray-50\">
                        <tr>
                            <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Tracking Number</th>
                            <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Client</th>
                            <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Recipient</th>
                            <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Status</th>
                            <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Created At</th>
                            <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"bg-white divide-y divide-gray-200\">
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["parcels"]) || array_key_exists("parcels", $context) ? $context["parcels"] : (function () { throw new RuntimeError('Variable "parcels" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["parcel"]) {
            // line 40
            yield "                            <tr>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900\">
                                    ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcel"], "trackingNumber", [], "any", false, false, false, 42), "html", null, true);
            yield "
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                                    ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcel"], "clientName", [], "any", false, false, false, 45), "html", null, true);
            yield "
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                                    ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parcel"], "recipientName", [], "any", false, false, false, 48), "html", null, true);
            yield "
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                        ";
            // line 52
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["parcel"], "status", [], "any", false, false, false, 52) == "registered")) {
                yield "bg-gray-100 text-gray-800
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 53
$context["parcel"], "status", [], "any", false, false, false, 53) == "in_transit")) {
                yield "bg-blue-100 text-blue-800
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 54
$context["parcel"], "status", [], "any", false, false, false, 54) == "arrived")) {
                yield "bg-green-100 text-green-800
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 55
$context["parcel"], "status", [], "any", false, false, false, 55) == "picked_up")) {
                yield "bg-purple-100 text-purple-800
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 56
$context["parcel"], "status", [], "any", false, false, false, 56) == "pending_penalty")) {
                yield "bg-red-100 text-red-800
                                        ";
            }
            // line 57
            yield "\">
                                        ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["parcel"], "status", [], "any", false, false, false, 58), ["_" => " "])), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                                    ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["parcel"], "createdAt", [], "any", false, false, false, 62), "Y-m-d H:i"), "html", null, true);
            yield "
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                                    <a href=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcel_show", ["trackingNumber" => CoreExtension::getAttribute($this->env, $this->source, $context["parcel"], "trackingNumber", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\" 
                                       class=\"text-indigo-600 hover:text-indigo-900\">View Details</a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 69
        if (!$context['_iterated']) {
            // line 70
            yield "                            <tr>
                                <td colspan=\"6\" class=\"px-6 py-4 text-center text-sm text-gray-500\">
                                    No parcels found";
            // line 72
            if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 72, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " matching \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 72, $this->source); })()), "html", null, true);
                yield "\"";
            }
            yield ".
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['parcel'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "parcel/list.html.twig";
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
        return array (  220 => 76,  206 => 72,  202 => 70,  200 => 69,  191 => 65,  185 => 62,  178 => 58,  175 => 57,  170 => 56,  166 => 55,  162 => 54,  158 => 53,  154 => 52,  147 => 48,  141 => 45,  135 => 42,  131 => 40,  126 => 39,  98 => 14,  92 => 11,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Parcel List{% endblock %}

{% block body %}
    <div class=\"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8\">
        <div class=\"mb-8\">
            <h1 class=\"text-3xl font-bold text-gray-900 mb-4\">Parcel List</h1>
            
            <!-- Search Form -->
            <form method=\"GET\" action=\"{{ path('app_parcel_list') }}\" class=\"mb-6\">
                <div class=\"flex gap-4\">
                    <div class=\"flex-1\">
                        <input type=\"text\" name=\"search\" value=\"{{ search }}\" 
                               placeholder=\"Search by tracking number, client name, or recipient name\"
                               class=\"w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500\">
                    </div>
                    <button type=\"submit\" 
                            class=\"px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500\">
                        Search
                    </button>
                </div>
            </form>

            <!-- Parcels Table -->
            <div class=\"bg-white shadow overflow-hidden rounded-lg\">
                <table class=\"min-w-full divide-y divide-gray-200\">
                    <thead class=\"bg-gray-50\">
                        <tr>
                            <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Tracking Number</th>
                            <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Client</th>
                            <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Recipient</th>
                            <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Status</th>
                            <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Created At</th>
                            <th class=\"px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider\">Actions</th>
                        </tr>
                    </thead>
                    <tbody class=\"bg-white divide-y divide-gray-200\">
                        {% for parcel in parcels %}
                            <tr>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900\">
                                    {{ parcel.trackingNumber }}
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                                    {{ parcel.clientName }}
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                                    {{ parcel.recipientName }}
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap\">
                                    <span class=\"px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                        {% if parcel.status == 'registered' %}bg-gray-100 text-gray-800
                                        {% elseif parcel.status == 'in_transit' %}bg-blue-100 text-blue-800
                                        {% elseif parcel.status == 'arrived' %}bg-green-100 text-green-800
                                        {% elseif parcel.status == 'picked_up' %}bg-purple-100 text-purple-800
                                        {% elseif parcel.status == 'pending_penalty' %}bg-red-100 text-red-800
                                        {% endif %}\">
                                        {{ parcel.status|replace({'_': ' '})|title }}
                                    </span>
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                                    {{ parcel.createdAt|date('Y-m-d H:i') }}
                                </td>
                                <td class=\"px-6 py-4 whitespace-nowrap text-sm text-gray-500\">
                                    <a href=\"{{ path('app_parcel_show', {'trackingNumber': parcel.trackingNumber}) }}\" 
                                       class=\"text-indigo-600 hover:text-indigo-900\">View Details</a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"6\" class=\"px-6 py-4 text-center text-sm text-gray-500\">
                                    No parcels found{% if search %} matching \"{{ search }}\"{% endif %}.
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
", "parcel/list.html.twig", "/project/sandbox/user-workspace/templates/parcel/list.html.twig");
    }
}
