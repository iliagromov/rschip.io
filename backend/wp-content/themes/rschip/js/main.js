const selectedCar = document.getElementById('selected_car');

if (selectedCar) {
    selectedCar.value = '';
    let productsName = document.querySelectorAll('.productName');
    productsName && productsName.forEach(item => {
        selectedCar.value += item.textContent.trim() + ":" + localStorage.getItem('car-name_' + item.textContent.trim())
    })
}

const cartTotalsBtn = document.getElementById('cartTotalsBtn');

if(cartTotalsBtn){
    cartTotalsBtn.addEventListener('click', (e) => {
        e.preventDefault();
        let isSelect = false;
    
        document.querySelectorAll('.selectBox').forEach(item => {
            if (!item.classList.contains('Selected')) {
                item.classList.add('noSelected');
                isSelect = false;
            } else {
                item.classList.remove('noSelected');
                isSelect = true;
            }
        });
    
        if (isSelect) {
            window.location = e.target.href;
        }
    
    });
}
