import contactModal from "./ui/contactModal";
import faq from "./ui/faq";
import input from "./ui/input";
import mobileMenu from "./ui/mobileMenu";
import nav from "./ui/nav";
import select from "./ui/select";
import contactForm from './ui/contactForm';

mobileMenu();
faq();
input();
select();
contactModal();
contactForm();
nav();

window.addEventListener('DOMContentLoaded', () => {
    document.body.classList.add('--loaded');
});