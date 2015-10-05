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

\$(function() {
\t\tcarouseller0 = new carousel('.carouseller.c0');
\t\tcarouseller1 = new carousel('.carouseller.c1');
\t\t
\t});

/*\$(window).load(function() {
        setTimeout(function(){
                if(\$('#search-field').val() != ''){
                        \$('#search-field').css('width','200px');
                }
        }, 1000);
});


\$('#search-field').blur(function(){
\tif(\$(this).val() == ''){
                \$('#search-field').animate({width:'-=200px'},'slow');
        }
});

\$('#search-field').focus(function(){
\tif(\$(this).val() == ''){
\t\t \$('#search-field').animate({width:'+=200px'},'slow');
\t}
});*/

\$.getJSON(\"/dive/web/app.php/vu/api/v2/search?keywords=fragment\",function(data){
\tvar episodes = data['data'];
\tepisodes = episodes.sort(function() { return 0.5 - Math.random() });
\tepisodes = episodes.slice(0,10);
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
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "baseUrl"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["dataset"]) ? $context["dataset"] : $this->getContext($context, "dataset")), "html", null, true);
        echo "#browser\\\\entity\\\\\" + val['uid'];
                var epititle = val['title'];
                var uid = val['uid'];
                var desc = val['description'];
\t\tvar url = val['depicted_by']['source'];
\t\t\$.post(\"/dive/web/app_dev.php/entity/getAllVideoStat?videoUrl=\"+url, function(data){
\t\t\tt_clicked = data['data'][0]['t_clicked'];
\t\t\tt_shared_twitter = data['data'][0]['t_shared_twitter'];
\t\t\tt_pinned_pinterest = data['data'][0]['t_pinned_pinterest'];
\t\t\t\$(\".\"+carouselnumber+\" .carousel-items\").append(\"<div class='carousel-block'><a href='\"+epilink+\"'><img src='\"+epimage+\"' width='320px'height='180px' /><br><span class='itemTitle'>\"+epititle+\"</span></a><div class='videoStats'><span class='clicks'><img src='";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/cursor.png"), "html", null, true);
        echo "' />\"+t_clicked+\"</span><span class='twitter_shares'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/twitter_shared.png"), "html", null, true);
        echo "' />\"+t_shared_twitter+\"</span><span class='pinterest_pins'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/pinterest.png"), "html", null, true);
        echo "' />\"+t_pinned_pinterest+\"</span></div><div id='itemDesc' style='display:none;'>\"+desc+\"</div><div id='videoSrc' style='display:none;'>\"+url+\"</div></div>\");
\t\t});
                //\$(\".\"+carouselnumber+\" .carousel-items\").append(\"<div class='carousel-block'><a href='\"+epilink+\"'><img src='\"+epimage+\"' width='320px' height='180px' /><br><span class='itemTitle'>\"+epititle+\"</span><div id='itemDesc' style='display:none;'>\"+desc+\"</div></a></div>\");
}

function incrementVideoStat(videoSrc,service){
\turl = \"/dive/web/app_dev.php/entity/incrementVideoStat?videoUrl=\"+videoSrc+\"&service=\"+service;
        console.log(url);
        \$.post(url, function(data){
        });

}

//als een video geklikt wordt, verhoog dan de videostats
\$(window).load(function(){
\t\$('.carousel-block  a').click(function(e){
\t\t//e.preventDefault();
\t\tvar videoSrc = \$(this).parent().find('#videoSrc').text();
\t\tincrementVideoStat(videoSrc,'click');
\t\t//return false;
\t});
\t//Als een entity getweet wordt, verhoog dan de stats
\t/*\$('button').click(function(e){
\t\te.prventDefault();
\t\tvar title = \$(this).closest('.entity-Video').find('.title').attr('title');
\t\talert(title);
\t});*/
});


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
\t\t\t\$('.carousel-items').append(\"<a test=\"hoi\" href='";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "baseUrl"), "html", null, true);
        echo "/vu#browser\\\\entity\\\\\"+uid+\"'><div class='carousel-block'><img src='\"+ent_plch+\"' width='200px' height='200px' /><br><span class='itemTitle'>\"+title+\"</span><div id='itemDesc' style='display:none;'>\"+desc+\"</div></div></a>\");
\t\t\t
\t\t\t\$('#location').attr('src',ent_img);
\t\t
\t\t\t\$('#poploclink #loc-title').text(data['data'][0]['title'] + \" (\"+voteCount+\")\");
\t\t\tvar epilink = \"";
        // line 177
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
\t\t\t\t\tvar url = '/dive/web/app_dev.php/vu/api/v2/entity/details?id=' + list[element]['details'].substring(list[element]['details'].lastIndexOf('http'));
\t\t\t\t\t//alert(url);
\t\t\t\t\t\$.get(url,function(data){
\t\t\t\t\t\t//console.log(JSON.stringify(data));
\t\t\t\t\t\tvar title = data['data'][0]['title'];
\t\t\t\t\t\tvar url = \"";
        // line 206
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
\t<div id=\"call2act\">Start by checking out these events:</div>
<div id=\"figures\">
<div class=\"fpevent\">
<a href=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "baseUrl"), "html", null, true);
        echo "/#browser\\entity\\http://divetv.ops.labs.vu.nl/entity/got-ficev-BattleOfBlackwater\"><img src=\"/dive/web/img/frontpage-events/blackwater.jpg\"/></a>
<div class=\"caption\">Battle at Blackwater Bay</div>
\t<div class=\"extra\">
\t\t<h1>The Battle at Blackwater</h1>
\t\t<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/TI5sFhL-iSE\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\"Blackwater\" is the ninth and penultimate episode of the second season of HBO's medieval fantasy television series Game of Thrones. The episode is written by George R. R. Martin, the author of the A Song of Ice and Fire novels of which the series is an adaptation, and directed by Neil Marshall. It aired on May 27, 2012.

The entire episode is dedicated to the climactic Battle of the Blackwater, in which the Lannister army, commanded by acting Hand of the King Tyrion Lannister, defends the city of King's Landing as Stannis Baratheon's fleet stages an attack at Blackwater Bay. Unlike all previous episodes, \"Blackwater\" does not follow the parallel storylines of the characters outside of King's Landing.
\t<a class=\"twitter-timeline\" data-dnt=\"true\" href=\"https://twitter.com/search?q=battle%20blackwater\" data-widget-id=\"644512747510702080\">Tweets over battle blackwater</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\"://platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
\t
\t</div><!-- end extra -->
 </div><!-- end fpevent -->

<div class=\"fpevent\">
<a href=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "baseUrl"), "html", null, true);
        echo "/#browser\\entity\\http://divetv.ops.labs.vu.nl/entity/got-ficev-ThePurpleWedding\"><img src=\"/dive/web/img/frontpage-events/purplewedding.jpg\"/></a>
<div class=\"caption\">The Purple Wedding</div>
</div>

<div class=\"fpevent\">
<a href=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "baseUrl"), "html", null, true);
        echo "/#browser\\entity\\http://divetv.ops.labs.vu.nl/entity/got-ficev-BattleofCastleBlack\"><img src=\"/dive/web/img/frontpage-events/castleblack.jpg\"/></a>
<div class=\"caption\">Battle at Castle Black</div>
</div>

<div class=\"fpevent\">
<a href=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "baseUrl"), "html", null, true);
        echo "/#browser\\entity\\http://divetv.ops.labs.vu.nl/entity/got-ficev-TheRedWedding\"><img src=\"/dive/web/img/frontpage-events/redwedding.jpg\"/></a>
<div class=\"caption\">The Red Wedding</div>
</div>

<div class=\"fpevent\">
<a href=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "baseUrl"), "html", null, true);
        echo "/#browser\\entity\\http://divetv.ops.labs.vu.nl/entity/got-ficev-MountainAndViper\"><img src=\"/dive/web/img/frontpage-events/mountainandviper.jpg\"/></a>
<div class=\"caption\">Duel of the Mountain and the Viper</div>
</div>

</div><!-- end figures frontpage -->
</div><!--end events -->



<script>
\$('.fpevent a').hover(function(){
                \$(this).children('img').css({outline: '3px solid white'});
        },
        function(){
                \$(this).children('img').css({outline: 'none'});
        }
        );

</script>

<div class=\"carouseller c0 row-fluid for-car\">

  <div class=\"carousel-wrapper\">
    <div class=\"carouselTitle\">Earn points by describing/verifying descriptions of these videos:</div>
    <div class=\"carousel-items\">
    </div><!--end carousel-items-->
  </div><!--end carousel-wrapper-->
 <div class=\"carousel-control-block\">
    <div class=\"carousel-button-left shadow\"><a href=\"javascript:void(0)\">‹</a></div>
    <div class=\"carousel-button-right shadow\"><a href=\"javascript:void(0)\">›</a></div>
  </div>
</div>

<!--end carousellers-->


<div id=\"tagcampaign\">
<iframe width='100%' height='100%' src=\"http://ec2-52-28-200-8.eu-central-1.compute.amazonaws.com:8080/tagcampaign.html\"></iframe>
</div>

</div><-- end homepage -->
</div><!-- End content -->

<script type=\"text/javascript\" src=\"";
        // line 312
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
                                        text: \$(this).find('#itemDesc')
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
        // line 337
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
        // line 347
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
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/nedd_playgame.png"), "html", null, true);
        echo "\"></a>
        </div>
</td></tr>
</table>
-->
</div>

</div>

";
        // line 374
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
        return array (  477 => 374,  465 => 365,  444 => 347,  431 => 337,  403 => 312,  357 => 269,  349 => 264,  341 => 259,  333 => 254,  315 => 239,  277 => 206,  243 => 177,  235 => 172,  175 => 119,  161 => 110,  103 => 55,  99 => 54,  95 => 53,  91 => 52,  56 => 20,  49 => 16,  42 => 12,  33 => 5,  31 => 4,  28 => 3,);
    }
}
