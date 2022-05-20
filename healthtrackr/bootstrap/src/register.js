var trin = document.getElementsByClassName('side');
var prevBtn = document.getElementById('prev-btn');
var nextBtn = document.getElementById('next-btn');
var submitBtn = document.getElementById('submit-btn');
var form = document.getElementsByTagName('form')[0];
var preloader = document.getElementById('preloader-wrapper');
var bodyElement = document.querySelector('body');
var successDiv = document.getElementById('success');
 
/*
let step = document.getElementsByClassName('step');
let prevBtn = document.getElementById('prev-btn');
let nextBtn = document.getElementById('next-btn');
let submitBtn = document.getElementById('submit-btn');
let form = document.getElementsByTagName('form')[0];
let preloader = document.getElementById('preloader-wrapper');
let bodyElement = document.querySelector('body');
let succcessDiv = document.getElementById('success'); */

form.onsubmit = () => { //stopper formen fra at blive submittet, som standard. 
    return false
} 

// knapper //
var current_trin = 0; //trin 1(side 1)
var trinCount = 1
trin[current_trin].classList.add('d-block');
if(current_trin == 0) { //definere hvilke og hvad de 3 knapper kan. På første side, ex. prevBtn og submitBtn deaktiveret, osv. 
    prevBtn.classList.add('d-none'); 
    submitBtn.classList.add('d-none');
    nextBtn.classList.add('d-inline.block');
}

const progress = (value) => { //progress linjen. 
    document.getElementsByClassName('progress-bar')[0].style.width = `${value}%`; //hvor fyldt den er/ser ud, baseres på hvilken side man er på. 
}

// næste knap //
nextBtn.addEventListener('click', () => { //lytter efter hvornår knappen bliver brugt/aktiveret
    current_trin++; //
    var previous_trin = current_trin - 1; //
    if ((current_trin > 0) && (current_trin <= trinCount)) {
        prevBtn.classList.remove('d-none');
        prevBtn.classList.add('d-inline-block');
        trin[current_trin].classList.remove('d-none');
        trin[current_trin].classList.add('d-block');
        trin[previous_trin].classList.remove('d-block');
        trin[previous_trin].classList.add('d-none');
        if(current_trin == trinCount) {
            submitBtn.classList.remove('d-none');
            submitBtn.classList.add('d-inline-block');
            nextBtn.classList.remove('d-inline-block');
            nextBtn.classList.add('d-none');
        }
    } else {
        if (current_trin > trinCount) {
            form.onsubmit = () => {
                return true
            }
        }
    }
    progress((100 / trinCount) * current_trin);
});


// forrige knap //
prevBtn.addEventListener('click', () => {
    if (current_trin > 0) {
        current_trin--;
        var previous_trin = current_trin + 1;
        prevBtn.classList.add('d-none');
        prevBtn.classList.add('d-inline-block');
        trin[current_trin].classList.remove('d-none');
        trin[current_trin].classList.add('d-block');
        trin[previous_trin].classList.remove('d-block');
        trin[previous_trin].classList.add('d-none');
        if (current_trin < trinCount) {
            submitBtn.classList.remove('d-inline-block');
            submitBtn.classList.add('d-none');
            nextBtn.classList.remove('d-none');
            nextBtn.classList.add('d-inline-block');
            prevBtn.classList.remove('d-none');
            prevBtn.classList.add('d-inline-block');
        }
    }
    if (current_trin == 0) {
        prevBtn.classList.remove('d-inline-block');;
        prevBtn.classList.add('d-none');
    }
    progress((100 / trinCount) * current_trin);
});

submitBtn.addEventListener('click', () => {
    preloader.classList.add('d-block');

    const timer = ms => new Promise(res => setTimeout(res, ms));

    timer(100)
        .then(() => {
            bodyElement.classList.add('loaded');
        }).then(() => {
            trin[trinCount].classList.remove('d-block');
            trin[trinCount].classList.add('d-none');
            prevBtn.classList.remove('d-inline-block');
            prevBtn.classList.add('d-none');
            submitBtn.classList.remove('d-inline-block');
            submitBtn.classList.add('d-none');
            successDiv.classList.remove('d-none');
            successDiv.classList.add('d-block');
        })
})


/*
form.onsubmit = () => {
    return false
}
let current_step = 0;
let stepCount = 6
step[current_step].classList.add('d-block');
if (current_step == 0) {
    prevBtn.classList.add('d-none');
    submitBtn.classList.add('d-none');
    nextBtn.classList.add('d-inline-block');
}

lconst progress = (value) => {
    document.getElementsByClassName('progress-bar')[0].style.width = `${value}%`;
}

nextBtn.addEventListener('click', () => {
    current_step++;
    let previous_step = current_step - 1;
    if ((current_step > 0) && (current_step <= stepCount)) {
        prevBtn.classList.remove('d-none');
        prevBtn.classList.add('d-inline-block');
        step[current_step].classList.remove('d-none');
        step[current_step].classList.add('d-block');
        step[previous_step].classList.remove('d-block');
        step[previous_step].classList.add('d-none');
        if (current_step == stepCount) {
            submitBtn.classList.remove('d-none');
            submitBtn.classList.add('d-inline-block');
            nextBtn.classList.remove('d-inline-block');
            nextBtn.classList.add('d-none');
        }
    } else {
        if (current_step > stepCount) {
            form.onsubmit = () => {
                return true
            }
        }
    }
    progress((100 / stepCount) * current_step);
});


prevBtn.addEventListener('click', () => {
    if (current_step > 0) {
        current_step--;
        let previous_step = current_step + 1;
        prevBtn.classList.add('d-none');
        prevBtn.classList.add('d-inline-block');
        step[current_step].classList.remove('d-none');
        step[current_step].classList.add('d-block')
        step[previous_step].classList.remove('d-block');
        step[previous_step].classList.add('d-none');
        if (current_step < stepCount) {
            submitBtn.classList.remove('d-inline-block');
            submitBtn.classList.add('d-none');
            nextBtn.classList.remove('d-none');
            nextBtn.classList.add('d-inline-block');
            prevBtn.classList.remove('d-none');
            prevBtn.classList.add('d-inline-block');
        }
    }

    if (current_step == 0) {
        prevBtn.classList.remove('d-inline-block');
        prevBtn.classList.add('d-none');
    }
    progress((100 / stepCount) * current_step);
});


submitBtn.addEventListener('click', () => {
    preloader.classList.add('d-block');

    lconst timer = ms => new Promise(res => setTimeout(res, ms));

    timer(3000)
        .then(() => {
            bodyElement.classList.add('loaded');
        }).then(() => {
            step[stepCount].classList.remove('d-block');
            step[stepCount].classList.add('d-none');
            prevBtn.classList.remove('d-inline-block');
            prevBtn.classList.add('d-none');
            submitBtn.classList.remove('d-inline-block');
            submitBtn.classList.add('d-none');
            succcessDiv.classList.remove('d-none');
            succcessDiv.classList.add('d-block');
        })

}) */