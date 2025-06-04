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

/* base.html.twig */
class __TwigTemplate_2e4e8175ea7d00319331576778d21339 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    ";
        // line 9
        yield "    <script src=\"https://cdn.tailwindcss.com\"></script>
    
    ";
        // line 12
        yield "    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    
    ";
        // line 15
        yield "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
    
    ";
        // line 18
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>

    ";
        // line 26
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 27
        yield "</head>
<body class=\"bg-gray-50\">
    <nav class=\"bg-white shadow-lg\">
        <div class=\"max-w-7xl mx-auto px-4\">
            <div class=\"flex justify-between h-16\">
                <div class=\"flex\">
                    <div class=\"flex-shrink-0 flex items-center\">
                        <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-xl font-bold text-gray-800\">
                            Parcel Tracking
                        </a>
                    </div>
                    <div class=\"hidden sm:ml-6 sm:flex sm:space-x-8\">
                        ";
        // line 39
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "\" class=\"inline-flex items-center px-1 pt-1 text-gray-500 hover:text-gray-700\">
                                <i class=\"fas fa-search mr-2\"></i>Track
                            </a>
                        ";
        } else {
            // line 44
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"inline-flex items-center px-1 pt-1 text-gray-500 hover:text-gray-700\">
                                <i class=\"fas fa-search mr-2\"></i>Login to Track
                            </a>
                        ";
        }
        // line 48
        yield "                        ";
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcel_list");
            yield "\" class=\"inline-flex items-center px-1 pt-1 text-gray-500 hover:text-gray-700\">
                                <i class=\"fas fa-list mr-2\"></i>My Parcels
                            </a>
                            <a href=\"";
            // line 52
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcel_new");
            yield "\" class=\"inline-flex items-center px-1 pt-1 text-gray-500 hover:text-gray-700\">
                                <i class=\"fas fa-plus-circle mr-2\"></i>New Parcel
                            </a>
                            <a href=\"";
            // line 55
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_statistics");
            yield "\" class=\"inline-flex items-center px-1 pt-1 text-gray-500 hover:text-gray-700\">
                                <i class=\"fas fa-chart-bar mr-2\"></i>Statistics
                            </a>
                        ";
        }
        // line 59
        yield "                    </div>
                </div>
                <div class=\"flex items-center\">
                    ";
        // line 62
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"text-gray-600 hover:text-gray-900 transition-colors duration-200\">
                            <i class=\"fas fa-sign-out-alt mr-2\"></i>Logout
                        </a>
                    ";
        } else {
            // line 67
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"text-gray-600 hover:text-gray-900 transition-colors duration-200\">
                            <i class=\"fas fa-sign-in-alt mr-2\"></i>Login
                        </a>
                    ";
        }
        // line 71
        yield "                </div>
            </div>
        </div>
    </nav>

    <div class=\"max-w-7xl mx-auto py-6 sm:px-6 lg:px-8\">
        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "flashes", [], "any", false, false, false, 77));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 78
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 79
                yield "                <div class=\"mb-4 px-4 py-3 rounded-lg ";
                if (($context["label"] == "success")) {
                    yield "bg-green-100 text-green-700";
                } else {
                    yield "bg-red-100 text-red-700";
                }
                yield "\">
                    ";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "
        ";
        // line 85
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 86
        yield "    </div>

    ";
        // line 88
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 89
        yield "    
    <script>
        function handleTrackingInput(input) {
            input.classList.remove('border-red-500');
            input.parentElement.querySelector('.error-message').classList.add('hidden');
            
            // Remove any characters that aren't letters, numbers, or hyphens
            input.value = input.value.replace(/[^A-Za-z0-9-]/g, '');
        }

        // Show error message and update UI state
        function showError(input, error, message, button, icon, loadingSpinner) {
            input.classList.add('border-red-500');
            error.textContent = message;
            error.classList.remove('hidden');
            error.setAttribute('role', 'alert');
            button.disabled = false;
            icon.classList.remove('hidden');
            loadingSpinner.classList.add('hidden');
        }

        // Handle form submission
        function submitTrackingForm(form) {
            const input = form.querySelector('input');
            const button = form.querySelector('button');
            const error = form.querySelector('.error-message');
            const icon = button.querySelector('i');
            const loadingSpinner = button.querySelector('.loading-spinner');
            
            const trackingNumber = input.value.trim();
            
            if (!trackingNumber) {
                showError(input, error, 'Please enter a valid tracking number', button, icon, loadingSpinner);
                input.focus();
                return false;
            }
            
            if (!/^[A-Za-z0-9-]+\$/.test(trackingNumber)) {
                showError(input, error, 'Please enter a valid tracking number', button, icon, loadingSpinner);
                input.focus();
                return false;
            }
            
            // Show loading state
            button.disabled = true;
            icon.classList.add('hidden');
            loadingSpinner.classList.remove('hidden');
            
            // Navigate to tracking page
            window.location.href = '";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_parcel_show", ["trackingNumber" => "PLACEHOLDER"]);
        yield "'.replace('PLACEHOLDER', encodeURIComponent(trackingNumber));
        }
    </script>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Parcel Tracking";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 85
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  332 => 88,  316 => 85,  300 => 26,  283 => 6,  269 => 138,  218 => 89,  216 => 88,  212 => 86,  210 => 85,  207 => 84,  201 => 83,  192 => 80,  183 => 79,  178 => 78,  174 => 77,  166 => 71,  158 => 67,  150 => 63,  148 => 62,  143 => 59,  136 => 55,  130 => 52,  123 => 49,  120 => 48,  112 => 44,  104 => 40,  102 => 39,  94 => 34,  85 => 27,  83 => 26,  73 => 18,  69 => 15,  65 => 12,  61 => 9,  56 => 6,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Parcel Tracking{% endblock %}</title>
    
    {# Tailwind CSS #}
    <script src=\"https://cdn.tailwindcss.com\"></script>
    
    {# Google Fonts #}
    <link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">
    
    {# Font Awesome #}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
    
    {# Chart.js for statistics #}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>

    {% block stylesheets %}{% endblock %}
</head>
<body class=\"bg-gray-50\">
    <nav class=\"bg-white shadow-lg\">
        <div class=\"max-w-7xl mx-auto px-4\">
            <div class=\"flex justify-between h-16\">
                <div class=\"flex\">
                    <div class=\"flex-shrink-0 flex items-center\">
                        <a href=\"{{ path('app_home') }}\" class=\"text-xl font-bold text-gray-800\">
                            Parcel Tracking
                        </a>
                    </div>
                    <div class=\"hidden sm:ml-6 sm:flex sm:space-x-8\">
                        {% if is_granted('ROLE_USER') %}
                            <a href=\"{{ path('app_home') }}\" class=\"inline-flex items-center px-1 pt-1 text-gray-500 hover:text-gray-700\">
                                <i class=\"fas fa-search mr-2\"></i>Track
                            </a>
                        {% else %}
                            <a href=\"{{ path('app_login') }}\" class=\"inline-flex items-center px-1 pt-1 text-gray-500 hover:text-gray-700\">
                                <i class=\"fas fa-search mr-2\"></i>Login to Track
                            </a>
                        {% endif %}
                        {% if is_granted('ROLE_USER') %}
                            <a href=\"{{ path('app_parcel_list') }}\" class=\"inline-flex items-center px-1 pt-1 text-gray-500 hover:text-gray-700\">
                                <i class=\"fas fa-list mr-2\"></i>My Parcels
                            </a>
                            <a href=\"{{ path('app_parcel_new') }}\" class=\"inline-flex items-center px-1 pt-1 text-gray-500 hover:text-gray-700\">
                                <i class=\"fas fa-plus-circle mr-2\"></i>New Parcel
                            </a>
                            <a href=\"{{ path('app_statistics') }}\" class=\"inline-flex items-center px-1 pt-1 text-gray-500 hover:text-gray-700\">
                                <i class=\"fas fa-chart-bar mr-2\"></i>Statistics
                            </a>
                        {% endif %}
                    </div>
                </div>
                <div class=\"flex items-center\">
                    {% if is_granted('ROLE_USER') %}
                        <a href=\"{{ path('app_logout') }}\" class=\"text-gray-600 hover:text-gray-900 transition-colors duration-200\">
                            <i class=\"fas fa-sign-out-alt mr-2\"></i>Logout
                        </a>
                    {% else %}
                        <a href=\"{{ path('app_login') }}\" class=\"text-gray-600 hover:text-gray-900 transition-colors duration-200\">
                            <i class=\"fas fa-sign-in-alt mr-2\"></i>Login
                        </a>
                    {% endif %}
                </div>
            </div>
        </div>
    </nav>

    <div class=\"max-w-7xl mx-auto py-6 sm:px-6 lg:px-8\">
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"mb-4 px-4 py-3 rounded-lg {% if label == 'success' %}bg-green-100 text-green-700{% else %}bg-red-100 text-red-700{% endif %}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}

        {% block body %}{% endblock %}
    </div>

    {% block javascripts %}{% endblock %}
    
    <script>
        function handleTrackingInput(input) {
            input.classList.remove('border-red-500');
            input.parentElement.querySelector('.error-message').classList.add('hidden');
            
            // Remove any characters that aren't letters, numbers, or hyphens
            input.value = input.value.replace(/[^A-Za-z0-9-]/g, '');
        }

        // Show error message and update UI state
        function showError(input, error, message, button, icon, loadingSpinner) {
            input.classList.add('border-red-500');
            error.textContent = message;
            error.classList.remove('hidden');
            error.setAttribute('role', 'alert');
            button.disabled = false;
            icon.classList.remove('hidden');
            loadingSpinner.classList.add('hidden');
        }

        // Handle form submission
        function submitTrackingForm(form) {
            const input = form.querySelector('input');
            const button = form.querySelector('button');
            const error = form.querySelector('.error-message');
            const icon = button.querySelector('i');
            const loadingSpinner = button.querySelector('.loading-spinner');
            
            const trackingNumber = input.value.trim();
            
            if (!trackingNumber) {
                showError(input, error, 'Please enter a valid tracking number', button, icon, loadingSpinner);
                input.focus();
                return false;
            }
            
            if (!/^[A-Za-z0-9-]+\$/.test(trackingNumber)) {
                showError(input, error, 'Please enter a valid tracking number', button, icon, loadingSpinner);
                input.focus();
                return false;
            }
            
            // Show loading state
            button.disabled = true;
            icon.classList.add('hidden');
            loadingSpinner.classList.remove('hidden');
            
            // Navigate to tracking page
            window.location.href = '{{ path('app_parcel_show', {'trackingNumber': 'PLACEHOLDER'}) }}'.replace('PLACEHOLDER', encodeURIComponent(trackingNumber));
        }
    </script>
</body>
</html>
", "base.html.twig", "/project/sandbox/user-workspace/templates/base.html.twig");
    }
}
