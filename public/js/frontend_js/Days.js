/*reference https://github.com/axios/axios
* This function is meant to allow customer to pick how many days they want to rent the car
* Axios a default js is already installed on laravel, hence we have to call it from app.js*/

$(document).ready(function(){

	const classname = document.querySelectorAll('.numberOfDays') //look for days in blade file

	Array.from(classname).forEach(function(element) {
		element.addEventListener('change', function() {
			const id = element.getAttribute('data-id')
			axios.patch(`/Front/shop/rent/reservation/${id}`, {
				numberOfDays: this.value
			})
				.then(function (response) {
					window.location.href =('/Front/shop/rent/reservation')
				})
				.catch(function (error) {
					window.location.href =('/Front/shop/rent/reservation')
				});
		})
	})
});
