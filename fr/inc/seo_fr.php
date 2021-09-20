<?php
function seoTag(string $property, string $content): string
{
    return <<< HTML
    <meta property="${property}" content="${content}">
HTML;
}
function twitterSeoTag(string $property, string $content): string
{
    return <<< HTML
    <meta name="${property}" content="${content}">
HTML;
}
function favicon(string $href)
{
    return <<< HTML
    <link rel="shortcut icon" type="image/x-icon" href="${href}">
HTML;
}
function seoRobotTag(): string
{
    return <<< HTML
    <meta name="robots" content="index, follow">
HTML;
}

function seoMetaList(string $context): array
{
    switch ($context) {
        case 'accueil':
            return [
                seoRobotTag(),
                seoTag("og:locale", "fr"),
                seoTag("og:url", "https://www.yohan-saint-martin.fr"),
                seoTag("og:type", "website"),
                seoTag("og:title", "Yohan StM - Développeur Web fullstack"),
                seoTag("og:description", "Je suis Yohan Saint-Martin et je suis développeur web fullstack avec une préférence pour la partie back-end."),
                seoTag("og:site_name", "Yohan SAINT-MARTIN  - Développeur web fullstack"),
                twitterSeoTag("twitter:card", "summary_large_image"),
                twitterSeoTag("twitter:site", "@Y_StM__"),
                twitterSeoTag("twitter:creator", "Yohan SAINT-MARTIN"),
                favicon("../../assets/img/fav-poly-yo.svg")
            ];
            break;

        case 'contact':
            return [
                seoRobotTag(),
                seoTag("og:locale", "fr"),
                seoTag("og:url", "https://www.yohan-saint-martin.fr/fr/contact.php"),
                seoTag("og:type", "website"),
                seoTag("og:title", "Yohan StM - Contactez-moi"),
                seoTag("og:description", "Pour m'encourager ou en savoir plus sur moi et mon parcours de développeur web, contactez-moi."),
                seoTag("og:site_name", "Yohan SAINT-MARTIN - Développeur web fullstack"),
                twitterSeoTag("twitter:card", "summary_large_image"),
                twitterSeoTag("twitter:site", "@Y_StM__"),
                twitterSeoTag("twitter:creator", "Yohan SAINT-MARTIN"),
                favicon("../../assets/img/fav-poly-yo.svg")
            ];
            break;

        default:
            return [
                seoRobotTag(),
                seoTag("og:locale", "fr"),
                seoTag("og:url", "https://www.yohan-saint-martin.fr"),
                seoTag("og:type", "website"),
                seoTag("og:site_name", "Yohan SAINT-MARTIN - Développeur web fullstack"),
                twitterSeoTag("twitter:card", "summary_large_image"),
                twitterSeoTag("twitter:site", "@Y_StM__"),
                twitterSeoTag("twitter:creator", "Yohan SAINT-MARTIN"),
                favicon("../../assets/img/fav-poly-yo.svg")
            ];
            break;
    }
}
