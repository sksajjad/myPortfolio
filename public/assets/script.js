let cont = document.querySelector('.content');
let one = document.querySelector('#first');
let two = document.querySelector('#second');
let third = document.querySelector('#third');
let fourth = document.querySelector('#fourth');
let fifth = document.querySelector('#fifth');
let six = document.querySelector('#sixth');
let docs = document.querySelectorAll('.docs');
let ul = document.querySelectorAll('ul');
let rArrow = document.querySelectorAll('.arrow');
let buttons = document.querySelectorAll('.btn');
let first = document.getElementById('first');
let iframe = document.querySelector('iframe');
first.style.color = 'white';
first.querySelector('.hLine').style = 'background-color: white;';
first.querySelector('.docs').style = 'margin-left: 50px;';
first.parentElement.querySelector('.arrow').style = 'visibility: visible;';
let menuBar = 0;

buttons.forEach(button => {
    button.addEventListener('click', () => {
        // Reset styles for all buttons
        buttons.forEach(btn => {
            btn.style.backgroundColor = ''; // Reset background to default
            btn.style.color = '';           // Reset text color to default
            btn.style.border = '';     // Reset border color to default
            btn.style.boxShadow = '';
            btn.style.fontWeight = '';
            btn.querySelectorAll('.docs').forEach(opt => {
                opt.style.marginLeft = '';
            });
            btn.querySelectorAll('.hLine').forEach(opt => {
                opt.style.backgroundColor = '';
            });
            document.querySelector('.navContent').style = "left: -100%;";
            document.querySelector('.content').style = "left: 0;";
            menuBar = 0;
        });

        // Highlight the clicked button
        button.style = 'font-weight: bold; color: white;';
        button.querySelector('.docs').style = 'margin-left: 50px;';
        button.querySelector('.hLine').style = 'background-color: white;';

        document.querySelectorAll('.arrow').forEach(ar => {
            ar.style.visibility = 'hidden';
        });

        button.parentElement.querySelector('.arrow').style = 'visibility: visible;';
    });
});

one.addEventListener('click', () => {
    iframe.src = 'assets/first.html';
});
two.addEventListener('click', () => {
    iframe.src = 'assets/second.html';
});
third.addEventListener('click', () => {
    iframe.src = 'assets/third.html';
});
fourth.addEventListener('click', () => {
    iframe.src = 'assets/fourth.html';
});
fifth.addEventListener('click', () => {
    iframe.src = 'assets/fifth.html';
});
six.addEventListener('click', () => {
    iframe.src = 'assets/sixth.html';
});
document.querySelector(".title").addEventListener('click', () => {
    iframe.src = 'assets/first.html';

    buttons.forEach(btns => {
        btns.style.backgroundColor = ''; // Reset background to default
        btns.style.color = '';           // Reset text color to default
        btns.style.border = '';     // Reset border color to default
        btns.style.boxShadow = '';
        btns.style.fontWeight = '';
        btns.querySelectorAll('.docs').forEach(opt => {
            opt.style.marginLeft = '';
        });
        btns.querySelectorAll('.hLine').forEach(opt => {
            opt.style.backgroundColor = '';
        });
    });
    // Highlight the clicked button
    button_first = document.getElementById('first');
    button_first.style = 'font-weight: bold; color: white;';
    button_first.querySelector('#about_me').style = 'margin-left: 50px;';
    button_first.querySelector('.hLine').style = 'background-color: white;';
    document.querySelectorAll('.arrow').forEach(ar => {
        ar.style.visibility = 'hidden';
    });
    button_first.parentElement.querySelector('.arrow').style = 'visibility: visible;';
});

let menu = document.querySelector(".bx-menu");
menu.addEventListener('click', () => {
    if (menuBar == 1) {
        document.querySelector('.navContent').style = "left: -100%;";
        document.querySelector('.content').style = "left: 0;";
        menuBar = 0;
    } else {
        document.querySelector('.navContent').style = "left: 0;";
        document.querySelector('.content').style = "left: 300px;";
        menuBar = 1;
    }
});

console.log("index");
