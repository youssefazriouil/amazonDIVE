<?php

/* DiveFrontBundle::_flashMessages.html.twig */
class __TwigTemplate_f045b51b9e52070bfca9ffa03a53031428018e9cc661bc0f9591b24c9c7f967d extends Twig_Template
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
        echo "<div id=\"flash_messages\">
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 3
            echo "    <div class=\"alert alert-danger\" onclick=\"\$(this).fadeTo(300,0, function(){ \$(this).hide(); });\">
        ";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "    <div class=\"alert alert-info\" onclick=\"\$(this).fadeTo(300,0, function(){ \$(this).hide(); });\">
        ";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "DiveFrontBundle::_flashMessages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  45 => 9,  38 => 7,  29 => 4,  26 => 3,  22 => 2,  19 => 1,  474 => 168,  470 => 167,  466 => 166,  462 => 165,  458 => 164,  454 => 163,  450 => 162,  446 => 161,  442 => 160,  438 => 159,  434 => 158,  430 => 157,  426 => 156,  422 => 155,  418 => 154,  414 => 153,  410 => 152,  406 => 151,  402 => 150,  398 => 149,  394 => 148,  390 => 147,  386 => 146,  382 => 145,  378 => 144,  374 => 143,  370 => 142,  366 => 141,  362 => 140,  358 => 139,  351 => 135,  347 => 134,  343 => 133,  339 => 132,  335 => 131,  331 => 130,  327 => 129,  324 => 128,  322 => 119,  320 => 116,  317 => 115,  311 => 90,  303 => 88,  300 => 87,  295 => 82,  290 => 81,  286 => 78,  283 => 77,  278 => 92,  271 => 85,  267 => 83,  265 => 82,  261 => 81,  257 => 79,  255 => 77,  252 => 76,  250 => 75,  229 => 59,  226 => 58,  223 => 57,  218 => 56,  209 => 45,  205 => 44,  201 => 43,  196 => 41,  192 => 40,  187 => 38,  183 => 37,  179 => 36,  175 => 35,  171 => 34,  167 => 33,  163 => 32,  159 => 31,  155 => 30,  150 => 29,  148 => 26,  145 => 25,  140 => 22,  132 => 171,  130 => 115,  124 => 112,  116 => 107,  111 => 105,  97 => 96,  94 => 94,  92 => 57,  88 => 56,  81 => 52,  77 => 51,  74 => 50,  72 => 25,  66 => 22,  57 => 16,  52 => 14,  47 => 12,  37 => 8,  485 => 382,  473 => 373,  452 => 355,  439 => 345,  411 => 320,  356 => 268,  348 => 263,  340 => 258,  332 => 253,  314 => 238,  276 => 87,  242 => 176,  234 => 171,  174 => 118,  160 => 109,  103 => 99,  99 => 54,  95 => 53,  91 => 52,  56 => 20,  49 => 16,  42 => 8,  33 => 5,  31 => 4,  28 => 1,);
    }
}
