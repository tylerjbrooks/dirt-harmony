<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewDirtWizard extends Component
{
    public $currentStep    = 1;
    public $successMessage = '';

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

    public function firstStepSubmit() {
        $validatedData = $this->validate([
            'postType' => 'required',
        ]);
 
        $this->currentStep += 1;
    }

    public function secondStepSubmit() {
        $validatedData = $this->validate([
            'title'   => 'required',
            'address' => 'required',
            'range'   => 'required',
        ]);
 
        $this->currentStep += 1;
    }

    public function thirdStepSubmit() {
        $validatedData = $this->validate([
            'quantity'    => 'required',
            'dirtType'    => 'required',
            'dirtQuality' => 'required',
        ]);
 
        $this->currentStep += 1;
    }

    public function fourthStepSubmit() {
        $validatedData = $this->validate([
            'description' => 'required',
        ]);
 
        $this->currentStep += 1;
    }

    public function fifthStepSubmit() {
        $validatedData = $this->validate([
            'name'            => 'required',
            'username'        => 'required',
            'phone'           => 'required',
            'email'           => 'required',
            'password'        => 'required',
            'confirmPassword' => 'required',
        ]);
 
        $this->currentStep += 1;
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
        $this->soilReport      = "";
        $this->description     = "";
        $this->image           = "";
        $this->name            = "";
        $this->username        = "";
        $this->phone           = "";
        $this->email           = "";
        $this->password        = "";
        $this->confirmPassword = "";
    }
}
