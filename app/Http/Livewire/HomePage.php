<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Livewire\Component;

class HomePage extends Component
{
    public string $locale;

    public string $author = '';
    public string $title = '';
    public string $content = '';

    public function mount(): void
    {
        $this->locale = app()->getLocale();
    }

    public function render(): View
    {
        return view('livewire.home-page', [
            'locales' => $this->getLocales(),
            'posts' => $this->getPosts(),
        ]);
    }

    protected function getLocales(): array
    {
        return [
            'en' => 'English',
            'fr' => 'Français',
            'es-MX' => 'Español mexicano',
            'es-CO' => 'Español colombiano',
        ];
    }

    public function updatedLocale($value): void
    {
        app()->setLocale($value);
    }

    public function save(): void
    {
        Post::create([
            'author' => $this->author,
            $this->locale => [
                'title' => $this->title,
                'content' => $this->content,
            ],
        ]);

        $this->author = '';
        $this->title = '';
        $this->content = '';
    }

    protected function getPosts()
    {
        return Post::get();
    }
}
