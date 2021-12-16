function getPowerGain(value, percent, maxIncrease){
    const increase = Math.round((+value / 100) * percent)
    return increase > maxIncrease ? maxIncrease : increase
}
//FIXME: Optimizate
function renderPerformance(){
    const performance = document.querySelector('.performance');
    if(performance){
        const gt = {
            hp: {
                percent: 13,
                maxIncrease: 33,
            },
            nm: {
                percent: 13,
                maxIncrease: 46,
            }
        };

        
        let productname = performance.dataset.productname;
        let Brand = localStorage.getItem('Brand_'+productname);
        let Model = localStorage.getItem('Model_'+productname);
        let Modification = localStorage.getItem('Modification_'+productname);
        let carName = `${Brand} ${Model} ${Modification}`;
        performance.querySelectorAll('.carName').forEach((item)=>{
            item.textContent = carName
        });
        let hpDefault = performance.querySelector('.default .hp');
        let nmDefault = performance.querySelector('.default .nm');
        let secDefault = performance.querySelector('.default .sec');
        let hpWithRs = performance.querySelector('.withRs .hp');
        let nmWithRs = performance.querySelector('.withRs .nm');
        let secWithRs = performance.querySelector('.dewithRsfault .sec');
        let hpValue = Number(localStorage.getItem('HP_'+productname) ?  localStorage.getItem('HP_'+productname) : 0);
        let nmValue = Number(localStorage.getItem('NM_'+productname) ? localStorage.getItem('NM_'+productname) : 0);
        hpDefault.textContent = hpValue + ' ';
        nmDefault.textContent = nmValue + ' ';

        hpWithRs.textContent = (hpValue + getPowerGain(hpValue, gt.hp.percent, gt.hp.maxIncrease )) + '* ';
        nmWithRs.textContent = (nmValue + getPowerGain(nmValue, gt.nm.percent, gt.nm.maxIncrease )) + '* ';


    }    

}
renderPerformance();
