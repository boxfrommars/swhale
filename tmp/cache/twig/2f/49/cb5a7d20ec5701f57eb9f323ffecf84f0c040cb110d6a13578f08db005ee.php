<?php

/* layout.twig */
class __TwigTemplate_2f49cb5a7d20ec5701f57eb9f323ffecf84f0c040cb110d6a13578f08db005ee extends Twig_Template
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
            <div class=\"span3\" id=\"app-sidebar\">
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
        echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "html", null, true);
        echo "
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
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 121,  22 => 1,);
    }
}