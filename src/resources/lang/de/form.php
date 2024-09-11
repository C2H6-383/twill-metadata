<?php

return [
    'titles' => [
        'fieldset' => 'SEO',
        'advanced_settings' => 'Erweiterte Einstellungen',
        'advanced_description' => 'nofollow, noindex und die kanonische URL bearbeiten',
        'sharing_settings' => 'Einstellungen für Social-Media-Sharing',
        'sharing_description' => 'Passen Sie an, wie Ihre Inhalte beim Teilen in sozialen Medien erscheinen',
    ],
    'fields' => [
        'title' => [
            'label' => 'Meta-Titel',
            'note' => '40 - 60 Zeichen sind empfohlen',
        ],
        'description' => [
            'label' => 'Meta-Beschreibung',
            'note' => '80 - 120 Zeichen sind empfohlen',
        ],
        'noindex' => [
            'label' => 'Suchmaschinen bitten, diese Seite nicht zu indexieren (noindex tag).',
        ],
        'nofollow' => [
            'label' => 'Suchmaschinen bitten, Links auf dieser Seite nicht zu folgen (nofollow tag).',
        ],
        'canonical_url' => [
            'label' => 'Kanonische URL',
            'note' => 'Dieses Feld nur ausfüllen, wenn sich die kanonische URL von der Website-URL unterscheidet',
        ],
        'og_image' => [
            'label' => 'Social-Card-Bild',
            'note' => 'Geben Sie ein benutzerdefiniertes Bild für Twitter- und Facebook-Cards an (empfohlene Breite 1200px)',
        ],
        'og_title' => [
            'label' => 'Social-Card-Titel',
            'note' => 'Geben Sie einen benutzerdefinierten Titel an (standardmäßig wird der Meta-Titel verwendet, wenn dieses Feld leer ist)',
        ],
        'og_description' => [
            'label' => 'Social-Card-Beschreibung',
            'note' => 'Geben Sie eine benutzerdefinierte Beschreibung an (standardmäßig wird der Meta-Beschreibung verwendet, wenn dieses Feld leer ist)',
        ],
        'og_card_type' => [
            'label' => 'Social-Card-Stil für Twitter',
            'placeholder' => 'Einen Stil wählen',
        ],
        'og_type' => [
            'label' => 'Opengraph Inhaltstyp',
            'placeholder' => 'Einen Typ wählen',
        ],
    ],
];
