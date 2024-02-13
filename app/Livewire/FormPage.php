<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class FormPage extends Component
{
    public $currentPage = 1;

    public $firstName;
    public $lastName;
    public $address;
    public $city;
    public $country;
    public $dobMonth;
    public $dobDay;
    public $dobYear;

    public $maritalStatus = 'No';
    public $dateOfMarriageMonth;
    public $dateOfMarriageDay;
    public $dateOfMarriageYear;
    public $marriageCountry;
    public $widowed = 'No';
    public $everMarried = 'No';
    public $age_error = null;

    public function render()
    {
        return view('livewire.form-page');
    }

    public function nextPage()
    {
        $this->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'dobMonth' => 'required',
            'dobDay' => 'required',
            'dobYear' => 'required',
        ]);
        // $this->validateCurrentPage();
        $this->currentPage++;
    }

    public function previousPage()
    {
        $this->currentPage--;
    }

    public function submitForm()
    {
        $this->validateCurrentPage();

        // Save form data to database
        if ($this->maritalStatus == "Yes") {
            $dob = Carbon::parse($this->dobYear . '-' . $this->dobMonth . '-' . $this->dobDay);
            $mariage_date = Carbon::parse($this->dateOfMarriageYear . '-' . $this->dateOfMarriageMonth . '-' . $this->dateOfMarriageDay);

            $now = Carbon::now(); // Get the current date
            $yearsDifference = $dob->diffInYears($now);
            if ($yearsDifference < 18) {
                $this->age_error = "You are not eligible to apply because your marriage occurred before your 18th birthday.";
            } else {
                // Reset form data after submission
                // $this->resetForm();
                $this->currentPage = 3;
            }
        } else {
            // Reset form data after submission
            // $this->resetForm();
            $this->currentPage = 3;
        }
    }
    public function changeVal()
    {
        // dd($this->maritalStatus);
    }

    private function validateCurrentPage()
    {
        if ($this->currentPage === 1) {
            // dd('here');
            $this->validate([
                'firstName' => 'required',
                'lastName' => 'required',
                'address' => 'required',
                'city' => 'required',
                'country' => 'required',
                'dobMonth' => 'required',
                'dobDay' => 'required',
                'dobYear' => 'required',
            ]);
        } elseif ($this->currentPage === 2) {
            if ($this->maritalStatus === 'Yes') {
                $this->validate([
                    'dateOfMarriageMonth' => 'required',
                    'dateOfMarriageDay' => 'required',
                    'dateOfMarriageYear' => 'required',
                    'marriageCountry' => 'required',
                ]);
            } else {
                $this->validate([
                    'widowed' => 'required',
                    'everMarried' => 'required',
                ]);
            }
        }
    }

    private function resetForm()
    {
        $this->firstName = null;
        $this->lastName = null;
        $this->address = null;
        $this->city = null;
        $this->country = null;
        $this->dobMonth = null;
        $this->dobDay = null;
        $this->dobYear = null;
        $this->maritalStatus = 'No';
        $this->dateOfMarriageMonth = null;
        $this->dateOfMarriageDay = null;
        $this->dateOfMarriageYear = null;
        $this->marriageCountry = null;
        $this->widowed = 'No';
        $this->everMarried = 'No';
    }

    public function back()
    {
        $this->resetForm();
        $this->currentPage = 1;
    }
}