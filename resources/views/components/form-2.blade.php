<div>
    <h4>Page 2</h4>

    <form wire:submit.prevent="submitForm" class="needs-validation" novalidate>
        @if ($age_error)
            <p class="alert alert-danger">{{$age_error}}</p>
        @endif
        <div class="mb-3">
            <label class="form-label">Are you married?</label>
            <div class="form-check">
                <input wire:model="maritalStatus" class="form-check-input" wire:change="changeVal" type="radio" id="married_yes" value="Yes">
                <label class="form-check-label" for="married_yes">Yes</label>
            </div>
            <div class="form-check">
                <input wire:model="maritalStatus" class="form-check-input" wire:change="changeVal" type="radio" id="married_no" value="No">
                <label class="form-check-label" for="married_no">No</label>
            </div>
        </div>

        @if($maritalStatus === 'Yes')
            {{-- @dd($maritalStatus) --}}
            <div class="mb-3">
                <label class="form-label">Date of Marriage</label>
                <div class="row g-3">
                    
                    <div class="col">
                        <label for="Day">Day</label>
                        <input wire:model="dateOfMarriageDay" type="number" id="dateOfMarriageDay" maxlength="2" max="30" placeholder="10"  class="form-control" required>
                        @error('dateOfMarriageDay') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="col">
                        <label for="Day">Month</label>

                        <input wire:model="dateOfMarriageMonth" type="number" id="dateOfMarriageMonth"maxlength="2" max="12" placeholder="18"class="form-control" required>
                        @error('dateOfMarriageMonth') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="col">
                        <label for="Day">Year</label>

                        <input wire:model="dateOfMarriageYear" type="number" id="dateOfMarriageYear"  maxlength="4"  placeholder="2022"  class="form-control" required>
                        @error('dateOfMarriageYear') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="marriage_country">Country of Marriage</label>
                <input wire:model="marriageCountry" type="text" id="marriage_country" class="form-control" required>
                @error('marriageCountry') <span class="text-danger">{{$message}}</span> @enderror

            </div>
        @else
            <div class="mb-3">
                <label class="form-label">Are you widowed?</label>
                <div class="form-check">
                    <input wire:model="widowed" class="form-check-input" type="radio" id="widowed_yes" value="Yes">
                    <label class="form-check-label" for="widowed_yes">Yes</label>
                </div>
                <div class="form-check">
                    <input wire:model="widowed" class="form-check-input" type="radio" id="widowed_no" value="No">
                    <label class="form-check-label" for="widowed_no">No</label>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Have you ever been married in the past?</label>
                <div class="form-check">
                    <input wire:model="everMarried" class="form-check-input" type="radio" id="ever_married_yes" value="Yes">
                    <label class="form-check-label" for="ever_married_yes">Yes</label>
                </div>
                <div class="form-check">
                    <input wire:model="everMarried" class="form-check-input" type="radio" id="ever_married_no" value="No">
                    <label class="form-check-label" for="ever_married_no">No</label>
                </div>
            </div>
        @endif

        <button wire:click="previousPage" type="button" class="btn btn-secondary me-2">Previous</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
