<?php

/* common/form_div_layout.html.twig */
class __TwigTemplate_13dc3c644ad06ebf5fc88a75c2df9b132d761a2eae26bd56263d11b5cbf03158 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'form_label' => array($this, 'block_form_label'),
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'submit_row' => array($this, 'block_submit_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_form($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal", "novalidate" => "novalidate")));
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function block_submit_widget($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => "btn btn-primary"));
        // line 18
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 19
        echo "    ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
";
    }

    // line 22
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 25
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label', array("in_choice_list" => true, "widget" =>             // line 30
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget'), "multiple" => (isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))));
            // line 33
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 38
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        ob_start();
        // line 40
        echo "        ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 41
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 43
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 44
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'errors');
            echo "
                ";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time"), 'errors');
            echo "
                ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'widget', array("datetime" => true));
            echo "&nbsp;
                ";
            // line 47
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time"), 'widget', array("datetime" => true));
            echo "
            </div>
        ";
        }
        // line 50
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 53
    public function block_date_widget($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        ob_start();
        // line 55
        echo "        ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 56
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 58
            echo "            ";
            if (((!array_key_exists("datetime", $context)) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 59
                echo "                <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
            ";
            }
            // line 61
            echo "            ";
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 62
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year"), 'widget', array("attr" => array("class" => "span1"))), "{{ month }}" =>             // line 63
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month"), 'widget', array("attr" => array("class" => "span1"))), "{{ day }}" =>             // line 64
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day"), 'widget', array("attr" => array("class" => "span1")))));
            // line 65
            echo "
            ";
            // line 66
            if (((!array_key_exists("datetime", $context)) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 67
                echo "                </div>
            ";
            }
            // line 69
            echo "        ";
        }
        // line 70
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 73
    public function block_time_widget($context, array $blocks = array())
    {
        // line 74
        echo "    ";
        ob_start();
        // line 75
        echo "        ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 76
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 78
            echo "            ";
            if (((!array_key_exists("datetime", $context)) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 79
                echo "                <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
            ";
            }
            // line 81
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour"), 'widget', array("attr" => array("class" => "span1")));
            echo ":";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute"), 'widget', array("attr" => array("class" => "span1")));
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second"), 'widget', array("attr" => array("class" => "span1")));
            }
            // line 82
            echo "            ";
            if (((!array_key_exists("datetime", $context)) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 83
                echo "                </div>
            ";
            }
            // line 85
            echo "
        ";
        }
        // line 87
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 90
    public function block_money_widget($context, array $blocks = array())
    {
        // line 91
        echo "    ";
        ob_start();
        // line 92
        echo "        ";
        $context["append"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 93
        echo "        <div class=\"";
        echo (((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) ? ("input-append") : ("input-prepend"));
        echo "\">
            ";
        // line 94
        if ((!(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append")))) {
            // line 95
            echo "                <span class=\"add-on\">
                ";
            // line 96
            echo twig_escape_filter($this->env, strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "
            </span>
            ";
        }
        // line 99
        echo "            ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            ";
        // line 100
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 101
            echo "                <span class=\"add-on\">
                ";
            // line 102
            echo twig_escape_filter($this->env, strtr((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "
            </span>
            ";
        }
        // line 105
        echo "        </div>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 110
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 111
        echo "    ";
        ob_start();
        // line 112
        echo "        <div class=\"input-append\">
            ";
        // line 113
        $this->displayParentBlock("percent_widget", $context, $blocks);
        echo "
            <span class=\"add-on\">%</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 121
    public function block_form_label($context, array $blocks = array())
    {
        // line 122
        echo "    ";
        ob_start();
        // line 123
        echo "        ";
        if (((array_key_exists("in_choice_list", $context) && (isset($context["in_choice_list"]) ? $context["in_choice_list"] : $this->getContext($context, "in_choice_list"))) && array_key_exists("widget", $context))) {
            // line 124
            echo "            ";
            if ((!(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")))) {
                // line 125
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 126
                echo "            ";
            }
            // line 127
            echo "            ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 128
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " required"))));
                // line 129
                echo "            ";
            }
            // line 130
            echo "            ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 131
                echo "                ";
                $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
                // line 132
                echo "            ";
            }
            // line 133
            echo "
            ";
            // line 134
            if ((array_key_exists("multiple", $context) && (isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
                // line 135
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " checkbox"))));
                // line 136
                echo "            ";
            } elseif ((array_key_exists("multiple", $context) && (!(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))))) {
                // line 137
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " radio"))));
                // line 138
                echo "            ";
            }
            // line 139
            echo "            <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 140
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo "
            <span>
                ";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            </span>
            </label>
        ";
        } else {
            // line 146
            echo "            ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " control-label"))));
            // line 147
            echo "            ";
            $this->displayParentBlock("form_label", $context, $blocks);
            echo "
        ";
        }
        // line 149
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 154
    public function block_form_row($context, array $blocks = array())
    {
        // line 155
        echo "    ";
        ob_start();
        // line 156
        echo "        <div class=\"control-group";
        if ((!$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
            <div class=\"controls\">
                ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 166
    public function block_form_errors($context, array $blocks = array())
    {
        // line 167
        echo "    ";
        ob_start();
        // line 168
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 169
            echo "            ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent")) {
                echo "<span class=\"help-inline\">";
            } else {
                echo "<div class=\"alert alert-error error\" >";
            }
            // line 170
            echo "            ";
            $this->displayParentBlock("form_errors", $context, $blocks);
            echo "
            ";
            // line 171
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent")) {
                echo "</span>";
            } else {
                echo "</div>";
            }
            // line 172
            echo "        ";
        }
        // line 173
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 176
    public function block_submit_row($context, array $blocks = array())
    {
        // line 177
        echo "    <div class=\"form-actions\">
        ";
        // line 178
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "common/form_div_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 178,  473 => 177,  470 => 176,  465 => 173,  462 => 172,  456 => 171,  451 => 170,  444 => 169,  441 => 168,  438 => 167,  435 => 166,  426 => 160,  422 => 159,  417 => 157,  410 => 156,  407 => 155,  404 => 154,  399 => 149,  393 => 147,  390 => 146,  383 => 142,  378 => 140,  362 => 139,  359 => 138,  356 => 137,  353 => 136,  350 => 135,  348 => 134,  345 => 133,  342 => 132,  339 => 131,  336 => 130,  333 => 129,  330 => 128,  327 => 127,  324 => 126,  321 => 125,  318 => 124,  315 => 123,  312 => 122,  309 => 121,  300 => 113,  297 => 112,  294 => 111,  291 => 110,  284 => 105,  278 => 102,  275 => 101,  273 => 100,  268 => 99,  262 => 96,  259 => 95,  257 => 94,  252 => 93,  249 => 92,  246 => 91,  243 => 90,  238 => 87,  234 => 85,  230 => 83,  227 => 82,  218 => 81,  212 => 79,  209 => 78,  203 => 76,  200 => 75,  197 => 74,  194 => 73,  189 => 70,  186 => 69,  182 => 67,  180 => 66,  177 => 65,  175 => 64,  174 => 63,  173 => 62,  171 => 61,  165 => 59,  162 => 58,  156 => 56,  153 => 55,  150 => 54,  147 => 53,  142 => 50,  136 => 47,  132 => 46,  128 => 45,  124 => 44,  119 => 43,  113 => 41,  110 => 40,  107 => 39,  104 => 38,  99 => 35,  92 => 33,  90 => 30,  88 => 25,  83 => 24,  80 => 23,  77 => 22,  70 => 19,  67 => 18,  64 => 17,  61 => 16,  54 => 10,  50 => 9,  42 => 7,  45 => 8,  39 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
