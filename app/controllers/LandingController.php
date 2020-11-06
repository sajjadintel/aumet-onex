<?php

class LandingController extends Controller
{
    function get()
    {
        $this->f3->reroute("/$this->language/dashboard");
    }
}
