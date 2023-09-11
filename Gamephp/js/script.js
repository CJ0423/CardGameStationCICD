const mask = document.querySelector('main section.mask');
const navCheckbox = document.querySelector('header nav input[name="nav-checkbox"]');
const body = document.querySelector('body');
window.addEventListener('load', function () {

    mask.style.weight = `${document.documentElement.scrollWidth}px`;
    mask.style.height = `${document.documentElement.scrollHeight}px`;
});
navCheckbox.addEventListener('change', function () {
    if (this.checked) {
        mask.style.display = "block";
        body.style.overflow = "hidden";
    } else {
        mask.style.display = "none";
        body.style.overflow = "auto";
    }
});
mask.addEventListener('click', function () {
    this.style.display = "none";
    body.style.overflow = "auto";
    navCheckbox.checked = false;
});
window.addEventListener('resize', function () {
    mask.style.display = "none";
    body.style.overflow = "auto";
    navCheckbox.checked = false;
    mask.style.weight = `${document.documentElement.scrollWidth}px`;
    mask.style.height = `${document.documentElement.scrollHeight}px`;
    console.log(1);
});