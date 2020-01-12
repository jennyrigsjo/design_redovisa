<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "id" => "rm-menu",
    "wrapper" => null,
    "class" => "rm-default rm-mobile",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här",
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom01",
                        "url" => "redovisning/kmom01",
                        "title" => "Redovisning för kmom01",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "redovisning/kmom02",
                        "title" => "Redovisning för kmom02",
                    ],
                    [
                        "text" => "Kmom03",
                        "url" => "redovisning/kmom03",
                        "title" => "Redovisning för kmom03",
                    ],
                    [
                        "text" => "Kmom04",
                        "url" => "redovisning/kmom04",
                        "title" => "Redovisning för kmom04",
                    ],
                    [
                        "text" => "Kmom05",
                        "url" => "redovisning/kmom05",
                        "title" => "Redovisning för kmom05",
                    ],
                    [
                        "text" => "Kmom06",
                        "url" => "redovisning/kmom06",
                        "title" => "Redovisning för kmom06",
                    ],
                    [
                        "text" => "Kmom07-10",
                        "url" => "redovisning/kmom10",
                        "title" => "Redovisning för kmom07-10",
                    ],
                ],
            ],
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats",
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Base",
                        "url" => "$currentPage?style=kmom06",
                        "title" => "Base stylesheet",
                    ],
                    [
                        "text" => "Colorful",
                        "url" => "$currentPage?style=06_colorful",
                        "title" => "Colorful stylesheet",
                    ],
                    [
                        "text" => "Dark",
                        "url" => "$currentPage?style=06_dark",
                        "title" => "Dark stylesheet",
                    ],
                    [
                        "text" => "Minimal",
                        "url" => "$currentPage?style=06_minimalistic",
                        "title" => "Minimalistic stylesheet",
                    ],
                    [
                        "text" => "Alice",
                        "url" => "$currentPage?style=kmom06-designelement",
                        "title" => "Alice in Wonderland-inspired stylesheet",
                    ],
                    [
                        "text" => "Oriental",
                        "url" => "$currentPage?style=kmom06-designprinciper",
                        "title" => "Stylesheet with an oriental touch",
                    ],
                ],
            ],
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling",
        ],
        [
            "text" => "Testa",
            "url" => "testa",
            "title" => "Testa Markdownkonstruktioner",
        ],
        [
            "text" => "Rapporter",
            "url" => "rapport",
            "title" => "Rapporter",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Färg",
                        "url" => "rapport/fargschema",
                        "title" => "Rapport för kmom04",
                    ],
                    [
                        "text" => "Laddningstid",
                        "url" => "rapport/laddningstid",
                        "title" => "Rapport för kmom05",
                    ],
                    [
                        "text" => "Designprinciper",
                        "url" => "rapport/designprincip",
                        "title" => "Rapport för kmom06",
                    ],
                    [
                        "text" => "Tema med designelement",
                        "url" => "rapport/designelement",
                        "title" => "Rapport för kmom06",
                    ],
                    [
                        "text" => "Tema med designprinciper",
                        "url" => "rapport/designprinciper",
                        "title" => "Rapport för kmom06",
                    ],
                    [
                        "text" => "Webbplatsdesign",
                        "url" => "rapport/webbplatsdesign",
                        "title" => "Rapport för kmom07-10",
                    ],
                ]
            ]
        ],
        [
            "text" => "Blogg",
            "url" => "blogg",
            "title" => "Dagens bild",
        ],
    ],
];
