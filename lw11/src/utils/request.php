<?php

function getRequestMethod(): string
{
    return $_SERVER['REQUEST_METHOD'];
}

function getPostParameter(string $args): ?string
{
    return $_POST[$args] ?? null;
}

