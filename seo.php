<?php

$currentPage = basename($_SERVER['PHP_SELF']);

/*
|--------------------------------------------------------------------------
| PAGE SEO - AMA VISION
|--------------------------------------------------------------------------
*/

$seoData = [

    /* Home */
    "index.php" => [
        "title" => "AMA Vision | Integrated Creative Production Company in Delhi-NCR",
        "description" => "AMA Vision is an integrated creative production company in Delhi-NCR offering event production, creative production, content production, post-production, experiences, activations and end-to-end production management.",
        "keywords" => "AMA Vision, creative production company Delhi, event production Delhi NCR, content production, post production, production company India",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* About */
    "about-us.php" => [
        "title" => "About AMA Vision | Creative Production Company in Delhi-NCR",
        "description" => "Learn about AMA Vision, an execution-led creative production company delivering events, branded content, visual storytelling and production solutions across India.",
        "keywords" => "about AMA Vision, production company Delhi NCR, creative agency India, visual storytelling",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Clients */
    "clients.php" => [
        "title" => "Clients | AMA Vision Production Portfolio",
        "description" => "Explore the brands, government organizations and corporate clients that have partnered with AMA Vision for creative production and event execution.",
        "keywords" => "AMA Vision clients, corporate production clients, government events India",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Contact */
    "contact-us.php" => [
        "title" => "Contact AMA Vision | Creative Production Company Delhi-NCR",
        "description" => "Get in touch with AMA Vision for event production, branded films, content production, post-production and Pan-India creative execution.",
        "keywords" => "contact AMA Vision, production company Delhi, creative agency contact",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Content Digital */
    "content-digital.php" => [
        "title" => "Content & Digital Production | AMA Vision",
        "description" => "AMA Vision creates films, reels, social-first content, event content and digital content pipelines designed for modern brands.",
        "keywords" => "content production, reels production, social media content, event content",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Content Production */
    "content-production.php" => [
        "title" => "Content Production Services | AMA Vision",
        "description" => "Professional content production including corporate films, brand films, documentaries, event films, photography and creator-ready content.",
        "keywords" => "content production company, corporate films, brand films, event films",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Creative Production */
    "creative-production.php" => [
        "title" => "Creative Production Services | AMA Vision",
        "description" => "Creative direction, campaign ideation, event concepts, storyboarding and production planning by AMA Vision.",
        "keywords" => "creative production, campaign ideation, storyboarding, creative direction",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Event Production */
    "event-production-execution.php" => [
        "title" => "Event Production & Execution | AMA Vision",
        "description" => "End-to-end event production for corporate conferences, government events, exhibitions, summits, launches and branded experiences across India.",
        "keywords" => "event production company, corporate events India, government events, exhibition production",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Events */
    "events.php" => [
        "title" => "Event Production Services | AMA Vision",
        "description" => "Discover AMA Vision's expertise in producing impactful corporate events, conferences, summits and branded experiences.",
        "keywords" => "event production, corporate events, live event production",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Experiences & Activations */
    "experiences-activations.php" => [
        "title" => "Experiences & Brand Activations | AMA Vision",
        "description" => "Immersive brand activations, experiential formats, retail experiences, product launches and audience engagement solutions.",
        "keywords" => "brand activations, experiential marketing, mall activations, audience engagement",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Experiences */
    "experiences.php" => [
        "title" => "Experiences | AMA Vision",
        "description" => "Creative experiential production that transforms events into memorable brand experiences across multiple industries.",
        "keywords" => "experiential production, branded experiences, audience engagement",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Industries */
    "industries.php" => [
        "title" => "Industries We Serve | AMA Vision",
        "description" => "AMA Vision delivers production solutions for government, corporate, energy, retail, hospitality, education, real estate and lifestyle brands.",
        "keywords" => "industries served, government production, corporate production, event industries",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Post Production */
    "post-production.php" => [
        "title" => "Post Production Services | AMA Vision",
        "description" => "Professional video editing, reels editing, motion graphics, color grading, sound design and fast-turnaround post-production services.",
        "keywords" => "post production, video editing, motion graphics, color grading",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Production Management */
    "production-management.php" => [
        "title" => "Production Management Services | AMA Vision",
        "description" => "End-to-end production management covering crew planning, logistics, vendor coordination, supervision and quality delivery.",
        "keywords" => "production management, crew management, logistics coordination, vendor management",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* SEO Page */
    "seo.php" => [
        "title" => "SEO & Digital Visibility | AMA Vision",
        "description" => "AMA Vision creates content and digital assets that strengthen brand visibility across websites, search and social platforms.",
        "keywords" => "SEO content, digital visibility, content strategy",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* Work / Case Studies */
    "work.php" => [
        "title" => "Work & Case Studies | AMA Vision",
        "description" => "Explore AMA Vision's creative production portfolio featuring government events, corporate productions, branded experiences and visual storytelling.",
        "keywords" => "AMA Vision portfolio, case studies, creative production work, event production portfolio",
        "canonical" => "",
        "robots" => "index, follow"
    ],

];

/*
|--------------------------------------------------------------------------
| DEFAULT META
|--------------------------------------------------------------------------
*/

$defaultMeta = [
    "title" => "AMA Vision | Integrated Creative Production Company",
    "description" => "AMA Vision is an execution-led creative production company delivering events, branded content, post-production and visual storytelling with Pan-India execution capability.",
    "keywords" => "AMA Vision, creative production, event production, content production",
    "canonical" => "",
    "robots" => "index, follow"
];

/*
|--------------------------------------------------------------------------
| META SELECTOR
|--------------------------------------------------------------------------
*/

$pageMeta = $seoData[$currentPage] ?? $defaultMeta;
?>