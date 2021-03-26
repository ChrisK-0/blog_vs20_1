<?php


class Tags extends Controller
{
    /**
     * Tags constructor.
     */
    public function __construct()
    {
        $this->tagsModel = $this->model('Tag');
        $this->postsModel = $this->model('Post');
    }

    public function index()
    {
        $tags = $this->tagsModel->getTags();
        $data = [
            'tags' => $tags
        ];
        $this->view('tags/index', $data);
    }

    public function show($id)
    {
        $tags = $this->tagsModel->getPostsByTagId($id);
        // $tags = $this->tagsModel viitab sellele, et voetaks app/modeles/Tag.php
        // failist selle koodi funktsioon ja getPostsByTagId($id) viitab millise
        // koodi funktsiooni voetakse
        $tags = $this->tagsModel->getTagPostById($id);
        $data = [
            'tags' => $tags
        ];
        $this->view('tags/show', $data);
    }

}