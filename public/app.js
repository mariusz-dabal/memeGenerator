$('.meme').on('click', function (e) {
    var meme = $(e.target);
    var memeSrc = meme.attr('src');
    var memeTitle = meme.data('title');
    var modalImg = $('.modal-img');
    var modalTitle = $('#modalMemeTitle');

    modalImg.attr('src', memeSrc);
    modalTitle.text(memeTitle);
});