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

/* registration/register.html.twig */
class __TwigTemplate_42333d9a6488dde40b3099ed34555c5d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

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

        yield "Register - Parcel Tracking";
        
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
        yield "<div class=\"min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8\">
    <div class=\"sm:mx-auto sm:w-full sm:max-w-md\">
        <h2 class=\"mt-6 text-center text-3xl font-extrabold text-gray-900\">
            Create an account
        </h2>
    </div>

    <div class=\"mt-8 sm:mx-auto sm:w-full sm:max-w-md\">
        <div class=\"bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10\">
            ";
        // line 15
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 15, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6"]]);
        yield "
                <div>
                    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Full Name"]);
        yield "
                    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), 'widget');
        yield "
                    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), 'errors');
        yield "
                </div>

                <div>
                    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Email address"]);
        yield "
                    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), 'widget');
        yield "
                    ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), 'errors');
        yield "
                </div>

                <div>
                    ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "phone", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Phone number"]);
        yield "
                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "phone", [], "any", false, false, false, 30), 'widget');
        yield "
                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "phone", [], "any", false, false, false, 31), 'errors');
        yield "
                </div>

                <div>
                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "city", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "City"]);
        yield "
                    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "city", [], "any", false, false, false, 36), 'widget');
        yield "
                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "city", [], "any", false, false, false, 37), 'errors');
        yield "
                </div>

                <div>
                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "plainPassword", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Password"]);
        yield "
                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "plainPassword", [], "any", false, false, false, 42), 'widget');
        yield "
                    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "plainPassword", [], "any", false, false, false, 43), 'errors');
        yield "
                </div>

                <div class=\"flex items-center\">
                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "agreeTerms", [], "any", false, false, false, 47), 'widget');
        yield "
                    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "agreeTerms", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => "ml-2 block text-sm text-gray-900"], "label" => "I agree to the terms and conditions"]);
        yield "
                </div>
                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "agreeTerms", [], "any", false, false, false, 50), 'errors');
        yield "

                <div>
                    <button type=\"submit\" class=\"w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
                        Register
                    </button>
                </div>
            ";
        // line 57
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), 'form_end');
        yield "

            <div class=\"mt-6\">
                <div class=\"relative\">
                    <div class=\"absolute inset-0 flex items-center\">
                        <div class=\"w-full border-t border-gray-300\"></div>
                    </div>
                    <div class=\"relative flex justify-center text-sm\">
                        <span class=\"px-2 bg-white text-gray-500\">
                            Already registered?
                        </span>
                    </div>
                </div>

                <div class=\"mt-6\">
                    <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"w-full flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
                        Sign in
                    </a>
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
        return "registration/register.html.twig";
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
        return array (  213 => 72,  195 => 57,  185 => 50,  180 => 48,  176 => 47,  169 => 43,  165 => 42,  161 => 41,  154 => 37,  150 => 36,  146 => 35,  139 => 31,  135 => 30,  131 => 29,  124 => 25,  120 => 24,  116 => 23,  109 => 19,  105 => 18,  101 => 17,  96 => 15,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register - Parcel Tracking{% endblock %}

{% block body %}
<div class=\"min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8\">
    <div class=\"sm:mx-auto sm:w-full sm:max-w-md\">
        <h2 class=\"mt-6 text-center text-3xl font-extrabold text-gray-900\">
            Create an account
        </h2>
    </div>

    <div class=\"mt-8 sm:mx-auto sm:w-full sm:max-w-md\">
        <div class=\"bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10\">
            {{ form_start(registrationForm, {'attr': {'class': 'space-y-6'}}) }}
                <div>
                    {{ form_label(registrationForm.name, 'Full Name', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
                    {{ form_widget(registrationForm.name) }}
                    {{ form_errors(registrationForm.name) }}
                </div>

                <div>
                    {{ form_label(registrationForm.email, 'Email address', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
                    {{ form_widget(registrationForm.email) }}
                    {{ form_errors(registrationForm.email) }}
                </div>

                <div>
                    {{ form_label(registrationForm.phone, 'Phone number', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
                    {{ form_widget(registrationForm.phone) }}
                    {{ form_errors(registrationForm.phone) }}
                </div>

                <div>
                    {{ form_label(registrationForm.city, 'City', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
                    {{ form_widget(registrationForm.city) }}
                    {{ form_errors(registrationForm.city) }}
                </div>

                <div>
                    {{ form_label(registrationForm.plainPassword, 'Password', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
                    {{ form_widget(registrationForm.plainPassword) }}
                    {{ form_errors(registrationForm.plainPassword) }}
                </div>

                <div class=\"flex items-center\">
                    {{ form_widget(registrationForm.agreeTerms) }}
                    {{ form_label(registrationForm.agreeTerms, 'I agree to the terms and conditions', {'label_attr': {'class': 'ml-2 block text-sm text-gray-900'}}) }}
                </div>
                {{ form_errors(registrationForm.agreeTerms) }}

                <div>
                    <button type=\"submit\" class=\"w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
                        Register
                    </button>
                </div>
            {{ form_end(registrationForm) }}

            <div class=\"mt-6\">
                <div class=\"relative\">
                    <div class=\"absolute inset-0 flex items-center\">
                        <div class=\"w-full border-t border-gray-300\"></div>
                    </div>
                    <div class=\"relative flex justify-center text-sm\">
                        <span class=\"px-2 bg-white text-gray-500\">
                            Already registered?
                        </span>
                    </div>
                </div>

                <div class=\"mt-6\">
                    <a href=\"{{ path('app_login') }}\" class=\"w-full flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
                        Sign in
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "registration/register.html.twig", "/project/sandbox/user-workspace/templates/registration/register.html.twig");
    }
}
