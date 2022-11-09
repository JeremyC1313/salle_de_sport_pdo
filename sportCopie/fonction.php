<?php 
function add_img(string $class_image = "", $url_image, $combien_image = 7) : void
{
    for ($i = 1 ; $i < $combien_image ; $i++) {
        echo <<<HTML
            <div class="d-inline-block bg-dark $class_image">
                <img class="$class_image" src="$url_image$i.jpg" alt="photo du coach">
            </div>
HTML;
    }
}

function add_item(string $class_item, string $class_link, string $url_link, string $title)
{
    return <<<HTML
        <li class="$class_item">
            <a class="$class_link text-white" href="$url_link">$title</a>
        </li>
HTML;
}