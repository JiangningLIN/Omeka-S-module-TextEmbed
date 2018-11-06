<?php

namespace TextEmbed;

use Omeka\Api\Representation\MediaRepresentation;
use Omeka\Media\FileRenderer\RendererInterface;
use Zend\View\Renderer\PhpRenderer;

class TextRenderer implements RendererInterface
{
    public function render(PhpRenderer $view, MediaRepresentation $media, array $options = [])
    {
		$chaine="";
		$fh = fopen($view->escapeHtml($media->originalUrl()),'r');
		while($line=fgets($fh)){
			$chaine = $chaine."<br/>".$line;
		}
		fclose($fh);
        return sprintf(
			'<html><head></head><body>%s</body></html>',
            $chaine
        );
    }
}
