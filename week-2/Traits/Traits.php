<?php
//Composition, Inheritance
//Composition -> has a 
//Inheritance -> is a



class Post
{
    use Shareable;// if we want to use Shareable
    public $object;

    public function method1()
    {

    }
    public function method2()
    {

    }
}

class Comment
{
    use Shareable;// if we want to use Shareable
}

class posti implements Share_able
{
    use Shareable;// if we want to use Shareable
}

interface Share_able
{
    public function share();
}

//Ruby mixin
//unrelated
trait Shareable
{
     
    public function share()
    {
        //kivabe share hobe
        printf(format: "Shared to social media");

    }
}

$post = new Post();
$post->share();

$comment = new Comment();
$comment->share();