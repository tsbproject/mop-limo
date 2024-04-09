// let lastScrollTop = 0;
//   const header = document.getElementById('header');

//   window.addEventListener('scroll', function() {
//     let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
//     if (currentScroll > lastScrollTop) {
//       // Scroll down
//       header.style.transform = 'translateY(-100%)';
//     } else {
//       // Scroll up
//       header.style.transform = 'translateY(0)';
//     }
//     lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
//   });

//   let scrollTimer = null;

//   window.addEventListener('scroll', function() {
//     clearTimeout(scrollTimer);
//     scrollTimer = setTimeout(function() {
//       header.style.transform = 'translateY(0)';
//     }, 200); // Adjust the delay as needed
//   });













































// FORM VALIDATON
const form = document.getElementById('contactForm');
        form.addEventListener('submit', async function(event) {
            event.preventDefault();
            const formData = new FormData(form);
            const response = await fetch(form.action, {
                method: form.method,
                body: formData,
                headers: {
                    'Accept': 'application/json'
                }
            });
            const responseData = await response.json();
            const responseElement = document.getElementById('response');
            if (response.ok) {
                responseElement.classList.remove('error');
                responseElement.classList.add('message');
                responseElement.textContent = responseData.message;
                form.reset();
            } else {
                responseElement.classList.remove('message');
                responseElement.classList.add('error');
                responseElement.textContent = responseData.error;
            }
        });