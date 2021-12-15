let l;

const selectedCar = document.getElementById('selected_car');

if(selectedCar){
    selectedCar.value = '';
    let productsName = document.querySelectorAll('.productName');
    productsName && productsName.forEach(item=>{
        selectedCar.value += item.textContent.trim() +":"+  localStorage.getItem('car-name_'+item.textContent.trim())  
    })
}