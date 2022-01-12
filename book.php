<?php
    class Book
    {
        public int    $id;
        public string $author;
        public string $title;
        public bool   $available;
        public int    $pages;
        public int    $isbn;

        public function setData($data) 
        {
            foreach ($data AS $key => $value) 
                $this->{$key} = $value;
        }
    }
?>