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




function renderSelectBox(currenSelect, selectName, options) {

  const selectBox = currenSelect.querySelector('.select-box');

  function renderBox(name, options) {
    const selectBoxCuttent = document.createElement('div');
    selectBoxCuttent.classList.add('select-box__current');
    selectBoxCuttent.setAttribute('tabindex', 1);

    selectBoxCuttent.innerHTML = `<div class="select-box__value"><input class="select-box__input" type="radio" id="id_${name}" value="${name}" name="${name}" checked><p class="select-box__input-text">${name}</p></div>`;

    options && options.forEach((option) => {
      const selectBoxValue = document.createElement('div');
      selectBoxValue.classList.add('select-box__value');
      selectBoxValue.innerHTML = `<input class="select-box__input" type="radio" id="${name}_id_${option.id}" data-id="${option.id}" value="${option.title}" name="${name}"><p class="select-box__input-text">${option.title}</p>`;
      selectBoxCuttent.appendChild(selectBoxValue);
    });

    selectBox.appendChild(selectBoxCuttent);

    const selectListBox = document.createElement('ul');
    selectListBox.classList.add('select-box__list');

    options && options.forEach((option) => {
      const li = document.createElement('li');
      li.innerHTML = `<label class="select-box__option" for="${name}_id_${option.id}" aria-hidden>${option.title}</label>`;
      selectListBox.appendChild(li);
    });

    selectBox.appendChild(selectListBox);

  }

  return renderBox(selectName, options);
}



const selectBoxes = document.querySelectorAll('.selectBox');

function getModels(id) {
  // responseJson 
  // 0: {"id": 99915741,"title": "CL","brand": 99915436}

  const models = api(`${APP_DOMAIN}/api/v0/models/?brand=${id}`); //${brand}

  models.then((responseJson) => {

    const arrayModels = responseJson.results;
    renderSelectBox(modelsBox, 'Model', arrayModels);
    renderSelectBox(ModificationBox, 'Modification', []);
    const selectBoxInput = modelsBox.querySelectorAll(".select-box__input");
    selectBoxInput.forEach((input) => {
      input.addEventListener('click', function (e) {
        const dataId = e.target.dataset.id;
        getModifications(dataId);
      });
    });

  });
}

function getModifications(id) {
  //{"id": 99998832,"title": "3.0 D Biturbo","model": 99915766,"hp": 245,"nm": 500}
  const model = api(`${APP_DOMAIN}/api/v0/modifications/?model=${id}`); // model
  model.then((responseJson) => {
    const arrayModification = responseJson.results;
    renderSelectBox(ModificationBox, 'Modification', arrayModification);
  });
}

const brands = api(`${APP_DOMAIN}/api/v0/brands/`);

brands.then((responseJson) => {
  // responseJson 
  // 0: {id: 99915436, title: 'Acura'}

  const arrayBrands = responseJson.results;
  selectBoxes.forEach((selectBox) => {
    const brandsBox = selectBox.querySelector('.Brands');
    renderSelectBox(brandsBox, 'Brands', arrayBrands);

    const selectBoxInput = brandsBox.querySelectorAll(".select-box__input");
    selectBoxInput.forEach((input) => {
      input.addEventListener('click', function (e) {
        const dataId = e.target.dataset.id;
        getModels(dataId);
      });
    });
    
  });


});

selectBoxes.forEach((selectBox) => {
  const brandsBox = selectBox.querySelector('.Brands');
  const modelsBox = selectBox.querySelector('.Models');
  const modificationBox = selectBox.querySelector('.Modification');
  renderSelectBox(brandsBox, 'Brands', []);
  renderSelectBox(modelsBox, 'Model', []);
  renderSelectBox(modificationBox, 'Modification', []);
})

