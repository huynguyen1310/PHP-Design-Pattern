<?php

require_once "TitleTemplate.php";
require "TemplateFactory.php";
require "PHPTemplateTitleTemplate.php";
require "PHPTemplatePageTemplate.php";
require "PHPTemplateRenderer.php";


class PHPTemplateFactory implements TemplateFactory
{
    public function createTitleTemplate(): TitleTemplate
    {
        return new PHPTemplateTitleTemplate();
    }

    public function createPageTemplate(): PageTemplate
    {
        return new PHPTemplatePageTemplate($this->createTitleTemplate());
    }

    public function getRenderer(): TemplateRenderer
    {
        return new PHPTemplateRenderer();
    }
}
