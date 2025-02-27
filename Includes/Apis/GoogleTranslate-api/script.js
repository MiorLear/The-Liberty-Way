/* ____________________________________ Google Translate | Dropdown _____________________________________ */
function show(anything){
    document.querySelector('.textBox').value = anything;
}

let dropdown = document.querySelector('.GoogleTranslate-dropdown');
dropdown.onclick = function(){
    dropdown.classList.toggle('active');
}
/* ______________________________________________________________________________________________________ */




/* _______________________________________ Google Translate | API _______________________________________ */
function googleTranslateElementInit2() {
    var lang = localStorage.getItem('language');
    if (lang) {
        doGTranslate(lang);
    } else {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            autoDisplay: false
        }, 'google_translate_element2');
    }
}

function googleTranslateElementInit2() {
    var lang = localStorage.getItem('language');
    if (lang) {
        doGTranslate(lang);
    } else {
        new google.translate.TranslateElement({
            pageLanguage: 'de',
            autoDisplay: false
        }, 'google_translate_element2');
    }
}

function googleTranslateElementInit2() {
    var lang = localStorage.getItem('language');
    if (lang) {
        doGTranslate(lang);
    } else {
        new google.translate.TranslateElement({
            pageLanguage: 'fr',
            autoDisplay: false
        }, 'google_translate_element2');
    }
}

function googleTranslateElementInit2() {
    var lang = localStorage.getItem('language');
    if (lang) {
        doGTranslate(lang);
    } else {
        new google.translate.TranslateElement({
            pageLanguage: "ru",
            autoDisplay: false
        }, 'google_translate_element2');
    }
}

function googleTranslateElementInit2() {
    var lang = localStorage.getItem('language');
    if (lang) {
        doGTranslate(lang);
    } else {
        new google.translate.TranslateElement({
            pageLanguage: "ja",
            autoDisplay: false
        }, 'google_translate_element2');
    }
}

function doGTranslate(lang) {
    var teCombo = document.querySelector('.goog-te-combo');
    if (teCombo) {
        teCombo.value = lang;
        if (document.createEvent) {
            var event = document.createEvent('HTMLEvents');
            event.initEvent('change', true, true);
            teCombo.dispatchEvent(event);
        } else {
            teCombo.fireEvent('onchange');
        }
        getTranslatedText();
        localStorage.setItem('language', lang);
    }
}

function getTranslatedText() {
    var translatedText = document.querySelector('.goog-te-menu-frame').contentWindow.document.querySelector('.goog-te-menu2-item-selected .text').innerText;
    document.getElementById('translated_text').innerText = translatedText;
}
/* ______________________________________________________________________________________________________ */