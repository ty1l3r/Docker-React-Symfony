<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZIObSjU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZIObSjU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZIObSjU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZIObSjU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZIObSjU\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZIObSjU',
    'container.build_id' => 'e018ecc2',
    'container.build_time' => 1610899471,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZIObSjU');
