<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSzxCNjH\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSzxCNjH/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSzxCNjH.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSzxCNjH\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSzxCNjH\App_KernelDevDebugContainer([
    'container.build_hash' => 'SzxCNjH',
    'container.build_id' => 'fa89f363',
    'container.build_time' => 1633163237,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSzxCNjH');
