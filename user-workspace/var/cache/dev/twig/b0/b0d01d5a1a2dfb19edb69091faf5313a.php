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

/* parcel/show.html.twig */
class __TwigTemplate_b1fd76d8e4adad1dc7d30a22401fdb3e extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "parcel/show.html.twig"));

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

        yield "Track Parcel - ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        
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
        yield "<div class=\"bg-white shadow-xl rounded-lg overflow-hidden\">
    <div class=\"px-6 py-4 bg-gray-50 border-b border-gray-200\">
        <h2 class=\"text-2xl font-semibold text-gray-800\">Tracking Information</h2>
        <p class=\"mt-1 text-sm text-gray-600\">Tracking Number: ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcel"]) || array_key_exists("parcel", $context) ? $context["parcel"] : (function () { throw new RuntimeError('Variable "parcel" does not exist.', 9, $this->source); })()), "trackingNumber", [], "any", false, false, false, 9), "html", null, true);
        yield "</p>
    </div>

    <div class=\"p-6\">
        ";
        // line 14
        yield "        <div class=\"mb-8\">
            <div class=\"relative\">
                <div class=\"absolute inset-0 flex items-center\" aria-hidden=\"true\">
                    <div class=\"w-full border-t border-gray-300\"></div>
                </div>
                <div class=\"relative flex justify-between\">
                    ";
        // line 20
        $context["steps"] = ["registered" => 0, "in_transit" => 1, "arrived" => 2, "picked_up" => 3];
        // line 26
        yield "                    ";
        $context["currentStepIndex"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new RuntimeError('Variable "steps" does not exist.', 26, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcel"]) || array_key_exists("parcel", $context) ? $context["parcel"] : (function () { throw new RuntimeError('Variable "parcel" does not exist.', 26, $this->source); })()), "status", [], "any", false, false, false, 26), [], "array", false, false, false, 26);
        // line 27
        yield "
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new RuntimeError('Variable "steps" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["step"] => $context["stepIndex"]) {
            // line 29
            yield "                        <div class=\"flex items-center\">
                            <span class=\"relative flex h-8 w-8 items-center justify-center rounded-full ";
            // line 30
            if (($context["stepIndex"] <= (isset($context["currentStepIndex"]) || array_key_exists("currentStepIndex", $context) ? $context["currentStepIndex"] : (function () { throw new RuntimeError('Variable "currentStepIndex" does not exist.', 30, $this->source); })()))) {
                yield "bg-blue-600";
            } else {
                yield "bg-gray-200";
            }
            yield " text-white\">
                                ";
            // line 31
            if (($context["step"] == "registered")) {
                // line 32
                yield "                                    <i class=\"fas fa-box-open\"></i>
                                ";
            } elseif ((            // line 33
$context["step"] == "in_transit")) {
                // line 34
                yield "                                    <i class=\"fas fa-truck\"></i>
                                ";
            } elseif ((            // line 35
$context["step"] == "arrived")) {
                // line 36
                yield "                                    <i class=\"fas fa-warehouse\"></i>
                                ";
            } else {
                // line 38
                yield "                                    <i class=\"fas fa-check\"></i>
                                ";
            }
            // line 40
            yield "                            </span>
                            <span class=\"ml-2 text-sm font-medium text-gray-900\">
                                ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["step"], ["_" => " "])), "html", null, true);
            yield "
                            </span>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['step'], $context['stepIndex'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "                </div>
            </div>
        </div>

        ";
        // line 51
        yield "        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6 mb-8\">
            ";
        // line 53
        yield "            <div class=\"bg-gray-50 rounded-lg p-4\">
                <h3 class=\"text-lg font-medium text-gray-900 mb-4\">Client Information</h3>
                <dl class=\"space-y-2\">
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">Name</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcel"]) || array_key_exists("parcel", $context) ? $context["parcel"] : (function () { throw new RuntimeError('Variable "parcel" does not exist.', 58, $this->source); })()), "clientName", [], "any", false, false, false, 58), "html", null, true);
        yield "</dd>
                    </div>
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">Email</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcel"]) || array_key_exists("parcel", $context) ? $context["parcel"] : (function () { throw new RuntimeError('Variable "parcel" does not exist.', 62, $this->source); })()), "clientEmail", [], "any", false, false, false, 62), "html", null, true);
        yield "</dd>
                    </div>
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">Phone</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">";
        // line 66
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["parcel"] ?? null), "clientPhone", [], "any", true, true, false, 66) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcel"]) || array_key_exists("parcel", $context) ? $context["parcel"] : (function () { throw new RuntimeError('Variable "parcel" does not exist.', 66, $this->source); })()), "clientPhone", [], "any", false, false, false, 66)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcel"]) || array_key_exists("parcel", $context) ? $context["parcel"] : (function () { throw new RuntimeError('Variable "parcel" does not exist.', 66, $this->source); })()), "clientPhone", [], "any", false, false, false, 66), "html", null, true)) : ("Not provided"));
        yield "</dd>
                    </div>
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">City</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">";
        // line 70
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["parcel"] ?? null), "clientCity", [], "any", true, true, false, 70) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcel"]) || array_key_exists("parcel", $context) ? $context["parcel"] : (function () { throw new RuntimeError('Variable "parcel" does not exist.', 70, $this->source); })()), "clientCity", [], "any", false, false, false, 70)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcel"]) || array_key_exists("parcel", $context) ? $context["parcel"] : (function () { throw new RuntimeError('Variable "parcel" does not exist.', 70, $this->source); })()), "clientCity", [], "any", false, false, false, 70), "html", null, true)) : ("Not provided"));
        yield "</dd>
                    </div>
                </dl>
            </div>

            ";
        // line 76
        yield "            <div class=\"bg-gray-50 rounded-lg p-4\">
                <h3 class=\"text-lg font-medium text-gray-900 mb-4\">Recipient Information</h3>
                <dl class=\"space-y-2\">
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">Name</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcel"]) || array_key_exists("parcel", $context) ? $context["parcel"] : (function () { throw new RuntimeError('Variable "parcel" does not exist.', 81, $this->source); })()), "recipientName", [], "any", false, false, false, 81), "html", null, true);
        yield "</dd>
                    </div>
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">Email</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcel"]) || array_key_exists("parcel", $context) ? $context["parcel"] : (function () { throw new RuntimeError('Variable "parcel" does not exist.', 85, $this->source); })()), "recipientEmail", [], "any", false, false, false, 85), "html", null, true);
        yield "</dd>
                    </div>
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">Phone</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">";
        // line 89
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["parcel"] ?? null), "recipientPhone", [], "any", true, true, false, 89) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcel"]) || array_key_exists("parcel", $context) ? $context["parcel"] : (function () { throw new RuntimeError('Variable "parcel" does not exist.', 89, $this->source); })()), "recipientPhone", [], "any", false, false, false, 89)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcel"]) || array_key_exists("parcel", $context) ? $context["parcel"] : (function () { throw new RuntimeError('Variable "parcel" does not exist.', 89, $this->source); })()), "recipientPhone", [], "any", false, false, false, 89), "html", null, true)) : ("Not provided"));
        yield "</dd>
                    </div>
                </dl>
            </div>
        </div>

        ";
        // line 96
        yield "        <div class=\"bg-gray-50 rounded-lg p-4 mb-8\">
            <h3 class=\"text-lg font-medium text-gray-900 mb-4\">Shipping Details</h3>
            <dl class=\"space-y-4\">
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4 pb-4 border-b border-gray-200\">
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">Destination Country</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcel"]) || array_key_exists("parcel", $context) ? $context["parcel"] : (function () { throw new RuntimeError('Variable "parcel" does not exist.', 102, $this->source); })()), "destinationCountry", [], "any", false, false, false, 102), "html", null, true);
        yield "</dd>
                    </div>
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">Destination City</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcel"]) || array_key_exists("parcel", $context) ? $context["parcel"] : (function () { throw new RuntimeError('Variable "parcel" does not exist.', 106, $this->source); })()), "destinationCity", [], "any", false, false, false, 106), "html", null, true);
        yield "</dd>
                    </div>
                </div>
                <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4 pt-2\">
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">Shipping Cost</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">€";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcel"]) || array_key_exists("parcel", $context) ? $context["parcel"] : (function () { throw new RuntimeError('Variable "parcel" does not exist.', 112, $this->source); })()), "shippingCost", [], "any", false, false, false, 112), "html", null, true);
        yield "</dd>
                    </div>
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">Penalty Fee</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">€";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcel"]) || array_key_exists("parcel", $context) ? $context["parcel"] : (function () { throw new RuntimeError('Variable "parcel" does not exist.', 116, $this->source); })()), "penaltyFee", [], "any", false, false, false, 116), "html", null, true);
        yield "</dd>
                    </div>
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">Total Cost</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">€";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcel"]) || array_key_exists("parcel", $context) ? $context["parcel"] : (function () { throw new RuntimeError('Variable "parcel" does not exist.', 120, $this->source); })()), "shippingCost", [], "any", false, false, false, 120) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcel"]) || array_key_exists("parcel", $context) ? $context["parcel"] : (function () { throw new RuntimeError('Variable "parcel" does not exist.', 120, $this->source); })()), "penaltyFee", [], "any", false, false, false, 120)), "html", null, true);
        yield "</dd>
                    </div>
                </div>
            </dl>
        </div>

        ";
        // line 127
        yield "        <div>
            <h3 class=\"text-lg font-medium text-gray-900 mb-4\">Tracking History</h3>
            <div class=\"flow-root\">
                <ul role=\"list\" class=\"-mb-8\">
                    ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcel"]) || array_key_exists("parcel", $context) ? $context["parcel"] : (function () { throw new RuntimeError('Variable "parcel" does not exist.', 131, $this->source); })()), "trackingSteps", [], "any", false, false, false, 131), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 131, $this->source); })()), "createdAt", [], "any", false, false, false, 131) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 131, $this->source); })()), "createdAt", [], "any", false, false, false, 131)); }));
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
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 132
            yield "                        <li>
                            <div class=\"relative pb-8\">
                                ";
            // line 134
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 135
                yield "                                    <span class=\"absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200\" aria-hidden=\"true\"></span>
                                ";
            }
            // line 137
            yield "                                <div class=\"relative flex space-x-3\">
                                    <div>
                                        <span class=\"h-8 w-8 rounded-full bg-blue-600 flex items-center justify-center ring-8 ring-white\">
                                            <i class=\"fas fa-circle-info text-white\"></i>
                                        </span>
                                    </div>
                                    <div class=\"flex min-w-0 flex-1 justify-between space-x-4 pt-1.5\">
                                        <div>
                                            <p class=\"text-sm text-gray-500\">";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "description", [], "any", false, false, false, 145), "html", null, true);
            yield "</p>
                                        </div>
                                        <div class=\"whitespace-nowrap text-right text-sm text-gray-500\">
                                            <time datetime=\"";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "createdAt", [], "any", false, false, false, 148), "c"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["step"], "createdAt", [], "any", false, false, false, 148), "d M Y H:i"), "html", null, true);
            yield "</time>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    ";
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
        unset($context['_seq'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        yield "                </ul>
            </div>
        </div>

        ";
        // line 159
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 160
            yield "            <div class=\"mt-8 border-t border-gray-200 pt-6\">
                <h3 class=\"text-lg font-medium text-gray-900 mb-4\">Update Status</h3>
                <form id=\"updateStatusForm\" class=\"space-y-4\">
                    <div>
                        <label for=\"status\" class=\"block text-sm font-medium text-gray-700\">New Status</label>
                        <select id=\"status\" name=\"status\" class=\"mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500\">
                            <option value=\"in_transit\">In Transit</option>
                            <option value=\"arrived\">Arrived</option>
                            <option value=\"picked_up\">Picked Up</option>
                        </select>
                    </div>
                    <div>
                        <label for=\"description\" class=\"block text-sm font-medium text-gray-700\">Description</label>
                        <textarea id=\"description\" name=\"description\" rows=\"3\" class=\"mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500\"></textarea>
                    </div>
                    <div class=\"flex justify-end\">
                        <button type=\"submit\" class=\"inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
                            Update Status
                        </button>
                    </div>
                </form>
            </div>
        ";
        }
        // line 183
        yield "    </div>
</div>

";
        // line 186
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 187
            yield "    ";
            yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 188
        yield "    <script>
        document.getElementById('updateStatusForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            fetch('";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcel_update_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["parcel"]) || array_key_exists("parcel", $context) ? $context["parcel"] : (function () { throw new RuntimeError('Variable "parcel" does not exist.', 192, $this->source); })()), "id", [], "any", false, false, false, 192)]), "html", null, true);
        yield "', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams({
                    'status': document.getElementById('status').value,
                    'description': document.getElementById('description').value
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.reload();
                } else {
                    alert('Error updating status: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while updating the status');
            });
        });
    </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "parcel/show.html.twig";
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
        return array (  423 => 192,  417 => 188,  398 => 187,  396 => 186,  391 => 183,  366 => 160,  364 => 159,  358 => 155,  335 => 148,  329 => 145,  319 => 137,  315 => 135,  313 => 134,  309 => 132,  292 => 131,  286 => 127,  277 => 120,  270 => 116,  263 => 112,  254 => 106,  247 => 102,  239 => 96,  230 => 89,  223 => 85,  216 => 81,  209 => 76,  201 => 70,  194 => 66,  187 => 62,  180 => 58,  173 => 53,  170 => 51,  164 => 46,  154 => 42,  150 => 40,  146 => 38,  142 => 36,  140 => 35,  137 => 34,  135 => 33,  132 => 32,  130 => 31,  122 => 30,  119 => 29,  115 => 28,  112 => 27,  109 => 26,  107 => 20,  99 => 14,  92 => 9,  87 => 6,  77 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Track Parcel - {{ parent() }}{% endblock %}

{% block body %}
<div class=\"bg-white shadow-xl rounded-lg overflow-hidden\">
    <div class=\"px-6 py-4 bg-gray-50 border-b border-gray-200\">
        <h2 class=\"text-2xl font-semibold text-gray-800\">Tracking Information</h2>
        <p class=\"mt-1 text-sm text-gray-600\">Tracking Number: {{ parcel.trackingNumber }}</p>
    </div>

    <div class=\"p-6\">
        {# Parcel Status Overview #}
        <div class=\"mb-8\">
            <div class=\"relative\">
                <div class=\"absolute inset-0 flex items-center\" aria-hidden=\"true\">
                    <div class=\"w-full border-t border-gray-300\"></div>
                </div>
                <div class=\"relative flex justify-between\">
                    {% set steps = {
                        'registered': 0,
                        'in_transit': 1,
                        'arrived': 2,
                        'picked_up': 3
                    } %}
                    {% set currentStepIndex = steps[parcel.status] %}

                    {% for step, stepIndex in steps %}
                        <div class=\"flex items-center\">
                            <span class=\"relative flex h-8 w-8 items-center justify-center rounded-full {% if stepIndex <= currentStepIndex %}bg-blue-600{% else %}bg-gray-200{% endif %} text-white\">
                                {% if step == 'registered' %}
                                    <i class=\"fas fa-box-open\"></i>
                                {% elseif step == 'in_transit' %}
                                    <i class=\"fas fa-truck\"></i>
                                {% elseif step == 'arrived' %}
                                    <i class=\"fas fa-warehouse\"></i>
                                {% else %}
                                    <i class=\"fas fa-check\"></i>
                                {% endif %}
                            </span>
                            <span class=\"ml-2 text-sm font-medium text-gray-900\">
                                {{ step|replace({'_': ' '})|title }}
                            </span>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>

        {# Parcel Details #}
        <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6 mb-8\">
            {# Client Information #}
            <div class=\"bg-gray-50 rounded-lg p-4\">
                <h3 class=\"text-lg font-medium text-gray-900 mb-4\">Client Information</h3>
                <dl class=\"space-y-2\">
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">Name</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">{{ parcel.clientName }}</dd>
                    </div>
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">Email</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">{{ parcel.clientEmail }}</dd>
                    </div>
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">Phone</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">{{ parcel.clientPhone ?? 'Not provided' }}</dd>
                    </div>
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">City</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">{{ parcel.clientCity ?? 'Not provided' }}</dd>
                    </div>
                </dl>
            </div>

            {# Recipient Information #}
            <div class=\"bg-gray-50 rounded-lg p-4\">
                <h3 class=\"text-lg font-medium text-gray-900 mb-4\">Recipient Information</h3>
                <dl class=\"space-y-2\">
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">Name</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">{{ parcel.recipientName }}</dd>
                    </div>
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">Email</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">{{ parcel.recipientEmail }}</dd>
                    </div>
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">Phone</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">{{ parcel.recipientPhone ?? 'Not provided' }}</dd>
                    </div>
                </dl>
            </div>
        </div>

        {# Shipping Details #}
        <div class=\"bg-gray-50 rounded-lg p-4 mb-8\">
            <h3 class=\"text-lg font-medium text-gray-900 mb-4\">Shipping Details</h3>
            <dl class=\"space-y-4\">
                <div class=\"grid grid-cols-1 md:grid-cols-2 gap-4 pb-4 border-b border-gray-200\">
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">Destination Country</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">{{ parcel.destinationCountry }}</dd>
                    </div>
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">Destination City</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">{{ parcel.destinationCity }}</dd>
                    </div>
                </div>
                <div class=\"grid grid-cols-1 md:grid-cols-3 gap-4 pt-2\">
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">Shipping Cost</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">€{{ parcel.shippingCost }}</dd>
                    </div>
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">Penalty Fee</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">€{{ parcel.penaltyFee }}</dd>
                    </div>
                    <div>
                        <dt class=\"text-sm font-medium text-gray-500\">Total Cost</dt>
                        <dd class=\"mt-1 text-sm text-gray-900\">€{{ parcel.shippingCost + parcel.penaltyFee }}</dd>
                    </div>
                </div>
            </dl>
        </div>

        {# Tracking History #}
        <div>
            <h3 class=\"text-lg font-medium text-gray-900 mb-4\">Tracking History</h3>
            <div class=\"flow-root\">
                <ul role=\"list\" class=\"-mb-8\">
                    {% for step in parcel.trackingSteps|sort((a, b) => b.createdAt <=> a.createdAt) %}
                        <li>
                            <div class=\"relative pb-8\">
                                {% if not loop.last %}
                                    <span class=\"absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200\" aria-hidden=\"true\"></span>
                                {% endif %}
                                <div class=\"relative flex space-x-3\">
                                    <div>
                                        <span class=\"h-8 w-8 rounded-full bg-blue-600 flex items-center justify-center ring-8 ring-white\">
                                            <i class=\"fas fa-circle-info text-white\"></i>
                                        </span>
                                    </div>
                                    <div class=\"flex min-w-0 flex-1 justify-between space-x-4 pt-1.5\">
                                        <div>
                                            <p class=\"text-sm text-gray-500\">{{ step.description }}</p>
                                        </div>
                                        <div class=\"whitespace-nowrap text-right text-sm text-gray-500\">
                                            <time datetime=\"{{ step.createdAt|date('c') }}\">{{ step.createdAt|date('d M Y H:i') }}</time>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>

        {% if is_granted('ROLE_MANAGER') %}
            <div class=\"mt-8 border-t border-gray-200 pt-6\">
                <h3 class=\"text-lg font-medium text-gray-900 mb-4\">Update Status</h3>
                <form id=\"updateStatusForm\" class=\"space-y-4\">
                    <div>
                        <label for=\"status\" class=\"block text-sm font-medium text-gray-700\">New Status</label>
                        <select id=\"status\" name=\"status\" class=\"mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500\">
                            <option value=\"in_transit\">In Transit</option>
                            <option value=\"arrived\">Arrived</option>
                            <option value=\"picked_up\">Picked Up</option>
                        </select>
                    </div>
                    <div>
                        <label for=\"description\" class=\"block text-sm font-medium text-gray-700\">Description</label>
                        <textarea id=\"description\" name=\"description\" rows=\"3\" class=\"mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500\"></textarea>
                    </div>
                    <div class=\"flex justify-end\">
                        <button type=\"submit\" class=\"inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
                            Update Status
                        </button>
                    </div>
                </form>
            </div>
        {% endif %}
    </div>
</div>

{% if is_granted('ROLE_MANAGER') %}
    {% block javascripts %}
    <script>
        document.getElementById('updateStatusForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            fetch('{{ path('app_parcel_update_status', {'id': parcel.id}) }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams({
                    'status': document.getElementById('status').value,
                    'description': document.getElementById('description').value
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    window.location.reload();
                } else {
                    alert('Error updating status: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while updating the status');
            });
        });
    </script>
    {% endblock %}
{% endif %}
{% endblock %}
", "parcel/show.html.twig", "/project/sandbox/user-workspace/templates/parcel/show.html.twig");
    }
}
