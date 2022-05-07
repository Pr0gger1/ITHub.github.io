//Adaptive background images
function ibg() {
    let ibg = document.querySelectorAll(".ibg");
    for (let i = 0; i < ibg.length; i++) {
        if (ibg[i].querySelector('img')) {
            ibg[i].style.backgroundImage = 'url(' + ibg[i].querySelector('img').getAttribute('src') + ')';
        }
    }
}
ibg();
//Current date
function getDate() {
    const dateCollection = document.getElementsByClassName('date-now');
    console.log(dateCollection);
    let currentDate = new Date();
    let currentDay = currentDate.getDate();
    let currentMonth = currentDate.getMonth();
    let currentYear = currentDate.getFullYear();
    let monthArray = [
        'января', 'февраля', 'марта', 'апреля',
        'мая', 'июня', 'июля', 'августа',
        'сентября', 'октября', 'ноября', 'декабря',
    ];
    let currentMonthName = monthArray[currentMonth];
    if (dateCollection) {
        for (let i = 0; i < dateCollection.length; i++) {
            console.log(dateCollection[i]);
            dateCollection[i].innerText = `${currentDay} ${currentMonthName} ${currentYear}`;
        }
    }
}
getDate();
