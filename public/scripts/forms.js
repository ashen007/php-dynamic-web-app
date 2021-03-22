// event handling

function gonext() {
    document.getElementById('extended').classList.add('show');
    document.getElementById('standard').classList.add('hide');
}

function goback() {
    document.getElementById('extended').classList.remove('show');
    document.getElementById('standard').classList.remove('hide');
}