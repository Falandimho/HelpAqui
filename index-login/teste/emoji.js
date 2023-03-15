function felizVerde() {
	const emoji1 = document.querySelector('.feliz')
	const emoji2 = document.querySelector('.neutro')
	const emoji3 = document.querySelector('.triste')

	emoji1.style.filter = 'invert(60%) sepia(52%) saturate(5760%) hue-rotate(92deg) brightness(122%) contrast(124%)';

	emoji2.style.filter = 'none';
	emoji3.style.filter = 'none';
}

function neutroAmar() {
	const emoji1 = document.querySelector('.feliz')
	const emoji2 = document.querySelector('.neutro')
	const emoji3 = document.querySelector('.triste')
  
	emoji2.style.filter = 'invert(92%) sepia(56%) saturate(7472%) hue-rotate(345deg) brightness(96%) contrast(118%)';

	emoji1.style.filter = 'none';
	emoji3.style.filter = 'none';
}

function tristeVer() {
	const emoji1 = document.querySelector('.feliz')
	const emoji2 = document.querySelector('.neutro')
	const emoji3 = document.querySelector('.triste')
  
	emoji3.style.filter = 'invert(21%) sepia(86%) saturate(5791%) hue-rotate(5deg) brightness(100%) contrast(108%)';

	emoji1.style.filter = 'none';
	emoji2.style.filter = 'none';
}

