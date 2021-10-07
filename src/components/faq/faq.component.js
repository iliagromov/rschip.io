const faqItemDetails = document.querySelectorAll('.faqItemDetails');

faqItemDetails && faqItemDetails.forEach((itemDetails)=>{
    itemDetails.addEventListener('click',(e)=>{
        e.target.parentElement.classList.toggle('active');
        e.target.classList.contains('faqItemDetails') &&  e.target.classList.toggle('active');
    });
})
