<?php
/**
 * Description of admin
 * Add Soon
 * @author AMMAD
 */
class Admin extends Controller 
{
    public function __construct(){parent::__construct();}

    public function index()
    {
        $this->page->view('admin/index');
    }

}
