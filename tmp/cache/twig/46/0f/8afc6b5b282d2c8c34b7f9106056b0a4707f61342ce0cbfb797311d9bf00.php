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
            padding: 0px 8px;
        }
        .table .treetable-active, .table .treetable-active:hover, .table .treetable-active td:hover, .table .treetable-active td {
            background-color: #007fff !important;
        }
        .treetable-active a, .treetable-active a:hover {
            color: #eee;
        }
    </style>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
    <link rel=\"shortcut icon\" href=\"/favicon.ico\" />
    <script src=\"/vendor/jquery/jquery-1.9.1.js\"></script>
    <script src=\"/vendor/bootstrap/js/bootstrap.js\"></script>
    <link href=\"/vendor/treetable/jquery.treetable.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/vendor/treetable/jquery.treetable.theme.default.css\" rel=\"stylesheet\" type=\"text/css\" />
    <script src=\"/vendor/treetable/jquery.treetable.js\"></script>

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
                        <li><a href=\"/admin/logout\">Выйти</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container-fluid main\">
        <div class=\"row-fluid\">
            <div class=\"span2\" id=\"app-sidebar\">
                <h2>&nbsp;</h2>
                <table class=\"table table-hover treetable\">
                    <tbody>
                    ";
        // line 125
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["_pages"]) ? $context["_pages"] : $this->getContext($context, "_pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 126
            echo "                        <tr data-tt-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getId"), "html", null, true);
            echo "\" data-tt-parent-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getIdParent"), "html", null, true);
            echo "\">
                            <td><a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_page_edit", array("id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getId"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "getTitle"), "html", null, true);
            echo "</a></td>
                            <td>

                                <div class=\"dropdown\">
                                    <a class=\"btn dropdown-toggle pull-right action edit\" data-toggle=\"dropdown\" href=\"#\">
                                        <i class=\"icon-edit\"></i>
                                        <i class=\"caret\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dLabel\">
                                        <li><a href=\"\">Подстраницы</a></li>
                                        <li class=\"divider\"></li>
                                        <li><a href=\"#\">Редактировать</a></li>
                                        <li class=\"dropdown-submenu\">
                                            <a href=\"#\">Добавить...</a>
                                            <ul class=\"dropdown-menu\">
                                                <li><a tabindex=\"-1\" href=\"#\">Подстраницу</a></li>
                                                <li><a href=\"#\">Рекомендацию</a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li><a tabindex=\"-1\" href=\"#\">Удалить</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "                    </tbody>
                </table>
            </div>
            <script>
                var currentPageId = null;

                \$(document).ready(function(){
                    \$('.treetable').treetable({
                        expandable: true
                    });
                    \$.each(\$(\".treetable\").data(\"treetable\").nodes, function(key, value){
                        if (currentPageId && \$(value).attr('id') == currentPageId) {
                            \$(\".treetable\").treetable(\"reveal\", value.id);
                            \$('[data-tt-id=\"' + value.id +  '\"]').addClass('treetable-active');
                        }
                    });
                });
            </script>
            <div class=\"span9\">
                <div class=\"row-fluid\">
                    ";
        // line 173
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "flashbag"), "all"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 174
            echo "                        <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "\">
                            <a class=\"close\" data-dismiss=\"alert\" href=\"#\">&times;</a>
                            ";
            // line 176
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 177
                echo "                                ";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "<br />
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "                    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
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
        return "admin/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 181,  226 => 177,  216 => 174,  190 => 153,  145 => 125,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  529 => 92,  527 => 91,  524 => 90,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  480 => 75,  478 => 74,  467 => 72,  464 => 71,  461 => 70,  459 => 69,  450 => 64,  442 => 62,  437 => 61,  433 => 60,  428 => 59,  423 => 57,  414 => 52,  408 => 50,  405 => 49,  403 => 48,  400 => 47,  388 => 42,  385 => 41,  377 => 37,  374 => 36,  371 => 35,  368 => 34,  366 => 33,  363 => 32,  355 => 27,  344 => 24,  337 => 22,  335 => 21,  332 => 20,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  293 => 6,  290 => 5,  288 => 4,  285 => 3,  281 => 411,  276 => 395,  271 => 374,  266 => 366,  263 => 365,  260 => 363,  258 => 354,  255 => 353,  253 => 342,  250 => 341,  248 => 336,  245 => 335,  240 => 326,  235 => 179,  233 => 304,  225 => 298,  222 => 176,  220 => 290,  217 => 289,  215 => 280,  210 => 270,  207 => 269,  204 => 267,  202 => 266,  199 => 265,  191 => 246,  184 => 233,  181 => 232,  179 => 224,  176 => 223,  169 => 210,  166 => 209,  164 => 203,  161 => 202,  159 => 196,  154 => 189,  151 => 188,  149 => 126,  146 => 181,  144 => 176,  141 => 175,  139 => 169,  134 => 161,  131 => 160,  129 => 148,  126 => 147,  121 => 131,  116 => 116,  114 => 111,  111 => 110,  109 => 105,  106 => 104,  101 => 89,  96 => 67,  94 => 57,  91 => 56,  89 => 47,  86 => 46,  84 => 41,  81 => 40,  79 => 32,  76 => 31,  74 => 20,  71 => 19,  69 => 13,  66 => 12,  476 => 178,  473 => 177,  470 => 73,  465 => 173,  462 => 172,  456 => 68,  451 => 170,  444 => 169,  441 => 168,  438 => 167,  435 => 166,  426 => 58,  422 => 159,  417 => 157,  410 => 156,  407 => 155,  404 => 154,  399 => 149,  393 => 147,  390 => 43,  383 => 142,  378 => 140,  362 => 139,  359 => 138,  356 => 137,  353 => 136,  350 => 26,  348 => 134,  345 => 133,  342 => 23,  339 => 131,  336 => 130,  333 => 129,  330 => 128,  327 => 127,  324 => 126,  321 => 125,  318 => 124,  315 => 123,  312 => 122,  309 => 121,  300 => 113,  297 => 112,  294 => 111,  291 => 110,  284 => 105,  278 => 410,  275 => 101,  273 => 394,  268 => 373,  262 => 96,  259 => 95,  257 => 94,  252 => 93,  249 => 92,  246 => 91,  243 => 327,  238 => 312,  234 => 85,  230 => 303,  227 => 301,  218 => 81,  212 => 173,  209 => 78,  203 => 76,  200 => 75,  197 => 249,  194 => 248,  189 => 240,  186 => 239,  182 => 67,  180 => 66,  177 => 65,  175 => 64,  174 => 217,  173 => 62,  171 => 216,  165 => 59,  162 => 58,  156 => 127,  153 => 55,  150 => 54,  147 => 53,  142 => 50,  136 => 168,  132 => 46,  128 => 45,  124 => 132,  119 => 117,  113 => 41,  110 => 40,  107 => 39,  104 => 90,  99 => 68,  92 => 33,  90 => 30,  88 => 25,  83 => 24,  80 => 23,  77 => 22,  70 => 19,  67 => 18,  64 => 3,  61 => 2,  54 => 10,  50 => 9,  42 => 7,  45 => 8,  39 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
