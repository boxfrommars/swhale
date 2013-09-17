<?php

/* admin/layout.twig */
class __TwigTemplate_460f8afc6b5b282d2c8c34b7f9106056b0a4707f61342ce0cbfb797311d9bf00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );

        $this->macros = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Admin</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Dmitry Groza\">
    <link href=\"/vendor/bootstrap/css/metro.bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/vendor/bootstrap/css/bootstrap-responsive.css\" rel=\"stylesheet\">
    <style>
            /* sticky footer */
        html, body {
            height: 100%;
        }

        #wrap {
            min-height: 100%;
            height: auto !important;
            height: 100%;
            margin: 0 auto -60px;
        }

        footer {
            height: 60px;
        }
        #push {
            height: 80px;
        }
        @media (max-width: 767px) {
            #footer {
                margin-left: -20px;
                margin-right: -20px;
                padding-left: 20px;
                padding-right: 20px;
            }
        }
            /* /sticky footer */

        footer {
            background-color: #f5f5f5;
            line-height: 60px;
        }
        .admin-image {
            padding-right: 15px;
        }
        .btn.action {
            padding: 1px 8px;
        }
    </style>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    <link rel=\"shortcut icon\" href=\"/favicon.ico\" />
    <script src=\"/vendor/jquery/jquery-1.9.1.js\"></script>
    <script src=\"/vendor/bootstrap/js/bootstrap.js\"></script>

    <script src=\"/js/script.js\"></script>
</head>

<body>
<div id=\"wrap\">
    <div class=\"navbar navbar-top navbar-inverse\">
        <div class=\"navbar-inner\">
            <div class=\"container-fluid\">
                <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </a>
                <a class=\"brand\" href=\"/admin\">Admin</a>

                <div class=\"nav-collapse\">
                    <ul class=\"nav\">
                        <li><a href=\"/admin/news\">Новости</a></li>
                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" id=\"gLabel\" role=\"button\" data-toggle=\"dropdown\" data-target=\"#\" href=\"/catalog\">
                                Галерея
                                <b class=\"caret\"></b>
                            </a>
                            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"gLabel\">
                                <li><a href=\"/admin/gallery\">Галерея</a></li>
                                <li><a href=\"/admin/gallerymain\">Слайдер</a></li>
                            </ul>
                        </li>
                        <li><a href=\"/admin/page-text\">Тексты</a></li>
                        <li><a href=\"/admin/settings\">Настройки</a></li>
                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" id=\"dLabel\" role=\"button\" data-toggle=\"dropdown\" data-target=\"#\" href=\"/catalog\">
                                Каталог
                                <b class=\"caret\"></b>
                            </a>
                            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dLabel\">
                                <li><a href=\"/admin/category\">Категории</a></li>
                                <li><a href=\"/admin/thesaurus\">Справочники</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class=\"nav pull-right\">
                        <li><a href=\"/\">Сайт</a></li>
                        <li class=\"divider-vertical\"></li>
                        <li><a href=\"/logout\">Выйти</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container-fluid main\">
        <div class=\"row-fluid\">
            <div class=\"span2\" id=\"app-sidebar\">
                <h2>Страницы</h2>
                <table class=\"table table-hover table-striped pages-tree\">
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class=\"span9\">
                <div class=\"row-fluid\">
                    ";
        // line 121
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash")));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 122
            echo "                        <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "\">
                            <a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a>
                            ";
            // line 124
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 125
                echo "                                ";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "<br />
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getTitle"), "html", null, true);
        echo "</h2>
                    <form name=\"form\" method=\"post\" action=\"\" class=\"form-horizontal\" novalidate=\"novalidate\">
                        ";
        // line 131
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            <div class=\"form-actions\">
                                <button type=\"submit\" class=\"btn btn-primary\">Отправить</button>
                                <button type=\"reset\" class=\"btn btn-secondary\">Отмена</button>
                            </div>
                        ";
        // line 137
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id=\"push\"></div>
</div>
<footer>
    <div class=\"container-fluid\">
        &copy; 2013 <i>to Insomnia with Love</i>
    </div>
</footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "admin/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 137,  184 => 132,  180 => 131,  174 => 129,  167 => 127,  158 => 125,  154 => 124,  148 => 122,  144 => 121,  22 => 1,);
    }
}
