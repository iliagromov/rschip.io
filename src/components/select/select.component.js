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


function getResponse(url, selectBox, selectName) {
  let apiRequest = api(url);
  apiRequest.then((responseJson) => {
    let arrayResults = responseJson.results;
    renderSelectBox(selectBox, selectName, arrayResults);
  });
}


function renderSelectBox(currenSelect, selectName, options) {

  // render name car for productCart
  let carName = currenSelect.closest('.cartProduct') && currenSelect.closest('.cartProduct').querySelector('.carName');
  getCarName = localStorage.getItem(selectName) ? localStorage.getItem(selectName) : false;
  if (getCarName && carName && carName.textContent.indexOf(getCarName) == -1) {
    carName.textContent += `${getCarName} `;
  }

  function renderBox(name, value, options) {
    let selectBox = currenSelect.querySelector('.select-box');
    // render icon
    let isSelectBoxIcon = currenSelect.querySelector('.select-box__icon');
    isSelectBoxIcon && selectBox.removeChild(isSelectBoxIcon);

    let selectBoxIcon = document.createElement('div');
    selectBoxIcon.classList.add('select-box__icon');
    selectBoxIcon.innerHTML = localStorage.getItem(name) ? '<i class="iconSuccess"></i>' : '<i class="iconArrowSelect"></i>';
    
    selectBox.appendChild(selectBoxIcon);

    // render inputs & input default
    let inputValueDefault = localStorage.getItem(name) ? localStorage.getItem(name) : value;
    
    let isSelectBoxCurrentChild = currenSelect.querySelector('.select-box__current');
    isSelectBoxCurrentChild && selectBox.removeChild(isSelectBoxCurrentChild);

    let selectBoxCurrent = document.createElement('div');
    selectBoxCurrent.classList.add('select-box__current');
    selectBoxCurrent.setAttribute('tabindex', 1);
    selectBoxCurrent.innerHTML = `<div class="select-box__value">
                                    <input class="select-box__input" 
                                    type="radio" 
                                    id="${name}" 
                                    value="${inputValueDefault}" 
                                    name="${name}" 
                                    checked><p class="select-box__input-text">${inputValueDefault}</p>
                                  </div>`;

    options && options.forEach(option => {
      let selectBoxValue = document.createElement('div');
      selectBoxValue.classList.add('select-box__value');
      //
      let selectBoxInput = document.createElement('input');
      selectBoxInput.classList.add('select-box__input');
      selectBoxInput.setAttribute('type', 'radio');
      selectBoxInput.setAttribute('id', `${name}_id_${option.id}`);
      selectBoxInput.setAttribute('name', `${name}`);
      selectBoxInput.setAttribute('value', `${option.title}`);
      selectBoxInput.setAttribute('data-id', `${option.id}`);
      selectBoxInput.setAttribute('data-selectname', `${value}`);
      selectBoxInput.addEventListener('click', e => {
        let dataId = e.target.dataset.id,
          dataSelectName = e.target.dataset.selectname,
          dataProductName = e.target.closest('.selectBox').dataset.productname ? e.target.closest('.selectBox').dataset.productname : 'default',
          thisSelectBox = e.target.closest('.selectBox'),
          thisCartProduct = e.target.closest('.cartProduct'),
          modelsBox = thisSelectBox.querySelector('.Models'),
          modificationBox = thisSelectBox.querySelector('.Modification'),
          carName = thisCartProduct && thisCartProduct.querySelector('.carName');

        switch (dataSelectName) {
          case 'Brand':
            localStorage.setItem(`Brand_${dataProductName}`, e.target.value);
            localStorage.setItem(`Brand_${dataProductName}_id`, dataId);
            localStorage.removeItem(`Model_${dataProductName}`);
            localStorage.removeItem(`Model_${dataProductName}_id`);
            localStorage.removeItem(`Modification_${dataProductName}`);
            localStorage.removeItem(`Modification_${dataProductName}_id`);
            
            renderSelectBox(modificationBox, `Modification_${dataProductName}`, []);
            getResponse(`${modelsApiUrl}${dataId}`, modelsBox, `Model_${dataProductName}`);
            carName && (carName.textContent = localStorage.getItem(`Brand_${dataProductName}`));
            thisSelectBox.querySelector('.Brands .select-box__icon').innerHTML = '<i class="iconSuccess"></i>';
           
            break;

          case 'Model':
            localStorage.setItem(`Model_${dataProductName}`, e.target.value);
            localStorage.setItem(`Model_${dataProductName}_id`, dataId);

            localStorage.removeItem(`Modification_${dataProductName}`);
            localStorage.removeItem(`Modification_${dataProductName}_id`);

            getResponse(`${modificationsApiUrl}${dataId}`, modificationBox, `Modification_${dataProductName}`);
            carName && (carName.textContent = `${localStorage.getItem(`Brand_${dataProductName}`)} ${localStorage.getItem(`Model_${dataProductName}`)}`);
            thisSelectBox.querySelector('.Models .select-box__icon').innerHTML = '<i class="iconSuccess"></i>';
           
            break;

          case 'Modification':
            localStorage.setItem(`Modification_${dataProductName}`, e.target.value);
            localStorage.setItem(`Modification_${dataProductName}_id`, dataId);

            carName && (carName.textContent = `${localStorage.getItem(`Brand_${dataProductName}`)} ${localStorage.getItem(`Model_${dataProductName}`)} ${localStorage.getItem(`Modification_${dataProductName}`)}`);
            thisSelectBox.querySelector('.Modification .select-box__icon').innerHTML = '<i class="iconSuccess"></i>';

            break;

          default:
            break;
        }

      });
      selectBoxValue.appendChild(selectBoxInput);
      //
      let selectBoxInputText = document.createElement('p');
      selectBoxInputText.classList.add('select-box__input-text');
      selectBoxInputText.textContent = option.title;
      selectBoxValue.appendChild(selectBoxInputText);
      //
      selectBoxCurrent.appendChild(selectBoxValue);
    });
    selectBox.appendChild(selectBoxCurrent);

    //render lists
    let selectBoxChildList = currenSelect.querySelector('.select-box__list');
    selectBoxChildList && selectBox.removeChild(selectBoxChildList);

    let selectListBox = document.createElement('ul');
    selectListBox.classList.add('select-box__list');

    if (options && options.length !== 0) {
      options.forEach((option) => {
        let li = document.createElement('li');
        li.innerHTML = `<label class="select-box__option" for="${name}_id_${option.id}" aria-hidden>${option.title}</label>`;
        selectListBox.appendChild(li);
      });
    } else {
      let empty = document.createElement('div');
      empty.classList.add('select-box__empty');
      empty.textContent = 'no data';

      selectListBox.appendChild(empty);
    }
   
    selectBox.appendChild(selectListBox);
  }
  let selectValue = selectName.slice(0, selectName.indexOf('_'));
  return renderBox(selectName, selectValue, options);
}

let selectBoxes = document.querySelectorAll('.selectBox');

selectBoxes.forEach(selectBox => {
  //get product name for select name, if product name empty then return 'Name_default'
  let dataProductName = selectBox.dataset.productname ? selectBox.dataset.productname : 'default';
  let brandsBox = selectBox.querySelector('.Brands');
  let modelsBox = selectBox.querySelector('.Models');
  let modificationBox = selectBox.querySelector('.Modification');

  //init selects
  renderSelectBox(brandsBox, `Brand_${dataProductName}`, []);
  renderSelectBox(modelsBox, `Model_${dataProductName}`, []);
  renderSelectBox(modificationBox, `Modification_${dataProductName}`, []);

  //init selects brands
  getResponse(brandsApiUrl, brandsBox, `Brand_${dataProductName}`)

  let isBrandId = localStorage.getItem(`Brand_${dataProductName}_id`);
  isBrandId && getResponse(`${modelsApiUrl}${isBrandId}`, modelsBox, `Model_${dataProductName}`);
  let idModelId = localStorage.getItem(`Model_${dataProductName}_id`);
  idModelId && getResponse(`${modificationsApiUrl}${idModelId}`, modificationBox, `Modification_${dataProductName}`);
            
});
