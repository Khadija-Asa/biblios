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

/* admin/book/show.html.twig */
class __TwigTemplate_8703d53f7f6690fecd1853f3a394d484 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/book/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/book/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Livre";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<section class=\"container px-4\">
    <h1>Livre : </h1>

    ";
        // line 9
        if ((($tmp =  !(null === (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 9, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "        <div class=\"card mb-1 m-auto\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex justify-content-between\">
                    <h4 class=\"mb-1\">";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "html", null, true);
            yield "</h4>
                    <small class=\"text-muted\">Identifiant : ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
            yield "</small>
                </div>
                <div class=\"d-flex justify-content-between card-text\">
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item\"><h5>Date d'édition : </h5>";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 18, $this->source); })()), "editedAt", [], "any", false, false, false, 18), "d M Y"), "html", null, true);
            yield "</li>
                        <li class=\"list-group-item\"><h5>ISBN : </h5>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 19, $this->source); })()), "isbn", [], "any", false, false, false, 19), "html", null, true);
            yield "</li>
                        <li class=\"list-group-item\">
                            <h5>Auteur : </h5>
                            <ul class=\"list-group list-group-flush\">
                                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 23, $this->source); })()), "authors", [], "any", false, false, false, 23));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                // line 24
                yield "                                    <li class=\"list-group-item\">
                                        <a href=\"";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_author_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["author"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["author"], "name", [], "any", false, false, false, 25), "html", null, true);
                yield "</a>
                                    </li>
                                ";
                $context['_iterated'] = true;
            }
            // line 27
            if (!$context['_iterated']) {
                // line 28
                yield "                                    <li class=\"list-group-item\">Pas d'auteur connu</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['author'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "                            </ul>
                        </li>
                        <li class=\"list-group-item\">
                            <h5>Éditeur : </h5>
                            <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_editor_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 34, $this->source); })()), "editor", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 34, $this->source); })()), "editor", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
            yield "</a>
                        </li>
                        <li class=\"list-group-item\"><h5>Nombre de pages : </h5>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 36, $this->source); })()), "pageNumber", [], "any", false, false, false, 36), "html", null, true);
            yield "</li>
                        <li class=\"list-group-item\"><h5>Synopsis : </h5>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 37, $this->source); })()), "plot", [], "any", false, false, false, 37), "html", null, true);
            yield "</li>
                    </ul>
                    <div>
                        <img src=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 40, $this->source); })()), "cover", [], "any", false, false, false, 40), "html", null, true);
            yield "\" alt=\"Couverture de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 40, $this->source); })()), "title", [], "any", false, false, false, 40), "html", null, true);
            yield "\">
                    </div>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 46
            yield "        <div>Livre non trouvé</div>
    ";
        }
        // line 48
        yield "    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_book_index");
        yield "\" class=\"btn btn-primary\">Retour</a>
    <a href=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_book_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">Éditer</a>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/book/show.html.twig";
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
        return array (  203 => 49,  198 => 48,  194 => 46,  183 => 40,  177 => 37,  173 => 36,  166 => 34,  160 => 30,  153 => 28,  151 => 27,  142 => 25,  139 => 24,  134 => 23,  127 => 19,  123 => 18,  116 => 14,  112 => 13,  107 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Livre{% endblock %}

{% block body %}
<section class=\"container px-4\">
    <h1>Livre : </h1>

    {% if book is not null %}
        <div class=\"card mb-1 m-auto\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex justify-content-between\">
                    <h4 class=\"mb-1\">{{ book.title }}</h4>
                    <small class=\"text-muted\">Identifiant : {{ book.id }}</small>
                </div>
                <div class=\"d-flex justify-content-between card-text\">
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item\"><h5>Date d'édition : </h5>{{ book.editedAt|date('d M Y') }}</li>
                        <li class=\"list-group-item\"><h5>ISBN : </h5>{{ book.isbn }}</li>
                        <li class=\"list-group-item\">
                            <h5>Auteur : </h5>
                            <ul class=\"list-group list-group-flush\">
                                {% for author in book.authors %}
                                    <li class=\"list-group-item\">
                                        <a href=\"{{ path('app_admin_author_show', {id: author.id}) }}\">{{ author.name }}</a>
                                    </li>
                                {% else %}
                                    <li class=\"list-group-item\">Pas d'auteur connu</li>
                                {% endfor %}
                            </ul>
                        </li>
                        <li class=\"list-group-item\">
                            <h5>Éditeur : </h5>
                            <a href=\"{{ path('app_admin_editor_show', {id: book.editor.id}) }}\">{{ book.editor.name }}</a>
                        </li>
                        <li class=\"list-group-item\"><h5>Nombre de pages : </h5>{{ book.pageNumber }}</li>
                        <li class=\"list-group-item\"><h5>Synopsis : </h5>{{ book.plot }}</li>
                    </ul>
                    <div>
                        <img src=\"{{ book.cover }}\" alt=\"Couverture de {{ book.title }}\">
                    </div>
                </div>
            </div>
        </div>
    {% else %}
        <div>Livre non trouvé</div>
    {% endif %}
    <a href=\"{{ path('app_admin_book_index') }}\" class=\"btn btn-primary\">Retour</a>
    <a href=\"{{ path('app_admin_book_edit', {id: book.id}) }}\" class=\"btn btn-warning\">Éditer</a>
</section>
{% endblock %}", "admin/book/show.html.twig", "/home/khadidja/git/biblios/templates/admin/book/show.html.twig");
    }
}
