<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1xdayko\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1xdayko/appProdProjectContainer.php') {
    touch(__DIR__.'/Container1xdayko.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\Container1xdayko\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \Container1xdayko\appProdProjectContainer([
    'container.build_hash' => '1xdayko',
    'container.build_id' => 'ae5e6985',
    'container.build_time' => 1551263441,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1xdayko');
