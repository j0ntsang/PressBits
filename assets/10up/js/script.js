console.log('10up script loaded...')

document.addEventListener('DOMContentLoaded', function() {
  const closeButton = document.getElementsByClassName('navigation__close-button');
  const openButton = document.getElementsByClassName('navigation__open-button');
  const navigation = document.getElementsByClassName('navigation__menu')[0];

  if (closeButton) {
    closeButton[0].addEventListener('click', function() {
      navigation.classList.remove('navigation__menu--open');
    });
  }

  openButton[0].addEventListener('click', function() {
    navigation.classList.add('navigation__menu--open');
  });
});

