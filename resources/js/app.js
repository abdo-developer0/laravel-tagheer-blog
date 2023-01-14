/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');




window.choseImage = () => {
    document.getElementById('ifile').click();
}

window.showImage = () => {
    document.getElementById('imageShow').src = URL.createObjectURL(window.ifile.files[0]);
}