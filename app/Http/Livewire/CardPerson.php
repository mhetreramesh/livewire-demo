<?php

namespace App\Http\Livewire;

use Faker\Factory;
use Livewire\Component;

class CardPerson extends Component
{
    protected $faker;

    public $poll = 2000;
    public $pollStart = 1000;

    public function __construct($id)
    {
        parent::__construct($id);
        $this->faker = Factory::create();
    }

    public function mount($poll, $pollStart)
    {
        $this->poll = $poll;
        $this->pollStart = $pollStart;
    }

    public function getPersonProperty()
    {
        return $this->faker->name;
    }

    public function getDesignationProperty()
    {
        return $this->faker->jobTitle;
    }

    public function getAboutProperty()
    {
        return $this->faker->paragraph(1);
    }

    public function getStyleProperty()
    {
        return $this->faker->boolean;
    }

    public function render()
    {
        return view('livewire.card-person');
    }
}
