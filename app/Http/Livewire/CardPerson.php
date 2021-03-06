<?php

namespace App\Http\Livewire;

use Faker\Factory;
use Livewire\Component;

class CardPerson extends Component
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

    public function getPeopleProperty()
    {
        return [
            $this->faker->name,
            $this->faker->name,
            $this->faker->name,
        ];
    }

    public function render()
    {
        return view('livewire.cards.person');
    }
}
