<?php

use Kint\Renderer\RichRenderer;

if (class_exists(RichRenderer::class)) {
    Kint\Kint::$depth_limit = 4;
}


