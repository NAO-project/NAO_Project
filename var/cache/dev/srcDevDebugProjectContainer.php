<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0nhndxu\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0nhndxu/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container0nhndxu.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container0nhndxu\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container0nhndxu\srcDevDebugProjectContainer();
