<?php
function nav_item(string $link, string $title, string $link_class = ''): string
{
    $li_class = 'nav-item fs-4 px-1 mx-3';
    if ($_SERVER['SCRIPT_NAME'] === $link) {
        $link_class .= ' active';
    }
    return <<<HTML
    <li class="$li_class">
        <a class="$link_class" href="$link">$title</a>
</li>
HTML;
}

function nav_items(string $link_class): array
{
    return [
        nav_item('../fr/accueil.php', 'Accueil', $link_class),
        nav_item('../fr/contact.php', 'Contact', $link_class),
        nav_item('../fr/manifeste.php', 'Manifeste', $link_class)
    ];
}
