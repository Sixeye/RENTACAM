<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNDrWE6C\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNDrWE6C/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNDrWE6C.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNDrWE6C\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerNDrWE6C\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'NDrWE6C',
    'container.build_id' => '9acbeff5',
    'container.build_time' => 1579454767,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNDrWE6C');
