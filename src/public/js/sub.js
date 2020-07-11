var map;
function initMap() {
	map = new google.maps.Map(document.getElementById('map'), {
		center: {
			lat: 34.7019399,
			lng: 135.51002519999997
		},
		zoom: 19
	});
}
window.onload = () => {
    if (document.getElementById('map')) {
        initMap();
    }
}
