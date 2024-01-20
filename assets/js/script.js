const nastavnik = document.querySelector('input[type=text]');
const predmet = document.querySelector('select[name=predmet]');
const razred = document.querySelector('select[name=razred]');
const div = document.createElement('div');
div.classList.add('invalid-feedback');
div.style.display = 'block';
const  urlSearch = location.search;
const form = document.querySelector('form');

if (urlSearch == '?error=predmet')
{
    div.innerHTML ='<span>Изабери предмет!</span>';
    appendDivAndStyle (predmet);
}

if (urlSearch == '?error=nastavnik')
{
    div.innerHTML ='<span>Унеси име и презиме!</span>';
    appendDivAndStyle (nastavnik);
}

if (urlSearch == '?error=razred')
{
    div.innerHTML ='<span>Изабери разред!</span>';
    appendDivAndStyle (razred);
}

predmet.addEventListener('change', () => {console.log(predmet.value)})

function appendDivAndStyle (inpt)
{
    inpt.parentElement.append(div);
    inpt.style.border = '1px solid red';
}
