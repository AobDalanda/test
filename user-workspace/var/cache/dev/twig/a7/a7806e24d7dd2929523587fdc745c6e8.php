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

/* security/login.html.twig */
class __TwigTemplate_f7391a5acf96504d16037612ea9ceee2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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

        yield "Login";
        
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
        yield "<div class=\"min-h-[80vh] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8\">
    <div class=\"max-w-md w-full space-y-8\">
        <div>
            <h2 class=\"mt-6 text-center text-3xl font-extrabold text-gray-900\">
                Login to your account
            </h2>
            <p class=\"mt-2 text-center text-sm text-gray-600\">
                Access your parcel tracking dashboard
            </p>
        </div>

        ";
        // line 17
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "            <div class=\"rounded-md bg-red-50 p-4\">
                <div class=\"flex\">
                    <div class=\"flex-shrink-0\">
                        <i class=\"fas fa-exclamation-circle text-red-400\"></i>
                    </div>
                    <div class=\"ml-3\">
                        <h3 class=\"text-sm font-medium text-red-800\">
                            Login Error
                        </h3>
                        <div class=\"mt-2 text-sm text-red-700\">
                            Invalid credentials. Please check your email and password.
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 34
        yield "
        <form class=\"mt-8 space-y-6\" action=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
            
            <div class=\"rounded-md shadow-sm -space-y-px\">
                <div>
                    <label for=\"email\" class=\"sr-only\">Email address</label>
                    <input id=\"email\" name=\"_username\" type=\"email\" required 
                           value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 42, $this->source); })()), "html", null, true);
        yield "\"
                           class=\"appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm\" 
                           placeholder=\"Email address\">
                </div>
                <div>
                    <label for=\"password\" class=\"sr-only\">Password</label>
                    <input id=\"password\" name=\"_password\" type=\"password\" required 
                           class=\"appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm\" 
                           placeholder=\"Password\">
                </div>
            </div>

            <div class=\"flex items-center justify-between\">
                <div class=\"flex items-center\">
                    <input id=\"remember_me\" name=\"_remember_me\" type=\"checkbox\" 
                           class=\"h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded\">
                    <label for=\"remember_me\" class=\"ml-2 block text-sm text-gray-900\">
                        Remember me
                    </label>
                </div>
            </div>

            <div>
                <button type=\"submit\" 
                        class=\"group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
                    <span class=\"absolute left-0 inset-y-0 flex items-center pl-3\">
                        <i class=\"fas fa-sign-in-alt text-blue-500 group-hover:text-blue-400\"></i>
                    </span>
                    Sign in
                </button>
            </div>

            <div class=\"text-sm text-center mt-4\">
                <p>Don't have an account?
                    <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"font-medium text-blue-600 hover:text-blue-500\">
                        Register here
                    </a>
                </p>
            </div>
        </form>
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
        return "security/login.html.twig";
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
        return array (  171 => 76,  134 => 42,  125 => 36,  121 => 35,  118 => 34,  100 => 18,  98 => 17,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Login{% endblock %}

{% block body %}
<div class=\"min-h-[80vh] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8\">
    <div class=\"max-w-md w-full space-y-8\">
        <div>
            <h2 class=\"mt-6 text-center text-3xl font-extrabold text-gray-900\">
                Login to your account
            </h2>
            <p class=\"mt-2 text-center text-sm text-gray-600\">
                Access your parcel tracking dashboard
            </p>
        </div>

        {% if error %}
            <div class=\"rounded-md bg-red-50 p-4\">
                <div class=\"flex\">
                    <div class=\"flex-shrink-0\">
                        <i class=\"fas fa-exclamation-circle text-red-400\"></i>
                    </div>
                    <div class=\"ml-3\">
                        <h3 class=\"text-sm font-medium text-red-800\">
                            Login Error
                        </h3>
                        <div class=\"mt-2 text-sm text-red-700\">
                            Invalid credentials. Please check your email and password.
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}

        <form class=\"mt-8 space-y-6\" action=\"{{ path('app_login') }}\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
            
            <div class=\"rounded-md shadow-sm -space-y-px\">
                <div>
                    <label for=\"email\" class=\"sr-only\">Email address</label>
                    <input id=\"email\" name=\"_username\" type=\"email\" required 
                           value=\"{{ last_username }}\"
                           class=\"appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm\" 
                           placeholder=\"Email address\">
                </div>
                <div>
                    <label for=\"password\" class=\"sr-only\">Password</label>
                    <input id=\"password\" name=\"_password\" type=\"password\" required 
                           class=\"appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm\" 
                           placeholder=\"Password\">
                </div>
            </div>

            <div class=\"flex items-center justify-between\">
                <div class=\"flex items-center\">
                    <input id=\"remember_me\" name=\"_remember_me\" type=\"checkbox\" 
                           class=\"h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded\">
                    <label for=\"remember_me\" class=\"ml-2 block text-sm text-gray-900\">
                        Remember me
                    </label>
                </div>
            </div>

            <div>
                <button type=\"submit\" 
                        class=\"group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
                    <span class=\"absolute left-0 inset-y-0 flex items-center pl-3\">
                        <i class=\"fas fa-sign-in-alt text-blue-500 group-hover:text-blue-400\"></i>
                    </span>
                    Sign in
                </button>
            </div>

            <div class=\"text-sm text-center mt-4\">
                <p>Don't have an account?
                    <a href=\"{{ path('app_register') }}\" class=\"font-medium text-blue-600 hover:text-blue-500\">
                        Register here
                    </a>
                </p>
            </div>
        </form>
    </div>
</div>
{% endblock %}
", "security/login.html.twig", "/project/sandbox/user-workspace/templates/security/login.html.twig");
    }
}
