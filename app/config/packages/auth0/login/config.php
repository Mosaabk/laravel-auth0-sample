<?php

return array(

    /*
    |--------------------------------------------------------------------------
    |   Your auth0 domain
    |--------------------------------------------------------------------------
    |   As set in the auth0 administration page
    |
    */

     'domain'        => 'derayah.auth0.com',
    /*
    |--------------------------------------------------------------------------
    |   Your APP id
    |--------------------------------------------------------------------------
    |   As set in the auth0 administration page
    |
    */

    'client_id'     => 'XnDIIRqNlEkmg1ZDnA91IfM45OBFFuNd',

    /*
    |--------------------------------------------------------------------------
    |   Your APP secret
    |--------------------------------------------------------------------------
    |   As set in the auth0 administration page
    |
    */
    'client_secret' => '3H-auvWeMK4S-XU80eILGXtM41ptGFImvU2iuTllzaVJjvq_Jv_pvEFOBuCzZwHL',


   /*
    |--------------------------------------------------------------------------
    |   The redirect URI
    |--------------------------------------------------------------------------
    |   Should be the same that the one configure in the route to handle the
    |   'Auth0\Login\Auth0Controller@callback'
    |
    */

    'redirect_uri'  => 'http://localhost:8000/auth0/callback'



);
