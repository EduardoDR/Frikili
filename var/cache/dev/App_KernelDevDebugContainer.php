<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerE38BGpJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerE38BGpJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerE38BGpJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerE38BGpJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerE38BGpJ\App_KernelDevDebugContainer([
    'container.build_hash' => 'E38BGpJ',
    'container.build_id' => '09ee553c',
    'container.build_time' => 1636051149,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerE38BGpJ');