<?php
return [
    'file_renderers' => [
        'invokables' => [
            'text_embed' => 'TextEmbed\TextRenderer',
        ],
        'aliases' => [
            'text/plain' => 'text_embed',
            'text' => 'text_embed',
        ],
    ],
];
