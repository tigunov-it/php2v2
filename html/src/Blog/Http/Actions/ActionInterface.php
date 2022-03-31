<?php

namespace Blog\Http\Actions;

use Blog\Http\Request;
use Blog\Http\Response;

interface ActionInterface
{
    public function handle(Request $request): Response;
}