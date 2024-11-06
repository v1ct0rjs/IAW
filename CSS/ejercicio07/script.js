// script.js
document.addEventListener('DOMContentLoaded', function() {
  const button = document.getElementById('colorButton');

  button.addEventListener('mouseover', function() {
    const randomColor = '#' + Math.floor(Math.random() * 16777215).toString(16);
    button.style.backgroundColor = randomColor;
  });

  button.addEventListener('mouseout', function() {
    button.style.backgroundColor = '#f90';
  });
});