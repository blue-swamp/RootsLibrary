<?php

// use ModelUsers;

class Controller_Home extends Controller_Template
{
    public function action_page()
    {
    	

        $data['books_data'] = Model_Book::find('all');
		$this->template->title = "UserPage";
		$this->template->content = View::forge('home', $data);
}
}