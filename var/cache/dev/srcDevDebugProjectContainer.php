<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerW752sva\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerW752sva/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerW752sva.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerW752sva\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerW752sva\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'W752sva',
    'container.build_id' => '79d5889f',
    'container.build_time' => 1516902662,
));
