<?php


class Tags extends Controller
{
    /**
     * Tags constructor.
     */
    public function __construct()
    {
        $this->tagsModel = $this->model('Tag');
    }

    public function index()
    {
        $tags = $this->tagsModel->getTags();
        $data = [
            'tags' => $tags
        ];
        $this->view('tags/index', $data);
    }
}