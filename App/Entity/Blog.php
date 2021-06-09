<?php

namespace App\Entity;

class Blog {

    // The whole team does not have php at least 7.4
    private /*int*/ $id;
    private /*string*/ $title;
    private /*string*/ $text;

    /**
     * @param array $blogs
     */
    public function hydrate (array $blogs)
    {
        foreach ($blogs as $key => $blog) {
            $method = "set". ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($blog);
            }
        }
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text): void
    {
        $this->text = $text;
    }



}
