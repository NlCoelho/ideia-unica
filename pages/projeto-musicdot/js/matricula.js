var $tdTotalCursos = document.querySelector('.js-total-de-cursos')
var $tdTotalDeHoras = document.querySelector('.js-total-de-horas')
var $buttonConfirmar = document.querySelector('.js-botao-matricula')
//var totalHoras = 0
//var totalCursos = 0

function xTest(nome){
	vStatus=nome.checked
	
	for(i=0;i<formcursos.elements.length;i++){
		formcursos.elements[i].checked=vStatus
	}
	adicionaCurso()
	return
}


function adicionaCurso() {
	totalCursos=0
	totalHoras=0
	
	for(i=0;i<formcursos.elements.length;i++){
		if (formcursos.elements[i].checked) {
			totalCursos++
			totalHoras += parseInt(formcursos.elements[i].value)
		}
	}
	
    $tdTotalDeHoras.textContent = totalHoras + 'h'
    $tdTotalCursos.textContent = totalCursos + ' curso(s)'
	return
}

$buttonConfirmar.onclick = confirmaMatriculas

function confirmaMatriculas() {
    if (totalCursos === 0) {
        alert('Nenhum curso selecionado')
    } else {
        alert('Matricula confirmada nos cursos!')
        window.location.href = 'index.html'
    }
}