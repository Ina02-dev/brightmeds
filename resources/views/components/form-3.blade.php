<div>
    <h4>Thank you for submission</h4>

        <p class="alert alert-success">Below Data Submitted Successfully!</p>
        <table class="table table-striped">
            <tr>
                <th>First Name</th>
                <td>{{$firstName}}</td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td>{{$lastName}}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{$address}}</td>
            </tr>
            <tr>
                <th>city</th>
                <td>{{$city}}</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>{{$country}}</td>
            </tr>
            <tr>
                <th>DOB</th>
                <td>{{$dobYear.'-'.$dobMonth.'-'.$dobDay}}</td>
            </tr>
            <tr>
                <th>Marital Status</th>
                <td>{{$maritalStatus}}</td>
            </tr>
            @if ($maritalStatus=="Yes")
                <tr>
                    <th>Date Of Marriage</th>
                    <td>{{$this->dateOfMarriageYear.'-'.$this->dateOfMarriageMonth.'-'.$this->dateOfMarriageDay}}</td>
                </tr>
                <tr>
                    <th>Marriage Country</th>
                    <td>{{$marriageCountry}}</td>
                </tr>
            @else
                <tr>
                    <th>widowed</th>
                    <td>{{$widowed}}</td>
                </tr>
                <tr>
                    <th>Ever Married</th>
                    <td>{{$everMarried}}</td>
                </tr>
            @endif
            
        </table>
       
        <button wire:click="back" type="button" class="btn btn-secondary me-2">Back </button>
</div>
