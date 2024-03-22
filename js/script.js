let lastScrollTop = 0;
  const header = document.getElementById('header');

  window.addEventListener('scroll', function() {
    let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
    if (currentScroll > lastScrollTop) {
      // Scroll down
      header.style.transform = 'translateY(-100%)';
    } else {
      // Scroll up
      header.style.transform = 'translateY(0)';
    }
    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
  });

  let scrollTimer = null;

  window.addEventListener('scroll', function() {
    clearTimeout(scrollTimer);
    scrollTimer = setTimeout(function() {
      header.style.transform = 'translateY(0)';
    }, 200); // Adjust the delay as needed
  });













































// FORM VALIDATON
function validateForm() {
    var name = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    if (name === '' || phone === '' || email === '' || message === '') {
        alert('All fields must be filled out');
        return false;
    }


    return true;
}