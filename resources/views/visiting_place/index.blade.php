@extends('layouts.app')
@section('content')
<!--
<html>

<head>
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/searchBar.css') }}" rel="stylesheet">


    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>

</head>


<body>

<div class="flight-engine">
    <div class="tabing">
        <ul>
            <li><a class="active" href="#1"><i class="fa fa-plane" aria-hidden="true"></i>Visiting Place</a>
            </li>
        </ul>
            <div class="tab-content">
                <div id="1" class="tab1 active">
                    <div class="flight-tab row">
                        <div class="persent-one">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <input type="text" name="takeoff_airport" class="textboxstyle" id="pac-input"
                                   placeholder="Enter a location">
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
</div>

<div class="container">
    <div id="map"></div>
    <div id="infowindow-content">
        <span id="place-name" class="title"></span><br>
        <span id="place-id"></span><br>
        <span id="place-address"></span>
    </div>


    <div id="right-panel">
        <h2 id="title"></h2>
        <table id="places" style="margin-left: 150px"></table>
    </div>
</div>
<script>

    var loco;

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -33.8688, lng: 151.2195},
            zoom: 13
        });

        var input = document.getElementById('pac-input');

        var autocomplete = new google.maps.places.Autocomplete(
            input, {placeIdOnly: true});
        autocomplete.bindTo('bounds', map);

        var service = new google.maps.places.PlacesService(map);
        var getNextPage = null;
        var moreButton = document.getElementById('more');

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var geocoder = new google.maps.Geocoder;

        var markers = [];

        autocomplete.addListener('place_changed', function () {

            var marker = new google.maps.Marker({
                map: map
            });
            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });
            infowindow.close();
            var place = autocomplete.getPlace();


            if (!place.place_id) {
                return;
            }
            geocoder.geocode({'placeId': place.place_id}, function (results, status) {

                if (status !== 'OK') {
                    window.alert('Geocoder failed due to: ' + status);
                    return;
                }
                // Clear out the old markers.
                markers.forEach(function (marker) {
                    marker.setMap(null);
                });
                markers = [];

                map.setZoom(16);
                map.setCenter(results[0].geometry.location);


                // Set the position of the marker using the place ID and location.
                marker.setPlace({
                    placeId: place.place_id,
                    location: results[0].geometry.location
                });
                markers.push(marker);
                marker.setVisible(true);
                infowindowContent.children['place-name'].textContent = place.name;
                infowindowContent.children['place-id'].textContent = place.place_id;
                infowindowContent.children['place-address'].textContent =
                    results[0].formatted_address;
                infowindow.open(map, marker);

                service.nearbySearch(
                    {location: results[0].geometry.location, radius: 500, type: ['store']},
                    function (results, status, pagination) {
                        if (status !== 'OK') return;

                        var infowindow1 = new google.maps.InfoWindow();

                        var placesList = document.getElementById('places');
                        var title = document.getElementById('title');

                        var bounds = new google.maps.LatLngBounds();

                        while (placesList.hasChildNodes()) {
                            placesList.removeChild(placesList.firstChild);
                        }
                        for (var i = 0; newplace = results[i]; i++) {
                            var placeLoc = newplace.geometry.location;
                            var place_address = newplace.formatted_address;

                            var marker = new google.maps.Marker({
                                map: map,
                                title: newplace.name,
                                position: newplace.geometry.location
                            });
                            markers.push(marker);
                            /*
                            google.maps.event.addListener(marker1, 'click', function() {
                                infowindow1.setContent('<div><strong>' + newplace.name + '</strong><br>' +
                                    'Place ID: ' + newplace.place_id + '<br>' +
                                    newplace.place_address + '</div>');
                                infowindow1.open(map, this);

                            });*/




                            var row = placesList.insertRow(0);
                            var cell1 = row.insertCell(0);
                            var cell2 = row.insertCell(1);

                            var li = document.createElement('text');
                            li.textContent = newplace.name;
                            cell1.appendChild(li);

                            var button = document.createElement('a');
                            button.textContent = "view";
                            button.href = "visiting_place/get/"+place.name +"/" + newplace.place_id +"/"+ newplace.formatted_address;

                            cell2.appendChild(button);


                            bounds.extend(newplace.geometry.location);
                        }

                        map.fitBounds(bounds);

                    });

            });

        });

    }


</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNLpeAyelrFUasRcA1P8or2w4JVv7d01E&libraries=places&callback=initMap"
        async defer></script>

</body>


</html>
-->


<!DOCTYPE html>
<html>
<head>
    <title>Place Autocomplete Hotel Search</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 100%;

        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        table {
            font-size: 12px;
        }
        #map {
            width: 1000px;
        }
        #listing {
            position: relative;
            width: 500px;
            height: 470px;
            overflow: auto;
            left: 600px;

            cursor: pointer;
            overflow-x: hidden;
        }
        #findhotels {
            position: relative;
            text-align: right;
            width: 100px;
            font-size: 14px;
            padding: 4px;
            z-index: 5;
            background-color: #fff;
        }
        #locationField {
            position: relative;
            width: 190px;
            height: 25px;
            left: 108px;
            top: 0px;
            z-index: 5;
            background-color: #fff;
        }
        #controls {
            position: relative;
            left: 300px;
            width: 140px;
            top: 0px;
            z-index: 5;
            background-color: #fff;
        }
        #autocomplete {
            width: 100%;
        }
        #country {
            width: 100%;
        }
        .placeIcon {
            width: 20px;
            height: 34px;
            margin: 4px;
        }
        .hotelIcon {
            width: 24px;
            height: 24px;
        }
        #resultsTable {
            border-collapse: collapse;
            width: 240px;
        }
        #rating {
            font-size: 13px;
            font-family: Arial Unicode MS;
        }
        .iw_table_row {
            height: 18px;
        }
        .iw_attribute_name {
            font-weight: bold;
            text-align: right;
        }
        .iw_table_icon {
            text-align: right;
        }
    </style>
</head>

<body>

<div id="findhotels">
    Find hotels in:
</div>

<div id="locationField">
    <input id="autocomplete" placeholder="Enter a city" type="text" />
</div>

<div id="controls">
    <select id="country">
        <option value="all">All</option>
        <option value="au">Australia</option>
        <option value="br">Brazil</option>
        <option value="ca">Canada</option>
        <option value="fr">France</option>
        <option value="de">Germany</option>
        <option value="mx">Mexico</option>
        <option value="nz">New Zealand</option>
        <option value="it">Italy</option>
        <option value="za">South Africa</option>
        <option value="es">Spain</option>
        <option value="pt">Portugal</option>
        <option value="us" selected>U.S.A.</option>
        <option value="uk">United Kingdom</option>
    </select>
</div>

<div id="map"></div>

<div id="listing">
    <table id="resultsTable">
        <tbody id="results"></tbody>
    </table>
</div>

<div style="display: none">
    <div id="info-content">
        <table>
            <tr id="iw-url-row" class="iw_table_row">
                <td id="iw-icon" class="iw_table_icon"></td>
                <td id="iw-url"></td>
            </tr>
            <tr id="iw-address-row" class="iw_table_row">
                <td class="iw_attribute_name">Address:</td>
                <td id="iw-address"></td>
            </tr>
            <tr id="iw-phone-row" class="iw_table_row">
                <td class="iw_attribute_name">Telephone:</td>
                <td id="iw-phone"></td>
            </tr>
            <tr id="iw-rating-row" class="iw_table_row">
                <td class="iw_attribute_name">Rating:</td>
                <td id="iw-rating"></td>
            </tr>
            <tr id="iw-website-row" class="iw_table_row">
                <td class="iw_attribute_name">Website:</td>
                <td id="iw-website"></td>
            </tr>
        </table>
    </div>
</div>

<script>


    var map, places, infoWindow;
    var markers = [];
    var autocomplete;
    var countryRestrict = {'country': 'us'};
    var MARKER_PATH = 'https://developers.google.com/maps/documentation/javascript/images/marker_green';
    var hostnameRegexp = new RegExp('^https?://.+?/');

    var countries = {
        'au': {
            center: {lat: -25.3, lng: 133.8},
            zoom: 4
        },
        'br': {
            center: {lat: -14.2, lng: -51.9},
            zoom: 3
        },
        'ca': {
            center: {lat: 62, lng: -110.0},
            zoom: 3
        },
        'fr': {
            center: {lat: 46.2, lng: 2.2},
            zoom: 5
        },
        'de': {
            center: {lat: 51.2, lng: 10.4},
            zoom: 5
        },
        'mx': {
            center: {lat: 23.6, lng: -102.5},
            zoom: 4
        },
        'nz': {
            center: {lat: -40.9, lng: 174.9},
            zoom: 5
        },
        'it': {
            center: {lat: 41.9, lng: 12.6},
            zoom: 5
        },
        'za': {
            center: {lat: -30.6, lng: 22.9},
            zoom: 5
        },
        'es': {
            center: {lat: 40.5, lng: -3.7},
            zoom: 5
        },
        'pt': {
            center: {lat: 39.4, lng: -8.2},
            zoom: 6
        },
        'us': {
            center: {lat: 37.1, lng: -95.7},
            zoom: 3
        },
        'uk': {
            center: {lat: 54.8, lng: -4.6},
            zoom: 5
        }
    };

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: countries['us'].zoom,
            center: countries['us'].center,
            mapTypeControl: false,
            panControl: false,
            zoomControl: false,
            streetViewControl: false
        });

        infoWindow = new google.maps.InfoWindow({
            content: document.getElementById('info-content')
        });

        // Create the autocomplete object and associate it with the UI input control.
        // Restrict the search to the default country, and to place type "cities".
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */ (
                document.getElementById('autocomplete')), {
                types: ['(cities)'],
                componentRestrictions: countryRestrict
            });
        places = new google.maps.places.PlacesService(map);

        autocomplete.addListener('place_changed', onPlaceChanged);

        // Add a DOM event listener to react when the user selects a country.
        document.getElementById('country').addEventListener(
            'change', setAutocompleteCountry);
    }
    var place;
    // When the user selects a city, get the place details for the city and
    // zoom the map in on the city.
    function onPlaceChanged() {
        place = autocomplete.getPlace();
        if (place.geometry) {
            map.panTo(place.geometry.location);
            map.setZoom(15);
            search();
        } else {
            document.getElementById('autocomplete').placeholder = 'Enter a city';
        }
    }

    // Search for hotels in the selected city, within the viewport of the map.
    function search() {
        var search = {
            bounds: map.getBounds(),
            types: ['museum','lodging']
        };

        places.nearbySearch(search, function(results, status) {
            if (status === google.maps.places.PlacesServiceStatus.OK) {
                clearResults();
                clearMarkers();
                // Create a marker for each hotel found, and
                // assign a letter of the alphabetic to each marker icon.
                for (var i = 0; i < results.length; i++) {
                    var markerLetter = String.fromCharCode('A'.charCodeAt(0) + (i % 26));
                    var markerIcon = MARKER_PATH + markerLetter + '.png';
                    // Use marker animation to drop the icons incrementally on the map.
                    markers[i] = new google.maps.Marker({
                        position: results[i].geometry.location,
                        animation: google.maps.Animation.DROP,
                        icon: markerIcon
                    });
                    // If the user clicks a hotel marker, show the details of that hotel
                    // in an info window.
                    markers[i].placeResult = results[i];
                    google.maps.event.addListener(markers[i], 'click', showInfoWindow);
                    setTimeout(dropMarker(i), i * 100);
                    addResult(results[i], i);
                }
            }
        });
    }

    function clearMarkers() {
        for (var i = 0; i < markers.length; i++) {
            if (markers[i]) {
                markers[i].setMap(null);
            }
        }
        markers = [];
    }

    // Set the country restriction based on user input.
    // Also center and zoom the map on the given country.
    function setAutocompleteCountry() {
        var country = document.getElementById('country').value;
        if (country == 'all') {
            autocomplete.setComponentRestrictions({'country': []});
            map.setCenter({lat: 15, lng: 0});
            map.setZoom(2);
        } else {
            autocomplete.setComponentRestrictions({'country': country});
            map.setCenter(countries[country].center);
            map.setZoom(countries[country].zoom);
        }
        clearResults();
        clearMarkers();
    }

    function dropMarker(i) {
        return function() {
            markers[i].setMap(map);
        };
    }

    function addResult(result, i) {
        var results = document.getElementById('results');
        var markerLetter = String.fromCharCode('A'.charCodeAt(0) + (i % 26));
        var markerIcon = MARKER_PATH + markerLetter + '.png';

        var tr = document.createElement('tr');
        tr.style.backgroundColor = (i % 2 === 0 ? '#F0F0F0' : '#FFFFFF');
        tr.onclick = function() {
            google.maps.event.trigger(markers[i], 'click');
        };
        var setName= result.name+", "+result.vicinity;
        var iconTd = document.createElement('td');
        var nameTd = document.createElement('td');
        var linkTd = document.createElement('a');
        linkTd.textContent = "view";
        linkTd.href = "visiting_place/get/"+autocomplete.getPlace().name+"/" + result.place_id +"/"+setName;
        var icon = document.createElement('img');
        icon.src = markerIcon;
        icon.setAttribute('class', 'placeIcon');
        icon.setAttribute('className', 'placeIcon');
        var name = document.createTextNode(result.name);
        iconTd.appendChild(icon);
        nameTd.appendChild(name);
        tr.appendChild(iconTd);
        tr.appendChild(nameTd);
        tr.appendChild(linkTd);
        results.appendChild(tr);
    }

    function clearResults() {
        var results = document.getElementById('results');
        while (results.childNodes[0]) {
            results.removeChild(results.childNodes[0]);
        }
    }

    // Get the place details for a hotel. Show the information in an info window,
    // anchored on the marker for the hotel that the user selected.
    function showInfoWindow() {
        var marker = this;
        places.getDetails({placeId: marker.placeResult.place_id},
            function(place, status) {
                if (status !== google.maps.places.PlacesServiceStatus.OK) {
                    return;
                }
                infoWindow.open(map, marker);
                buildIWContent(place);
            });
    }

    // Load the place information into the HTML elements used by the info window.
    function buildIWContent(place) {
        document.getElementById('iw-icon').innerHTML = '<img class="hotelIcon" ' +
            'src="' + place.icon + '"/>';
        document.getElementById('iw-url').innerHTML = '<b><a href="' + place.url +
            '">' + place.name + '</a></b>';
        document.getElementById('iw-address').textContent = place.vicinity;

        if (place.formatted_phone_number) {
            document.getElementById('iw-phone-row').style.display = '';
            document.getElementById('iw-phone').textContent =
                place.formatted_phone_number;
        } else {
            document.getElementById('iw-phone-row').style.display = 'none';
        }

        // Assign a five-star rating to the hotel, using a black star ('&#10029;')
        // to indicate the rating the hotel has earned, and a white star ('&#10025;')
        // for the rating points not achieved.
        if (place.rating) {
            var ratingHtml = '';
            for (var i = 0; i < 5; i++) {
                if (place.rating < (i + 0.5)) {
                    ratingHtml += '&#10025;';
                } else {
                    ratingHtml += '&#10029;';
                }
                document.getElementById('iw-rating-row').style.display = '';
                document.getElementById('iw-rating').innerHTML = ratingHtml;
            }
        } else {
            document.getElementById('iw-rating-row').style.display = 'none';
        }

        // The regexp isolates the first part of the URL (domain plus subdomain)
        // to give a short URL for displaying in the info window.
        if (place.website) {
            var fullUrl = place.website;
            var website = hostnameRegexp.exec(place.website);
            if (website === null) {
                website = 'http://' + place.website + '/';
                fullUrl = website;
            }
            document.getElementById('iw-website-row').style.display = '';
            document.getElementById('iw-website').textContent = website;
        } else {
            document.getElementById('iw-website-row').style.display = 'none';
        }
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNLpeAyelrFUasRcA1P8or2w4JVv7d01E&libraries=places&callback=initMap"
        async defer></script>

</body>
@endsection

</html>