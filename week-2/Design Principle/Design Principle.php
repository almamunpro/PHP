<?php
class book
{
    protected $number_of_page;
    public function purchase(){

    }
    public function lend(){

    }
}
//mock object
class AudioBook extends Book{
    public Book $book;
    public function listen(){

    }
    // public function lend(){
    //     return null;
    // }
}


class Ebook extends Book{

}