import $ from 'jquery';
import './bootstrap';
import '../css/app.css';
import * as bootstrap from 'bootstrap'

window.jQuery = $;
window.$ = $;

$(document).ready(function() {
    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.2
    }

    const elements_appear = document.querySelectorAll('.animation-appear');

    elements_appear.forEach(element => {
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    observer.unobserve(entry.target);
                }
            });
        }, options);

    observer.observe(element);
    });

    const elements_moveUp = document.querySelectorAll('.animation-moveUp');
    elements_moveUp.forEach(element => {
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    observer.unobserve(entry.target);
                }
            });
        }, options);

    observer.observe(element);
    });
});

