<div class="modal-body">
    <p class="display3 display4-lg display5-md text-primary">Welcome</p>
    <p class="font-size-h5 font-weight-bold">Fill your basic information to setup your account</p>
    <form class="form mt-10">
        <div class="form-group">
            <label class="font-size-h5 font-weight-bolder">What's your name?</label>
            <input type="text" class="form-control" placeholder="Enter full name" name="name" id="onboardingName">
            <span class="form-text font-size-h6 text-muted">Please enter your full name</span>
        </div>
        <div class="form-group my-5">
            <label class="font-size-h5 font-weight-bolder">Where are you based?</label>
            <select class="form-control select2" id="onboardingCountry" name="country">
                <option label="Label"></option>
                <?php echo $_SESSION['htmlSelectCountries']; ?>
            </select>
            <span class="form-text font-size-h6 text-muted">Please select your country</span>

        </div>
    </form>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary btn-lg font-size-h5 font-weight-bolder btn-block col-2" onclick="OnBoarding.next()">Next</button>
</div>
<script>
    $('#onboardingCountry').select2({
        placeholder: "Select Country",
    });
</script>