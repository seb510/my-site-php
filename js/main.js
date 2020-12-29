/*$('.btn').on('click', function() {
    $('.card').addClass('red');
  });
  */

  let parent = document.querySelector('.container');
  let card = document.querySelectorAll('.card');

  parent.addEventListener('click', (Event) =>{
      let target = Event.target;

      if(target.classList.contains('card')){
          for (let i = 0; i < card.length; i++) {
              card[i].classList.remove('.card.red');
          
          }
          target.classList.add('.card.red');
      }
  })