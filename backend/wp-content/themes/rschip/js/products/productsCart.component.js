function renderGainProductItem() {
    const productsItem = document.querySelectorAll('.productsItem');
    if (productsItem) {
        productsItem.forEach(item => {

            // console.log( item.dataset.sku);
            let hp = localStorage.getItem(`HP_${item.dataset.sku}`);
            let nm = localStorage.getItem(`NM_${item.dataset.sku}`);
            if(hp){
                let per11 = Math.round(parseInt(hp) * 11 / 100);
                let all11 = per11 + parseInt(hp);
    
                // console.log(hp);
                console.log(per11);
                // console.log(all11);
    
                var perNm11 = Math.round(parseInt(nm) * 11 / 100);
                var allNm11 = perNm11 + parseInt(nm);
                console.log(perNm11);
                // console.log(allNm11);
                let productsItemHP = item.querySelector('.hp');
                let productsItemNM = item.querySelector('.nm');
    
                productsItemHP && (productsItemHP.textContent = `${per11}%`);
                productsItemNM && (productsItemNM.textContent = `${perNm11}%`);
    
            }
            
        })
    }
}
renderGainProductItem();