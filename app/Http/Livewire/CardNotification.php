<?php

namespace App\Http\Livewire;

use Faker\Factory;
use Livewire\Component;

class CardNotification extends Component
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
        return $this->faker->realText(70);
    }

    public function getDescriptionProperty()
    {
        return $this->faker->realText();
    }

    public function getAuthorProperty()
    {
        return $this->faker->name;
    }

    public function getColorProperty()
    {
        $colors = [
            'blue',
            'green',
            'yellow',
            'orange',
            'red',
            'indigo',
            'purple',
            'pink',
        ];

        shuffle($colors);

        return $colors[0];
    }

    public function render()
    {
        return view('livewire.cards.notification');
    }
}
