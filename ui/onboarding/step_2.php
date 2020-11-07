<div class="modal-body">
    <p class="display3 display4-lg display5-md text-primary">Welcome</p>
    <p class="font-size-h5 font-weight-bold">Fill your basic information to setup your account</p>
    <form class="form mt-10">
        <div class="form-group">
            <label class="font-size-h5 font-weight-bolder">What's your company name?</label>
            <input type="text" class="form-control" placeholder="Enter company name" id="onboardingCompany">
            <span class="form-text font-size-h6 text-muted">Please enter your company name</span>
        </div>
        <div class="form-group my-5">
            <label class="font-size-h5 font-weight-bolder">What is your position at your company?</label>
            <input type="text" class="form-control" placeholder="Enter position" name="position"  id="onboardingPosition">
            <span class="form-text font-size-h6 text-muted">Please enter your position</span>
        </div>
    </form>
</div>
<div class="modal-footer d-flex align-content-between">
    <button type="button" class="btn btn-outline-primary btn-lg font-size-h5 font-weight-bold" onclick="OnBoarding.back()">Back</button>
    <button type="button" class="btn btn-primary btn-lg font-size-h5 font-weight-bold" onclick="OnBoarding.next()">Finish</button>
</div>