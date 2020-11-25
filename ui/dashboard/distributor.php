<div class="subheader subheader-transparent" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-1">
            <div class="d-flex align-items-baseline flex-wrap mr-5">

                <h2 class="text-dark font-weight-bolder mr-5 line-height-xl">
                    <span class="svg-icon svg-icon-xxl mr-1">
						<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                             height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24"/>
								<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                      fill="#000000" fill-rule="nonzero"/>
								<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                      fill="#000000" opacity="0.3"/>
							</g>
						</svg>
                        <!--end::Svg Icon-->
					</span>
                    Dashboard
                </h2>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <a href="#" class="btn btn-outline-primary btn-sm font-weight-bold font-size-base mr-2">Today</a>
            <a href="#" class="btn btn-primary btn-sm font-weight-bold font-size-base mr-2">Month</a>
            <a href="#" class="btn btn-outline-primary btn-sm font-weight-bold font-size-base mr-2">Quarter</a>
            <a href="#" class="btn btn-outline-primary btn-sm font-weight-bold font-size-base mr-2">Year</a>

            <div class='input-group' id='dashboardDateRange'>
                <input type='text' class="form-control" readonly placeholder="Select date range"/>
                <div class="input-group-append">
                    <span class="input-group-text"><i class="la la-calendar-check-o  text-primary"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-flex flex-column-fluid pt-7">
    <div class="container-fluid">
        <div class="row">

        </div>
    </div>
</div>

<script>
    // predefined ranges
    var start = moment().startOf('month');
    var end = moment().endOf('month');

    $('#dashboardDateRange').daterangepicker({
        buttonClasses: ' btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary',

        startDate: start,
        endDate: end,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, function (start, end, label) {
        $('#dashboardDateRange .form-control').val(start.format('DD/MM/YY') + ' - ' + end.format('DD/MM/YY'));
    });

    var mySalesNetworkMap = function() {
        var map = new GMaps({
            div: '#mySalesNetworkMap',
            lat: 24.953296,
            lng:  55.024875
        });
        map.addMarker({
            lat: 24.953296,
            lng:  55.024875,
            title: 'Lima',
            click: function(e) {
                if (console.log) console.log(e);
                alert('You clicked in this marker');
            }
        });
        map.addMarker({
            lat: 23.485327,
            lng:  58.239169,
            title: 'Lima',
            click: function(e) {
                if (console.log) console.log(e);
                alert('You clicked in this marker');
            }
        });

        map.addMarker({
            lat: -12.042,
            lng: -77.028333,
            title: 'Marker with InfoWindow',
            infoWindow: {
                content: '<span style="color:#000">HTML Content!</span>'
            }
        });
        map.setZoom(5);
    }

    //mySalesNetworkMap();
</script>

<!-- Chart code -->
<script>
    am4core.ready(function() {

// Themes begin
        am4core.useTheme(am4themes_animated);
// Themes end

// Create map instance
        var chart = am4core.create("chartdiv", am4maps.MapChart);

// Set map definition
        chart.geodata = am4geodata_worldLow;

// Set projection
        chart.projection = new am4maps.projections.Miller();

// Create map polygon series
        var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());

// Exclude Antartica
        polygonSeries.exclude = ["AQ"];

// Make map load polygon (like country names) data from GeoJSON
        polygonSeries.useGeodata = true;

// Configure series
        var polygonTemplate = polygonSeries.mapPolygons.template;
        polygonTemplate.tooltipText = "{name}";
        polygonTemplate.polygon.fillOpacity = 0.6;


// Create hover state and set alternative fill color
        var hs = polygonTemplate.states.create("hover");
        hs.properties.fill = chart.colors.getIndex(0);

// Add image series
        var imageSeries = chart.series.push(new am4maps.MapImageSeries());
        imageSeries.mapImages.template.propertyFields.longitude = "longitude";
        imageSeries.mapImages.template.propertyFields.latitude = "latitude";
        imageSeries.mapImages.template.tooltipText = "{title}";
        imageSeries.mapImages.template.propertyFields.url = "url";

        var circle = imageSeries.mapImages.template.createChild(am4core.Circle);
        circle.radius = 3;
        circle.propertyFields.fill = "color";

        var circle2 = imageSeries.mapImages.template.createChild(am4core.Circle);
        circle2.radius = 3;
        circle2.propertyFields.fill = "color";


        circle2.events.on("inited", function(event){
            animateBullet(event.target);
        })


        function animateBullet(circle) {
            var animation = circle.animate([{ property: "scale", from: 1, to: 5 }, { property: "opacity", from: 1, to: 0 }], 1000, am4core.ease.circleOut);
            animation.events.on("animationended", function(event){
                animateBullet(event.target.object);
            })
        }

        var colorSet = new am4core.ColorSet();

        imageSeries.data = [ {
            "title": "Brussels",
            "latitude": 50.8371,
            "longitude": 4.3676,
            "color":colorSet.next()
        }, {
            "title": "Copenhagen",
            "latitude": 55.6763,
            "longitude": 12.5681,
            "color":colorSet.next()
        }, {
            "title": "Paris",
            "latitude": 48.8567,
            "longitude": 2.3510,
            "color":colorSet.next()
        }, {
            "title": "Reykjavik",
            "latitude": 64.1353,
            "longitude": -21.8952,
            "color":colorSet.next()
        }, {
            "title": "Moscow",
            "latitude": 55.7558,
            "longitude": 37.6176,
            "color":colorSet.next()
        }, {
            "title": "Madrid",
            "latitude": 40.4167,
            "longitude": -3.7033,
            "color":colorSet.next()
        }, {
            "title": "London",
            "latitude": 51.5002,
            "longitude": -0.1262,
            "url": "http://www.google.co.uk",
            "color":colorSet.next()
        }, {
            "title": "Peking",
            "latitude": 39.9056,
            "longitude": 116.3958,
            "color":colorSet.next()
        }, {
            "title": "New Delhi",
            "latitude": 28.6353,
            "longitude": 77.2250,
            "color":colorSet.next()
        }, {
            "title": "Tokyo",
            "latitude": 35.6785,
            "longitude": 139.6823,
            "url": "http://www.google.co.jp",
            "color":colorSet.next()
        }, {
            "title": "Ankara",
            "latitude": 39.9439,
            "longitude": 32.8560,
            "color":colorSet.next()
        }, {
            "title": "Buenos Aires",
            "latitude": -34.6118,
            "longitude": -58.4173,
            "color":colorSet.next()
        }, {
            "title": "Brasilia",
            "latitude": -15.7801,
            "longitude": -47.9292,
            "color":colorSet.next()
        }, {
            "title": "Ottawa",
            "latitude": 45.4235,
            "longitude": -75.6979,
            "color":colorSet.next()
        }, {
            "title": "Washington",
            "latitude": 38.8921,
            "longitude": -77.0241,
            "color":colorSet.next()
        }, {
            "title": "Kinshasa",
            "latitude": -4.3369,
            "longitude": 15.3271,
            "color":colorSet.next()
        }, {
            "title": "Cairo",
            "latitude": 30.0571,
            "longitude": 31.2272,
            "color":colorSet.next()
        }, {
            "title": "Pretoria",
            "latitude": -25.7463,
            "longitude": 28.1876,
            "color":colorSet.next()
        } ];



    }); // end am4core.ready()
</script>

<script>
    am4core.ready(function() {

// Themes begin
        am4core.useTheme(am4themes_animated);
// Themes end

        var continents = {
            "AF": 0,
            "AN": 1,
            "AS": 2,
            "EU": 3,
            "NA": 4,
            "OC": 5,
            "SA": 6
        }

// Create map instance
        var chart = am4core.create("chartdiv2", am4maps.MapChart);
        chart.projection = new am4maps.projections.Miller();

// Create map polygon series for world map
        var worldSeries = chart.series.push(new am4maps.MapPolygonSeries());
        worldSeries.useGeodata = true;
        worldSeries.geodata = am4geodata_worldLow;
        worldSeries.exclude = ["AQ"];

        var worldPolygon = worldSeries.mapPolygons.template;
        worldPolygon.tooltipText = "{name}";
        worldPolygon.nonScalingStroke = true;
        worldPolygon.strokeOpacity = 0.5;
        worldPolygon.fill = am4core.color("#eee");
        worldPolygon.propertyFields.fill = "color";

        var hs = worldPolygon.states.create("hover");
        hs.properties.fill = chart.colors.getIndex(9);


// Create country specific series (but hide it for now)
        var countrySeries = chart.series.push(new am4maps.MapPolygonSeries());
        countrySeries.useGeodata = true;
        countrySeries.hide();
        countrySeries.geodataSource.events.on("done", function(ev) {
            worldSeries.hide();
            countrySeries.show();
        });

        var countryPolygon = countrySeries.mapPolygons.template;
        countryPolygon.tooltipText = "{name}";
        countryPolygon.nonScalingStroke = true;
        countryPolygon.strokeOpacity = 0.5;
        countryPolygon.fill = am4core.color("#eee");

        var hs = countryPolygon.states.create("hover");
        hs.properties.fill = chart.colors.getIndex(9);

// Set up click events
        worldPolygon.events.on("hit", function(ev) {
            ev.target.series.chart.zoomToMapObject(ev.target);
            var map = ev.target.dataItem.dataContext.map;
            if (map) {
                ev.target.isHover = false;
                countrySeries.geodataSource.url = "https://www.amcharts.com/lib/4/geodata/json/" + map + ".json";
                countrySeries.geodataSource.load();
            }
        });

// Set up data for countries
        var data = [];
        for(var id in am4geodata_data_countries2) {
            if (am4geodata_data_countries2.hasOwnProperty(id)) {
                var country = am4geodata_data_countries2[id];
                if (country.maps.length) {
                    data.push({
                        id: id,
                        color: chart.colors.getIndex(continents[country.continent_code]),
                        map: country.maps[0]
                    });
                }
            }
        }
        worldSeries.data = data;

// Zoom control
        chart.zoomControl = new am4maps.ZoomControl();

        var homeButton = new am4core.Button();
        homeButton.events.on("hit", function() {
            worldSeries.show();
            countrySeries.hide();
            chart.goHome();
        });

        homeButton.icon = new am4core.Sprite();
        homeButton.padding(7, 5, 7, 5);
        homeButton.width = 30;
        homeButton.icon.path = "M16,8 L14,8 L14,16 L10,16 L10,10 L6,10 L6,16 L2,16 L2,8 L0,8 L8,0 L16,8 Z M16,8";
        homeButton.marginBottom = 10;
        homeButton.parent = chart.zoomControl;
        homeButton.insertBefore(chart.zoomControl.plusButton);

    }); // end am4core.ready()
</script>