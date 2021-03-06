<?php

namespace App\Http\Livewire;

use Faker\Factory;
use Livewire\Component;

class CardNews extends Component
{
    protected $faker;

    public $poll = 2000;

    public function __construct($id)
    {
        parent::__construct($id);
        $this->faker = Factory::create();
    }

    public function mount($poll)
    {
        $this->poll = $poll;
    }

    public function getTitleProperty()
    {
        return $this->faker->text(70);
    }

    public function getDescriptionProperty()
    {
        return $this->faker->paragraph();
    }

    public function getAuthorProperty()
    {
        return $this->faker->name;
    }

    public function render()
    {
        return view('livewire.cards.news');
    }
}
