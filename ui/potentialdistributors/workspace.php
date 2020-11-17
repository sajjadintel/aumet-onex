<div class="subheader subheader-transparent" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-1">
            <div class="d-flex align-items-baseline flex-wrap mr-5">

                <div class="d-flex flex-column text-dark-75">
                    <h2 class="text-dark font-weight-bolder mr-5 line-height-xl">
                    <span class="svg-icon svg-icon-xxl mr-1">
						<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
                                <path d="M10.5,10.5 L10.5,9.5 C10.5,9.22385763 10.7238576,9 11,9 C11.2761424,9 11.5,9.22385763 11.5,9.5 L11.5,10.5 L12.5,10.5 C12.7761424,10.5 13,10.7238576 13,11 C13,11.2761424 12.7761424,11.5 12.5,11.5 L11.5,11.5 L11.5,12.5 C11.5,12.7761424 11.2761424,13 11,13 C10.7238576,13 10.5,12.7761424 10.5,12.5 L10.5,11.5 L9.5,11.5 C9.22385763,11.5 9,11.2761424 9,11 C9,10.7238576 9.22385763,10.5 9.5,10.5 L10.5,10.5 Z" fill="#000000" opacity="0.3"/>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
					</span>
                        Potential Distributors</h2>
                    <span class="font-weight-normal font-size-h6 ml-12 pr-48">Find potential distributors in your targeted countries </span>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <a href="javascript:;" class="btn btn-primary font-weight-normal font-size-h5 py-2 px-5" onclick="loadTC()">Edit Targeted Countries</a>
        </div>
    </div>
</div>

<div class="d-flex flex-column-fluid pt-10">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9" id="potentialCountriesContainer">

            </div>
            <div class="col-md-3">
                <div class="card card-custom card-stretch gutter-b">
                    <div class="card-header border-0">
                        <h3 class="card-title font-weight-bolder text-dark">Suggested Countries</h3>
                    </div>
                    <div class="card-body">
                        <?php foreach ($arrSuggestedCountries as $country): ?>
                        <div class="d-flex align-items-center mb-10">

                            <div class="symbol symbol-40 symbol-white mr-5">
                                <span class="symbol-label">
                                    <img src="/theme/assets/media/svg/flags/<?php echo $country->flag?>" class="h-75 align-self-end" alt="">
                                </span>
                            </div>

                            <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                <a href="#" class="text-dark text-hover-primary mb-1 font-size-h5"><?php echo $country->country?></a>
                                <span class="text-dark-75"><?php echo $country->potentialDistributors?> potential distributor</span>
                            </div>


                            <div class="ml-2" data-toggle="tooltip" title="" data-placement="left" data-original-title="">
                                <a href="javascript:;" onclick="addSuggestedToTargetedCountries(<?php echo $country->countryId?>)" class="btn btn-hover-light-primary btn-sm btn-icon">
                                    <i class="ki ki-plus text-primary"></i>
                                </a>
                            </div>

                        </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>

    function loadTC(){
        WebApp.block();
        WebApp.loadPartialPage("#modalMDStaticContent", "profile/countries/targeted", fnCallback);
    }

    // Class definition
    var TargetedCountriesSelector = function() {
        // Private functions
        var _init = function () {
            // Dual Listbox
            var $this = $('#selectTargetedCountries');

            // init dual listbox
            var dualListBox = new DualListbox($this.get(0), {
                addEvent: function (value) {
                    //console.log(value);
                },
                removeEvent: function (value) {
                    //console.log(value);
                },
                availableTitle: "All Countries",
                selectedTitle: "Targeted Countries",
                addButtonText: "<i class='flaticon2-next'></i>",
                removeButtonText: "<i class='flaticon2-back'></i>",
                addAllButtonText: "<i class='flaticon2-fast-next'></i>",
                removeAllButtonText: "<i class='flaticon2-fast-back'></i>"
            });
        };

        return {
            // public functions
            init: function() {
                _init();
            },
        };
    }();

    function fnCallback(webResponse) {
        //$('#kt_root').foggy({
        //    blurRadius: 8,
        //    opacity: 1,
        //    cssFilterSupport: true,
        //});

        TargetedCountriesSelector.init();

        $("#modalMDStatic").modal("show");

        WebApp.unblock();
    }

    function addSuggestedToTargetedCountries(suggestedCountryId){

        WebApp.post("potentialdistributors/addSuggestedToTargetedCountries", {countryId: suggestedCountryId}, fnAddSuggestedToTargetedCountries);
    }

    function fnAddSuggestedToTargetedCountries(webResponse) {
        $("#potentialCountriesContainer").html(webResponse.data);
    }

    WebApp.loadPartialPage("#potentialCountriesContainer", "potentialdistributors/list");
</script>