<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQKRa3q7\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQKRa3q7/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQKRa3q7.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQKRa3q7\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQKRa3q7\App_KernelDevDebugContainer([
    'container.build_hash' => 'QKRa3q7',
    'container.build_id' => '509debac',
    'container.build_time' => 1628179087,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQKRa3q7');
