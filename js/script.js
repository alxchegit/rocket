
const sliderContainer = document.querySelector(".slider-container");

	let xhr = new XMLHttpRequest();
		xhr.open("GET", "getnews.php?action=getnews");
		xhr.send();
		xhr.responseType = 'json';
		xhr.onerror = function() {
			alert("Запрос не удался");
		};
		xhr.onload = function() {
			if (xhr.status != 200) { 
				alert(`Ошибка ${xhr.status}: ${xhr.statusText}`);  
			} else {  
				//console.log(`Готово, получили ${xhr.response}  `); 
				let data = xhr.response['data'];
				let error = xhr.response['errors'];
				let html = "";
				data.forEach(function(item, indx, array){
					html += `
<div class="slider-item">
<p class="news-date">${item['news_date']}</p>
<h3>${item['news_title']}</h3>
<div class="news-button"><a href="${item['news_link']}">Подробнее</a></div>
</div>`;
				});

		    //console.log(html);
			sliderContainer.insertAdjacentHTML('afterBegin',html);

			$(".owl-carousel").owlCarousel({
				loop:true,
				margin:10,
				navigation:true,
				navigationText:["",""],
				items:3,
				responsive:{
					0:{
						items:1
						},
					600:{
						items:2
					},
					1000:{
						items:2
						},
					1200:{
						item:2
					}
				}
			});

 	 		}
		};

	// fetch("getnews.php?action=getnews")
		// .then(response => {console.log(response.text())});
 

const myClose = document.querySelector(".my-close");
const button = document.querySelector("button.navbar-toggle");

	myClose.addEventListener("click", function(){
		button.click();
	})