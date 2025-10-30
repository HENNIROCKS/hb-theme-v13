<?php

foreach ($articles as $article) {

    $html .= snippet('articles/article', ['article' => $article, 'class' => 'portfolio-page'], true);
}

$json['html'] = $html;
$json['more'] = $more;

echo json_encode($json);
