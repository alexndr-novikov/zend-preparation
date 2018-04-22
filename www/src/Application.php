<?php

namespace Doc;

class Application
{
    public function handleRequest(\Symfony\Component\HttpFoundation\Request $request)
    {
        return new Response(parse_url($request->getRequestUri(), PHP_URL_PATH));
    }
}
