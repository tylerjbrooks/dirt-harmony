<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewDirtWizard extends Component
{
    public $currentStep    = 0;
    public $totalSteps     = 5;
    public $lastStep       = 4;
    public $successMessage = '';
    public $validates = [
        [
            'postType'        => 'required',
        ],[
            'title'           => 'required',
            'address'         => 'required',
            'range'           => 'required',
        ],[
            'quantity'        => 'required',
            'dirtType'        => 'required',
            'dirtQuality'     => 'required',
        ],[
            'description'     => 'required',
        ],[
            'name'            => 'required',
            'username'        => 'required',
            'phone'           => 'required',
            'email'           => 'required',
            'password'        => 'required',
            'confirmPassword' => 'required',
        ],[
        ]
    ];

    // Step 1
    public $postType;

    // Step 2
    public $title;
    public $address;
    public $range;

    // Step 3
    public $quantity;
    public $dirtType;
    public $dirtQuality;
    //public $soilReport;

    // Step 4
    public $description;
    //public $image;

    // Step 5
    public $name;
    public $username;
    public $phone;
    public $email;
    public $password;
    public $confirmPassword;

    public function render() {
        return view('livewire.new-dirt-wizard');
    }

    public function mount() {
        $this->currentStep = 0;
        $this->totalSteps  = 5;
        $this->lastStep    = $this->totalSteps - 1;
    }

    public function validatePrev() {
        $this->withValidator(function ($validator) {
            $validator->after(function ($validator) {
                $this->currentStep -= ($this->currentStep > 0) ? 1 : 0;
                $this->dispatchBrowserEvent('prev');
            });
        })->validate($this->validates[$this->currentStep]);
    }

    public function validateNext() {
        $validatedData = $this->validate($this->validates[$this->currentStep]);
        $this->currentStep += ($this->currentStep < $this->lastStep) ? 1 : 0;
        $this->dispatchBrowserEvent('next');
    }

    public function submitForm() {
        /***  make something...
        Product::create([
            'quantity' => $this->name,
            'dirt_type' => $this->amount,
            'description' => $this->description,
            'stock' => $this->stock,
            'status' => $this->status,
        ]);
        ***/
  
        $this->successMessage = 'Product Created Successfully.';
  
        $this->clearForm();
  
        $this->currentStep = 1;
    }
  
    public function back($step) {
        $this->currentStep = $step;    
    }
  
    public function backOne() {
        $this->currentStep -= 1;    
    }
  
    public function clearForm() {
        $this->postType        = "";
        $this->title           = "";
        $this->address         = "";
        $this->range           = "";
        $this->quantity        = "";
        $this->dirtType        = "";
        $this->dirtQuality     = "";
        //$this->soilReport      = "";
        $this->description     = "";
        //$this->image           = "";
        $this->name            = "";
        $this->username        = "";
        $this->phone           = "";
        $this->email           = "";
        $this->password        = "";
        $this->confirmPassword = "";
    }
}
