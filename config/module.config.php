<?php
return [
    'file_renderers' => [
        'invokables' => [
            'text_embed' => 'TextEmbed\TextRenderer',
        ],
        'aliases' => [
            'text/plain' => 'text_embed',
			'text/html' => 'text_embed',
			'text/x-php' => 'text_embed',
			'text/css' => 'text_embed',
			'text/xml' => 'text_embed',
			'text/x-c++' => 'text_embed',
			'text/csv' => 'text_embed',
            'text' => 'text_embed',
        ],
    ],
];
