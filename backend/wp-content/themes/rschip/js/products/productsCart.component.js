function renderGainProductItem() {
    const productsItem = document.querySelectorAll('.productsItem');
    if (productsItem) {
        
        productsItem.forEach(item => {

            // console.log( item.dataset.sku);
            let hp = localStorage.getItem(`HP_default`);
            let nm = localStorage.getItem(`NM_default`);
            if(hp){
                let percentHp = getPowerGain(hp, gt.hp.percent, gt.hp.maxIncrease );
                // let all11 = percentHp + parseInt(hp);
    
                // console.log(hp);
                // console.log(percentHp);
                // console.log(all11);
    
                var percentNm = getPowerGain(nm, gt.nm.percent, gt.nm.maxIncrease );
                // var allNm11 = perNm11 + parseInt(nm);
                // console.log(perNm11);
                // console.log(allNm11);
                let productsItemHP = item.querySelector('.hp');
                let productsItemNM = item.querySelector('.nm');
    
                productsItemHP && (productsItemHP.textContent = `${percentHp}%`);
                productsItemNM && (productsItemNM.textContent = `${percentNm}%`);
    
            }
            
        })
    }
}
function clearGainProductItem(){
    const productsItem = document.querySelectorAll('.productsItem');
    if (productsItem) {
        
        productsItem.forEach(item => {

            let productsItemHP = item.querySelector('.hp');
            let productsItemNM = item.querySelector('.nm');

            productsItemHP && (productsItemHP.textContent = `0%`);
            productsItemNM && (productsItemNM.textContent = `0%`);
            
            
        })
    }
}
renderGainProductItem();