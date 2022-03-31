<?php

use Kint\Renderer\RichRenderer;

if (class_exists(RichRenderer::class)) {
    Kint\Kint::$max_depth = 3;
}