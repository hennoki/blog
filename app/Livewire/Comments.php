<?php

namespace App\Livewire;


use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;
use Livewire\Component;


// class Comments extends Component
// {
//     public  $comments;
//     public Post $post;


//     protected $Listeners = [
//         'commentCreated' => 'commentCreated',
//         'commentDeleted' => 'commentDeleted',
//     ];

//     public function mount(Post $post)
//     {
//         $this->post = $post;
//         $this->comments = $this->selectComments();
//     }


//     public function render()
//     {

//         return view('livewire.comments');
//     }

//     #[On('commentCreated')]
//     public function commentCreated(int $id)
//     {
//         $comment = Comment::where('id', '=', $id)->first();
//         $this->comments =  $this->comments->prepend($comment);
//     }

//     #[On('commentDeleted')]
//     public function commentDeleted(int $id)
//     {
//         $this->comments = $this->comments->reject(function ($comment) use ($id) {
//             return $comment->id = $id;
//         });
//     }

//     /**
//      *
//      * @return mixed
//      * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
//      */
//     private function selectComments()
//     {
//         return Comment::where('post_id', '=', $this->post->id)
//             ->with(['post', 'user', 'comments'])
//             ->whereNull('parent_id')
//             ->orderByDesc('created_at')
//             ->get();
//     }
// }



class Comments extends Component
{
    public Post $post;

    protected $listeners = [
        'commentCreated' => '$refresh',
        'commentDeleted' => '$refresh',
    ];

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        //        dd('1234');
        $comments = $this->selectComments();
        return view('livewire.comments', compact('comments'));
    }

    /**
     *
     * @return mixed
     * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
     */
    private function selectComments()
    {
        return Comment::where('post_id', '=', $this->post->id)
            ->with(['post', 'user', 'comments'])
            ->whereNull('parent_id')
            ->orderByDesc('created_at')
            ->get();
    }
}
