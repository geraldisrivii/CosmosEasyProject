let buttonGamburger = document.querySelector('.gamburger');

buttonGamburger.addEventListener('click', () => {
	document.querySelector('.invisible-site-nav-background').classList.toggle('invisible-site-nav-background_active');
	document.querySelector('.invisible-site-nav').classList.toggle('invisible-site-nav_active');
	document.body.classList.toggle('overflow-hidden');
});

let redirectStatus = getCookie('status');
if (redirectStatus == 'ok') {
	Swal.fire({
		icon: 'success',
		title: 'Данные были отправлены',
		text: 'Ожидайте. В течении 10 минут с вами свяжется наш оператор',
	});
}
if (redirectStatus == 'error') {
	Swal.fire({
		icon: 'error',
		title: 'Вы ввели некорректные данные',
		text: 'Или произошла ошибка на сервере. Попробуйте позже',
	});
}

deleteCookie('status');

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiIiwic291cmNlcyI6WyJqcy9HYW1idXJnZXIuanMiXSwic291cmNlc0NvbnRlbnQiOlsibGV0IGJ1dHRvbkdhbWJ1cmdlciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5nYW1idXJnZXInKTtcblxuYnV0dG9uR2FtYnVyZ2VyLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKCkgPT4ge1xuICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5pbnZpc2libGUtc2l0ZS1uYXYtYmFja2dyb3VuZCcpLmNsYXNzTGlzdC50b2dnbGUoJ2ludmlzaWJsZS1zaXRlLW5hdi1iYWNrZ3JvdW5kX2FjdGl2ZScpO1xuICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5pbnZpc2libGUtc2l0ZS1uYXYnKS5jbGFzc0xpc3QudG9nZ2xlKCdpbnZpc2libGUtc2l0ZS1uYXZfYWN0aXZlJyk7XG4gICAgZG9jdW1lbnQuYm9keS5jbGFzc0xpc3QudG9nZ2xlKCdvdmVyZmxvdy1oaWRkZW4nKTtcbn0pIl0sImZpbGUiOiJqcy9HYW1idXJnZXIuanMifQ==
