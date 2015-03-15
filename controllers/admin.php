<?php
/**
 * Description of admin
 * Add Soon
 * @author AMMAD
 */
class Admin extends Controller 
{
    public function __construct(){parent::__construct();}
    
    // just a view of site
    // main Index Function
    // admin index front land page after login 
    // security not active yet
    public function index()
    {
        // Title
        $this->page->title = "Welcome Note &mdash; ".SITE_NAME;
        // Main header.php in view/admin/header.php 
        $this->page->view('admin/header');
        //Admin Navigation
        $this->page->view('admin/nav');
        // Main index.php in view/admin/index.php 
        $this->page->view('admin/index');
    }
    
    // media page just view
    public function media()
    {
        // Title
        $this->page->title = "Media View &mdash; ".SITE_NAME;
        // Main header.php in view/admin/header.php 
        $this->page->view('admin/header');
        //Admin Navigation
        $this->page->view('admin/nav');
        // Main index.php in view/admin/index.php 
        $this->page->view('admin/media');
    }
    
    // Pages Page Just View
    public function pages()
    {
        // Title
        $this->page->title = "Media View &mdash; ".SITE_NAME;
        // Main header.php in view/admin/header.php 
        $this->page->view('admin/header');
        //Admin Navigation
        $this->page->view('admin/nav');
        // Main index.php in view/admin/index.php 
        $this->page->view('admin/pages/index');
    }
}
