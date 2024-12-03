<?php
class Pages extends Controller{
    private $userModel;
    public function __construct(){
        $this->userModel = $this->model('User');
    }

    public function index(){

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }

        $users = $this->userModel->getUsers();

        $data = [
            'title' => 'Home page',
            'users' => $users
        ];
        $this->view('pages/index', $data);
    }

    public function about(){
        $this->view('pages/about');
    }
}