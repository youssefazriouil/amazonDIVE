<?php

/* DiveFrontBundle:Browse:index.html.twig */
class __TwigTemplate_d13c0a10efa6c555b6de9fd3ca645a37b7a9c0a22078b2292edd59202a7c3ad8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DiveFrontBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DiveFrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "
<!--<div class=\"gallery autoplay items-3\">
  <div id=\"item-1\" class=\"control-operator\"></div>
  <div id=\"item-2\" class=\"control-operator\"></div>
  <div id=\"item-3\" class=\"control-operator\"></div>

  <figure class=\"item\">
    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/banners/banner2.jpg"), "html", null, true);
        echo "\">
  </figure>

  <figure class=\"item\">
    <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/banners/banner3.jpg"), "html", null, true);
        echo "\">
  </figure>

  <figure class=\"item\">
    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/banners/banner4.jpg"), "html", null, true);
        echo "\">
  </figure>


  <div class=\"controls\">
    <a href=\"#item-1\" class=\"control-button\">•</a>
    <a href=\"#item-2\" class=\"control-button\">•</a>
    <a href=\"#item-3\" class=\"control-button\">•</a>
 
</div>
</div>-->

<div id=\"search\" class=\"blackbox\">

        <div class=\"row entity-Search\">
                <div id=\"search-filter\"></div>
        </div>
</div>

<div id=\"browser\" class=\"blackbox\">
</div>

<div id=\"popup\">
\t<h1 class=\"title\">
\t</h1>
\t<div class=\"body\">
\t</div>
\t<div class=\"buttons\">
\t</div>
</div>


<script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/jquery-ui-1.10.4.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jQueryCarousel/dist/carouseller.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.qtip.js"), "html", null, true);
        echo "\"></script>


<script type=\"text/javascript\">

\$(window).load(function() {
\tsetTimeout(function(){
\t\tif(\$('#search-field').val() != ''){
                \t\$('#search-field').css('width','200px');
        \t}
\t}, 1000);
});

\$(function() {
\t\tcarouseller = new carousel('.carouseller');
\t});

\$('#search-field').blur(function(){
\tif(\$(this).val() == ''){
                \$('#search-field').animate({width:'-=200px'},'slow');
        }
});

\$('#search-field').focus(function(){
\tif(\$(this).val() == ''){
\t\t \$('#search-field').animate({width:'+=200px'},'slow');
\t}
});

\$.getJSON(\"/dive/web/app.php/vu/api/v2/search?keywords=fragment\",function(data){
\tvar episodes = data['data'];
\tepisodes = episodes.sort(function() { return 0.5 - Math.random() });
\tepisodes = episodes.slice(0,9);
\t\$.each(episodes, function(i,val){
\t\t//var random_episode_nr = Math.floor(Math.random() * (episodes.length));
\t\tvar carousel = 'c'+i%2;
\t\tsetCarouselItem(carousel,val);\t
\t\t
\t});
\t
\t\t\$('#episode').hover(function(){
\t\t\t\$(this).css({outline: '3px solid white'}).animate(500);
\t\t},
\t\tfunction(){
\t\t\t\$(this).css({outline: 'none'}).animate(500);
\t\t}
\t\t);

});

setCarouselItem = function(carouselnumber, val){
\t\tvar epimage = val['depicted_by']['placeholder'];
                var epilink = \"";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "baseUrl"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["dataset"]) ? $context["dataset"] : $this->getContext($context, "dataset")), "html", null, true);
        echo "#browser\\\\entity\\\\\" + val['uid'];
                var epititle = val['title'];
                var uid = val['uid'];
                var desc = val['description'];
                \$(\".\"+carouselnumber+\" .carousel-items\").append(\"<a href='\"+epilink+\"'><div class='carousel-block'><img src='\"+epimage+\"' width='320px' height='180px' /><br><span class='itemTitle'>\"+epititle+\"</span><div id='itemDesc' style='display:none;'>\"+desc+\"</div></div></a>\");
}
/*
//get most popular entity
function getMostPopularEntities(amount){
\t\$.post('/dive/web/app_dev.php/' + 'entity/mostPopular', {
\t\t\t\tamount: amount
\t       }, function(data){
\t\t\t\t//console.log(JSON.stringify(data));
\t\t\t\tdataCallback(data);  
\t\t  }.bind(this)
\t);
}
function dataCallback(data){ 
\t//console.log(\"this is the data:\");
\t\$.each(data['data'],function(i,entity){
\t\t//console.log('this entity is: '+JSON.stringify(entity));
\t\tuid = entity['entity_uid'];
\t\t//var voteCount = entity['voteCount'];
\t\t\$.getJSON(\"/dive/web/app_dev.php/vu/api/v2/entity/details?id=\"+uid,function(data){
\t\t\tvar ent_img = data['data'][0]['depicted_by']['source'];
\t\t\tvar ent_plch = data['data'][0]['depicted_by']['placeholder'];
\t\t\tvar title = data['data'][0]['title'];
\t\t\tvar uid = data['data'][0]['uid'];
\t\t\tvar desc = data['data'][0]['description'];
\t\t\t\$('.carousel-items').append(\"<a href='";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "baseUrl"), "html", null, true);
        echo "/vu#browser\\\\entity\\\\\"+uid+\"'><div class='carousel-block'><img src='\"+ent_plch+\"' width='200px' height='200px' /><br><span class='itemTitle'>\"+title+\"</span><div id='itemDesc' style='display:none;'>\"+desc+\"</div></div></a>\");
\t\t\t
\t\t\t\$('#location').attr('src',ent_img);
\t\t
\t\t\t\$('#poploclink #loc-title').text(data['data'][0]['title'] + \" (\"+voteCount+\")\");
\t\t\tvar epilink = \"";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "baseUrl"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["dataset"]) ? $context["dataset"] : $this->getContext($context, "dataset")), "html", null, true);
        echo "#browser\\\\entity\\\\\" + uid;
\t\t\t\$('#poploclink').attr('href',epilink);
\t
\t\t\t\$('#location').hover(function(){
\t        \t\t\$(this).css({outline: '3px solid white'}).animate(500);
      \t\t  \t\t},
        \t\t\tfunction(){
\t        \t\t\t\$(this).css({outline: 'none'}).animate(500);
\t        \t\t}
\t\t\t);


\t\t});
\t});

}
getMostPopularEntities(10);
*/

\t\$.get('/dive/web/app_dev.php/' + 'ajaxlog/loadActivity', function(data){
\t\t\t //console.log(JSON.stringify(data));
                        var list = data['data'];
\t\t\t\$.each(list,function(element,value){
\t\t\t\tif(list[element]['details'].indexOf('http') > -1){
\t\t\t\t\tvar url = Global.APIPath + 'entity/details?id=' + list[element]['details'].substring(list[element]['details'].lastIndexOf('http'));
\t\t\t\t\t\$.get(url,function(data){
\t\t\t\t\t\t//console.log(JSON.stringify(data));
\t\t\t\t\t\tvar title = data['data'][0]['title'];
\t\t\t\t\t\tvar url = \"";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "baseUrl"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["dataset"]) ? $context["dataset"] : $this->getContext($context, "dataset")), "html", null, true);
        echo "#browser\\\\entity\\\\\" + list[element]['details'];
\t\t\t\t\t\t\$('#activity-table').append(\"<li>\"+list[element]['action']+\":   <a href='\"+url+\"'>\"+title+\"</a></li>\");
\t\t\t\t\t\t
\t\t\t\t\t});
\t\t\t\t}
\t\t\t\telse{
\t\t\t\t\t//alert(JSON.stringify(list[element]));
\t\t\t\t\t\$('#activity-table').append(\"<li><td>\"+list[element]['action']+\":  \"+list[element]['details']+\"</li>\");
\t\t\t\t}
\t\t\t});
\t\t\t\$(function() {
  \t\t\t\t\$('#activity-ticker').vTicker({
\t\t\t\t\t\t\tspeed: 500,
\t\t\t\t\t\t\tpause: 5000,
\t\t\t\t\t\t\tmousePause: false
\t\t\t\t\t\t      });
\t\t\t});
                  }.bind(this)
        );

</script>

<div id=\"homepage\">

<div id=\"activity-ticker\">
<ul id=\"activity-table\">
</ul>
</div>

<div class=\"events\">
<div id=\"call2act\">Start by checking out these events:</div>
<div id=\"figures\">
<div class=\"fpevent\">
<a href=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "baseUrl"), "html", null, true);
        echo "/#browser\\entity\\http://divetv.ops.labs.vu.nl/entity/got-ficev-BattleOfBlackwater\"><img src=\"/dive/web/img/frontpage-events/blackwater.jpg\"/></a>
<div class=\"caption\">Battle at Blackwater Bay</div>
</div>\t

<div class=\"fpevent\">
<a href=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "baseUrl"), "html", null, true);
        echo "/#browser\\entity\\http://divetv.ops.labs.vu.nl/entity/got-ficev-ThePurpleWedding\"><img src=\"/dive/web/img/frontpage-events/purplewedding.jpg\"/></a>
<div class=\"caption\">The Purple Wedding</div>
</div>

<div class=\"fpevent\">
<a href=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "baseUrl"), "html", null, true);
        echo "/#browser\\entity\\http://divetv.ops.labs.vu.nl/entity/got-ficev-BattleofCastleBlack\"><img src=\"/dive/web/img/frontpage-events/castleblack.jpg\"/></a>
<div class=\"caption\">Battle at Castle Black</div>
</div>

<div class=\"fpevent\">
<a href=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "baseUrl"), "html", null, true);
        echo "/#browser\\entity\\http://divetv.ops.labs.vu.nl/entity/got-ficev-TheRedWedding\"><img src=\"/dive/web/img/frontpage-events/redwedding.jpg\"/></a>
<div class=\"caption\">The Red Wedding</div>
</div>

<div class=\"fpevent\">
<a href=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "baseUrl"), "html", null, true);
        echo "/#browser\\entity\\http://divetv.ops.labs.vu.nl/entity/got-ficev-MountainAndViper\"><img src=\"/dive/web/img/frontpage-events/mountainandviper.jpg\"/></a>
<div class=\"caption\">Duel of the Mountain and the Viper</div>
</div>

</div><!-- end figures frontpage -->

</div>

<script>
\$('.fpevent a').hover(function(){
                \$(this).children('img').css({outline: '3px solid white'});
        },
        function(){
                \$(this).children('img').css({outline: 'none'});
        }
        );

</script>

<div class=\"carouseller row-fluid for-car\">

  <div class=\"carousel-wrapper c0\">
    <div class=\"carouselTitle\">Earn points by describing/verifying descriptions of these videos:</div>
    <div class=\"carousel-items\">
    </div><!--end carousel-items-->
  </div><!--end carousel-wrapper-->
 <div class=\"carousel-control-block\">
    <div class=\"carousel-button-left shadow\"><a href=\"javascript:void(0)\">‹</a></div>
    <div class=\"carousel-button-right shadow\"><a href=\"javascript:void(0)\">›</a></div>
  </div>
</div>

<div class=\"carouseller row-fluid for-car\">

  <div class=\"carousel-wrapper c1\">
    <div class=\"carouselTitle\">Placeholder for tag campaign</div>
    <div class=\"carousel-items\">
    </div><!--end carousel-items-->
  </div><!--end carousel-wrapper-->
 <div class=\"carousel-control-block\">
    <div class=\"carousel-button-left shadow\"><a href=\"javascript:void(0)\">‹</a></div>
    <div class=\"carousel-button-right shadow\"><a href=\"javascript:void(0)\">›</a></div>
  </div>
</div>
<!--end carousellers-->

<script type=\"text/javascript\" src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.qtip.js"), "html", null, true);
        echo "\"></script>
<script>
\$(window).load(function () {
\t\$.getScript('http://cdn.jsdelivr.net/qtip2/2.2.1/jquery.qtip.js')
\t.done(function(){
\t
\t\$( \".carousel-block\" ).each(function(i){
                \$(this).qtip({
                                content: {
                                        text: \$(this).children('#itemDesc')
                                },
    \t\t\t\tstyle: {
        \t\t\t\ttip: {
            \t\t\t\t\tcorner: 'left top'
        \t\t\t\t}
    \t\t\t\t}
                });
        });

\t});//end done
});

</script>

<!--<div id=\"centerlogo\">
<a href=\"http://www.crowddriven.nl\"><img src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/CDTag.png"), "html", null, true);
        echo "\"></a>
</div>
<div id=\"callToTag\">DIVE deeper into CrowDDriven by playing some games!</div>


<table id=\"layer3\">
<tr>
<td>
<div id=\"game_leaderboard\">
\t<div class=\"goToPlay\">
\t\t<a href=\"http://ec2-54-93-224-169.eu-central-1.compute.amazonaws.com:8080/campaign.html\"><img src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arya_playgame.png"), "html", null, true);
        echo "\"></a>
\t</div>
</td>

<td>
\t<div id=\"leaderboard\">
\t\t<table>
\t\t\t<tr><th>Member</th><th>Score</th><tr>
\t\t\t<tr><td>Ege9000</td><td>987</td></tr>
\t\t\t<tr><td>deMarquiz</td><td>654</td></tr>
\t\t\t<tr><td>Diegemen</td><td>321</td></tr>

\t\t</table>
\t</div>
</td>
<td>

\t<div class=\"goToPlay\">
                <a href=\"http://ec2-54-93-224-169.eu-central-1.compute.amazonaws.com:8080/campaign.html\"><img src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/nedd_playgame.png"), "html", null, true);
        echo "\"></a>
        </div>
</td></tr>
</table>
-->
</div>

</div>

";
        // line 330
        $this->env->loadTemplate("DiveFrontBundle:General:help.html.twig")->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "DiveFrontBundle:Browse:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 330,  414 => 321,  393 => 303,  380 => 293,  352 => 268,  303 => 222,  295 => 217,  287 => 212,  279 => 207,  271 => 202,  233 => 169,  200 => 141,  192 => 136,  158 => 107,  103 => 55,  99 => 54,  95 => 53,  91 => 52,  56 => 20,  49 => 16,  42 => 12,  33 => 5,  31 => 4,  28 => 3,);
    }
}
