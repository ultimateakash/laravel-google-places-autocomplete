<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    <body>
        <div class="row mt-3">
            <div class="col-6 offset-3">
                <input class="form-control" placeholder="Enter Location" id="placeInput"/>
            </div>
        </div>
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initAutocomplete" async></script>
        <script>
            let autocomplete;

            /* ------------------------- Initialize Autocomplete ------------------------ */
            function initAutocomplete() {
                const input = document.getElementById("placeInput");
                const options = {
                    componentRestrictions: { country: "IN" }
                }
                autocomplete = new google.maps.places.Autocomplete(input, options);
                autocomplete.addListener("place_changed", onPlaceChange)
            }

            /* --------------------------- Handle Place Change -------------------------- */
            function onPlaceChange() {
                const place = autocomplete.getPlace();
                console.log(place.formatted_address)
                console.log(place.geometry.location.lat())
                console.log(place.geometry.location.lng())
            }
        </script>
    </body>
</html>
