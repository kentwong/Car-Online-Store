// // Array to store selected products and add it to session
// var selectedProduct = [];
// var temp = [];
// var session = window.sessionStorage;

// // Code snippet for $_GET equivalent in javascript: https://gist.github.com/michaelbeltran/669c522d2496fe6810ef (Attribute to michaelbetran)
// var $_GET = [];
// function GET() {
// 	var url = location.search.replace("?", "").split("&");
// 	for (var index = 0; index < url.length; index++) {
// 		var value = url[index].split("=");
//         $_GET = value[1];
// 	}
// }
// GET();

// temp.push($_GET);
// session.setItem('products', JSON.stringify(selectedProduct));

// var storedArray = JSON.parse(sessionStorage.getItem("products"));
// console.log('stored Array', storedArray);

// use AJAX to load XML file and save to array
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
	if (this.readyState == 4 && this.status == 200) {
		// Read data from xml and store to array
		readCarsXML(this);

		console.log(productsArray);

		// Update Cart if product is added
		if (selectedProduct != '') {
			updateCart(productsArray, selectedProduct);
		}
	}
};
xhttp.open("GET", "xml/cars.xml", true);
xhttp.send();

function updateCart(productsArray, selectedProduct) {
	// Removing empty cart message
	document.getElementById('emptyCartMessage').setAttribute('style', 'display: none;');

	// Adding cart table title row
	document.getElementById('cart').innerHTML = '<tr><th><strong>Product Image</strong></th><th><strong>Vehicle</strong></th><th><strong>Price Per Day</strong></th><th><strong>Rental Days</strong></th><th><strong>Actions</strong></th></tr>'

	// Adding cart table selected products rows
	for (var i = 0; i < selectedProduct.length; i++) {
		for (var j = 0; j < productsArray.length; j++) {
			if (productsArray[j].productID == selectedProduct[i]) {
				console.log('printed');
				document.getElementById('cart').innerHTML += '<tr><td><img src="images/cars/' + productsArray[j].carImage + '"></td><td>' + productsArray[j].modelYear + '-' + productsArray[j].brand + '-' + productsArray[j].model + '</td><td>' + productsArray[j].pricePerDay + '</td><td>TEST</td><td><a href="#" class="deleteBtn" onclick="deleteCart(this)" data-product-id="' + productsArray[j].productID + '">DELETE</a></td></tr>';
			}
		}
	}
}

function deleteCart(id) {
	var productID = id.getAttribute('data-product-id');
	console.log('Deleted', productID);
}