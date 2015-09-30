<?php

/* DiveFrontBundle:General:help.html.twig */
class __TwigTemplate_bfc62d324b24963a513ca5cfd1887c9e0e0a5a43b1eee6c662a6b356af4af25b extends Twig_Template
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
        echo "<div id=\"help\">
\t<div class=\"scroll-body\">
\t\t<h1>About DIVE</h1>
\t\t<h2>Project description</h2>
\t\t<ul class=\"assets clearfix\">
\t\t\t<li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/dive/web/assets/dive_challenge_2014.pdf"), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/dive/web/assets/paper.jpg"), "html", null, true);
        echo "\" alt=\"DIVE Paper\"></a></li>
\t\t\t<li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/dive/web/assets/dive_iswc_poster_2.pdf"), "html", null, true);
        echo "\" target=\"_blank\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/dive/web/assets/poster.jpg"), "html", null, true);
        echo "\" alt=\"DIVE Poster\"></a></li>
\t\t</ul>
\t\t<h2>User Experience Design</h2>

\t\t<p>The core of digital hermeneutics is formed by two components: <i>object-event relationships</i> and <i>event-event relationships</i>. By making explicit relationships between the objects and events, and between the events themselves we can facilitate users in their access and interpretation processes of objects in online cultural heritage collections. In DIVE we aim at implementing those relations  in an intuitive event-centric browsing interface for browsing cultural heritage collections by means of underlying linked data graph.</p>

\t\t<p>Major effort was put in creating an interface with a clear identity and an engaging user experience that invite users to continue exploring at different levels of detail. Users become explorers diving deeper into the data, as a diver deeper and deeper into an ocean trench discovering new species. This metaphor makes the interface a \"digital submarine\", which provides navigation controls and supportive and manipulative tools. The  design of the interface also forms an innovative \"inifinite exploration path\", which unlocks the potential of touchbased explorative user interfaces.</p>

\t\t<p>An extensive design phase in which multiple concepts have been tested resulted in the DIVE \"infinity browsing\" interface, a combination of two core interaction concepts that involve a <i>horizontal level</i> supporting the breadth and a <i>vertical level</i> supporting the depth of information exploration and interpretation.</p>

\t\t<p>The <i>horizontal level</i> displays the result set related to the seed keyword search in a dynamic presentation. At this level, user's exploration is supported by <i>event-centric filters</i> making explicit the relation of each object to either the depicted and associate events and their properties, e.g. people, locations and times involved in the events. Consistent <i>color coding</i> is used for each property type to allow for a quick discovery of desired type of objects. Large result sets are represented as a colored barcode to give an overview of the amount and composition of event properties in the search results. <i>Objects</i> are represented by type-color, type-icon, title and an image and associated with a set of <i>buttons</i> providing detailed information for each object, e.g. description, source and external links. To allow for active user engagement through sharing of personal perspectives and interpretations, users can add <i>comments</i> to each object and save them in private or shared <i>collections</i>. Additionally, we provide a set of related objects from the Europeana collections. Typical interactions at this level are:</p>
\t\t<ul>
\t\t\t<li>pinch or scroll the elements of the color barcode</i> zooms in on the objects to reveal more information, e.g. image, title, icon of the event-related property (for example, an icon for location indicates that this object depicts a location of the related event).</li>
\t\t\t<li>drag right or left the row of related objects</i> reveals previous or next object on the horizontal level.</li>
\t\t\t<li>arrows</i> are used for navigating to previous or next objects in the row.</li>
\t\t\t<li>search Option & event filters</i> allow to show sub-sets of related objects.</li>
\t\t</ul>
\t\t<p>The <i>vertical level</i> is formed by the user exploration history, as a path of selections on the horizontal level - leading to the last selected object. Each selection of an object results in a new row with related entities loaded under the selected object. Users can scroll back to a previous step, zoom out, choose another object and build a new path from there. This allows for fluid dynamics in collection exploration, discovery of alternative paths, and ultimately supports deep interpretation of cultural heritage collections. Our intention is to allow <i>saving each exploration history</i> as a collection so that users can revisit or share their browsing experiences.</p>

\t\t<h2>Implementation details</h2>
\t\t<p>The interface is developed in HTML5, Javascript and CSS3. A number of libraries are used to provide specific functionality: <a href=\"http://jquery.com\" onclick=\"window.open(\$(this).attr('href')); return false;\">jQuery</a> handles the major part of the functionalities like DOM interaction and manipulation, event handling and AJAX. <a href=\"http://velocityjs.org\" onclick=\"window.open(\$(this).attr('href')); return false;\">Velocity.js</a> is used to improve the performance of animations. <a href=\"http://hammerjs.github.io/\" onclick=\"window.open(\$(this).attr('href')); return false;\">Hammer.js</a> supports the handling of touch events. <a href=\"http://momentjs.com\" onclick=\"window.open(\$(this).attr('href')); return false;\">Moment.js</a> makes dates managable. As the amount of entities to display can be near the feasible limits of the webbrowsers effort was put in the optimization of the javascript code while maintaining readibility of the code. Examples of this include the gradual buildup of DOM elements, use of Prototypes and limiting features like animation and CSS3 filters on large collections.</p>

\t\t<p>The interface acquires data from the data layer using the triple store's SPARQL API. Several queries are used to search entities by keyword, get related entities (events, persons, etc.) and get entity details. The returning data is handled by a client-side datamapper in Javascript which maps the datafields to an internal format which is used to build the interface representations. This approach relieves the server of unneccesary data parsing and contributes to compatibility with other data sets.</p>

\t\t<p>A smart image cache has been implemented to provide a visual representation for other entities. Based on keywords from entity titles, images are retrieved from the five most relevant Wikipedia searches using the <a href=\"http://www.mediawiki.org/wiki/API:Main_page\"  onclick=\"window.open(\$(this).attr('href')); return false;\">Wikipedia API</a>. If no images are found, another query is made to the <a href=\"http://www.opencultuurdata.nl/api/\"  onclick=\"window.open(\$(this).attr('href')); return false;\">OpenCultuurData API</a> which covers an extensive set of Dutch open heritage- and cultural data. The quality and availabity of images through this system is acceptable and provides a powerful way of filling in the (visual) data gaps. These images increase the user experience by supporting the visual navigation throught the interface and rememberability and recognizability of individual entities.</p>
\t\t<p>This version of the interface if optimized for tablets and modern web browsers.</p>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "DiveFrontBundle:General:help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  54 => 12,  45 => 9,  38 => 7,  29 => 4,  26 => 6,  22 => 2,  19 => 1,  474 => 168,  470 => 167,  466 => 166,  462 => 165,  458 => 164,  454 => 163,  450 => 162,  446 => 161,  442 => 160,  438 => 159,  434 => 158,  430 => 157,  426 => 156,  422 => 155,  418 => 154,  414 => 153,  410 => 152,  406 => 151,  402 => 150,  398 => 149,  394 => 148,  390 => 147,  386 => 146,  382 => 145,  378 => 144,  374 => 143,  370 => 142,  366 => 141,  362 => 140,  358 => 139,  351 => 135,  347 => 134,  343 => 133,  339 => 132,  335 => 131,  331 => 130,  327 => 129,  324 => 128,  322 => 119,  320 => 116,  317 => 115,  311 => 90,  303 => 88,  300 => 87,  295 => 82,  290 => 81,  286 => 78,  283 => 77,  278 => 92,  271 => 85,  267 => 83,  265 => 82,  261 => 81,  257 => 79,  255 => 77,  252 => 76,  250 => 75,  229 => 59,  226 => 58,  223 => 57,  218 => 56,  209 => 45,  205 => 44,  201 => 43,  196 => 41,  192 => 40,  187 => 38,  183 => 37,  179 => 36,  175 => 35,  171 => 34,  167 => 33,  163 => 32,  159 => 31,  155 => 30,  150 => 29,  148 => 26,  145 => 25,  140 => 22,  132 => 171,  130 => 115,  124 => 112,  116 => 107,  111 => 105,  97 => 96,  94 => 94,  92 => 57,  88 => 56,  81 => 52,  77 => 51,  74 => 50,  72 => 25,  66 => 22,  57 => 16,  52 => 14,  47 => 12,  37 => 8,  485 => 382,  473 => 373,  452 => 355,  439 => 345,  411 => 320,  356 => 268,  348 => 263,  340 => 258,  332 => 253,  314 => 238,  276 => 87,  242 => 176,  234 => 171,  174 => 118,  160 => 109,  103 => 99,  99 => 54,  95 => 53,  91 => 52,  56 => 20,  49 => 16,  42 => 8,  33 => 5,  31 => 4,  28 => 1,);
    }
}
