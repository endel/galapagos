<?php

namespace galapagos\php54;

use galapagos as g;

function visitors() {
    return [
        new ClosureThis,
        new ArrayDeref,
        new CallableTypehint,
        new ObjectInstAccess,
        new Traits,
        new SessionHandling,
        new StreamContext,
        new IssetInstAccess
    ];
}

function transform_short_array($code) {
    return g\transform_with_visitors($code, []);
}

function transform_closure_this($code) {
    return g\transform_with_visitors($code, [
        new ClosureThis,
    ]);
}

function transform_array_deref($code) {
    return g\transform_with_visitors($code, [
        new ArrayDeref,
    ]);
}

function transform_callable_typehint($code) {
    return g\transform_with_visitors($code, [
        new CallableTypehint,
    ]);
}

function transform_object_inst_access($code) {
    return g\transform_with_visitors($code, [
        new ObjectInstAccess,
    ]);
}

function transform_traits($code) {
    return g\transform_with_visitors($code, [
            new Traits,
    ]);
}

function transform_session_handling($code) {
    return g\transform_with_visitors($code, [
        new SessionHandling,
    ]);
}

function transform_stream_context($code) {
    return g\transform_with_visitors($code, [
        new StreamContext,
    ]);
}

function transform_isset_inst_access($code) {
    return g\transform_with_visitors($code, [
        new ArrayDeref,
        new ObjectInstAccess,
        new IssetInstAccess,
    ]);
}
