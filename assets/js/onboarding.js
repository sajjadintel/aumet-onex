'use strict';
// Class definition

var OnBoarding = function() {
    // Private functions

    var _step = 1;

    var _postData = {
        name: "",
        position: "",
        company: "",
        country: ""
    };

    // initializer
    var _init = function() {

        $('#kt_root').foggy({
            blurRadius: 8,
            opacity: 1,
            cssFilterSupport: true,
        });
        $("#modalOnboarding").modal("show");
        WebApp.loadPartialPage("#modalOnboardingContent", "onboarding/step/"+_step);
    };

    var _next = function (){

        switch (_step) {
            case 1:
                _postData.name  = $("#onboardingName").val();
                _postData.country  = $("#onboardingCountry").val();
                break;
            case 2:
                _postData.company  = $("#onboardingCompany").val();
                _postData.position  = $("#onboardingPosition").val();
                break;
        }


        if(_step < 2) {
            _step++;
            WebApp.loadPartialPage("#modalOnboardingContent", "onboarding/step/"+_step);
        }
        else {
            WebApp.post("onboarding/save", _postData, OnBoarding.submitCallback );
        }

    };

    var _back = function (){
        _step--;
        WebApp.loadPartialPage("#modalOnboardingContent", "onboarding/step/"+_step);
    };

    var _finish = function (){

        WebApp.loadPartialPage("#modalOnboardingContent", "onboarding/step/"+_step);
    };

    return {
        // Public functions
        init: function() {
            _init();
        },
        next: function() {
            _next();
        },
        back: function() {
            _back();
        },
        submitCallback: function(webResponse) {
            window.location.href = webResponse.data;
        },
        stepLoadCallback: function (webResponse){
            $('.select2').select2({placeholder:'Select a state'});
        }
    };
}();