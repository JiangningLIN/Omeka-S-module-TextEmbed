<?php

namespace TextEmbed;

use Omeka\Api\Representation\MediaRepresentation;
use Omeka\Media\FileRenderer\RendererInterface;
use Zend\View\Renderer\PhpRenderer;

class TextRenderer implements RendererInterface
{
    public function render(PhpRenderer $view, MediaRepresentation $media, array $options = [])
    {
	return sprintf(
		'<button onclick="modeNuit()">Mode Nuit</button>
		 <button onclick="modeNormal()">Mode Normal</button>
			 
		 <script  type="text/javascript">
			function modeNormal()
			{
				var x = document.getElementById("myFrame");
				x.style.backgroundColor = "#F8F8FF";
				var y = (x.contentWindow || x.contentDocument);
				if (y.document)y = y.document;
				y.body.style.color = "black";
				y.body.style.fontSize = "15px";
			}
			
			function modeNuit() 
			{
				var x = document.getElementById("myFrame");
				x.style.backgroundColor = "#696969";
				var y = (x.contentWindow || x.contentDocument);
				if (y.document)y = y.document;
				y.body.style.color = "white";
				y.body.style.fontSize="15px";
			}
		 </script>
				
		 <iframe id="myFrame" src="%s" onload="modeNormal()" style="width: 100%%; height: 500px; allowfullscreen" ></iframe>',
			$view->escapeHtml($media->originalUrl())		
        );
    }
}
