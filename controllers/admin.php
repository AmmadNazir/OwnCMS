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
        $this->page->view('admin/sidebar');
        // Main index.php in view/admin/index.php 
        $this->page->view('admin/index');
        // footer
        $this->page->view('admin/footer');
    }
    
    // media page just view
    public function media()
    {
        // Title
        $this->page->title = "Media View &mdash; ".SITE_NAME;
        // Main header.php in view/admin/header.php 
        $this->page->view('admin/header');
        //Admin Navigation
        $this->page->view('admin/sidebar');
        // Main index.php in view/admin/index.php 
        $this->page->view('admin/media');
        // footer
        $this->page->view('admin/footer');
    }

    public function uploads()
    {
        if($_FILES['file']['tmp_name']) {
            $upload = new Uploads();
            $upload->SetFileName($_FILES['file']['name']);
            $upload->SetTempName($_FILES['file']['tmp_name']);
            $upload->SetUploadDirectory("public/uploads/"); //Upload directory, this should be writable
            $upload->SetValidExtensions(array('gif', 'jpg', 'jpeg', 'png')); //Extensions that are allowed if none are set all extensions will be allowed.
            //$upload->SetEmail("Sidewinder@codecall.net"); //If this is set, an email will be sent each time a file is uploaded.
            //$upload->SetIsImage(true); //If this is set to be true, you can make use of the MaximumWidth and MaximumHeight functions.
            //$upload->SetMaximumWidth(60); // Maximum width of images
            //$upload->SetMaximumHeight(400); //Maximum height of images
            $upload->SetMaximumFileSize(30000000); //Maximum file size in bytes, if this is not set, the value in your php.ini file will be the maximum value
            echo $upload->UploadFile();
        }
    }
    
    // Pages Page Just View
    public function pages()
    {
        // Title
        $this->page->title = "Media View &mdash; ".SITE_NAME;
        // Main header.php in view/admin/header.php 
        $this->page->view('admin/header');
        //Admin Navigation
        $this->page->view('admin/sidebar');
        // Main index.php in view/admin/index.php 
        $this->page->view('admin/pages/index');
        // footer
        $this->page->view('admin/footer');
    }
}
