<?php

/* LCSAppBundle:Form:fields.html.twig */
class __TwigTemplate_4c4320dabd1f6515fbfddd408b66ae9b166b5b98be422ca04b88363e18224c82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'form_row' => array($this, 'block_form_row'),
            'submit_row' => array($this, 'block_submit_row'),
            'form_label' => array($this, 'block_form_label'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'date_widget' => array($this, 'block_date_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'datetime_control' => array($this, 'block_datetime_control'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'form_errors' => array($this, 'block_form_errors'),
            'image_widget' => array($this, 'block_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 31
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('form_row', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('submit_row', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('form_label', $context, $blocks);
        // line 111
        echo "
";
        // line 112
        $this->displayBlock('form_start', $context, $blocks);
        // line 128
        echo "
";
        // line 129
        $this->displayBlock('form_end', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('date_widget', $context, $blocks);
        // line 142
        echo "
";
        // line 143
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('datetime_control', $context, $blocks);
        // line 185
        echo "
";
        // line 186
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 194
        $this->displayBlock('form_errors', $context, $blocks);
        // line 206
        $this->displayBlock('image_widget', $context, $blocks);
        // line 220
        echo "
";
    }

    // line 1
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "text")) : ("text"));
        // line 4
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 5
        echo "        <div class=\"col-sm-10\">
            <input type=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        echo "/>
            ";
        // line 7
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "helper-text", array(), "array", true, true)) {
            // line 8
            echo "                <em>";
            echo $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "helper-text", array(), "array");
            echo "</em>
            ";
        }
        // line 10
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 14
    public function block_hidden_widget($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        ob_start();
        // line 16
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "hidden")) : ("hidden"));
        // line 17
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 18
        echo "        <input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : null))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\" ";
        }
        echo "/>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 22
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        <div class=\"col-sm-10\">
            <textarea rows=\"3\" class=\"form-control\" ";
        // line 25
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "</textarea>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 30
    public function block_checkbox_label($context, array $blocks = array())
    {
        echo "<label class=\"col-sm-2 control-label\"></label>";
    }

    // line 31
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        ob_start();
        // line 33
        echo "        <div class=\"col-sm-10\">
            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" ";
        // line 36
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " />";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
        echo "
                </label>
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 43
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        ob_start();
        // line 45
        echo "        ";
        if (((((isset($context["required"]) ? $context["required"] : null) && (null === (isset($context["empty_value"]) ? $context["empty_value"] : null))) &&  !(isset($context["empty_value_in_choices"]) ? $context["empty_value_in_choices"] : null)) &&  !(isset($context["multiple"]) ? $context["multiple"] : null))) {
            // line 46
            echo "            ";
            $context["required"] = false;
            // line 47
            echo "        ";
        }
        // line 48
        echo "
        ";
        // line 49
        if (!twig_in_filter("select2", (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")))) {
            // line 50
            echo "            ";
            $context["extraClasses"] = " form-control";
            // line 51
            echo "        ";
        }
        // line 52
        echo "
        ";
        // line 53
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . ((array_key_exists("extraClasses", $context)) ? (_twig_default_filter((isset($context["extraClasses"]) ? $context["extraClasses"] : null), "")) : (""))))));
        // line 54
        echo "        <div class=\"col-sm-10\">
            <select ";
        // line 55
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            echo " multiple=\"multiple\"";
        }
        echo ">
                ";
        // line 56
        if ( !(null === (isset($context["empty_value"]) ? $context["empty_value"] : null))) {
            // line 57
            echo "                    <option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : null) && twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</option>
                ";
        }
        // line 59
        echo "                ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null)) > 0)) {
            // line 60
            echo "                    ";
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null);
            // line 61
            echo "                    ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
                    ";
            // line 62
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : null)) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : null)))) {
                // line 63
                echo "                        <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : null), "html", null, true);
                echo "</option>
                    ";
            }
            // line 65
            echo "                ";
        }
        // line 66
        echo "                ";
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : null);
        // line 67
        echo "                ";
        $this->displayBlock("choice_widget_options", $context, $blocks);
        echo "
            </select>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 73
    public function block_form_row($context, array $blocks = array())
    {
        // line 74
        echo "    ";
        ob_start();
        // line 75
        echo "        <div class=\"form-group\">
            ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        echo "
            ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 83
    public function block_submit_row($context, array $blocks = array())
    {
        // line 84
        echo "    ";
        ob_start();
        // line 85
        echo "        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 93
    public function block_form_label($context, array $blocks = array())
    {
        // line 94
        ob_start();
        // line 95
        echo "    ";
        if ( !((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 96
            echo "        ";
            if ( !(isset($context["compound"]) ? $context["compound"] : null)) {
                // line 97
                echo "    ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
            }
            // line 99
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 100
                echo "    ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 102
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 103
                echo "    ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
            }
            // line 105
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " col-sm-2 control-label"))));
            // line 106
            echo "
        <label";
            // line 107
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
            echo "</label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 112
    public function block_form_start($context, array $blocks = array())
    {
        // line 113
        ob_start();
        // line 114
        echo "    ";
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : null));
        // line 115
        echo "    ";
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : null), array(0 => "GET", 1 => "POST"))) {
            // line 116
            echo "    ";
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : null);
        } else {
            // line 118
            echo "    ";
            $context["form_method"] = "POST";
        }
        // line 120
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 121
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("role" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "role", array()), "")) : ("")) . " form"))));
        // line 122
        echo "    <form name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "name", array()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : null)), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "\"";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : null)) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">
        ";
        // line 123
        if (((isset($context["form_method"]) ? $context["form_method"] : null) != (isset($context["method"]) ? $context["method"] : null))) {
            // line 124
            echo "    <input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : null), "html", null, true);
            echo "\" />
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 129
    public function block_form_end($context, array $blocks = array())
    {
        // line 130
        ob_start();
        // line 131
        echo "        ";
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : null))) {
            // line 132
            echo "    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "
";
        }
        // line 134
        echo "    </form>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 138
    public function block_date_widget($context, array $blocks = array())
    {
        // line 139
        echo "    ";
        $context["showTimePicker"] = false;
        // line 140
        echo "    ";
        $this->displayBlock("datetime_control", $context, $blocks);
        echo "
";
    }

    // line 143
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 144
        echo "    ";
        $context["showTimePicker"] = true;
        // line 145
        echo "    ";
        $this->displayBlock("datetime_control", $context, $blocks);
        echo "
";
    }

    // line 148
    public function block_datetime_control($context, array $blocks = array())
    {
        // line 149
        echo "    ";
        ob_start();
        // line 150
        echo "        ";
        if (((isset($context["widget"]) ? $context["widget"] : null) == "single_text")) {
            // line 151
            echo "
            ";
            // line 152
            $context["valueExpression"] = "";
            // line 153
            echo "            ";
            if ((isset($context["showTimePicker"]) ? $context["showTimePicker"] : null)) {
                // line 154
                echo "                ";
                $context["idClass"] = "datetimepicker-control";
                // line 155
                echo "                ";
                $context["formatExpression"] = "DD-MM-YYYY HH:mm";
                // line 156
                echo "                ";
                if ((isset($context["value"]) ? $context["value"] : null)) {
                    // line 157
                    echo "                    ";
                    $context["valueExpression"] = twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "d-m-Y H:i");
                    // line 158
                    echo "                ";
                }
                // line 159
                echo "            ";
            } else {
                // line 160
                echo "                ";
                $context["idClass"] = "datepicker-control";
                // line 161
                echo "                ";
                $context["formatExpression"] = "DD-MM-YYYY";
                // line 162
                echo "                ";
                if ((isset($context["value"]) ? $context["value"] : null)) {
                    // line 163
                    echo "                    ";
                    $context["valueExpression"] = twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "d-m-Y");
                    // line 164
                    echo "                ";
                }
                // line 165
                echo "            ";
            }
            // line 166
            echo "
            ";
            // line 167
            if ( !array_key_exists("class", $context)) {
                // line 168
                echo "                ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim((((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control ") . (isset($context["idClass"]) ? $context["idClass"] : null)))));
                // line 169
                echo "            ";
            }
            // line 170
            echo "
            ";
            // line 172
            echo "
            <div class=\"col-sm-10\">
                <div class='input-group datepicker-control' id='div-";
            // line 174
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "' style=\"max-width: 150px;\">
                    <input type='text' class=\"form-control\" data-format=\"";
            // line 175
            echo twig_escape_filter($this->env, (isset($context["formatExpression"]) ? $context["formatExpression"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["valueExpression"]) ? $context["valueExpression"] : null), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo "/>
                <span class=\"input-group-addon\">
                    <span class=\"icon ion-ios7-calendar-outline\"></span>
                </span>
                </div>
            </div>

        ";
        }
        // line 183
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 186
    public function block_submit_widget($context, array $blocks = array())
    {
        // line 187
        echo "    ";
        ob_start();
        // line 188
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "submit")) : ("submit"));
        // line 189
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " btn btn-default"))));
        // line 190
        echo "        ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 194
    public function block_form_errors($context, array $blocks = array())
    {
        // line 195
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 196
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 197
                echo "<div class=\"alert alert-danger alert-icon\">
                <div class=\"icon\"><i class=\"icon ion-ios7-close-empty\"></i></div>
                ";
                // line 199
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    // line 206
    public function block_image_widget($context, array $blocks = array())
    {
        // line 207
        echo "
    <div class=\"col-sm-10\">
        <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
            <div class=\"fileinput-preview thumbnail\" data-trigger=\"fileinput\" style=\"width: 200px; height: 150px;cursor: pointer\"></div>
            <div>
                <span class=\"btn btn-default btn-file\"><span class=\"fileinput-new\">Seleccionar...</span>
                <span class=\"fileinput-exists\">Cambiar...</span>
                <input type=\"file\" name=\"";
        // line 214
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : null), "html", null, true);
        echo "\" accept=\"image/*\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " class=\"jasny-input-file\"></span>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "LCSAppBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  685 => 214,  676 => 207,  673 => 206,  662 => 199,  658 => 197,  654 => 196,  652 => 195,  649 => 194,  641 => 190,  638 => 189,  635 => 188,  632 => 187,  629 => 186,  624 => 183,  609 => 175,  605 => 174,  601 => 172,  598 => 170,  595 => 169,  592 => 168,  590 => 167,  587 => 166,  584 => 165,  581 => 164,  578 => 163,  575 => 162,  572 => 161,  569 => 160,  566 => 159,  563 => 158,  560 => 157,  557 => 156,  554 => 155,  551 => 154,  548 => 153,  546 => 152,  543 => 151,  540 => 150,  537 => 149,  534 => 148,  527 => 145,  524 => 144,  521 => 143,  514 => 140,  511 => 139,  508 => 138,  502 => 134,  496 => 132,  493 => 131,  491 => 130,  488 => 129,  479 => 124,  477 => 123,  452 => 122,  449 => 121,  446 => 120,  442 => 118,  438 => 116,  435 => 115,  432 => 114,  430 => 113,  427 => 112,  406 => 107,  403 => 106,  400 => 105,  396 => 103,  393 => 102,  389 => 100,  386 => 99,  382 => 97,  379 => 96,  376 => 95,  374 => 94,  371 => 93,  362 => 87,  358 => 85,  355 => 84,  352 => 83,  344 => 78,  340 => 77,  336 => 76,  333 => 75,  330 => 74,  327 => 73,  317 => 67,  314 => 66,  311 => 65,  305 => 63,  303 => 62,  298 => 61,  295 => 60,  292 => 59,  282 => 57,  280 => 56,  273 => 55,  270 => 54,  268 => 53,  265 => 52,  262 => 51,  259 => 50,  257 => 49,  254 => 48,  251 => 47,  248 => 46,  245 => 45,  242 => 44,  239 => 43,  219 => 36,  214 => 33,  211 => 32,  208 => 31,  202 => 30,  192 => 25,  189 => 24,  186 => 23,  183 => 22,  167 => 18,  164 => 17,  161 => 16,  158 => 15,  155 => 14,  149 => 10,  143 => 8,  141 => 7,  129 => 6,  126 => 5,  123 => 4,  120 => 3,  117 => 2,  114 => 1,  109 => 220,  107 => 206,  105 => 194,  103 => 186,  100 => 185,  98 => 148,  95 => 147,  93 => 143,  90 => 142,  88 => 138,  85 => 137,  83 => 129,  80 => 128,  78 => 112,  75 => 111,  73 => 93,  70 => 92,  68 => 83,  65 => 82,  63 => 73,  60 => 72,  58 => 43,  55 => 42,  53 => 31,  51 => 30,  48 => 29,  46 => 22,  43 => 21,  41 => 14,  38 => 13,  36 => 1,);
    }
}
