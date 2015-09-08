<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_9f3e8adf23400662a4cd2523d7322d8e1e71812217c865fd92255ff540569750 extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className && el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                if (el.className) {
                    el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
                }
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) {
                    el.className += \" \" + klass;
                }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  79 => 29,  75 => 28,  70 => 26,  62 => 24,  50 => 15,  46 => 14,  30 => 5,  24 => 2,  32 => 6,  54 => 12,  45 => 9,  38 => 7,  29 => 4,  26 => 3,  22 => 2,  19 => 1,  474 => 168,  470 => 167,  466 => 166,  462 => 165,  458 => 164,  454 => 163,  450 => 162,  446 => 161,  442 => 160,  438 => 159,  434 => 158,  430 => 157,  426 => 156,  422 => 155,  418 => 154,  414 => 153,  410 => 152,  406 => 151,  402 => 150,  398 => 149,  394 => 148,  390 => 147,  386 => 146,  382 => 145,  378 => 144,  374 => 143,  370 => 142,  366 => 141,  362 => 140,  358 => 139,  351 => 135,  343 => 133,  339 => 132,  335 => 131,  331 => 130,  327 => 129,  324 => 128,  322 => 119,  320 => 116,  317 => 115,  311 => 90,  303 => 88,  300 => 87,  295 => 82,  290 => 81,  286 => 78,  283 => 77,  278 => 92,  276 => 87,  271 => 85,  267 => 83,  265 => 82,  261 => 81,  257 => 79,  255 => 77,  252 => 76,  250 => 75,  229 => 59,  226 => 58,  223 => 57,  218 => 56,  209 => 45,  205 => 44,  201 => 43,  196 => 41,  192 => 40,  187 => 38,  183 => 37,  179 => 36,  175 => 35,  171 => 34,  167 => 33,  163 => 32,  159 => 31,  155 => 30,  150 => 29,  148 => 26,  145 => 25,  140 => 22,  130 => 115,  124 => 112,  116 => 107,  111 => 105,  97 => 96,  94 => 94,  92 => 57,  88 => 56,  81 => 52,  77 => 51,  74 => 50,  72 => 25,  66 => 25,  57 => 16,  52 => 14,  47 => 12,  37 => 8,  359 => 278,  347 => 134,  326 => 251,  313 => 241,  268 => 199,  212 => 148,  180 => 121,  172 => 116,  132 => 170,  103 => 99,  99 => 54,  95 => 53,  91 => 35,  56 => 20,  49 => 16,  42 => 12,  33 => 5,  31 => 4,  28 => 1,);
    }
}
