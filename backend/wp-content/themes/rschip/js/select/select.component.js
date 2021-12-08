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
const brnadsArrayDeafult = [
  {
    "id": 99915436,
    "title": "Acura"
  },
  {
    "id": 99915437,
    "title": "Alfa Romeo"
  },
  {
    "id": 99915438,
    "title": "Alpina"
  },
  {
    "id": 99915439,
    "title": "Aston Martin"
  },
  {
    "id": 99915440,
    "title": "Audi"
  },
  {
    "id": 99915445,
    "title": "BMW"
  },
  {
    "id": 99915448,
    "title": "BYD"
  },
  {
    "id": 99915441,
    "title": "Baojun"
  },
  {
    "id": 99915442,
    "title": "Beiben"
  },
  {
    "id": 99915443,
    "title": "Beijing"
  },
  {
    "id": 99915444,
    "title": "Bentley"
  },
  {
    "id": 99915446,
    "title": "Borgward"
  },
  {
    "id": 99915447,
    "title": "Buick"
  },
  {
    "id": 99915449,
    "title": "Cadillac"
  },
  {
    "id": 99915450,
    "title": "Changan"
  },
  {
    "id": 99915451,
    "title": "Changfeng"
  },
  {
    "id": 99915452,
    "title": "Chery"
  },
  {
    "id": 99915453,
    "title": "Chevrolet"
  },
  {
    "id": 99915454,
    "title": "Chrysler"
  },
  {
    "id": 99915455,
    "title": "Chrysler Auman"
  },
  {
    "id": 99915456,
    "title": "Citroen"
  },
  {
    "id": 99915460,
    "title": "DFSK"
  },
  {
    "id": 99915457,
    "title": "Dacia"
  },
  {
    "id": 99915458,
    "title": "Daewoo"
  },
  {
    "id": 99915459,
    "title": "Daihatsu"
  },
  {
    "id": 99915461,
    "title": "Dodge"
  },
  {
    "id": 99915462,
    "title": "Dongfeng"
  },
  {
    "id": 99915463,
    "title": "FAW"
  },
  {
    "id": 99915464,
    "title": "Ferrari"
  },
  {
    "id": 99915465,
    "title": "Fiat"
  },
  {
    "id": 99915466,
    "title": "Ford"
  },
  {
    "id": 99915467,
    "title": "Foton"
  },
  {
    "id": 99915468,
    "title": "GAC"
  },
  {
    "id": 99915470,
    "title": "GMC"
  },
  {
    "id": 99915471,
    "title": "GMW"
  },
  {
    "id": 99915469,
    "title": "Geely"
  },
  {
    "id": 99915472,
    "title": "Great Wall"
  },
  {
    "id": 99915473,
    "title": "Guangqi Trumpchi"
  },
  {
    "id": 99915474,
    "title": "Haval"
  },
  {
    "id": 99915475,
    "title": "Hino"
  },
  {
    "id": 99915476,
    "title": "Holden"
  },
  {
    "id": 99915477,
    "title": "Honda"
  },
  {
    "id": 99915478,
    "title": "Hummer"
  },
  {
    "id": 99915479,
    "title": "Hyundai"
  },
  {
    "id": 99915480,
    "title": "Infiniti"
  },
  {
    "id": 99915481,
    "title": "Isuzu"
  },
  {
    "id": 99915482,
    "title": "Iveco"
  },
  {
    "id": 99915483,
    "title": "Jac"
  },
  {
    "id": 99915484,
    "title": "Jaguar"
  },
  {
    "id": 99915485,
    "title": "Jeep"
  },
  {
    "id": 99915486,
    "title": "KIA"
  },
  {
    "id": 99915488,
    "title": "KTM"
  },
  {
    "id": 99915487,
    "title": "Kowloon"
  },
  {
    "id": 99915489,
    "title": "Lada"
  },
  {
    "id": 99915490,
    "title": "Lamborghini"
  },
  {
    "id": 99915491,
    "title": "Lancia"
  },
  {
    "id": 99915492,
    "title": "Land Rover"
  },
  {
    "id": 99915493,
    "title": "Landwind"
  },
  {
    "id": 99915494,
    "title": "Lexus"
  },
  {
    "id": 99915495,
    "title": "Lifan"
  },
  {
    "id": 99915496,
    "title": "Lincoln"
  },
  {
    "id": 99915497,
    "title": "Lotus"
  },
  {
    "id": 99915498,
    "title": "Luxgen"
  },
  {
    "id": 99915499,
    "title": "Lynk & co"
  },
  {
    "id": 99915507,
    "title": "MG"
  },
  {
    "id": 99915500,
    "title": "Mahindra"
  },
  {
    "id": 99915501,
    "title": "Maruti"
  },
  {
    "id": 99915502,
    "title": "Maserati"
  },
  {
    "id": 99915503,
    "title": "Maybach"
  },
  {
    "id": 99915504,
    "title": "Mazda"
  },
  {
    "id": 99915505,
    "title": "McLaren"
  },
  {
    "id": 99915506,
    "title": "Mercedes"
  },
  {
    "id": 99915508,
    "title": "Mini"
  },
  {
    "id": 99915509,
    "title": "Mitsubishi"
  },
  {
    "id": 99915510,
    "title": "Nissan"
  },
  {
    "id": 99915511,
    "title": "Opel"
  },
  {
    "id": 99915512,
    "title": "Pagani"
  },
  {
    "id": 99915513,
    "title": "Perodua"
  },
  {
    "id": 99915514,
    "title": "Peugeot"
  },
  {
    "id": 99915515,
    "title": "Pontiac"
  },
  {
    "id": 99915516,
    "title": "Porsche"
  },
  {
    "id": 99915517,
    "title": "Proton"
  },
  {
    "id": 99915518,
    "title": "Qoros"
  },
  {
    "id": 99915519,
    "title": "Renault"
  },
  {
    "id": 99915520,
    "title": "Roewe"
  },
  {
    "id": 99915521,
    "title": "Rolls-Royce"
  },
  {
    "id": 99915522,
    "title": "Rover"
  },
  {
    "id": 99915524,
    "title": "SAIC"
  },
  {
    "id": 99915523,
    "title": "Saab"
  },
  {
    "id": 99915525,
    "title": "Sany"
  },
  {
    "id": 99915526,
    "title": "Saturn"
  },
  {
    "id": 99915527,
    "title": "Scion"
  },
  {
    "id": 99915528,
    "title": "Seat"
  },
  {
    "id": 99915529,
    "title": "Sino Truck"
  },
  {
    "id": 99915530,
    "title": "Skoda"
  },
  {
    "id": 99915531,
    "title": "Smart"
  },
  {
    "id": 99915532,
    "title": "Soueast"
  },
  {
    "id": 99915533,
    "title": "SsangYong"
  },
  {
    "id": 99915534,
    "title": "Subaru"
  },
  {
    "id": 99915535,
    "title": "Suzuki"
  },
  {
    "id": 99915536,
    "title": "TATA"
  },
  {
    "id": 99915537,
    "title": "Toyota"
  },
  {
    "id": 99915538,
    "title": "Troller"
  },
  {
    "id": 99915539,
    "title": "UAZ"
  },
  {
    "id": 99915540,
    "title": "UAZ"
  },
  {
    "id": 99915545,
    "title": "VW"
  },
  {
    "id": 99915541,
    "title": "Vauxhall"
  },
  {
    "id": 99915542,
    "title": "Vinfast"
  },
  {
    "id": 99915543,
    "title": "Volvo"
  },
  {
    "id": 99915544,
    "title": "Vortex"
  },
  {
    "id": 99915546,
    "title": "Wey"
  },
  {
    "id": 99915547,
    "title": "XCMG"
  },
  {
    "id": 99915548,
    "title": "Zotye"
  }
]


function getResponse(url, selectBox, selectName) {
  let apiRequest = api(url);
  apiRequest.then((responseJson) => {
    let arrayResults = responseJson.results;
    renderSelectBox(selectBox, selectName, arrayResults);
  });
}
// FIXME: переписать нормально, а не хардкод

function renderSelectBox(currenSelect, selectName, options) {

  let selectValue = selectName.slice(0, selectName.indexOf('_'));
  // render name car for productCart
  let carName = currenSelect.closest('.cartProduct') && currenSelect.closest('.cartProduct').querySelector('.carName');
  getCarName = localStorage.getItem(selectName) ? localStorage.getItem(selectName) : false;
  let selectBox = currenSelect.closest('.selectBox');
  if( localStorage.getItem(selectName) ){
    currenSelect.classList.add('Selected');
  } else {
    currenSelect.classList.remove('Selected');
  }
  if(selectBox.querySelector('.Modification').classList.contains('Selected')){
    selectBox.querySelector('.selectBoxAction') && selectBox.querySelector('.selectBoxAction').classList.add('Selected')
  } else {
    selectBox.querySelector('.selectBoxAction') && selectBox.querySelector('.selectBoxAction').classList.remove('Selected')
  }
  if (getCarName && carName && carName.textContent.indexOf(getCarName) == -1) {
    carName.textContent += `${getCarName} `;
  }

  function renderBox(name, value, options) {
    let selectBox = currenSelect.querySelector('.select-box');

    let selectBoxCurrent = document.createElement('div');
    selectBoxCurrent.classList.add('select-box__current');

    

    // render inputs & input default
    let inputValueDefault = localStorage.getItem(name) ? localStorage.getItem(name) : value;

    let isSelectBoxCurrentChild = currenSelect.querySelector('.select-box__current');
    isSelectBoxCurrentChild && selectBox.removeChild(isSelectBoxCurrentChild);

    
    selectBoxCurrent.setAttribute('tabindex', 1);
   
    let thisName =  document.getElementById(name) ? name+1 : name;
    selectBoxCurrent.innerHTML = `<div class="select-box__value">
                                    <input class="select-box__input" 
                                    type="radio" 
                                    id="${thisName}" 
                                    value="${inputValueDefault}" 
                                    name="${thisName}" 
                                    checked/>
                                    <p class="select-box__input-text">${inputValueDefault}</p>
                                  </div>`;

    options && options.forEach(option => {
      let selectBoxValue = document.createElement('div');
      selectBoxValue.classList.add('select-box__value');
      //
      let selectBoxInput = document.createElement('input');
      selectBoxInput.classList.add('select-box__input');
      selectBoxInput.setAttribute('type', 'radio');
      selectBoxInput.setAttribute('id', `${thisName}_id_${option.id}`);
      selectBoxInput.setAttribute('name', `${thisName}`);
      selectBoxInput.setAttribute('value', `${option.title}`);
      selectBoxInput.setAttribute('data-id', `${option.id}`);
      selectBoxInput.setAttribute('data-selectname', `${value}`);
      selectBoxInput.setAttribute('data-hp', `${option.hp}`);
      selectBoxInput.setAttribute('data-nm', `${option.nm}`);
      selectBoxInput.addEventListener('click', e => {
        let dataId = e.target.dataset.id,
          dataSelectName = e.target.dataset.selectname,
          dataProductName = e.target.closest('.selectBox').dataset.productname ? e.target.closest('.selectBox').dataset.productname : 'default',
          dataHp = e.target.dataset.hp,
          dataNm = e.target.dataset.nm,
          thisSelectBox = e.target.closest('.selectBox'),
          thisCartProduct = e.target.closest('.cartProduct'),
          modelsBox = thisSelectBox.querySelector('.Models'),
          modificationBox = thisSelectBox.querySelector('.Modification'),
          carName = thisCartProduct && thisCartProduct.querySelector('.carName'),
          selectBoxAction = thisSelectBox.querySelector('.selectBoxAction');

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
            thisSelectBox.querySelector('.Brands').classList.add('Selected');
            break;

          case 'Model':
            localStorage.setItem(`Model_${dataProductName}`, e.target.value);
            localStorage.setItem(`Model_${dataProductName}_id`, dataId);

            localStorage.removeItem(`Modification_${dataProductName}`);
            localStorage.removeItem(`Modification_${dataProductName}_id`);

            getResponse(`${modificationsApiUrl}${dataId}`, modificationBox, `Modification_${dataProductName}`);
            carName && (carName.textContent = `${localStorage.getItem(`Brand_${dataProductName}`)} ${localStorage.getItem(`Model_${dataProductName}`)}`);
            thisSelectBox.querySelector('.Models .select-box__icon').innerHTML = '<i class="iconSuccess"></i>';
            thisSelectBox.querySelector('.Models').classList.add('Selected');
            break;

          case 'Modification':
            localStorage.setItem(`Modification_${dataProductName}`, e.target.value);
            localStorage.setItem(`Modification_${dataProductName}_id`, dataId);
            localStorage.setItem(`HP_${dataProductName}`, dataHp);
            localStorage.setItem(`NM_${dataProductName}`, dataNm);
            renderPerformance();

            carName && (carName.textContent = `${localStorage.getItem(`Brand_${dataProductName}`)} ${localStorage.getItem(`Model_${dataProductName}`)} ${localStorage.getItem(`Modification_${dataProductName}`)}`);
            thisSelectBox.querySelector('.Modification .select-box__icon').innerHTML = '<i class="iconSuccess"></i>';
            selectBoxAction && thisSelectBox.closest('.selectBox').querySelector('.selectBoxAction').classList.add('Selected')
            thisSelectBox.querySelector('.Modification').classList.add('Selected');
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

    // render icon
    let isSelectBoxIcon = currenSelect.querySelector('.select-box__icon');
    isSelectBoxIcon && selectBox.removeChild(isSelectBoxIcon);

    let selectBoxIcon = document.createElement('div');
    selectBoxIcon.classList.add('select-box__icon');
    selectBoxIcon.innerHTML = localStorage.getItem(name) ? '<i class="iconSuccess"></i>' : '<i class="iconArrowSelect"></i>';

    selectBoxCurrent.appendChild(selectBoxIcon);

    
    selectBox.appendChild(selectBoxCurrent);

    //render lists
    let selectBoxChildList = currenSelect.querySelector('.select-box__list');
    selectBoxChildList && selectBox.removeChild(selectBoxChildList);

    let selectListBox = document.createElement('ul');
    selectListBox.classList.add('select-box__list');

    if (options && options.length !== 0) {
      options.forEach((option) => {
        let li = document.createElement('li');
        li.innerHTML = `<label class="select-box__option" for="${thisName}_id_${option.id}" aria-hidden>${option.title}</label>`;
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
  renderSelectBox(brandsBox, `Brand_${dataProductName}`, brnadsArrayDeafult);
  renderSelectBox(modelsBox, `Model_${dataProductName}`, []);
  renderSelectBox(modificationBox, `Modification_${dataProductName}`, []);

  //init selects brands
  getResponse(brandsApiUrl, brandsBox, `Brand_${dataProductName}`);

  let isBrandId = localStorage.getItem(`Brand_${dataProductName}_id`);
  isBrandId && getResponse(`${modelsApiUrl}${isBrandId}`, modelsBox, `Model_${dataProductName}`);
  
  let idModelId = localStorage.getItem(`Model_${dataProductName}_id`);
  idModelId && getResponse(`${modificationsApiUrl}${idModelId}`, modificationBox, `Modification_${dataProductName}`);

});
let banner = document.querySelector('.banner');

if(banner && banner.length !==0){
  document.addEventListener('scroll', function(e){
    let y =  window.scrollY;
    let clientHeight = banner.clientHeight;
    let getBoundingClientRect = banner.getBoundingClientRect();
    let bannerPositionBottom = getBoundingClientRect.bottom;
    // console.log(getBoundingClientRect);
    // console.log(y);
    if( y >= bannerPositionBottom){
      banner.querySelector('.bannerSelect').classList.add('fixed')
    } else {
      banner.querySelector('.bannerSelect').classList.remove('fixed')
    }
  });
}
