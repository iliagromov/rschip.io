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
  const apiRequest = api(url);
  apiRequest.then((responseJson) => {
    const arrayResults = responseJson.results;
    renderSelectBox(selectBox, selectName, arrayResults);
  });
}


function renderSelectBox(currenSelect, selectName, options) {


  const carName = currenSelect.closest('.cartProduct') && currenSelect.closest('.cartProduct').querySelector('.carName');
  getCarName = localStorage.getItem(selectName) ? localStorage.getItem(selectName) : false;
  if(getCarName && carName && carName.textContent.indexOf(getCarName) == -1 ){
    carName.textContent +=  `${getCarName} `;
  }

  const selectBox = currenSelect.querySelector('.select-box');
 

  const selectBoxChildCur = currenSelect.querySelector('.select-box__current');
  const selectBoxChildList = currenSelect.querySelector('.select-box__list');
  const selectBoxIcon = currenSelect.querySelector('.select-box__icon');


  function renderBox(name, value, options ) {
    
    let inputValueDefault = localStorage.getItem(name) ? localStorage.getItem(name) : value;
    // console.log(inputValueDefault);

    const selectBoxIcon = document.createElement('div');
    selectBoxIcon.classList.add('select-box__icon');
    selectBoxIcon.innerHTML = localStorage.getItem(name) ? '<i class="iconSuccess"></i>' :   '<i class="iconArrowSelect"></i>'; 

    
    const selectBoxCurrent = document.createElement('div');
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

    options && options.forEach((option) => {
      const selectBoxValue = document.createElement('div');
      selectBoxValue.classList.add('select-box__value');


      //
      const selectBoxInput = document.createElement('input');
      selectBoxInput.classList.add('select-box__input');
      selectBoxInput.setAttribute('type', 'radio');
      selectBoxInput.setAttribute('id', `${name}_id_${option.id}`);
      selectBoxInput.setAttribute('name', `${name}`);
      selectBoxInput.setAttribute('value', `${option.title}`);
      selectBoxInput.setAttribute('data-id', `${option.id}`);
      selectBoxInput.setAttribute('data-selectname', `${value}`);
     
      
      selectBoxInput.addEventListener('click', (e) => {
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


            getResponse(`${modelsApiUrl}${dataId}`, modelsBox, `Model_${dataProductName}`);
            renderSelectBox(modificationBox, `Modification_${dataProductName}`, []);
            // localStorage.setItem('productName', dataProductName);
            localStorage.setItem(`Brand_${dataProductName}`, e.target.value);

            // localStorage.setItem('productCar', `[{${dataProductName}:[ {"Brand": ${e.target.value} } ] }]`);

            carName && (carName.textContent = localStorage.getItem(`Brand_${dataProductName}`));


            thisSelectBox.querySelector('.Brands .select-box__icon').innerHTML = '<i class="iconSuccess"></i>';
            thisSelectBox.querySelector('.Models .select-box__icon').innerHTML = '<i class="iconArrowSelect"></i>';
            thisSelectBox.querySelector('.Modification .select-box__icon').innerHTML = '<i class="iconArrowSelect"></i>';

            break;
          case 'Model':

            getResponse(`${modificationsApiUrl}${dataId}`, modificationBox, `Modification_${dataProductName}`);

            localStorage.setItem(`Model_${dataProductName}`, e.target.value);

            carName && (carName.textContent = `${localStorage.getItem(`Brand_${dataProductName}`)} ${localStorage.getItem(`Model_${dataProductName}`)}`);
            
            thisSelectBox.querySelector('.Models .select-box__icon').innerHTML = '<i class="iconSuccess"></i>';
            thisSelectBox.querySelector('.Modification .select-box__icon').innerHTML = '<i class="iconArrowSelect"></i>';

            break;
          case 'Modification':

            localStorage.setItem(`Modification_${dataProductName}`, e.target.value);
            
            carName && (carName.textContent = `${localStorage.getItem(`Brand_${dataProductName}`)} ${localStorage.getItem(`Model_${dataProductName}`)} ${localStorage.getItem(`Modification_${dataProductName}`)}`);

            thisSelectBox.querySelector('.Modification .select-box__icon').innerHTML = '<i class="iconSuccess"></i>';
            break;
          default:
            break;
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
    selectBox.appendChild(selectBoxIcon);
    selectBox.appendChild(selectBoxCurrent);

    const selectListBox = document.createElement('ul');
    selectListBox.classList.add('select-box__list');
    if (options && options.length !== 0) {
      options.forEach((option) => {
        const li = document.createElement('li');
        li.innerHTML = `<label class="select-box__option" for="${name}_id_${option.id}" aria-hidden>${option.title}</label>`;
        selectListBox.appendChild(li);
      });
    } else {
      const empty = document.createElement('div');
      empty.classList.add('select-box__empty');
      empty.textContent = 'no data';

      selectListBox.appendChild(empty);
    }
    selectBoxChildList && selectBox.removeChild(selectBoxChildList);
    selectBox.appendChild(selectListBox);

  }
  let selectValue = selectName.slice(0, selectName.indexOf('_'));
  return renderBox(selectName, selectValue, options);
}

const selectBoxes = document.querySelectorAll('.selectBox');

selectBoxes.forEach(selectBox => {
  const dataProductName = selectBox.dataset.productname ? selectBox.dataset.productname : 'default';
  const brandsBox = selectBox.querySelector('.Brands');
  const modelsBox = selectBox.querySelector('.Models');
  const modificationBox = selectBox.querySelector('.Modification');

  renderSelectBox(brandsBox, `Brand_${dataProductName}`, []);
  renderSelectBox(modelsBox, `Model_${dataProductName}`, []);
  renderSelectBox(modificationBox, `Modification_${dataProductName}`, []);
});

selectBoxes.forEach(selectBox => {
  const dataProductName = selectBox.dataset.productname;
  getResponse(brandsApiUrl, selectBox, `Brand_${dataProductName}`)
});

