<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_a471bfe67f01027432b1a5bb15b07c69cad9381c6fea611c6c0883fa112bd318 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  79 => 29,  75 => 28,  70 => 26,  62 => 24,  50 => 15,  46 => 14,  30 => 5,  24 => 2,  32 => 6,  54 => 12,  45 => 9,  38 => 7,  29 => 4,  26 => 3,  22 => 2,  19 => 1,  474 => 168,  470 => 167,  466 => 166,  462 => 165,  458 => 164,  454 => 163,  450 => 162,  446 => 161,  442 => 160,  438 => 159,  434 => 158,  430 => 157,  426 => 156,  422 => 155,  418 => 154,  414 => 153,  410 => 152,  406 => 151,  402 => 150,  398 => 149,  394 => 148,  390 => 147,  386 => 146,  382 => 145,  378 => 144,  374 => 143,  370 => 142,  366 => 141,  362 => 140,  358 => 139,  351 => 135,  343 => 133,  339 => 132,  335 => 131,  331 => 130,  327 => 129,  324 => 128,  322 => 119,  320 => 116,  317 => 115,  311 => 90,  303 => 88,  300 => 87,  295 => 82,  290 => 81,  286 => 78,  283 => 77,  278 => 92,  276 => 87,  271 => 85,  267 => 83,  265 => 82,  261 => 81,  257 => 79,  255 => 77,  252 => 76,  250 => 75,  229 => 59,  226 => 58,  223 => 57,  218 => 56,  209 => 45,  205 => 44,  201 => 43,  196 => 41,  192 => 40,  187 => 38,  183 => 37,  179 => 36,  175 => 35,  171 => 34,  167 => 33,  163 => 32,  159 => 31,  155 => 30,  150 => 29,  148 => 26,  145 => 25,  140 => 22,  130 => 115,  124 => 112,  116 => 107,  111 => 105,  97 => 96,  94 => 94,  92 => 57,  88 => 56,  81 => 52,  77 => 51,  74 => 50,  72 => 25,  66 => 25,  57 => 16,  52 => 14,  47 => 12,  37 => 8,  359 => 278,  347 => 134,  326 => 251,  313 => 241,  268 => 199,  212 => 148,  180 => 121,  172 => 116,  132 => 170,  103 => 99,  99 => 54,  95 => 53,  91 => 35,  56 => 20,  49 => 16,  42 => 12,  33 => 5,  31 => 4,  28 => 1,);
    }
}
