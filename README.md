# Esplora i dintorni
The core component of this application is its ability to find other locations near an
existing location. The easiest way to find this information is to take advantage of a
third-party API. For this application, we'll be using the Google Places API, a web
API that can provide nearby locations from given latitude and longitude coordinates.

#Showing locations
Rather than simply telling our users what locations are near a given point of interest,
we can enhance user experience by showing them the points of interest and nearby
locations on a map. Many different mapping sources exist to show a map. For this
application, we'll take advantage of another Google API, the Google Maps API.

#Searching nearby locations
To search nearby locations, we're going to take advantage of the Google Places
API. Rather than implementing the API documentation ourselves, as outlined in
https://developers.google.com/places/documentation/, we're going to take
advantage of an open source wrapper for the API located at https://github.com/
joshtronic/php-googleplaces.
To take advantage of this wrapper, we download the repository to our extensions
folder.