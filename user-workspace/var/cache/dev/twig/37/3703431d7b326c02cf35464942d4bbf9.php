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

/* home/index.html.twig */
class __TwigTemplate_e815e4f453511b1e0f3394407ae3deb1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

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

        yield "Welcome to Parcel Management";
        
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
        yield "<div class=\"min-h-screen bg-gray-50\">
    <div class=\"container mx-auto px-4 py-16\">
        <div class=\"max-w-3xl mx-auto text-center\">
            <h1 class=\"text-4xl font-bold mb-6 text-gray-900\">Track Your Parcel</h1>
            <p class=\"text-lg mb-8 text-gray-600\">Stay updated with your parcel's journey from pickup to delivery</p>
            
            <div class=\"bg-white p-8 rounded-lg shadow-lg\">
                ";
        // line 13
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "                    <form onsubmit=\"event.preventDefault(); submitTrackingForm(this);\"
                          class=\"flex flex-col items-center space-y-4\">
                        <div class=\"relative w-full max-w-md\">
                            <input type=\"text\" 
                                   placeholder=\"Enter tracking number (e.g., PCL-123ABC)\" 
                                   class=\"w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 transition-colors duration-200\"
                                   oninput=\"handleTrackingInput(this)\"
                                   minlength=\"3\"
                                   maxlength=\"20\"
                                   title=\"Only letters, numbers, and hyphens are allowed\"
                                   aria-label=\"Tracking number\"
                                   aria-describedby=\"tracking-error-home\"
                                   required>
                            <div id=\"tracking-error-home\" class=\"error-message hidden absolute -bottom-6 left-0 text-sm text-red-500\" role=\"alert\">
                                Please enter a tracking number
                            </div>
                        </div>
                        <button type=\"submit\" 
                                class=\"px-6 py-3 bg-gray-900 text-white rounded-lg hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-colors duration-200 disabled:opacity-50 disabled:cursor-not-allowed relative min-w-[120px]\">
                            <i class=\"fas fa-search mr-2\"></i>
                            <span>Track Parcel</span>
                            <div class=\"loading-spinner hidden absolute inset-0 m-auto w-5 h-5 border-2 border-gray-300 border-t-white rounded-full animate-spin\"></div>
                        </button>
                    </form>
                ";
        } else {
            // line 39
            yield "                    <div class=\"text-center\">
                        <h2 class=\"text-2xl font-semibold mb-4\">Login Required</h2>
                        <p class=\"text-gray-600 mb-6\">Please log in to track your parcels and access our tracking system.</p>
                        <a href=\"";
            // line 42
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" 
                           class=\"inline-block px-6 py-3 bg-gray-900 text-white rounded-lg hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-colors duration-200\">
                            <i class=\"fas fa-sign-in-alt mr-2\"></i>
                            Login to Track Parcels
                        </a>
                        <p class=\"mt-4 text-sm text-gray-500\">
                            Don't have an account? 
                            <a href=\"";
            // line 49
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"text-blue-600 hover:text-blue-800\">Register here</a>
                        </p>
                    </div>
                ";
        }
        // line 53
        yield "            </div>

            <div class=\"mt-12 grid grid-cols-1 md:grid-cols-3 gap-8\">
                <div class=\"bg-white p-6 rounded-lg shadow\">
                    <div class=\"text-gray-800 mb-2\">
                        <i class=\"fas fa-box text-2xl\"></i>
                    </div>
                    <h3 class=\"text-lg font-semibold mb-2\">Real-time Tracking</h3>
                    <p class=\"text-gray-600\">Track your parcel's journey from pickup to delivery</p>
                </div>
                <div class=\"bg-white p-6 rounded-lg shadow\">
                    <div class=\"text-gray-800 mb-2\">
                        <i class=\"fas fa-clock text-2xl\"></i>
                    </div>
                    <h3 class=\"text-lg font-semibold mb-2\">24/7 Updates</h3>
                    <p class=\"text-gray-600\">Get instant status updates on your deliveries</p>
                </div>
                <div class=\"bg-white p-6 rounded-lg shadow\">
                    <div class=\"text-gray-800 mb-2\">
                        <i class=\"fas fa-shield-alt text-2xl\"></i>
                    </div>
                    <h3 class=\"text-lg font-semibold mb-2\">Secure System</h3>
                    <p class=\"text-gray-600\">Your parcel information is safe with us</p>
                </div>
            </div>
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
        return "home/index.html.twig";
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
        return array (  145 => 53,  138 => 49,  128 => 42,  123 => 39,  96 => 14,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Welcome to Parcel Management{% endblock %}

{% block body %}
<div class=\"min-h-screen bg-gray-50\">
    <div class=\"container mx-auto px-4 py-16\">
        <div class=\"max-w-3xl mx-auto text-center\">
            <h1 class=\"text-4xl font-bold mb-6 text-gray-900\">Track Your Parcel</h1>
            <p class=\"text-lg mb-8 text-gray-600\">Stay updated with your parcel's journey from pickup to delivery</p>
            
            <div class=\"bg-white p-8 rounded-lg shadow-lg\">
                {% if is_granted('ROLE_USER') %}
                    <form onsubmit=\"event.preventDefault(); submitTrackingForm(this);\"
                          class=\"flex flex-col items-center space-y-4\">
                        <div class=\"relative w-full max-w-md\">
                            <input type=\"text\" 
                                   placeholder=\"Enter tracking number (e.g., PCL-123ABC)\" 
                                   class=\"w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500 transition-colors duration-200\"
                                   oninput=\"handleTrackingInput(this)\"
                                   minlength=\"3\"
                                   maxlength=\"20\"
                                   title=\"Only letters, numbers, and hyphens are allowed\"
                                   aria-label=\"Tracking number\"
                                   aria-describedby=\"tracking-error-home\"
                                   required>
                            <div id=\"tracking-error-home\" class=\"error-message hidden absolute -bottom-6 left-0 text-sm text-red-500\" role=\"alert\">
                                Please enter a tracking number
                            </div>
                        </div>
                        <button type=\"submit\" 
                                class=\"px-6 py-3 bg-gray-900 text-white rounded-lg hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-colors duration-200 disabled:opacity-50 disabled:cursor-not-allowed relative min-w-[120px]\">
                            <i class=\"fas fa-search mr-2\"></i>
                            <span>Track Parcel</span>
                            <div class=\"loading-spinner hidden absolute inset-0 m-auto w-5 h-5 border-2 border-gray-300 border-t-white rounded-full animate-spin\"></div>
                        </button>
                    </form>
                {% else %}
                    <div class=\"text-center\">
                        <h2 class=\"text-2xl font-semibold mb-4\">Login Required</h2>
                        <p class=\"text-gray-600 mb-6\">Please log in to track your parcels and access our tracking system.</p>
                        <a href=\"{{ path('app_login') }}\" 
                           class=\"inline-block px-6 py-3 bg-gray-900 text-white rounded-lg hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-colors duration-200\">
                            <i class=\"fas fa-sign-in-alt mr-2\"></i>
                            Login to Track Parcels
                        </a>
                        <p class=\"mt-4 text-sm text-gray-500\">
                            Don't have an account? 
                            <a href=\"{{ path('app_register') }}\" class=\"text-blue-600 hover:text-blue-800\">Register here</a>
                        </p>
                    </div>
                {% endif %}
            </div>

            <div class=\"mt-12 grid grid-cols-1 md:grid-cols-3 gap-8\">
                <div class=\"bg-white p-6 rounded-lg shadow\">
                    <div class=\"text-gray-800 mb-2\">
                        <i class=\"fas fa-box text-2xl\"></i>
                    </div>
                    <h3 class=\"text-lg font-semibold mb-2\">Real-time Tracking</h3>
                    <p class=\"text-gray-600\">Track your parcel's journey from pickup to delivery</p>
                </div>
                <div class=\"bg-white p-6 rounded-lg shadow\">
                    <div class=\"text-gray-800 mb-2\">
                        <i class=\"fas fa-clock text-2xl\"></i>
                    </div>
                    <h3 class=\"text-lg font-semibold mb-2\">24/7 Updates</h3>
                    <p class=\"text-gray-600\">Get instant status updates on your deliveries</p>
                </div>
                <div class=\"bg-white p-6 rounded-lg shadow\">
                    <div class=\"text-gray-800 mb-2\">
                        <i class=\"fas fa-shield-alt text-2xl\"></i>
                    </div>
                    <h3 class=\"text-lg font-semibold mb-2\">Secure System</h3>
                    <p class=\"text-gray-600\">Your parcel information is safe with us</p>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "home/index.html.twig", "/project/sandbox/user-workspace/templates/home/index.html.twig");
    }
}
