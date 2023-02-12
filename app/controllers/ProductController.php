<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ProductController
{
    public function index()
    {
        $CRUD = new ProductModel();
        $show = $CRUD->index();
        $view = 'App/view/ShowView.php';
        include("App/template/front-end/layout.php");
    }
    public function them()
    {
        $CRUD = new ProductModel();
        $view = "App/view/AddView.php";
        include("app/template/front-end/layout.php");
    }
    public function Update()
    {
        $CRUD = new ProductModel();
        $update = $CRUD->ShowNameUpdate($_GET["id"]);
        $view = "App/view/EditView.php";
        include("App/template/front-end/layout.php");
    }
    public function Delete()
    {
        $CRUD = new ProductModel();
        $CRUD->Delete($_GET["id"]);
        header("location:./");
    }
    public function checkButton()
    {
        $CRUD = new ProductModel();
        if (isset($_POST["btn"])) {
            if ($_POST["name"] != "") {
                $CRUD->Create($_POST["name"]);
                header("location:./");
            }
        }
        if (isset($_POST["edit"])) {
            $CRUD->Update($_GET["id"], $_POST["edit-name"]);
            header("location:./");
        }
    }
}
