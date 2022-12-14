<?php

namespace App\Http\Livewire\BookCase;

use App\Models\BookCase;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class CommentBookCase extends Component
{
    use WithFileUploads;

    public $photo;

    public string $c = 'de';

    public BookCase $bookCase;

    public function render()
    {
        return view('livewire.book-case.comment-book-case');
    }

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:4096', // 4MB Max
        ]);

        $this->bookCase
            ->addMedia($this->photo)
            ->toMediaCollection('images');

        return to_route('bookCases.comment.bookcase', ['bookCase' => $this->bookCase->id]);
    }

    protected function url_to_absolute($url)
    {
        if (str($url)->contains('http')) {
            return $url;
        }
        if (!str($url)->contains('http')) {
            return str($url)->prepend('https://');
        }
    }
}
