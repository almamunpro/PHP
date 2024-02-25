<?php
class BlogPost{
    private status $status;

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}

enum status{
    case DRAFT;
    case PUBLISHED;
    case UNDER_REVIEW;

}
// final class status{
//     public const DRAFT = 'draft';
//     public const PUBLISHED = 'published';
//     public const UNDER_REVIEW = 'under_review';

// }


$post = new BlogPost();



if(!$post->getStatus()=== status::PUBLISHED){

}