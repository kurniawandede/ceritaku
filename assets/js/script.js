const stars = document.querySelectorAll('.star');

stars.forEach(function(star) {
  star.addEventListener('click', function() {
    const rating = this.getAttribute('data-rating');

    stars.forEach(function(star) {
      star.classList.remove('active');
    });

    for (let i = 1; i <= rating; i++) {
      stars[i - 1].classList.add('active');
    }
  });
  
  star.addEventListener('click', function() {
    const rating = this.getAttribute('data-rating');

    stars.forEach(function(star) {
      if (star.getAttribute('data-rating') > rating) {
        star.classList.remove('active');
      }
    });
  });
});
