<?php

/* DiveFrontBundle:Security:login.html.twig */
class __TwigTemplate_e5c0b5a8c48c40f4819ae5591ad67fb98113dcd04f2c1ae2d941af9b52ff4731 extends Twig_Template
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
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 2
            echo "    <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message"), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" id=\"user-login\">
    <label for=\"username\">E-mail address</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" />

    <label for=\"password\">Password</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 17
        echo "    <input type=\"hidden\" name=\"_csrf_token\"
        value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >

     <input type=\"hidden\" name=\"_target_path\" value=\"dive_front_user_profile\" />

    <button type=\"submit\">Login</button>
    <a id=\"signup\">Sign up</a>
</form>



";
        // line 29
        if ((array_key_exists("lostPassword", $context) && $this->getAttribute((isset($context["lostPassword"]) ? $context["lostPassword"] : null), "visible"))) {
            // line 30
            echo "<a id=\"request-password\">Request new password</a>
";
        }
    }

    public function getTemplateName()
    {
        return "DiveFrontBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 30,  60 => 29,  46 => 18,  43 => 17,  35 => 7,  30 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
