<?php

namespace Doc;

class Application
{
    public function handleRequest(\Symfony\Component\HttpFoundation\Request $request)
    {
        return new Response($request->getRequestUri());
    }
}