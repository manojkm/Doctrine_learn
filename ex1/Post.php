<?php

/** @Entity **/
class Post
{
    /** @Id @GeneratedValue @Column(type="integer") **/
    protected $id;

    /** @Column(type="string") **/
    protected $title;

    /** @Column(type="text") **/
    protected $body;

    /**
     * @ManyToOne(targetEntity="User")
     **/
    protected $author;

    /**
     * @OneToMany(targetEntity="Comment", mappedBy="post",
     *   cascade={"persist"})
     **/
    protected $comments;



    public function __construct(User $user)
    {
        $this->author = $user;
        $this->posts = new ArrayCollection();
    }

    public function addComment($text)
    {
        $this->comments[] = new Comment($this, $text);
    }

}