// console.log("Hello Child Theme World!");

let eventWidget = document.querySelector('#secondary .tribe-compatibility-container');
let headerButton = document.querySelector('.header-custom-button');

// add widget class to event widget
eventWidget.classList.add('widget');

// remove target blank attribute from header button so it opens in the same page
headerButton.removeAttribute('target');