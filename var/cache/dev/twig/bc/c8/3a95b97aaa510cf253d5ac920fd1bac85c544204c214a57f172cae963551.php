<?php

/* DiveFrontBundle::layout.html.twig */
class __TwigTemplate_bcc83a95b97aaa510cf253d5ac920fd1bac85c544204c214a57f172cae963551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'page' => array($this, 'block_page'),
            'header' => array($this, 'block_header'),
            'contentClass' => array($this, 'block_contentClass'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=768, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
  <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
  <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">
  <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/appicon/AppIcon57x57.png"), "html", null, true);
        echo "\">
  <!-- Standard iPhone -->
  <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/appicon/AppIcon57x57.png"), "html", null, true);
        echo "\" />
  <!-- Retina iPhone -->
  <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/appicon/AppIcon57x57@2x.png"), "html", null, true);
        echo "\" />
  <!-- Standard iPad -->
  <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/appicon/AppIcon72x72.png"), "html", null, true);
        echo "\" />
  <!-- Retina iPad -->
  <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/appicon/AppIcon72x72@2x.png"), "html", null, true);
        echo "\" />


  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">


  <title>DIVE";
        // line 22
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:800,700,400,300' rel='stylesheet' type='text/css'>
  ";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 50
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  </head>
  <body class=\"";
        // line 56
        $this->displayBlock('bodyClass', $context, $blocks);
        echo "\">
    ";
        // line 57
        $this->displayBlock('page', $context, $blocks);
        // line 94
        echo "
    ";
        // line 96
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("js/config/Config-" . (isset($context["dataset"]) ? $context["dataset"] : $this->getContext($context, "dataset"))) . ".js")), "html", null, true);
        echo "\"></script>

    ";
        // line 99
        echo "    <script type=\"text/javascript\">
      function Global(){}

      // load config
      Global.config = new Config();

      Global.basePath = '";
        // line 105
        echo $this->env->getExtension('routing')->getPath("dive_front_browse_index");
        echo "';

      Global.dataset = '";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["dataset"]) ? $context["dataset"] : $this->getContext($context, "dataset")), "html", null, true);
        echo "';
      Global.touchSupport = 'ontouchstart' in document.documentElement;

      Global.APIPath = (Global.config.addBasePath ? Global.basePath : '') + Global.config.APIPath;
      Global.allowAnimation = !Global.touchSupport || window.location.hash.indexOf('animate') > -1;
      Global.europeanaKey = '";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["europeana_api_key"]) ? $context["europeana_api_key"] : $this->getContext($context, "europeana_api_key")), "html", null, true);
        echo "';
    </script>

    ";
        // line 115
        $this->displayBlock('javascripts', $context, $blocks);
        // line 171
        echo "

  </body>
  </html>
";
    }

    // line 22
    public function block_title($context, array $blocks = array())
    {
    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 26
        echo "  ";
        // line 29
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/0_reset.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/vendor/ui-lightness/jquery-ui.min.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/1_main.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/2_page.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/3_gallery.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/4_browser.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/5_search.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/6_newHomepage.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/config/Config-dataset-divetv.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("css/config/Config-" . (isset($context["dataset"]) ? $context["dataset"] : $this->getContext($context, "dataset"))) . ".css")), "html", null, true);
        echo "\" />
  <!-- voor gallery plugin -->
  <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/gallery.theme.css"), "html", null, true);
        echo "\"/>
  <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/gallery.min.css"), "html", null, true);
        echo "\"/>
  <!-- flexslider plugin, die het niet doet, slide-width=0 probleem -->
  <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\"/>
  <link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jQueryCarousel/dist/carouseller.css"), "html", null, true);
        echo "\"/>
  <link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.qtip.css"), "html", null, true);
        echo "\"/>

  

  ";
    }

    // line 56
    public function block_bodyClass($context, array $blocks = array())
    {
    }

    // line 57
    public function block_page($context, array $blocks = array())
    {
        // line 58
        echo "     <div id=\"topbar\">
      <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/CDD.png"), "html", null, true);
        echo "\" id=\"logo\" onclick=\"document.location.href = '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "baseUrl"), "html", null, true);
        echo "'; return false;\">
     <div class=\"row\">
                <input type=\"text\" placeholder=\"Start exploring!\" id=\"search-field\" />
                <!--<div id=\"search-cross\"></div>-->
      </div>

      <!--<div id=\"log\"></div>
      <div id=\"collections-button\"  class=\"button\" title=\"Collections\"></div>
      <div id=\"user-button\"  class=\"button\" title=\"Registered users\"></div>
      <div id=\"help-button\" class=\"button\" title=\"Help\"></div>-->
    </div>
    <div class=\"colorbar\">
        <span id=\"red\" class=\"colors\"></span><span id=\"darkblue\" class=\"colors\"></span><span id=\"yellow\" class=\"colors\"></span><span id=\"lightblue\" class=\"colors\"></span>
    </div>
<div id=\"user-menu\" class=\"top-menu\"></div>
    <div id=\"collection-menu\" class=\"top-menu\"></div>
    ";
        // line 75
        $this->env->loadTemplate("DiveFrontBundle::_flashMessages.html.twig")->display($context);
        // line 76
        echo "    <div id=\"header\">
      ";
        // line 77
        $this->displayBlock('header', $context, $blocks);
        // line 79
        echo "    </div>
\t
    <div id=\"content\" class=\"";
        // line 81
        $this->displayBlock('contentClass', $context, $blocks);
        echo "\">
      \t";
        // line 82
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "    </div>
    
    <!--<img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/footercolorbar.png"), "html", null, true);
        echo "\" id=\"footercolorbar\">-->
    <!--<div id=\"footer\">
      ";
        // line 87
        $this->displayBlock('footer', $context, $blocks);
        // line 92
        echo "    </div>-->
    ";
    }

    // line 77
    public function block_header($context, array $blocks = array())
    {
        // line 78
        echo "      ";
    }

    // line 81
    public function block_contentClass($context, array $blocks = array())
    {
    }

    // line 82
    public function block_content($context, array $blocks = array())
    {
    }

    // line 87
    public function block_footer($context, array $blocks = array())
    {
        // line 88
        echo "\t<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/CDD.png"), "html", null, true);
        echo "\" id=\"logo\" class=\"logofooter\" onclick=\"document.location.href = '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "baseUrl"), "html", null, true);
        echo "'; return false;\">
\t<center>©2015 - Designed by CrowDDriven</center>
\t<a href=\"http://wm.cs.vu.nl/\"><img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo-vu.png"), "html", null, true);
        echo "\" id=\"vulogo\"></a>
      ";
    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        // line 116
        echo "    ";
        // line 119
        echo "    ";
        // line 128
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/fastclick.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/jquery-ui-1.10.4.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/jquery.hammer-full.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/velocity.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontwiseajaxlog/js/AjaxLog.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
      AjaxLog.basePath = Global.basePath + AjaxLog.basePath;
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vTicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Helpers.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/User.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Row.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Timeline.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Marker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Entity.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/DataEntity.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Visual.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Filter.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/FilterAction.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Button.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Browser.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Data.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Details.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Collections.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/CollectionMenu.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Comments.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Europeana.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Share.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/addRelated.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Search.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Gallery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Showcase.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Block.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Help.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Popup.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/HashPath.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/Preload.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"//assets.pinterest.com/js/pinit.js\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "DiveFrontBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 168,  470 => 167,  466 => 166,  462 => 165,  458 => 164,  454 => 163,  450 => 162,  446 => 161,  442 => 160,  438 => 159,  434 => 158,  430 => 157,  426 => 156,  422 => 155,  418 => 154,  414 => 153,  410 => 152,  406 => 151,  402 => 150,  398 => 149,  394 => 148,  390 => 147,  386 => 146,  382 => 145,  378 => 144,  374 => 143,  370 => 142,  366 => 141,  362 => 140,  358 => 139,  351 => 135,  347 => 134,  343 => 133,  339 => 132,  335 => 131,  331 => 130,  327 => 129,  324 => 128,  322 => 119,  320 => 116,  317 => 115,  311 => 90,  303 => 88,  300 => 87,  295 => 82,  290 => 81,  286 => 78,  283 => 77,  278 => 92,  276 => 87,  271 => 85,  267 => 83,  265 => 82,  261 => 81,  257 => 79,  255 => 77,  252 => 76,  250 => 75,  229 => 59,  226 => 58,  223 => 57,  218 => 56,  209 => 45,  205 => 44,  201 => 43,  196 => 41,  192 => 40,  187 => 38,  183 => 37,  179 => 36,  175 => 35,  171 => 34,  167 => 33,  163 => 32,  159 => 31,  155 => 30,  150 => 29,  148 => 26,  145 => 25,  140 => 22,  132 => 171,  130 => 115,  124 => 112,  116 => 107,  111 => 105,  103 => 99,  97 => 96,  94 => 94,  92 => 57,  88 => 56,  81 => 52,  77 => 51,  74 => 50,  72 => 25,  66 => 22,  57 => 16,  52 => 14,  47 => 12,  42 => 10,  37 => 8,  28 => 1,);
    }
}
