<?php

namespace PHPSTORM_META {

    // CodeIgniter 4 Route Collection methods accept string as second parameter
    override(\CodeIgniter\Router\RouteCollection::get(0), map([
        '' => '@|string|array|\Closure'
    ]));
    
    override(\CodeIgniter\Router\RouteCollection::post(0), map([
        '' => '@|string|array|\Closure'
    ]));
    
    override(\CodeIgniter\Router\RouteCollection::put(0), map([
        '' => '@|string|array|\Closure'
    ]));
    
    override(\CodeIgniter\Router\RouteCollection::delete(0), map([
        '' => '@|string|array|\Closure'
    ]));
    
    override(\CodeIgniter\Router\RouteCollection::patch(0), map([
        '' => '@|string|array|\Closure'
    ]));
    
    override(\CodeIgniter\Router\RouteCollection::options(0), map([
        '' => '@|string|array|\Closure'
    ]));
    
    override(\CodeIgniter\Router\RouteCollection::head(0), map([
        '' => '@|string|array|\Closure'
    ]));

}
