<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQRJbjCT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQRJbjCT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQRJbjCT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQRJbjCT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQRJbjCT\App_KernelDevDebugContainer([
    'container.build_hash' => 'QRJbjCT',
    'container.build_id' => 'b29e894f',
    'container.build_time' => 1612224981,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQRJbjCT');