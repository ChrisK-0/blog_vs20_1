<?php

class Tag
{
    private $db;

    /**
     * Tag constructor.
     */
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getTags()
    {
        $this->db->query('SELECT * FROM tags');
        return $result = $this->db->getAll();
    }

    public function getPostTags($id)
    {
        $this->db->query('SELECT * FROM tags JOIN post_tags ON tags.id=post_tags.tag_id WHERE post_tags.post_id=:id');
        $this->db->bind(':id', $id);
        $result = $this->db->getAll();
        return $result;
    }

    // annab vastavale tag-ile koik sellega seotud postituste id-d
    public function getPostsByTagId($id)
    {
        $this->db->query('SELECT * FROM tags JOIN post_tags ON tags.id=post_tags.tag_id WHERE tags.id=:id');
        $this->db->bind(':id', $id);
        $result = $this->db->getAll();
        return $result;
    }

    // yhendab tag id postitustega, et anda vastava tag id-le iga postitus, kus on see tag
    public function getTagPostById($id)
    {
        $this->db->query('SELECT * FROM posts JOIN tags JOIN post_tags WHERE post_tags.post_id=posts.id AND post_tags.tag_id=tags.id AND tags.id=:id');
        $this->db->bind(':id', $id);
        $post = $this->db->getAll();
        return $post;
    }
}