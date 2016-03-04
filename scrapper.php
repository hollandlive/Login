<?php

$html = file_get_contents("http://www.warriorforum.com//");

preg_match_all(
    '/<h3><a href="(.*?)" rel="bookmark" title=".*?">(.*?)<\/a><\/h3>/s',
    $html,
    $posts, // will contain the article data
    PREG_SET_ORDER // formats data into an array of posts
);

foreach ($posts as $post) {
    $link = $post[1];
    $title = $post[2];

    echo "<a href='" . $link . "'>" . $title . "</a></br>";
}

echo "<p>" . count($posts) . " posts found</p>";