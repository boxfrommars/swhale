<?php

/* login.twig */
class __TwigTemplate_2b1b2774ffff67ba91982378e7a6fd8578c0de9cfd14091f5e33252dccc77ce5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>MTS Login</title>
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
        .admin-image {
            width: 80px;
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
                <a class=\"brand\" href=\"/admin\">MTS Login</a>
            </div>
        </div>
    </div>

    <div class=\"container-fluid main\">
        <div class=\"row-fluid\">
            <div class=\"span2\" id=\"app-sidebar\">
                ";
        // line 79
        echo "            </div>
            <div class=\"span9\">
                <div class=\"row-fluid\">
                    <form class=\"form-horizontal\" action=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("admin_login_check");
        echo "\" method=\"post\">
                        ";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo "
                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"inputEmail\">Email</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"inputEmail\" name=\"_username\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Email\" />
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"inputPassword\">Password</label>
                            <div class=\"controls\">
                                <input type=\"password\" id=\"inputPassword\" placeholder=\"Password\" name=\"_password\" value=\"\">
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <div class=\"controls\">
                                <button type=\"submit\" class=\"btn\">Sign in</button>
                            </div>
                        </div>
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
</html>
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 87,  107 => 83,  103 => 82,  98 => 79,  19 => 1,);
    }
}
