<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    function index (){
        return "All posts";
    }

    function create_post (){
        return "Creating a new post";
    }

    function view_post (){
        return "Display single post";
    }

    function delete_post (){
        return "Deleting posts";
    }
}
