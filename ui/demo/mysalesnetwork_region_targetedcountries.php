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
        <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero"/>
        <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6"/>
    </g>
</svg>
                        <!--end::Svg Icon-->
					</span>
                        My Sales Network
                        <span class="label label-dot label-danger ml-2 mr-2"></span>
                        <span class="text-primary "><?php echo $region ?> </span></h2>
                    <span class="font-weight-normal font-size-h6 ml-12 pr-48">You can add your existing distributors to the sales network, to help them receive more inquires from end users in their countries</span>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center">

            <a href="javascript:;" class="btn btn-primary font-weight-bold font-size-base" onclick="WebApp.loadPage('mysalesnetwork')">Back</a>

        </div>
    </div>
</div>

<div class="d-flex flex-column-fluid pt-7">

    <div class="container-fluid">

        <div class="card card-custom gutter-b">

            <div class="card-body d-flex align-items-center justify-content-between flex-wrap py-0">

                <div class="d-flex align-items-center mr-2 py-0">

                    <div class="d-flex mr-3">

                        <div class="navi navi-hover navi-active navi-link-rounded navi-bold d-flex flex-row">

                            <div class="navi-item mr-2">
                                <a href="javascript:;" class="navi-link " onclick="WebApp.loadPage('mysalesnetwork/region/<?php echo $regionId ?>/distributors')">
                                    <span class="navi-text font-weight-boldest">Existing Distributors</span>
                                </a>
                            </div>


                            <div class="navi-item mr-2">
                                <a href="javascript:;" class="navi-link active" >
                                    <span class="navi-text font-weight-bold">Targeted Countries</span>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label text-primary">Targeted Countries</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
            </div>
        </div>

        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label text-warning">Suggested Countries</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable_suggested"></div>
            </div>
        </div>
    </div>
</div>
<script>
    let _regionId = <?php echo $regionId ?>;
</script>
<script src="/assets/js/demo/mysalesnetwork-region-targetedcountries.js"></script>