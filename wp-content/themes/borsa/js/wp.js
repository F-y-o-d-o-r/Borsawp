var wpcf7Elm = document.querySelector('.wpcf7-form');

wpcf7Elm.addEventListener(
  'wpcf7invalid',
  function(event) {
    console.log(111);
    alert('Fire!');
  },
  false
);
document.addEventListener(
  'wpcf7submit',
  function(event) {
    alert('Fire!');
  },
  false
);
