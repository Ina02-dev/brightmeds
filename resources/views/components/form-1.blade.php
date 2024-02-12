<div>
    <h4>Page 1</h4>

    <form wire:submit.prevent="nextPage" class="needs-validation" novalidate>
        <div class="row mt-3">
            <div class="mb-3 col-md-6">
                <label for="first_name" class="form-label">First Name</label>
                <input wire:model="firstName" type="text" id="first_name" class="form-control" required>
                @error('firstName') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            <div class="mb-3 col-md-6">
                <label for="lastName" class="form-label">Last Name</label>
                <input wire:model="lastName" type="text" id="lastName" class="form-control" required>
                @error('lastName') <span class="text-danger">{{$message}}</span> @enderror

            </div>
            <div class="mb-3 col-md-6">
                <label for="address" class="form-label">Address</label>
                <input wire:model="address" type="text" id="address" class="form-control" required>
                @error('address') <span class="text-danger">{{$message}}</span> @enderror

            </div>
            <div class="mb-3 col-md-6">
                <label for="city" class="form-label">City</label>
                <input wire:model="city" type="text" id="city" class="form-control" required>
                @error('city') <span class="text-danger">{{$message}}</span> @enderror

            </div>
            <div class="mb-3 col-md-6">
                <label for="country" class="form-label">Country</label>
                <input wire:model="country" type="text" id="country" class="form-control" required>
                @error('country') <span class="text-danger">{{$message}}</span> @enderror

            </div>
            <div class="mb-3 col-md-2">
                <label for="dobDay" class="form-label">dobDay</label>
                <input wire:model="dobDay" type="number" id="dobDay" class="form-control" max="30" maxlength="2" placeholder="10" required>
                @error('dobDay') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            <div class="mb-3 col-md-2">
                <label for="dobMonth" class="form-label">dobMonth</label>
                <input wire:model="dobMonth" type="number" id="dobMonth" class="form-control" max="12" maxlength="2" placeholder="12" required>
                @error('dobMonth') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            <div class="mb-3 col-md-2">
                <label for="dobYear" class="form-label">dobYear</label>
                <input wire:model="dobYear" type="number" id="dobYear" class="form-control" maxlength="4"  placeholder="2002" required>
                @error('dobYear') <span class="text-danger">{{$message}}</span> @enderror
            </div>
        </div>


        <!-- Add other form fields with similar structure -->

        <button type="submit" class="btn btn-primary">Next</button>
    </form>
</div>
