<?php

class Error extends Controller
{
    public function __construct() {parent::__construct();}
    public function index()
    {
        echo '<!doctype html><html><head>
              <title>404 Not Found Missing</title>
              <style type="text/css"> body{background-color: #fff; margin: 40px;	font: 13px/20px normal Helvetica, Arial, sans-serif;color: #4F5155;}
              ::selection{ background-color: #002b70; color: white; }::moz-selection{ background-color: #002b70; color: white; }::webkit-selection{ background-color: #002b70; color: white; }
              .area{height: auto; width: 70%; background: #fbfbfb; margin: 0 auto; margin-top: 100px; border: 1px solid #f1f1f1; border-radius: 8px;} h2,p{margin-left: 30px;}</style>
              </head><body><div class="area">
                            <h2>404 Page Not Exist & Its not here or not Working</h2>
                            <p>Back to Home Page </p>
                            <p>Read Guide Line</a></p>
                        </div></body></html>' ;
    }
}