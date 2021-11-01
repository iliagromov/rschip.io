// const brands = ['Acura','Alfa Romeo','Alpina','Aston Martin','Audi','BAIC']
// const APP_DOMAIN = 'https://montetuning.app/api/v0/brands'
const APP_DOMAIN = 'https://montetuning.app';

const api = async (url) => {
  try {

    const answer = await fetch(url);

    if (!answer.ok) {
      throw new Error(answer.status.toString());
    }

    const responseJson = await answer.json();

    return responseJson;
  } catch (e) {
    console.warn('Не удалось получить brands', e);
    return e;
  }
}

const brandsApiUrl = `${APP_DOMAIN}/api/v0/brands/`;
const modelsApiUrl = `${APP_DOMAIN}/api/v0/models/?brand=`;
const modificationsApiUrl = `${APP_DOMAIN}/api/v0/modifications/?model=`;


function addClick(url, selectBox, selectName, idx) {

  const selectBoxInput = selectBox.querySelectorAll(".select-box__input");
  selectBoxInput.forEach((input) => {
    input.addEventListener('click', (e) => {
      const dataId = e.target.dataset.id;
      getResponse(`${url}${dataId}`, selectBox, `${selectName}${index}`)
    });
  });
}

function getResponse(url, selectBox, selectName) {
  const apiRequest = api(url);
  apiRequest.then((responseJson) => {
    const arrayResults = responseJson.results;
    renderSelectBox(selectBox, selectName, arrayResults);
  });
}


function renderSelectBox(currenSelect, selectName, options) {

  const selectBox = currenSelect.querySelector('.select-box');
  const selectBoxChildCur = currenSelect.querySelector('.select-box__current');
  const selectBoxChildList = currenSelect.querySelector('.select-box__list');
  function renderBox(name, options) {

    const selectBoxCurrent = document.createElement('div');
    selectBoxCurrent.classList.add('select-box__current');
    selectBoxCurrent.setAttribute('tabindex', 1);


    selectBoxCurrent.innerHTML = `<div class="select-box__value">
                                    <input class="select-box__input" 
                                    type="radio" 
                                    id="${name}" 
                                    value="${name}" 
                                    name="${name}" 
                                    checked><p class="select-box__input-text">${name}</p>
                                  </div>`;

    options && options.forEach((option) => {
      const selectBoxValue = document.createElement('div');
      selectBoxValue.classList.add('select-box__value');


      //
      const selectBoxInput = document.createElement('input');
      selectBoxInput.classList.add('select-box__input');
      selectBoxInput.setAttribute('type', 'radio');
      selectBoxInput.setAttribute('id', `${name}_id_${option.id}`);
      selectBoxInput.setAttribute('data-id', `${option.id}`);
      selectBoxInput.setAttribute('data-role', `${name}`);
      selectBoxInput.setAttribute('value', `${option.title}`);
      selectBoxInput.setAttribute('name', `${name}`);
      selectBoxInput.addEventListener('click', (e) => {
        const dataId = e.target.dataset.id;
        const dataRole = e.target.dataset.role;
        let thisSelectBox = e.target.closest('.selectBox');
        const modelsBox = thisSelectBox.querySelector('.Models');
        const modificationBox = thisSelectBox.querySelector('.Modification');
        switch (dataRole) {
          case 'Brands0':
            getResponse(`${modelsApiUrl}${dataId}`, modelsBox, `Models0`);
            getResponse(`${modificationsApiUrl}${dataId}`, modificationBox, `Modification0`);
            break;
          case 'Brands1':
            getResponse(`${modelsApiUrl}${dataId}`, modelsBox, `Models1`);
            getResponse(`${modificationsApiUrl}${dataId}`, modificationBox, `Modification1`);
            break;
          case 'Models0':
            getResponse(`${modificationsApiUrl}${dataId}`, modificationBox, `Modification0`);
            break;
          case 'Models1':
            getResponse(`${modificationsApiUrl}${dataId}`, modificationBox, `Modification1`);
            break;
          default:
            return;
        }
      });
      //
      const selectBoxInputText = document.createElement('p');
      selectBoxInputText.classList.add('select-box__input-text');
      selectBoxInputText.textContent = option.title;

      selectBoxValue.appendChild(selectBoxInput);
      selectBoxValue.appendChild(selectBoxInputText);

      selectBoxCurrent.appendChild(selectBoxValue);
    });

    selectBoxChildCur && selectBox.removeChild(selectBoxChildCur);
    selectBox.appendChild(selectBoxCurrent);

    const selectListBox = document.createElement('ul');
    selectListBox.classList.add('select-box__list');

    options && options.forEach((option) => {
      const li = document.createElement('li');
      li.innerHTML = `<label class="select-box__option" for="${name}_id_${option.id}" aria-hidden>${option.title}</label>`;
      selectListBox.appendChild(li);
    });
    selectBoxChildList && selectBox.removeChild(selectBoxChildList);
    selectBox.appendChild(selectListBox);

  }

  return renderBox(selectName, options);
}

const selectBoxes = document.querySelectorAll('.selectBox');

selectBoxes.forEach((selectBox, index) => {
  const brandsBox = selectBox.querySelector('.Brands');
  const modelsBox = selectBox.querySelector('.Models');
  const modificationBox = selectBox.querySelector('.Modification');
  renderSelectBox(brandsBox, `Brands${index}`, []);
  renderSelectBox(modelsBox, `Model${index}`, []);
  renderSelectBox(modificationBox, `Modification${index}`, []);
});

selectBoxes.forEach((selectBox, index) => {
  getResponse(brandsApiUrl, selectBox, `Brands${index}`)
});