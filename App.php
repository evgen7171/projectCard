<?php


namespace main;


class ProjectCard
{
    public function run()
    {
        $users = [
            ['name' => 'kolya'], ['name' => 'vasya']
        ];
        echo $this->view('main', ['users' => $users]);
    }

    public function view($tmp, $param)
    {
        ob_start();
        extract($param);
        require 'views/' . $tmp . '.tpl.php';
        return ob_get_clean();
    }
}